<div><table cellpadding=0 cellspacing=0 style="width: 100%; min-width:1006px;" border=0><tr><td>
<ul id="nav" class="dropdown dropdown-horizontal">
	<?php
 $text ='<li id="n-left"><a href="/course/view.php?id=236">Welcome</a>'; 
 echo $text;
?>
<!--   '.$CFG->wwwroot.'/   was used as the URL above-->


<!--		<ul>
					<li class="first"><a href="http://college.sebts.edu" target=_new>C@SE</a></li>
					<li><a href="http://www.sebts.edu" target=_new>SEBTS</a></li>
					<li><a href="http://www.danielakin.com" target=_new>Dr. Akin</a></li>
				</ul>-->
			</li>
	<li id="n-left"><a name=Moodle class="dir">Moodle</a>
		<ul>
			<li class="first"><a href="/my">My Moodle</a></li>
			<li class="first"><a href="/my/showpastsemesters.php">Previous Courses</a></li>
			<li class="first"><a href="/my/showfuturesemesters.php">Future Courses</a></li>
			<li><a href="/calendar/view.php?view=month&cal_d=1&cal_m=1&cal_y=2011">My Calendar</a></li>
			<li><a href="/user/view.php">My Profile</a></li>
			<li <?php if(isguest()) { echo "style='display:none'"; } else { echo "style='background-color: #aa0000'"; } ?>><a href="/message/index.php" target=_new>Check Your Messages</a></li>
			<li><a href="/course">Course Finder</a></li>
			<li <?php if(!isadmin()) { echo "style='display:none'"; } ?>><a href="/course/view.php?id=250">Evaluations</a></li>
			<li <?php if(!isadmin()) { echo "style='display:none'"; } ?>><a href="/course/view.php?id=237">CampusNet Admin</a></li>
			<li <?php if(!isadmin()) { echo "style='display:none'"; } ?>><a href="/course/view.php?id=236">Welcome Page</a></li>
			<li <?php if(!isadmin()) { echo "style='display:none'"; } ?>><a href="/admin">Moodle Admin</a></li>
			<li <?php if(!isadmin()) { echo "style='display:none'"; } ?>><a href="/admin/user.php">Users</a></li>
			<li <?php if(!isadmin()) { echo "style='display:none'"; } ?>><a href="http://campusnet.sebts.edu/admin/mysql/" target=_new>MySQL</a></li>
			<li <?php if(!isadmin() && $USER->username != "whandy") { echo "style='display:none'"; } ?>><a href="/mod/resource/view.php?id=63003">SACS Tool</a></li>
		</ul>
	</li>
	
		<li id="n-left"><a href="/mod/resource/view.php?id=3715" class="dir">Around Southeastern</a>
	</li>
	
	
	<li id="n-left"><a name=StudentServices class="dir">Student Life</a>
		<ul>
