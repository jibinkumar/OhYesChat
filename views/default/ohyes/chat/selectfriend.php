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
<script>
  setInterval(function(){
						 var tab = <?php echo $vars['friend']['guid'];?>;
						 OhYesChat.RefeshMessages(tab);
						 }, 
						 3000);
               
</script>

<div class="ChatTab" id="ohyeschat-window-<?php echo $vars['friend']['guid'];?>">
         <div class="Tab-Title" style="display:none;" id="OhYesChat-Tab-<?php echo $vars['friend']['guid'];?>">
               <div class="OhYesChat-Titles">
                   <div class="OhYesChat-Inline-Table text"><?php echo OhYesChat::sttl($vars['friend']['name'], 23);?></div>
                   <div class="OhYesChat-Inline-Table options" id> X </div>
               </div>
            <div id="ohyes-chat-data-messages-<?php echo $vars['friend']['guid'];?>" class="data">
                       
                      
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
               
            <div class="<?php echo OhYesChat::getStatusClass($vars['friend']['guid']);?>" id="ohyeschat-ustatus-<?php echo $vars['friend']['guid'];?>">
                        <div class="OhYesChat-Tab-Text" style="display:inline-table;"><?php echo OhYesChat::sttl($vars['friend']['name'], 23);?></div>
                         <div class="ohyeschat-new-message">
                              <div class="OhYesChat-Icon-NewMessage"  style="display:inline-table;"></div>
                              <div class="text"  style="display:inline-table;"></div>
                        </div>
            </div> 
          </div>
     </div>