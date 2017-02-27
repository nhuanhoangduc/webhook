<?php 

header('Content-Type: text/html; charset=utf-8');
define('VERIFY_TOKEN', 'EAACEdEose0cBAFeEyAMY3Ap1CYZBCRwyFF0urQM6Bmhsl9oIdgFTtZCbncSPuVAFT7PkQaXj2SZCfOQl3dnQDDFICrL57KNZCTlNZCImqvD6DjFi3WsFU2wYj8TbbnA6RIZC234J9ynAXSxe2sbIb0IO3XLMBjf93VZBLQZAEYZBYKoqwNkhlUA9Q9L25gjvsOKoZD'); 
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
