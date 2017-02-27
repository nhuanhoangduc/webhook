<?php 

header('Content-Type: text/html; charset=utf-8');
define('VERIFY_TOKEN', 'EAAFyda9ohaQBAE5Vg5QqssTL9CYwzQwvQFz0t2Xh5tyG6ZAHjzgZBEiroXpKhvXELBq6WXmkuiYbLiKMLDX4JdjCQQIaNL385guwVUO5wWTwR5PmSPdZBZBgKlQie4Q7uxLUycqosXvZCIHaxGNsZCnPuD6EZBIsZB3nx0hIE82gMQZDZD'); 
$method = $_SERVER['REQUEST_METHOD']; 
if ($method == 'GET' && $_GET['hub_mode'] == 'subscribe' && $_GET['hub_verify_token'] == VERIFY_TOKEN) {        
    echo $_GET['hub_challenge'];        
    exit();
} 
else if ($method == 'POST') {
    $object = file_get_contents("php://input"); 
    $rawinput = $object;  
    file_put_contents("test.txt",$object);
}//end hook
?>
