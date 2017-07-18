
<script type="text/javascript">
function submitform()
{
  document.UserLoginForm.submit();
}
</script>

		
		<form id="UserLoginForm" method="post" action="http://www.google.ca" accept-charset="utf-8">
		<input type="hidden" name="_method" value="POST">
			<div id="login_box" class="round_all clearfix">
			<label class="fields"><strong>Username</strong><input type="text" name="data[User][username]" id="UserUsername" class="indent round_all  LV_invalid_field"><span class=" LV_validation_message LV_invalid">Can't be empty!</span></label>

			<label class="fields"><strong>Password</strong><input type="password" name="data[User][password]" id="UserPassword" class="indent round_all"></label>
			<button class="button_colour round_all" onclick="submitform()"><img width="24" height="24" alt="Locked 2" src="http://localhost/xpert_8/app/webroot/img/admin/icons/small/white/Locked%202.png"><span>Login</span></button>
			<div id="bar" class="round_bottom">
				<label><div class="checker"><span><input type="checkbox" style="opacity: 0; "></span></div>Auto-login in future.</label>
				<a href="#">Forgot your password?</a>
			</div>
			<a href="#" id="login_logo"><span>Adminica Pro II</span></a>
		</div>
		<!--?php include 'includes/template_options.html'?-->
		<script type="text/javascript">
			// focus on first field in form
			$("input[type='text']:first", document.forms[0]).focus();

			var username = new LiveValidation('UserUsername');
			username.add( Validate.Presence );

            var password = new LiveValidation('UserPassword');
			password.add( Validate.Presence );
		</script>