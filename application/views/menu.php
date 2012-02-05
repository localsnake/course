<div id="top_nav">
	<!-- 信息栏 -->
	<div id="titlepane" style="display:inline-block;">
		<div id="user_title">
			<span>欢迎您,</span>
			<span id="username">用户名</span>
			<span id="usertype" ></span>
		</div>
		<!--<img id="userface" width="60" height="60" src="#" alt="myface" />-->
	</div>
	
	<br />
	<br />
	
	<div id="menubar" >
		<div id="menuitems">
		<span id="msgInfo"><?php echo anchor('msg/inbox','站内信'); ?></span>
		<span>|</span>
		<span id="accountPwd"><?php echo anchor('account/password','修改密码'); ?></span>		
		<span>|</span>
		<span id="accountLogoff" ><?php echo anchor('account/logout','注销'); ?></span>
		<input type="text" id="searchKey"/>
		<button id="searchBtn" name="searchBtn">Search</button>
		</div>
	</div>
	
	<br />
	
	<!-- 一级导航 -->
	<div id="navigation">
		<span id="navMain"><?php echo anchor('home/index','新鲜事'); ?></span>
		<span>|</span>
		<span id="navCourse"><?php echo anchor('course/weekview','课程'); ?></span>
		<span>|</span>
		<span id="navUser"><?php echo anchor('profile/news','个人档'); ?></span>	
		<span>|</span>
		<span id="navFriend"><?php echo anchor('friend/index','好友'); ?></span>
		<span>|</span>
		<span id="navSchedule"><?php echo anchor('agenda/index','日程'); ?></span>	
	</div>
	<hr />
</div>
