<?php
/**
 * OhYesChat
 * @website Link: https://github.com/lianglee/OhYesChat
 * @Package Ohyes
 * @subpackage Chat
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2014.
 * @ide The Code is Generated by Liang Lee php IDE.
 */ 

header('Content-Type: application/json');
$reciever = elgg_get_logged_in_user_entity()->guid;
$friend = get_input('friend');
$texts = OhYesChat::getMessages($reciever, $friend);
foreach(array_reverse($texts) as $text){
	$icon = elgg_view("icon/default", array(
														'entity' => get_user($text->sender), 
														'size' => 'small',
									));
    $data[] = elgg_view('ohyes/chat/message-item', array(
													     'message' => $text->message,
														 'icon' => $icon,
												
															));	
}
if(OhYesChat::countNew() > 0){
   $sound = '<script>OhYesChat.playSound();</script>';	
}
if(OhYesChat::userStatus($friend) == 'online'){
  $status = 'OhYesChat-Icon-Onine';	
} 
else {
  $status = 'OhYesChat-Icon-Offline';
}
  
echo json_encode(array(
					 'message' => 	implode('', $data).$sound,
					 'status' => $status,
					 'count' => OhYesChat::countNewById($friend)
				));
