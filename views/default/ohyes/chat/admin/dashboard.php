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
$news = OhYesChat::checkNews(); 
echo '<h2>'.elgg_echo('ohyeschat:chat:welcome').'</h2><br/>';
echo '<div class="ohyeschat-admin-dashboard" style="margin-left: 30px;">';
echo OhYesChat::newModule('green', elgg_echo('module:title:chat:update'), 'chat_update');
echo OhYesChat::newModule('red', elgg_echo('module:title:chat:total:messages'), 'total_messages');
echo OhYesChat::newModule('blue', elgg_echo('module:title:chat:latest:messages'), 'latest_messages');
echo '</div>';
echo '<h2>'.elgg_echo('ohyeschat:news').'</h2>';
echo "<div class='ohyeschat-news'>{$news}</div>";