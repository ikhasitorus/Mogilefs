<form id="form-sign-up" class="styled" action="<?=base_url()?>index.php/user/createUser/" method="post">
	<fieldset>
		<ol>
			<li class="form-row"><label>Full Name</label>
				<input name="fullName" type="text" class="text-input required" />
			</li>
			<li class="form-row"><label>User Name</label>
				<input name="userName" type="text" class="text-input required" />
			</li>
			<li class="form-row"><label>Email Address</label>
				<input name="emailAdress" type="text" id="register-email" class="text-input required email" />
			</li>
			<li class="form-row"><label>Password</label>
				<input name="password1" type="password" id="password-1" class="text-input required password" />
			</li>
			<li class="form-row"><label>Repeat Password</label>
				<input name="password2" type="password" id="password-2" class="text-input required password" />
			</li>
			<div class="clearfix"></div>
			<div class="clearfix"></div>
			<li class="butto-row">
				<input type="submit" value="Create User" class="btn-primary" />
			</li>
			<div class="clearfix"></div>
		</ol>
	</fieldset>
</form>

