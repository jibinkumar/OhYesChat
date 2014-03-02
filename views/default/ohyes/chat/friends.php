<?php
/**
 * Ohyes Theme
 * @website Link: https://github.com/lianglee/OhYesTheme
 * @Package Ohyes
 * @subpackage Theme
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2014.
 * @ide The Code is Generated by Liang Lee php IDE.
*/ 
$friends = $vars['entity']->getFriends();
foreach ($friends as $friend){
		if ($friend->last_action > time() - 50) {		
				$icon = elgg_view("icon/default", array(
														'entity' => get_user($friend->guid), 
														'size' => 'tiny',
														));  
				$users[] = elgg_view('ohyes/chat/freinds-item', array(
																	 'icon' => $icon,
																	 'entity' => $friend
																	 ));
			} 
} 
$users = implode('', $users);
if(empty($users)){
 $users = '<p style="padding:10px;">'.elgg_echo('ohyes:chat:no:online').'</p>';	
}
echo $users;	
