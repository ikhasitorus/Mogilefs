<form id="form-sign-up" class="styled" method="post" action="<?=base_url()?>index.php/user/modifyUser/<?=$userData->Id_User?>">
	<fieldset>
		<ol>
			<li class="form-row"><label>Full Name</label>
				<input name="fullName" type="text" value="<?=$userData->Full_Name?>"  class="text-input required" />
			</li>
			<li class="form-row"><label>User Name</label>
				<input name="userName" type="text" value="<?=$userData->User_Name?>" class="text-input required" />
			</li>
			<li class="form-row"><label>Email Address</label>
				<input name="emailAddress" type="text" value="<?=$userData->Email_Address?>" id="register-email" class="text-input required email" />
			</li>
			<div class="clearfix"></div>
			<li class="butto-row">
				<input type="submit" value="Modify Account" class="btn-primary" />
			</li>
			<div class="clearfix"></div>
		</ol>
	<fieldset>
</form>




