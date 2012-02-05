<!-- 二级导航 -->
<div id="subNavigation">
	<span id="navCourseNews"><?php echo anchor('course/news/'.$course_id,'课程动态'); ?></span>
	<span>|</span>
	<span id="navCourseIntro"><?php echo anchor('course/intro/'.$course_id,'课程简介'); ?></span>
	<span>|</span>
	<span id="navCourseStudent"><?php echo anchor('course/student/'.$course_id,'学生'); ?></span>
	<span>|</span>
	<span id="navCourseLecture"><?php echo anchor('course/lecture/'.$course_id,'课件'); ?></span>
	<span>|</span>
	<span id="navCourseAssignment"><?php echo anchor('course/assignment/'.$course_id,'作业'); ?></span>
	<span>|</span>
	<span id="navCourseResource"><?php echo anchor('course/resource/'.$course_id,'资源'); ?></span>
	<span>|</span>
	<span id="navCourseDiscussion"><?php echo anchor('discussion/index/'.$course_id,'讨论区'); ?></span>
	
</div>
