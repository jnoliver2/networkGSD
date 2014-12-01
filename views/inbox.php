
	<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-file"></i>
									<a href="#">
										Pages
									</a>
								</li>
								<li class="active">
									Message Center
								</li>
								<li class="search-box">
									<form class="sidebar-search">
										<div class="form-group">
											<input type="text" placeholder="Start Searching...">
											<button class="submit">
												<i class="clip-search-3"></i>
											</button>
										</div>
									</form>
								</li>
							</ol>
							<div class="page-header">
								<h1>Message Center <small>Messages, RFPs, Engagements & Connections</small></h1>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-12">
							<div class="tabbable">
								<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
									<li <? if ($_GET['tab']=="") { ?>class="active"<? } ?>>
										<a data-toggle="tab" href="#panel_messages">
											Messages <span class="badge badge-info"> <?=$messages_inbox['msgs']?> </span>
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_rfp">
											RFP <span class="badge badge-info"> <?=$messages_rfpapply['msgs']?> </span>
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_engagement">
											Engagement <span class="badge badge-info"> <?=mysql_num_rows($engagements);?> </span>
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_connection">
											Connection <span class="badge badge-info"> <?=mysql_num_rows($connections); ?> </span>
										</a>
									</li>
									<li <? if ($_GET['tab']=="sent") { ?>class="active"<? } ?>>
										<a data-toggle="tab" href="#panel_sent" id='sentTab'>
											Sent
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_trash">
											Trash
										</a>
									</li>
								</ul>
								
								
								
								<div class="tab-content">
									<div id="panel_messages" class="tab-pane in active">
										
										
										<div class="row">
					

					
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-md-12">
							<!-- start: INBOX PANEL -->
							
							
													
																 <form method="post" action="/network/?page=messages">
										        
										        <div class="col-md-12">
										          <div class="col-sm-8 col-md-11">
										            <div class="form-group"> <span class="input-icon input-icon-right">
										              <input type="text" placeholder="Search Messages" name="inbox_search" <? if ($_POST['inbox_search']!="") { ?>value="<?=$_POST['inbox_search']?>"<? } ?> id="form-field-17" class="form-control">
										              <i class="fa fa-search"></i> </span> </div>
										          </div>
										          
										          <!-- End Account Type -->
										          
										          <div class="col-sm-3 col-md-1">
										            <button class="btn btn-green" type="submit"><i class="fa fa-search"></i> SEARCH</button>
										          </div>
										          </form>
												
												
												<div class="clearfix"></div>
								
								
								
								<div class="panel-body messages">
								
										<ul class="messages-list">
									<? 
									
										while ($row=mysql_fetch_assoc($msgs_mail)) { ?>
									
										<script>
										
										function showMailMessage<?=$row['id']?>() {
										
											document.getElementById('mail-message-time').innerHTML = '<?=$row['prettyDate']?>';
											document.getElementById('mail-message-from').innerHTML = '<?=str_ireplace("'","\'",$row['fromName'])?>';
											document.getElementById('mail-message-to').innerHTML = 'To: <?=str_ireplace("'","\'",$row['toName'])?>';
											document.getElementById('mail-message-subject').innerHTML = '<?=$row['subject']?>';
											document.getElementById('mail-message-content').innerHTML = '<p> <?=str_ireplace("'","\'",$row['body'])?></p>';
											document.getElementById('thisRFPid').value = <?=$row['id']?>;
											document.getElementById('messageSubject').value='RE: <?=$row['subject']?>';
											document.getElementById('messageBody').value='';
											
											document.getElementById('messageToID').value='<?=$row['from_id']?>';
											document.getElementById('messageFromID').value='<?=$user->ID?>';
											document.getElementById('mail-message-id').value = '<?=$row['id']?>';
											document.getElementById('messageType').value='mail';
											document.getElementById('messageRelatedRFP').value='';
											
											document.getElementById('awardToID').value = '';
											document.getElementById('awardFromID').value = '';
											document.getElementById('awardRelatedRFP').value = '';
											
											
											
										}
										
										
								
										
										function deleteMail() {
												
			
												var xmlhttp;
												if (window.XMLHttpRequest)
												  {// code for IE7+, Firefox, Chrome, Opera, Safari
												  xmlhttp=new XMLHttpRequest();
												  }
												else
												  {// code for IE6, IE5
												  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
												  }
												xmlhttp.onreadystatechange=function()
												  {
												  if (xmlhttp.readyState==4 && xmlhttp.status==200)
												    {
												    document.getElementById("office_locations").innerHTML=xmlhttp.responseText;
												    }
												  }
												xmlhttp.open("GET","/network/functions/ajax-message.php?delete="+document.getElementById('mail-message-id').value,true);
												xmlhttp.send();
												//alert("/network/functions/ajax-message.php?denyRFP="+document.getElementById('thisRFPid').value);
												document.getElementById('mail-message-content').innerHTML = "Message Archived";
										
										
											}
											
										</script>
										
										</script>
										
										<? if ($firstMail=="") { $firstMail=$row['id']; } ?>
										
										<li class="messages-item" onClick="showMailMessage<?=$row['id']?>();">
									
											<?=showPhoto($row['from_id']);?>
											<span class="messages-item-from"><?=$row['fromName']?></span>
											<div class="messages-item-time">
												<span class="text"><?=$row['prettyDate']?></span>
											</div>
											<span class="messages-item-subject">&nbsp;<?=$row['subject']?></span>
											<span class="messages-item-preview"><?=substr($row['body'],0,50)?></span>
										</li>
										<? } ?>
																		</ul>
									<div class="messages-content">
										<div class="message-header">
											<input type=hidden name id="mail-message-id">
											<div class="message-time" id="mail-message-time">
												
											</div>
											<div class="message-from" id="mail-message-from">
											
											</div>
											<div class="message-to" id="mail-message-to">
										
											</div>
											<div class="message-subject" id="mail-message-subject">
												
											</div>
											<div class="message-actions">
												<a title="Move to trash" href="javascript:deleteMail();"><i class="fa fa-trash-o"></i></a>
												<a title="Reply" href="#SendMessage" data-toggle="modal"><i class="fa fa-reply"></i></a>
										
												<!--<a title="Forward" href="#"><i class="fa fa-long-arrow-right"></i></a>-->
											</div>
										</div>
										<div class="message-content" id="mail-message-content">
											<p>
											
											</p>
											<hr>
											
											
											
										</div>
										
									</div>
								</div>
							
							<!-- end: INBOX PANEL -->
						</div>
					</div>
					</div>
					<!-- end: PAGE CONTENT-->
									
								</div> <!-- End Panel Body -->
								</div><!-- End Overview Panel -->
									
									
					
							<script>
					
					function ajaxRFP(kw,posted_rfp,applied_rfp) {
												
			
												var xmlhttp;
												if (window.XMLHttpRequest)
												  {// code for IE7+, Firefox, Chrome, Opera, Safari
												  xmlhttp=new XMLHttpRequest();
												  }
												else
												  {// code for IE6, IE5
												  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
												  }
												xmlhttp.onreadystatechange=function()
												  {
												  if (xmlhttp.readyState==4 && xmlhttp.status==200)
												    {
													 document.getElementById('panel_rfp').innerHTML = xmlhttp.responseText;
												    }
												  }
												xmlhttp.open("GET","/network/functions/ajax-inbox-rfp.php?kw="+kw+"&posted_rfp="+posted_rfp+"&applied_rfp="+applied_rfp,true);
												xmlhttp.send();
												
										
											}
					</script>
							
							
								
								
					<div id="panel_rfp" class="tab-pane">
					<!-- Switched to Ajax -->
						
					
				
					<!-- End Panel Body -->
					<script> ajaxRFP('','',''); </script>
					</div>			
							


									<!-- End Account Users Panel -->
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
		
