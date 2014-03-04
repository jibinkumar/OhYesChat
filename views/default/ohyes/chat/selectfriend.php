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
?>
<div class="ChatTab" id="ohyeschat-window-<?php echo $vars['friend']['guid'];?>">
         <div class="Tab-Title" style="display:none;" id="OhYesChat-Tab-<?php echo $vars['friend']['guid'];?>">
               <div class="OhYesChat-Titles">
                   <div class="OhYesChat-Inline-Table text"><?php echo OhYesChat::sttl($vars['friend']['name'], 23);?></div>
                   <div class="OhYesChat-Inline-Table options" id> X </div>
               </div>
            <div id="ohyes-chat-data-messages-<?php echo $vars['friend']['guid'];?>" class="data">
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
			  if($vars['xhr'] == 'false'){  
			  $login = elgg_get_logged_in_user_entity()->guid;
			  $messages = OhYesChat::getMessages($login, $vars['friend']->guid); 
			  foreach(array_reverse($messages) as $umessages){
			  $icon = elgg_view("icon/default", array(
														'entity' => get_user($umessages->sender), 
														'size' => 'small',
									));			  
			  $user_msgs[] = elgg_view('ohyes/chat/message-item', array(
																			   'icon' => $icon,
																			   'message' => OhYesChat::replaceIcon($umessages->message)
																			   ));	
			  }
			   echo implode('', $user_msgs);
			 }
			   ?>
                      
              </div>   
          </div>
         <div class="inner" onClick="OhYesChat.TabOpen('<?php echo $vars['friend']['guid'];?>', this);">
               <div class="box" style="display:none;">
               <script>OhYesChat.Form(<?php echo $vars['friend']['guid'];?>); </script>
               <form id="ohyeschat-form-<?php echo $vars['friend']['guid'];?>" method="post">
               <input type="text" name="message" id="mbox" autocomplete="off">
               <input type="hidden" name="friend" value="<?php echo $vars['friend']['guid'];?>" />
               </form>
                </div>
                <div class="ohyeschat-new-message">
                              <div class="OhYesChat-Icon-NewMessage" style="display:inline-table;"></div>
                              <div class="text"  style="display:inline-table;"></div>
                        </div>     
            <div class="<?php echo OhYesChat::getStatusClass($vars['friend']['guid']);?>" id="ohyeschat-ustatus-<?php echo $vars['friend']['guid'];?>">
                        <div class="OhYesChat-Tab-Text" style="display:inline-table;"><?php echo OhYesChat::sttl($vars['friend']['name'], 17);?></div>
            </div> 
          </div>
     </div>