<!--			<li class="first" <?php if(isguest()) { echo "style='display:none'"; } ?>><a href="/mod/resource/view.php?id=3716">SEBTS Employment Opportunities</a></li> -->
			<li class="first" <?php if(isguest()) { echo "style='display:none'"; } ?>><a href="/mod/resource/view.php?id=47357">Student Employment Portal</a></li>
			<li><a href="/mod/resource/view.php?id=3718">Chapel Information</a></li>
			<li><a href="/mod/resource/view.php?id=3719">General Student Information/Services</a></li>
			<li><a href="/mod/resource/view.php?id=3720">Intramurals</a></li>
			<li <?php if(isguest()) { echo "style='display:none'"; } ?>><a href="/mod/resource/view.php?id=4975">D Groups</a></li>
		</ul>
	</li>
	
	<li id="n-left"><a name=FormsAndInfo" class="dir">Forms & Info</a>
		<ul>
			<li class="first"><a href="/mod/resource/view.php?id=3721">Registrar's Office</a></li>
			<li><a href="/mod/resource/view.php?id=3722">Accounting Services</a></li>
			<li><a href="/mod/resource/view.php?id=3723">Campus Security</a></li>
			<li class="first" <?php if(isguest()) { echo "style='display:none'"; } ?>><a href="/mod/resource/view.php?id=62373">SEBTS Alerts / Announcements</a></li>
			<li><a href="/mod/resource/view.php?id=3724">Housing</a></li>
		</ul>
	</li>
	
	<li id="n-left"><a name="Self-Service" class="dir">Self-Service</a>
	
		<ul>
			<li class="first"><a href="/mod/resource/view.php?id=3725">Self-Service Home</a></li>
			<li><a href="http://selfservice.sebts.edu/selfservice/account/directorysearch.asp" onClick="popup(this, 'directory'); return false;">Student/Faculty Directory</a></li>
			<li><a href="/mod/resource/view.php?id=3727">Course Search</a></li>
			<li><a href="/mod/resource/view.php?id=3728">Transcript Request</a></li>
			<li style="background-color: #aa0000";><a href="/mod/resource/view.php?id=20545">Pay Tuition & Housing Online</a></li>
		</ul>
	</li>
	<li id="n-left" <?php if(isguest()) { echo "style='display:none'"; } ?>><a href="http://campusnet.sebts.edu/course/view.php?id=227" class="dir">Library</a>
		

		<li id="n-left"><a href="/mod/resource/view.php?id=3729" class="dir">Southeastern1Card</a></li>
		
	<li id="n-left" <?php if(isguest()) { echo "style='display:none'"; } ?>><a name=Journal	class="dir">STR Journal</a>
		<ul>
			<li id="n-left" <?php if(isguest()) { echo "style='display:none'"; } ?>><a href="/mod/resource/view.php?id=66624">STR 1.1(2010)</a></li>
			<li id="n-left" <?php if(isguest()) { echo "style='display:none'"; } ?>><a href="/mod/resource/view.php?id=66484">STR 2.1(2011)</a></li>
			<li id="n-left" <?php if(isguest()) { echo "style='display:none'"; } ?>><a href="/mod/resource/view.php?id=66483">STR 2.2(2011)</a></li>
			<li id="n-left" <?php if(isguest()) { echo "style='display:none'"; } ?>><a href="/mod/resource/view.php?id=62328">STR 3.1(2012)</a></li>
			


		</ul>
		</li>
		
			<li id="n-right"><a name=Help class="dir">Help</a>
		<ul>
			<li class="first"><a href="/mod/resource/view.php?id=3730">Access Guides</a></li>
			<li><a href="http://www.sebts.edu/portal/IT/moodlerequirements.aspx">Moodle Browser Settings</a></li>
			<li><a href="/mod/resource/view.php?id=3731">CampusNet</a></li>
			<li><a href="/mod/resource/view.php?id=3732">WiFi Wireless Internet</a></li>
			<li><a href="/mod/resource/view.php?id=3733">Computer Labs</a></li>
			<li><a href="/mod/resource/view.php?id=3734">Web Content Filter</a></li>
			<li><a href="/mod/resource/view.php?id=3735">Student Email</a></li>
			<li><a href="/mod/resource/view.php?id=3736">Copying and Printing</a></li>
			<li><a href="/mod/resource/view.php?id=3737">Software for Students</a></li>
			<li><a href="/mod/resource/view.php?id=3738">Where to Buy Computers</a></li>
			<li><a href="http://www.sebts.edu/files/IT/help-moodle-basics.pdf">Moodle Help for Students</a></li>
			<li <?php if(isguest()) { echo "style='display:none'"; } ?>><a href="http://docs.moodle.org/" target=_new>Moodle Documentation</a></li>
		</ul>
			</li>
			
		
		
</ul>


		  <img src="<?php echo $CFG->wwwroot.'/theme/'.current_theme() ?>/images/menubar_app_separator.gif" alt="" title="" width="2" height="21" hspace="1" align="middle" style="visibility: hidden"/>
		  <a href="https://webmail.sebts.edu" target=_new><img src="<?php echo $CFG->wwwroot.'/theme/'.current_theme() ?>/pix/icon_outlook.gif" alt="Web Outlook" title="Web Outlook" width="16" height="16" align="middle" <?php if(isguest()) { echo "style='display:none'"; } ?>/></a> 
		  <a href="/login/logout.php"><img src="<?php echo $CFG->wwwroot.'/theme/'.current_theme() ?>/pix/LogOut.png" alt="Log Out" title="Log Out" width="16" height="16" align="middle" <?php if(isguest()) { echo "style='display:none'"; } ?>/></a>
		 </td></tr></table></div></div>