<div id="panel_engagement" class="tab-pane"> 
  <script>
		
			function approveEngagement(engageID) {
			
					var xmlhttp;
					if (window.XMLHttpRequest)
					  {// code for IE7+, Firefox, Chrome, Opera, Safari
					  xmlhttp=new XMLHttpRequest();
					  }
					else
					  {// code for IE6, IE5
					  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					  }
					xmlhttp.onreadystatechange=function()
					  {
					  if (xmlhttp.readyState==4 && xmlhttp.status==200)
					    {
					    alert('Engagement approved');
					    }
					  }
					xmlhttp.open("GET","/network/functions/ajax-confirmengagement.php?action=approve&id="+engageID,true);
			//		alert("/network/functions/ajax-connection.php?action=approve&from_id=<?=$_SESSION['userid']?>&to_id="+profileID);
					xmlhttp.send();
				
				
			}
			
			function denyEngagement(engageID) {
					var xmlhttp;
					if (window.XMLHttpRequest)
					  {// code for IE7+, Firefox, Chrome, Opera, Safari
					  xmlhttp=new XMLHttpRequest();
					  }
					else
					  {// code for IE6, IE5
					  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					  }
					xmlhttp.onreadystatechange=function()
					  {
					  if (xmlhttp.readyState==4 && xmlhttp.status==200)
					    {
					    alert('Engagement denied');
					    }
					  }
					xmlhttp.open("GET","/network/functions/ajax-confirmengagement.php?action=deny&t&id="+engageID,true);
					xmlhttp.send();
			}
	
			</script>
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="search-classic col-md-12">
        <? while ($row=mysql_fetch_assoc($engagements)) { ?>
        <div class="search-result col-md-12" style="padding-left:0px;">
          <div class="row">
            <div class="search-post-image col-xs-4 col-sm-4 col-md-3">
              <?=showPhoto($row['related_id'])?>
            </div>
            <div class="search-post-content col-xs-8 col-sm-8 col-md-9"> <i class="fa fa-archive filter-icon filter-green"></i>
              <h3><a href="/network/?page=profile&profile_id=<?=$row['related_id']?>">
                <?=$row['first_name']?>
                <?=$row['last_name']?>
                </a></h3>
              <br/>
              <div class="search-post-info">
                <div class=""> <i class="fa fa-align-justify"></i> <strong>Significant Engagement:</strong>
                  <?=$row['engagement_name']?>
                </div>
                <br/>
                <div class=""> <i class="fa fa-home"></i> <strong>Company/Attorney:</strong>
                  <?=$row['company_attorney']?>
                </div>
                <br/>
                <div class=""> <i class="fa fa-calendar"></i> <strong>Date of Engagement:</strong>
                  <?=$row['month']?>
                  ,
                  <?=$row['year']?>
                </div>
              </div>
              <p><strong>PROJECT DESCRIPTION:</strong>
                <?=$row['description']?>
              </p>
              <div class="col-md-6">
                <button class="btn btn-green" type="button" onClick="approveEngagement(<?=$row['id']?>)"><i class="fa fa-check-square"></i> ACCEPT</button>
                <button  onClick="denyEngagement(<?=$row['id']?>)" class="btn btn-red" type="button"><i class="fa fa-minus-square"></i> DENY</button>
              </div>
              <div class="col-md-6" style="text-align:right;"> </div>
            </div>
            <!-- End Content --> 
            
          </div>
          <div class="clearfix"></div>
          <br>
          </div>
          <? } ?>
        
      </div>
    </div>
  </div>
