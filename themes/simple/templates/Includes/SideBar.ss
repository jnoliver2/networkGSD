<div class="navbar-content">
				<!-- start: SIDEBAR -->
				<div class="main-navigation navbar-collapse collapse">
					<!-- start: MAIN MENU TOGGLER BUTTON -->
					<div class="navigation-toggler">
						<i class="clip-chevron-left"></i>
						<i class="clip-chevron-right"></i>
					</div>
					<!-- end: MAIN MENU TOGGLER BUTTON -->
					<!-- start: MAIN NAVIGATION MENU -->
					<ul class="main-navigation-menu">
						<li  <% if $Title=="DASHBOARD" %>
                       class="active open"
                    <% end_if %> 
                    >
							<a href=""><i class="clip-home-3"></i>
						        <span class="title">Dashboard</span>
								<span class="selected"></span>
							</a>
						</li>
						<li <% if $Title=="COMPANY PROFILE" %>
                       class="active open"
                    <% end_if %>  >
							<a href="pages/company_main_profile"><i class="clip-earth-2"></i>
						        <span class="title">Company Profile</span>
								<span class="selected"></span>
							</a>
						</li>
						<li <% if $Title=="USER PROFILE" %>
                       class="active open"
                    <% end_if %>   >
							<a href="pages/user"><i class="clip-user-5"></i>
						        <span class="title">User Profile</span>
								<span class="selected"></span>
							</a>
						</li>
						<li <% if $Title=="RFP MANAGER" %>
                       class="active open"
                    <% end_if %> >
							<a href="pages/rfpmanager"><i class="clip-folder-open"></i>
						        <span class="title">RFP Manager <!--<span class="badge badge-info"> 4 </span>--></span>
								<span class="selected"></span>
							</a>
						</li>
						<!--
						<li>
							<a href="?page=rfp-match"><i class="clip-stackoverflow"></i>
						        <span class="title">RFP Match<span class="badge badge-info"> 20</span></span>
								<span class="selected"></span>
							</a>
						</li>
						-->
						<li <% if $Title=="RFPS" %>
                       class="active open"
                    <% end_if %> > 
							<a href="pages/rfps"><i class="clip-database"></i>
						        <span class="title">RFPs</span>
								<span class="selected"></span>
							</a>
						</li>
						<li  <% if $Title=="PROFILES" %>
                       class="active open"
                    <% end_if %>   >
							<a href="pages/profiles"><i class="clip-users-3"></i>
						        <span class="title">Profiles</span>
								<span class="selected"></span>
							</a>
						</li>
						
						<? $messages_inbox = mysql_fetch_assoc(mysql_query("select count(id) as msgs from messages where to_id = '".$_SESSION['userid']."' and `read`=0 and deleted=0 and message_type = 'mail'")); ?>
						
						<li <% if $Title=="MESSAGES" %>
                       class="active open"
                    <% end_if %>>
							<a href="pages/messages"><i class="clip-paperplane"></i>
						        <span class="title">Messages <span class="badge badge-info"> $CurrentUser.allMessages.newMessages.Count</span></span>
								<span class="selected"></span>
							</a>
						</li>
						<li style="display: none;">
							<a href="billing"><i class="clip-banknote"></i>
						        <span class="title">Billing</span>
								<span class="selected"></span>
							</a>
						</li>
						<li  style="display: none;">
							<a href="faq"><i class="clip-stack"></i>
						        <span class="title">FAQ</span>
								<span class="selected"></span>
							</a>
						</li>
						<li>
							<a href="http://connectexpandgrow.com/terms-of-use/" target="_blank"><i class="clip-file-3"></i>
						        <span class="title">Terms & Conditions</span>
								<span class="selected"></span>
							</a>
						</li>
					
					</ul>
					<!-- end: MAIN NAVIGATION MENU -->
				</div>
				<!-- end: SIDEBAR -->
			</div>