<link rel="stylesheet" type="text/css" href="css/login.css"/>
<script type="text/javascript" src="scripts/login.js"></script>

<div id="loginWrapper">
  <div id="loginPane">
	<br /><br /><br /><br />
	<div id='errorEcho' class="errorNotesInfo"></div>
	<form id="loginForm" method='post'>
	<table>
	<tr>
		<td><label for="loginEmail">邮箱:</label></td>
		<td><input id="loginEmail" type="text" name="loginEmail" autofocus="autofocus"  autocomplete="off"></input></td>
	</tr>
	<tr>
		<td><label for="loginPwd">密码:</label></td>
		<td><input id="loginPwd" type="password" name="loginPwd"/><td>
	</tr>
	<tr>
		<td></td>
		<td>
		<input id="loginBtn" type="submit" name="loginBtn" value="登录"/>
		<?php echo anchor('account/register','注册','id="regBtnPage" name="regBtn"'); ?>
		</td>
	</tr>
	</table>
	</form>
	<div id = "staylogin" style = 'border:0'>
	<input  id='keepLogin' name="no" type="checkbox" checked/><label >下次自动登录</label>
	</div>
	
<div id='emailFuncPane'>
<?php echo anchor('account/forgot_password','取回密码','id="forgotPassword"'); ?>
<br />
<?php echo anchor('account/confirm','重发确认信','id="sendConfirmCode"'); ?>
</div>	<!-- END FOR emailFuncPane -->

</div>	
</div>
