<?php 

header('Content-Type: text/html; charset=utf-8');
define('VERIFY_TOKEN', 'token aaaa'); 
$method = $_SERVER['REQUEST_METHOD']; 
if ($method == 'GET' && $_GET['hub_mode'] == 'subscribe' && $_GET['hub_verify_token'] == VERIFY_TOKEN) {        
    echo $_GET['hub_challenge'];        
    exit();
} 
else if ($method == 'POST') {
    $object = file_get_contents("php://input"); 
    $rawinput = $object;  
    
}//end hook
?>
