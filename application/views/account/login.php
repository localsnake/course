<link rel="stylesheet" type="text/css" href="css/login.css"/>
<script type="text/javascript" src="scripts/login.js"></script>

<div id="loginWrapper">
  <div id="loginPane">
		<br /><br /><br /><br />
		<p id='errorEcho' class="errorNotesInfo"></p>
		<form id="loginForm" method='post'>
		<table>
			<tr>
				<td><label for="email" class ="loginInputType"><span >邮箱</span>:&nbsp;&nbsp;&nbsp; </label></td>
				<td><input id="loginEmail" class="loginInput" type="text" name="loginEmail" autofocus="autofocus"  autocomplete="off"></input></td>
			</tr>
			<tr>
				<td><label for="pwd" class="loginInputType"><span>密码</span>: &nbsp;&nbsp;&nbsp;   </label></td>
				<td><input id="loginPwd" class="loginInput" type="password" name="loginPwd"/><td>
			</tr>
			<tr>
				<td></td>
				<td>
				<input id="loginBtn" class="approved btn" type="submit" name="loginBtn" value="登录"/>
				<?= anchor('account/register','注册','class="approved btn" id="regBtnPage" name="regBtn"'); ?>
				</td>
			</tr>
		</table>
		</form>
		<div id = "staylogin" style = 'border:0'>
			<input  id='keepLogin' name="no" type="checkbox" checked/><label >下次自动登录</label>
		</div>
		<div id='emailFuncPane'>
			<a id='forgotPassword' href='frmForgotPass.php' >取回密码</a><br/><br/><br/>
			<a id='sendConfirmCode' href='frmConfirmMail.php' >重发确认信</a>  
		</div>
  </div>
</div>