</div>
<!-- End Content -->
<!-- End Engagement Tab --> 











<div id="panel_connection" class="tab-pane"> 
  <script>
									
										function approveConnection(profileID) {
										
												var xmlhttp;
												if (window.XMLHttpRequest)
												  {// code for IE7+, Firefox, Chrome, Opera, Safari
												  xmlhttp=new XMLHttpRequest();
												  }
												else
												  {// code for IE6, IE5
												  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
												  }
												xmlhttp.onreadystatechange=function()
												  {
												  if (xmlhttp.readyState==4 && xmlhttp.status==200)
												    {
												    alert('Connection approved');
												    }
												  }
												xmlhttp.open("GET","/network/functions/ajax-connection.php?action=approve&to_id=<?=$_SESSION['userid']?>&from_id="+profileID,true);
										//		alert("/network/functions/ajax-connection.php?action=approve&from_id=<?=$_SESSION['userid']?>&to_id="+profileID);
												xmlhttp.send();
											
											
										}
										
										function denyConnection(profileID) {
												var xmlhttp;
												if (window.XMLHttpRequest)
												  {// code for IE7+, Firefox, Chrome, Opera, Safari
												  xmlhttp=new XMLHttpRequest();
												  }
												else
												  {// code for IE6, IE5
												  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
												  }
												xmlhttp.onreadystatechange=function()
												  {
												  if (xmlhttp.readyState==4 && xmlhttp.status==200)
												    {
												    alert('Connection denied');
												    }
												  }
												xmlhttp.open("GET","/network/functions/ajax-connection.php?action=deny&to_id=<?=$_SESSION['userid']?>&from_id="+profileID,true);
												xmlhttp.send();
										}
								
										</script>
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="search-classic col-md-12">
        <? while ($row=mysql_fetch_assoc($connections))	{ ?>
			<div class="search-result col-md-12" style="padding-left:0px;">
			  <div class="row">
			    <div class="search-post-image col-xs-4 col-sm-4 col-md-3">
			      <?=showPhoto($row['from_id'])?>
			    </div>
			    <div class="search-post-content col-xs-8 col-sm-8 col-md-9"> <i class="fa fa-archive filter-icon filter-green"></i>
			      <h3><a href="/network/?page=profile&profile_id=<?=$row['ID']?>">
			        <?=$row['first_name']?>
			        <?=$row['last_name']?>
			        </a></h3>
			      <div class="search-post-info">
			        <? if ($row['st']!="") { ?>
			        <div class=""> <i class="fa fa-suitcase"></i>
			          <?=$states[$row['st']]?>
			        </div>
			        <br/>
			        <? } ?>
			        <div class=""> <i class="fa fa-globe"></i>
			          <? $barstates = getBarStates("user",$row['ID']); ?>
			          <?  $hasPrev=false; foreach ($barstates as $thisBarState) { if ($hasPrev==false) { $hasPrev=true; } else { echo " &bullet; "; } echo $states[$thisBarState]; } ?>
			        </div>
			        <div class=""> <i class="fa fa-legal"></i>
			          <? $x=0; $pas = mysql_query("select name from practicearea join practicearea_list on practicearea.practicearea_id = practicearea_list.id  where related_id = '".$row['ID']."' and practicearea_type = 'user'"); while ($rowpa=mysql_fetch_assoc($pas)) { echo $rowpa['name']; $x++; if ($x<mysql_num_rows($pas)) echo " &bull; "; } ?>
			        </div>
			      </div>
			      <p>
			        <? 
													if (strlen($row['bio'])>200) { ?>
			        <?=substr($row['bio'],0,200)?>
			        ...
			        <? } else { ?>
			        <?=$row['bio']?>
			        <? } ?>
			      </p>
			      <div class="col-md-6">
			        <button class="btn btn-green" type="button" onClick="approveConnection('<?=$row['from_id']?>');"><i class="fa fa-check-square"></i> ACCEPT</button>
			        <button onClick="denyConnection('<?=$row['from_id']?>');" class="btn btn-red" type="button"><i class="fa fa-minus-square"></i> DENY</button>
			      </div>
			      <div class="col-md-6" style="text-align:right;">
			        <h2 class="text-zero">
			          <?=getPoints($row['ID'])?>
			        </h2>
			      </div>
			    </div>
			    <!-- End Content --> 
			  </div>
			</div>
      
        <? } ?>
      </div>
    </div>
  </div>

