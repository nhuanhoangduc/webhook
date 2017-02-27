<?php 

header('Content-Type: text/html; charset=utf-8');
define('VERIFY_TOKEN', 'EAACEdEose0cBAPPXjXynBofruE7ZBNWZAt4PWdCyv4JTg9USewn0J232iQi6gqBfL2iZC3jmkCQymnJl4tQtZBDJfKRSaizfcfIRaBQ7OE4J5ftREkbE5ZCgvLfBIG38bbN5QbBLlxaJCOfEpS6FyIPi2QNsk9BuxMb4xwwSYjLzC4ofZAQJkoZASiX4FjrRZAYZD'); 
$method = $_SERVER['REQUEST_METHOD']; 
if ($method == 'GET' && $_GET['hub_mode'] == 'subscribe' && $_GET['hub_verify_token'] == VERIFY_TOKEN) {        
    echo $_GET['hub_challenge'];        
    exit();
} 
else if ($method == 'POST') {
    $object = file_get_contents("php://input"); 
    $rawinput = $object;  
    file_put_contents("test.txt", $object);

    $url = 'https://nhuanwebserver.herokuapp.com/';
	$data = $object;

	// use key 'http' even if you send the request to https://...
	$options = array(
		'http' => array(
			'header'  => "Content-type: application/json\r\n",
			'method'  => 'POST',
			'content' => json_encode($data)
		)
	);
	$context = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
}//end hook
?>
