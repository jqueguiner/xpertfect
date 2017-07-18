<?php echo $form->create("User"); ?>
<p>
    <label>Login</label>
     <?php echo $form->input("login",array('div'=>false,'class'=>'text-input','label'=>false)); ?>
</p>
<div class="clear"></div>
<p>
    <label>Password</label>
     <?php echo $form->input("password",array('div'=>false,'class'=>'text-input','label'=>false)); ?>
</p>
<div class="clear"></div>
<p>
    <input class="button" type="submit" value="Se connecter" />
</p>
</form>