</div>

<!-- End Connection Tab -->





	
<div id="panel_sent" class="tab-pane">
  <div class="row"> 
    <!-- start: PAGE CONTENT -->
    <div class="row">
      <div class="col-md-12"> 
        <!-- start: INBOX PANEL -->
          <form method="post" action="/network/?page=messages&tab=sent">
        
        <div class="col-md-12">
          <div class="col-sm-8 col-md-11">
            <div class="form-group"> <span class="input-icon input-icon-right">
              <input type="text" placeholder="Search Messages" name="sent_search" <? if ($_POST['sent_search']!="") { ?>value="<?=$_POST['sent_search']?>"<? } ?> id="form-field-17" class="form-control">
              <i class="fa fa-search"></i> </span> </div>
          </div>
          
          <!-- End Account Type -->
          
          <div class="col-sm-3 col-md-1">
            <button class="btn btn-green" type="submit"><i class="fa fa-search"></i> SEARCH</button>
          </div>
          </form>
          <div class="clearfix"></div>
          <div class="panel-body messages">
            <ul class="messages-list">
              <? 
									
										while ($row=mysql_fetch_assoc($msgs_sent)) { ?>
              <script>
										
										function showSentMessage<?=$row['id']?>() {
										
											document.getElementById('sent-message-time').innerHTML = '<?=$row['prettyDate']?>';
											document.getElementById('sent-message-from').innerHTML = '<?=str_ireplace("'","\'",$row['fromName'])?>';
											document.getElementById('sent-message-to').innerHTML = 'To: <?=str_ireplace("'","\'",$row['toName'])?>';
											document.getElementById('sent-message-subject').innerHTML = '<?=$row['subject']?>';
											document.getElementById('sent-message-content').innerHTML = '<p> <?=str_ireplace("'","\'",$row['body'])?></p>';
											document.getElementById('thisRFPid').value = <?=$row['id']?>;
											//document.getElementById('messageSubject').value='RE: <?=$row['subject']?>';
											//document.getElementById('messageBody').value='';
											
											//document.getElementById('messageToID').value='<?=$row['from_id']?>';
											//document.getElementById('messageFromID').value='<?=$user->ID?>';
											//document.getElementById('mail-message-id').value = '<?=$row['id']?>';
											//document.getElementById('messageType').value='mail';
											//document.getElementById('messageRelatedRFP').value='';
											
											//document.getElementById('awardToID').value = '';
											//document.getElementById('awardFromID').value = '';
											//document.getElementById('awardRelatedRFP').value = '';
											
											
											
										}
										
										
								
										
										function deleteMail() {
												
			
												var xmlhttp;
												if (window.XMLHttpRequest)
												  {// code for IE7+, Firefox, Chrome, Opera, Safari
												  xmlhttp=new XMLHttpRequest();
												  }
												else
												  {// code for IE6, IE5
												  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
												  }
												xmlhttp.onreadystatechange=function()
												  {
												  if (xmlhttp.readyState==4 && xmlhttp.status==200)
												    {
												    document.getElementById("office_locations").innerHTML=xmlhttp.responseText;
												    }
												  }
												xmlhttp.open("GET","/network/functions/ajax-message.php?delete="+document.getElementById('mail-message-id').value,true);
												xmlhttp.send();
												//alert("/network/functions/ajax-message.php?denyRFP="+document.getElementById('thisRFPid').value);
												document.getElementById('mail-message-content').innerHTML = "Message Archived";
										
										
											}
											
										</script> 
              </script>
              <? if ($firstSentMail=="") { $firstSentMail=$row['id']; } ?>
              <li class="messages-item" onClick="showSentMessage<?=$row['id']?>();"> <span title="Mark as starred" class="messages-item-star"><i class="fa fa-star"></i></span>
                <?=showPhoto($row['from_id']);?>
                <span class="messages-item-from">
                <?=$row['fromName']?>
                </span>
                <div class="messages-item-time"> <span class="text">
                  <?=$row['prettyDate']?>
                  </span> </div>
                <span class="messages-item-subject">&nbsp;
                <?=$row['subject']?>
                </span> <span class="messages-item-preview">
                <?=substr($row['body'],0,50)?>
                </span> </li>
              <? } ?>
            </ul>
            <div class="messages-content">
              <div class="message-header">
                <input type=hidden name id="sent-message-id">
                <div class="message-time" id="sent-message-time"> </div>
                <div class="message-from" id="sent-message-from"> </div>
                <div class="message-to" id="sent-message-to"> </div>
                <div class="message-subject" id="sent-message-subject"> </div>
                <div class="message-actions"> <a title="Move to trash" href="javascript:deleteMail();"><i class="fa fa-trash-o"></i></a> <a title="Reply" href="#SendMessage" data-toggle="modal"><i class="fa fa-reply"></i></a> 
                  
                  <!--<a title="Forward" href="#"><i class="fa fa-long-arrow-right"></i></a>--> 
                </div>
              </div>
              <div class="message-content" id="sent-message-content">
                <p> </p>
                <hr>
              </div>
            </div>
          </div>
          <script>showSentMessage<?=$firstSentMail?>();</script> 
          <!-- end: INBOX PANEL --> 
        </div>
      </div>
    </div>
    <!-- end: PAGE CONTENT--></div>
