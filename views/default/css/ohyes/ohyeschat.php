/**
 * OhYesChat
 * @website Link: https://github.com/lianglee/OhYesChat
 * @Package Ohyes
 * @subpackage Chat
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2014.
 * @ide The Code is Generated by Liang Lee php IDE.
 */ 
/****************************
 OhYesChat
*****************************/
.OhYesChat{
   border-bottom: 0;
   bottom: 0px;
   left: 15px;
   display: block;
   font-family: "Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;
   font-size: 11px;
   height: 29px;
   position: fixed;
   text-align: left;
   z-index: 1028;
   margin-top: 8px;
   width:1000px;
   left:15%;
}
.OhYesChat .ChatBar {
   display: block;
   bottom: 0px;
   cursor:pointer;
   width: 200px;
   float: right;
}

.OhYesChat .ChatNotification {
   display: block;
   bottom: 0px;
   cursor:pointer;
   width: 43px;
   float: right;
}
.OhYesChat .ChatNotification .inner {
    padding: 11px;
    margin-left: 5px;
    background: #EBEEF4;
    -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.5);
    border: 1px solid #BAC0CD;
    height: 29px;
}
.OhYesChat .ChatNotification .inner .text{
   margin-top: -20px;
   background: #8F4040;
   color: #FFF;
   text-align:center;
   font-weight: bold;
   width: 18px;
   margin-left: -5px;
   padding: 3px;
   border-radius: 20px;
}
.OhYesChat .ChatBar .inner {
   padding: 6px;
   margin-left: 5px;
   background: #EBEEF4;
   -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.5);
   border: 1px solid #BAC0CD;
   height: 29px;
}
.OhYesChat .ChatBar .inner:hover {
   background: #FDFEFF;
}

.OhYesChat-Inner-Text {
   margin-left: 20px;
   font-weight: bold;
}
.OhYesChat-Tab-Text {
   margin-left: 12px;
   font-weight: bold;
   width: 157px;
}
.OhYesChat .ChatTab {
   display: block;
   bottom: 0px;
   cursor:pointer;
   width: 180px;
   float: right;
}
.OhYesChat .ChatTab .inner {
   padding: 6px;
   margin-left: 5px;
   background: #EBEEF4;
   -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.5);
   border: 1px solid #BAC0CD;
   height: 29px;
}
.OhYesChat .ChatTab .inner .box {
   margin-top: -7px;
   width: 247px;
   margin-left: -6px;
}
.OhYesChat .ChatTab .inner .box input{
 border-radius: 0px;
 background: none repeat scroll 0% 0% #FFF;
 border: medium none;
 width: 247px;
 height: 28px;
 z-index: 1;
 border-top: 1px solid #CCC;
 position: absolute;
}
.OhYesChat .ChatTab .inner:hover {
   background: #FDFEFF;
}
.OhYesChat .data {
  overflow: auto;
  height: 245px;
  border-left: 1px solid #BAC0CD;
  border-right: 1px solid #BAC0CD;
}
.ohyeschat-new-message {
  float: right;
  margin-top: 0px;
  margin-right: 2px;
  position: absolute;
  margin-left: 147px;
  display:none;
}
.ohyeschat-new-message .text{
  font-weight: bold;
  margin-left: 2px;
  margin-top: -23px;
  color: #fff;
  position: absolute;
}
.OhYesChat-Inner-Text {
   margin-left: 20px;
   font-weight: bold;
}
.friends-list {
  background: #F2F3F5;
  width: 195px;
  min-height: 268px; 
  margin-top: -268px; 
  margin-left: 5px;
  position: fixed;
  height: 268px;
}
.friends-list .data {
 overflow: auto;
 height: 245px;
 border-left: 1px solid #CCC;
 border-right: 1px solid #CCC;
}
#chat-count-message {
 margin-top:-20px;
 display:none;
}
.friends-list-item {
 margin: 5px 5px 5px 5px;
}
.friends-list-item .icon{
display: inline-table;
}
.friends-list-item:hover{
	background:#eee;
}
.friends-list-item .name{ 
 margin-top: -25px;
 margin-left: 33px;
}
.friends-list-item .OhYesChat-Icon-Onine{
  float: right;
  margin-right: 4px;
  margin-top:-17px;
}

.Tab-Title {
  background: #fff;
  width: 248px;
  min-height: 268px;
  margin-top: -268px;
  margin-left: 5px;
  position: fixed;
  height: 268px;
  border-left: 1px solid #BAC0CD;border-right: 1px solid #BAC0CD;
}
.Tab-Title .message-item {

}

.OhYesChat-Titles {
	background:#6D84B4;
	height:23px;
	border:1px solid #3C5998;
}
.OhYesChat-Inline-Table {
  display: inline-table;	
}
.OhYesChat-Titles .options {
  float: right;
  margin-right: 10px;
  color: #FFF;
  margin-top: 2px;
  font-size: 12px;
  cursor:pointer;
}
.OhYesChat-Titles:hover {
	background:#8395BB;
}

.OhYesChat-Titles .text {
  color: #FFF;
  font-weight: bold;
  margin-left: 9px;
  padding: 2px;
}
.notification-window {
   margin-top: -324px;
   margin-left: -196px;
   border: 1px solid #CCC;
   background: #F2F3F5;
}
.notification-window .data {
 overflow: overlay;
 height: 245px;
}
.friends-list-item:hover{
	background:#eee;
}

/****************************
 OhYesChat Icons
*****************************/
.OhYesChat-Icon-UserOnine {
   background:url("<?php echo elgg_get_site_url();?>mod/OhYesChat/images/useronline.png") no-repeat;
   width16px;
   height:14px;
}
.OhYesChat-Icon-Onine{
  background:url("<?php echo elgg_get_site_url();?>mod/OhYesChat/images/online.png") no-repeat;
  width:9px;
  height:14px;
}
.OhYesChat-Icon-Notification{
  background:url("<?php echo elgg_get_site_url();?>mod/OhYesChat/images/notification.png") no-repeat;
  width13px;
  height:13px;
}
.ohyes-chat-loading {
  padding: 105px;
}
.OhYesChat-Icon-Loading {
  background:url("<?php echo elgg_get_site_url();?>mod/OhYesChat/images/loading.gif") no-repeat;
  width32px;
  height:32px;
}

.OhYesChat-Icon-NewMessage {
  background:url("<?php echo elgg_get_site_url();?>mod/OhYesChat/images/new.png") no-repeat;
  width:16px;
  height:16px;
}
