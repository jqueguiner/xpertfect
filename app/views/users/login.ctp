			<?php 
			echo $html->css('media/css/demo_page.css');
			echo $html->css('media/css/demo_page.css');
			echo $html->css('admin/mb/mb.YTVPlayer.css');

			
			?>

			<?php 
			echo $javascript->link('media/js/jquery.js');
			echo $javascript->link('media/js/jquery.dataTables.js');
			echo $javascript->link('admin/mb/jquery.metadata.js');
			echo $javascript->link('admin/mb/jquery.mb.YTPlayer.js');

			?>
<script type="text/javascript">
function submitform()
{
  document.UserLoginForm.submit();
}
$(function(){
    $(".movie").mb_YTPlayer();
  });
</script>

		  <a id="bgndVideo" href="http://www.youtube.com/watch?v=sBWPCvdv8Bk&p=FEF8AB67253E5E20"
		  class="movie {opacity:.8, isBgndMovie:{width:'window',mute:true}, ratio:'16/9',quality:'default'}">
		  background movie
		  </a>
		<form id="UserLoginForm" method="post" action="/xpert_8/users/login" accept-charset="utf-8">
		<input type="hidden" name="_method" value="POST">
			<div id="login_box" class="round_all clearfix">
			<label class="fields"><strong>Username</strong><input type="text" name="data[User][username]" id="UserUsername" class="indent round_all  LV_invalid_field"><span class=" LV_validation_message LV_invalid">Can't be empty!</span></label>

			<label class="fields"><strong>Password</strong><input type="password" name="data[User][password]" id="UserPassword" class="indent round_all"></label>
			<button class="button_colour round_all" onclick="submitform()"><img width="24" height="24" alt="Locked 2" src="http://localhost/xpert_8/app/webroot/img/admin/icons/small/white/Locked%202.png"><span>Login</span></button>
			<div id="bar" class="round_bottom">
				<label><div class="checker"><span id="ckecked"><input type="checkbox" style="opacity: 0; onclick="$('#ckecked').addClass('checked')" "></span></div>Auto-login in future.</label>
				<a href="#">Forgot your password?</a>
			</div>
			<a href="#" id="login_logo"><span>Admin XPertFect</span></a>
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