</div>
<!-- End Sent Tab --> 





		<div id="panel_trash" class="tab-pane">
									
									
									
									<div class="row">
									<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-md-12">
							<!-- start: INBOX PANEL -->
							
							<div class="col-md-12">
												<div class="col-md-12">
												
														
												<div class="form-group">
												
												<span class="input-icon input-icon-right">
													<input type="text" name="trash_search" placeholder="Search Messages" id="form-field-17" class="form-control">
													<i class="fa fa-search"></i> </span>
												</div>
												
												</div><!-- End Account Type -->
							
												
												
												
												<div class="clearfix"></div>
								
								
								
								<div class="panel-body messages">
										<ul class="messages-list">
									<? 
									
										while ($row=mysql_fetch_assoc($msgs_trash)) { ?>
									
										<script>
										
										function showTrashMessage<?=$row['id']?>() {
										
											document.getElementById('trash-message-time').innerHTML = '<?=$row['prettyDate']?>';
											document.getElementById('trash-message-from').innerHTML = '<?=str_ireplace("'","\'",$row['fromName'])?>';
											document.getElementById('trash-message-to').innerHTML = 'To: <?=str_ireplace("'","\'",$row['toName'])?>';
											document.getElementById('trash-message-subject').innerHTML = 'RFP <?=$row['id']?>:  <?=str_ireplace("'","\'",$row['rfp_title'])?>';
											document.getElementById('trash-message-content').innerHTML = '<p> <?=str_ireplace("'","\'",$row['body'])?></p>';
											
										}
										
										</script>
										
										<? if ($firstTrash=="") { $firstTrash=$row['id']; } ?>
										
										<li class="messages-item" onClick="showTrashMessage<?=$row['id']?>();">
									
											<span title="Mark as starred" class="messages-item-star"><i class="fa fa-star"></i></span>
										<?=showPhoto($row['from_id']);?>
												<span class="messages-item-from"><?=$row['fromName']?></span>
											<div class="messages-item-time">
												<span class="text"><?=$row['prettyDate']?></span>
											</div>
											<span class="messages-item-subject">RFP <?=$row['id']?>:  <?=$row['rfp_title']?></span>
											<span class="messages-item-preview"><?=substr($row['body'],0,50)?></span>
										</li>
										<? } ?>
																		</ul>
									<div class="messages-content">
										<div class="message-header">
											<div class="message-time" id="trash-message-time">
											
											</div>
											<div class="message-from" id="trash-message-from">
											
											</div>
											<div class="message-to" id="trash-message-to">
												
											</div>
											<div class="message-subject" id="trash-message-subject">
											
											</div>
											<div class="message-actions">
												<a title="Move to trash" href="#"><i class="fa fa-trash-o"></i></a>
												<a title="Reply" href="#"><i class="fa fa-reply"></i></a>
												<a title="Reply to all" href="#"><i class="fa fa-reply-all"></i></a>
												<a title="Forward" href="#"><i class="fa fa-long-arrow-right"></i></a>
											</div>
										</div>
										<div class="message-content" id="trash-message-content">
										
											<hr>
											
											
											
										</div>
										
									
									</div>
								</div>
							
							<script> showTrashMessage<?=$firstTrash?>(); </script>
							<!-- end: INBOX PANEL -->
							</div>
						</div>
					</div>
					</div>
					<!-- end: PAGE CONTENT--></div>	
									</div><!-- End Engagement Tab -->














								</div>
							</div>
						</div>
					</div>
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->
		</div>
		
		
		<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->
		<div class="footer clearfix">
			<div class="footer-inner">
				2014 &copy; Gateway Software Development. All Rights Reserved.
			</div>
			<div class="footer-items">
				<span class="go-top"><i class="clip-chevron-up"></i></span>
			</div>
		</div>
		<!-- end: FOOTER -->
		
		
		
		<!-- start: BOOTSTRAP EXTENDED MODALS -->
		
		<div id="SignificantEngagement" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Add Significant Engagement</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
					
					<div class="form-group">
					<label class="control-label">Significant Engagement</label>
					<input type="text"  placeholder="" class="form-control" id="=" name="">
					</div>
					
					<div class="form-group">
					<label class="control-label">Project Description</label>
					<textarea maxlength="250" id="form-field-23" class="form-control limited"></textarea>
					</div>
												
					<div class="form-group">
					<label class="control-label">Company/Attorney</label>
					<select multiple="multiple" id="form-field-select-1" class="form-control search-select">
					<option value="">&nbsp;</option>
					<option value="">#####</option>
					<option value="">#####</option>
					</select>
					</div>
					
					<div class="row">	
					<div class="form-group">								
					<label for="form-field-mask-1" class="col-md-12">
					Date of Significant Engagement<small class="text-success">Month/Year</small>
					</label>
					<div class="col-md-6">
											
												<select id="form-field-select-3" class="form-control search-select">
												<option>January</option>
												<option>February</option>
												<option>March</option>
												<option>April</option>
												<option>May</option>
												<option>June</option>
												<option>July</option>
												<option>August</option>
												<option>September</option>
												<option>October</option>
												<option>November</option>
												<option>December</option>
												</select>
											</div>
											
											<div class="col-md-6">
												
												<select id="form-field-select-3" class="form-control search-select">
												<option>2014</option>
												<option>2013</option>
												<option>2012</option>
												<option>2011</option>
												<option>2010</option>
												<option>2009</option>
												<option>2008</option>
												<option>2007</option>
												<option>2006</option>
												<option>2005</option>
												<option>2004</option>
												<option>2003</option>
												<option>2002</option>
												<option>2001</option>
												<option>2000</option>
												<option>1999</option>
												<option>1998</option>
												<option>1997</option>
												<option>1996</option>
												<option>1995</option>
												<option>1994</option>
												<option>1993</option>
												<option>1992</option>
												<option>1991</option>
												<option>1990</option>
												<option>1989</option>
												<option>1988</option>
												<option>1987</option>
												<option>1986</option>
												<option>1985</option>
												<option>1984</option>
												<option>1983</option>
												<option>1982</option>
												<option>1981</option>
												<option>1980</option>
												<option>1979</option>
												<option>1978</option>
												<option>1977</option>
												<option>1976</option>
												<option>1975</option>
												<option>1974</option>
												<option>1973</option>
												<option>1972</option>
												<option>1971</option>
												<option>1970</option>
												<option>1969</option>
												<option>1968</option>
												<option>1967</option>
												<option>1966</option>
												<option>1965</option>
												<option>1964</option>
												<option>1963</option>
												<option>1962</option>
												<option>1961</option>
												<option>1960</option>												
												</select>
													
											</div><!-- End 6 -->
					
										</div>
					</div>
	
				</div>
			</div>
			
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Close
				</button>
				<button type="button" class="btn btn-blue">
					Save changes
				</button>
			</div>
		
		</div>
		
							<script>
										
										function sendMessage() {
												
			
												var xmlhttp;
												if (window.XMLHttpRequest)
												  {// code for IE7+, Firefox, Chrome, Opera, Safari
												  xmlhttp=new XMLHttpRequest();
												  }
												else
												  {// code for IE6, IE5
												  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
												  }
												xmlhttp.onreadystatechange=function()
												  {
												  if (xmlhttp.readyState==4 && xmlhttp.status==200)
												    {
													 alert(xmlhttp.responseText);
												    }
												  }
												xmlhttp.open("GET","/network/functions/ajax-message.php?to_id="+document.getElementById('messageToID').value+"&from_id="+document.getElementById('messageFromID').value+"&related_rfp="+document.getElementById('messageRelatedRFP').value+"&message_type="+document.getElementById('messageType').value+"&body="+document.getElementById('messageBody').value+"&subject="+document.getElementById('messageSubject').value,true);
												xmlhttp.send();
												//alert("/network/functions/ajax-message.php?denyRFP="+document.getElementById('thisRFPid').value);
												document.getElementById('messageSubject').value = "";
												document.getElementById('messageBody').value = "";
												document.getElementById('messageFromID').value = "";
												document.getElementById('messageToID').value = "";
												document.getElementById('messageRelatedRFP').value = "";
												document.getElementById('messageType').value = "";
										
											}
											
										</script>
										


		
		<div id="SendMessage" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Send Message</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
					
					<div class="form-group">
					<label class="control-label">Subject</label>
					<input type="text"  placeholder="" class="form-control" id="messageSubject" name="">
					</div>
					
					<div class="form-group">
					<label class="control-label">Message</label>
					<textarea maxlength=""  class="form-control" id="messageBody" rows="10"></textarea>
					</div>
						
						
					<input type=hidden id="messageFromID">
					<input type=hidden id="messageToID">
					<input type=hidden id="messageRelatedRFP">
					<input type=hidden id="messageType">
					
					
						
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Cancel
				</button>
				<button type="button" data-dismiss="modal" onClick="sendMessage();" class="btn btn-blue">
					Send Message
				</button>
			</div>
		</div>
		
		<div id="RequestEngagement" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Request Engagement</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
					
					<div class="form-group">
					<label class="control-label">Significant Engagement</label>
					<input type="text"  placeholder="" class="form-control" id="=" name="">
					</div>
					
					<div class="form-group">
					<label class="control-label">Project Description</label>
					<textarea maxlength="250" id="form-field-23" class="form-control limited"></textarea>
					</div>
												
					<div class="form-group">
					<label class="control-label">Company/Attorney</label>
					<select multiple="multiple" id="form-field-select-1" class="form-control search-select">
					<option value="">&nbsp;</option>
					<option value="">#####</option>
					<option value="">#####</option>
					</select>
					</div>
					
					<div class="row">	
					<div class="form-group">								
					<label for="form-field-mask-1" class="col-md-12">
					Date of Engagement<small class="text-success">Month/Year</small>
					</label>
					<div class="col-md-6">
											
												<select id="form-field-select-3" class="form-control search-select">
												<option>January</option>
												<option>February</option>
												<option>March</option>
												<option>April</option>
												<option>May</option>
												<option>June</option>
												<option>July</option>
												<option>August</option>
												<option>September</option>
												<option>October</option>
												<option>November</option>
												<option>December</option>
												</select>
											</div>
											
											<div class="col-md-6">
												
												<select id="form-field-select-3" class="form-control search-select">
												<option>2014</option>
												<option>2013</option>
												<option>2012</option>
												<option>2011</option>
												<option>2010</option>
												<option>2009</option>
												<option>2008</option>
												<option>2007</option>
												<option>2006</option>
												<option>2005</option>
												<option>2004</option>
												<option>2003</option>
												<option>2002</option>
												<option>2001</option>
												<option>2000</option>
												<option>1999</option>
												<option>1998</option>
												<option>1997</option>
												<option>1996</option>
												<option>1995</option>
												<option>1994</option>
												<option>1993</option>
												<option>1992</option>
												<option>1991</option>
												<option>1990</option>
												<option>1989</option>
												<option>1988</option>
												<option>1987</option>
												<option>1986</option>
												<option>1985</option>
												<option>1984</option>
												<option>1983</option>
												<option>1982</option>
												<option>1981</option>
												<option>1980</option>
												<option>1979</option>
												<option>1978</option>
												<option>1977</option>
												<option>1976</option>
												<option>1975</option>
												<option>1974</option>
												<option>1973</option>
												<option>1972</option>
												<option>1971</option>
												<option>1970</option>
												<option>1969</option>
												<option>1968</option>
												<option>1967</option>
												<option>1966</option>
												<option>1965</option>
												<option>1964</option>
												<option>1963</option>
												<option>1962</option>
												<option>1961</option>
												<option>1960</option>												
												</select>
													
											</div><!-- End 6 -->
					
										</div>
					</div>
	
				</div>
			</div>
			
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Close
				</button>
				<button type="button" class="btn btn-blue">
					Save changes
				</button>
			</div>
		
		</div>
		
		
		
							<script>
										
										function sendAwardMessage() {
												
			
												var xmlhttp;
												if (window.XMLHttpRequest)
												  {// code for IE7+, Firefox, Chrome, Opera, Safari
												  xmlhttp=new XMLHttpRequest();
												  }
												else
												  {// code for IE6, IE5
												  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
												  }
												xmlhttp.onreadystatechange=function()
												  {
												  if (xmlhttp.readyState==4 && xmlhttp.status==200)
												    {
													 alert(xmlhttp.responseText);
												    }
												  }
												xmlhttp.open("GET","/network/functions/ajax-message.php?to_id="+document.getElementById('awardToID').value+"&from_id="+document.getElementById('awardFromID').value+"&related_rfp="+document.getElementById('awardRelatedRFP').value+"&message_type=rfpaward&body="+document.getElementById('rfp-award-apply').value,true);
												alert("/network/functions/ajax-message.php?to_id="+document.getElementById('awardToID').value+"&from_id="+document.getElementById('awardFromID').value+"&related_rfp="+document.getElementById('awardRelatedRFP').value+"&message_type=rfpaward&body="+document.getElementById('rfp-award-apply').value);
												
												xmlhttp.send();
												//alert("/network/functions/ajax-message.php?denyRFP="+document.getElementById('thisRFPid').value);
												document.getElementById('awardToID').value = "";
												document.getElementById('awardFromID').value = "";
												document.getElementById('awardRelatedRFP').value = "";
												//document.getElementById('rfp-award-reply').value = "";
												
												
										
											}
											
										</script>

		
		 <div id="AwardRFP" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Award RFP</h4>
				
				<p><em>You are awarding the RFP to the following candidate. Please note you should include the next steps in the process, how to contact you.... etc. </em></p>
			</div>
			<div class="modal-body">
				<div class="row">
				
					<div class="col-md-12">
					
					
					<div class="form-group">
					<label class="control-label">Message</label>
					<textarea maxlength="" id="rfp-award-apply" class="form-control" rows="5" placeholder="Include additional information here in regards to the RFP."></textarea>
					</div>
						
					<input type=hidden id="awardToID">
					<input type=hidden id="awardFromID">
					<input type=hidden id="awardRelatedRFP">
				    
						
					
	
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Cancel
				</button>
				<button type="button" data-dismiss="modal" onClick="sendAwardMessage();" class="btn btn-blue">
					Award RFP
				</button>
			</div>
		</div>
		</div>
		
		<? mysql_data_seek($msgs_rfpapply,0);
			 ?>
		

	<? while ($row=mysql_fetch_assoc($msgs_rfpapply)) { ?>
									
									<script>	
										function showRFPMessage<?=$row['id']?>() {
										
											document.getElementById('rfp-message-time').innerHTML = '<?=$row['prettyDate']?>';
											document.getElementById('rfp-message-from').innerHTML = '<?=str_ireplace("'","\'",$row['fromName'])?>';
											document.getElementById('rfp-message-to').innerHTML = 'To: <?=str_ireplace("'","\'",$row['toName'])?>';
											document.getElementById('rfp-message-subject').innerHTML = 'RFP <?=$row['related_rfp']?>:  <?=str_ireplace("'","\'",$row['rfp_title'])?>';
											document.getElementById('rfp-message-content').innerHTML = '<p> <?=str_ireplace("'","\'",$row['body'])?></p>';
											document.getElementById('rfp-message-buttons').style.display = 'block';
											document.getElementById('thisRFPid').value = <?=$row['id']?>;
											document.getElementById('messageSubject').value='RE: RFP <?=$row['related_rfp']?>:  <?=str_ireplace("'","\'",$row['rfp_title'])?>';
											document.getElementById('messageBody').value='';
											
											document.getElementById('messageToID').value='<?=$row['from_id']?>';
											document.getElementById('messageFromID').value='<?=$user->ID?>';
											document.getElementById('messageType').value='rfpapply';
											document.getElementById('messageRelatedRFP').value='<?=$row['related_rfp']?>';
											
											document.getElementById('awardToID').value = <?=$row['to_id']?>;
											document.getElementById('awardFromID').value = <?=$row['from_id']?>;
											document.getElementById('awardRelatedRFP').value = <?=$row['related_rfp']?>;
											//document.getElementById('rfp-award-reply').value = '';
											
											
										}
						
										</script>
						<? } ?>
						
						
			<script> //showRFPMessage<?=$firstRFP?>();
				 showMailMessage<?=$firstMail?>();
				 showRFPMessage<?=$firstRFP?> </script>


						
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="/assets/plugins/respond.min.js"></script>
		<script src="/assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<!--<![endif]-->
			<script src="/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
		<script src="/assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="/assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="/assets/plugins/less/less-1.5.0.min.js"></script>
		<script src="/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="/GLADMIN/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->		<!-- end: MAIN JAVASCRIPTS -->
			<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="/assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="/assets/plugins/autosize/jquery.autosize.min.js"></script>
		<script src="/assets/plugins/select2/select2.min.js"></script>
		<script src="/assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
		<script src="/assets/plugins/jquery-maskmoney/jquery.maskMoney.js"></script>
		<script src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
		<script src="/assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
		<script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="/assets/plugins/bootstrap-colorpicker/js/commits.js"></script>
		<script src="/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script>
		<script src="/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="/assets/plugins/summernote/build/summernote.min.js"></script>
		<script src="/assets/plugins/ckeditor/ckeditor.js"></script>
		<script src="/assets/plugins/ckeditor/adapters/jquery.js"></script>
		<script src="/assets/js/form-elements.js"></script>
		<script src="/assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
		<script src="/assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
		<script src="/assets/js/ui-modals.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>

		<link href="/assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
		<link href="/assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>