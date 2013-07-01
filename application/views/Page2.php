<html>
<div id="body">
	    <p><?=anchor(base_url() . 'welcome', 'Go to the home page')?></p>
	    <?php if($notes > 0):?>
	    <?php foreach($notes as $n):?>
	        <p>
	            <?=$n->Id_Function?><br />
	            <?=$n->Function_Name?>
	        </p>
	    <?php endforeach;?>
	    <?php else:?>
	        No notes found.
   <?php endif?>
   </html>