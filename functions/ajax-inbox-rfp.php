<?
session_start();

require_once("database.php");

if ($_GET['kw']!="") {
		$rfpSearchWhere = " and (concat(user_from.first_name,' ',user_from.last_name) like '%".$_GET['kw']."%' or body like '%".$_GET['kw']."%' or subject like '%".$_GET['kw']."%')  ";
	}
	
if ($_GET['posted_rfp']!="") {
		$rfpSearchWhere .= " and rfp.ID = '".$_GET['posted_rfp']."'";
}
	
if ($_GET['applied_rfp']!="") {
		$rfpSearchWhere .= " and rfp.ID = '".$_GET['applied_rfp']."'";
}



$msgs_rfpapply = mysql_query("select messages.*, rfp.rfp_title , concat(user_from.first_name,' ',user_from.last_name) as fromName,  concat(user_to.first_name,' ',user_to.last_name) as toName, date_format(date_sent, '%m/%d/%y') as prettyDate
								from messages join rfp on rfp.ID = messages.related_rfp 
							     join user_profile as user_from on user_from.ID = messages.from_id 
							     join user_profile as user_to on user_to.ID = messages.to_id
							     
							where to_id = '".$_SESSION['userid']."' and messages.deleted=0 and message_type in ('rfpapply') $rfpSearchWhere order by id desc;
							");
										
							
$rfp_posted = mysql_query("SELECT id, rfp_title FROM `rfp` where user_id = '".$_SESSION['userid']."'  and deleted='0' order by rfp_title");
$rfp_applied = mysql_query("SELECT id, rfp_title from rfp where id in (select distinct related_rfp from messages where message_type = 'rfpapply' and from_id = '".$_SESSION['userid']."' and deleted='0') order by rfp_title");
//echo ("SELECT id, rfp_title from rfp where id in (select distinct related_rfp where message_type = 'rfpapply' and from_id = '".$_SESSION['userid']."') order by rfp_title");
function showPhoto($profile) {
	
	
	$row= mysql_fetch_assoc(mysql_query("select image from user_profile where id = '$profile'"));
	if ($row['image'] == "")  { $row['image'] = "/network/uploads/user.png"; } else { $row['image'] = "/network/uploads/".$row['image']; }
	return "<a href='/network/?page=profile&profile_id=$profile'><img class=\"messages-item-avatar\" src='".$row['image']."' border=0></a>";
}

?>
						
						
						
<div class="row">
						
						
					
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-md-12">
							<!-- start: INBOX PANEL -->
							
						<div class="col-md-12">
												<div class="col-md-5">
												
														<label class="control-label">Search</label>
												<div class="form-group">
												
												<span class="input-icon input-icon-right">
													<input type="text" placeholder="Text Field" id="rfpsearch" class="form-control">
													<i class="fa fa-search"></i> </span>
												</div>
												
												</div><!-- End Account Type -->
							
												<div class="col-md-3">
												<div class="form-group">
														<label class="control-label">Posted RFP</label>
												<select id="posted_rfp" class="form-control">
														<option value="">--All RFPs--</option>
														<? while ($row=mysql_fetch_assoc($rfp_posted)) { ?>
														<option <? if ($_GET['posted_rfp']==$row['id']) { echo "selected "; } ?> value="<?=$row['id']?>"><?=$row['rfp_title']?> (<?=$row['id']?>)</option>
														<? } ?>
												</select>
												</div>
												</div><!-- End Account Type -->
												
												<div class="col-md-3">
												<div class="form-group">
														<label class="control-label">Applied RFP</label>
												<select id="applied_rfp" class="form-control">
														<option value="">--All RFPs--</option>
															<? while ($row=mysql_fetch_assoc($rfp_applied)) { ?>
														<option <? if ($_GET['applied_rfp']==$row['id']) { echo "selected "; } ?>   value="<?=$row['id']?>"><?=$row['rfp_title']?>  (<?=$row['id']?>)</option>
														<? } ?>
												</select>
												</div>
												</div><!-- End Account Type -->
												
												<div class="col-md-1" style="padding-top:25px;"><button onClick="ajaxRFP(document.getElementById('rfpsearch').value,document.getElementById('posted_rfp').options[document.getElementById('posted_rfp').selectedIndex].value,document.getElementById('applied_rfp').options[document.getElementById('applied_rfp').selectedIndex].value);" class="btn btn-green" type="button"><i class="fa fa-search"></i> SEARCH</button></div>
												<div class="clearfix"></div>
								
								
								
								
								
								
								<div class="panel-body messages">
									<ul class="messages-list">
									<? 
									
										while ($row=mysql_fetch_assoc($msgs_rfpapply)) { ?>
									
										
										
										<? if ($firstClient=="") { $firstClient=$row['id']; } 
										 if ($firstRFP=="") { $firstRFP=$row['id']; } ?>
										
										<li class="messages-item" onClick="showRFPMessage<?=$row['id']?>();">
									
											<span title="Mark as starred" class="messages-item-star"><i class="fa fa-star"></i></span>
											<?=showPhoto($row['from_id']);?>
											<span class="messages-item-from"><?=$row['fromName']?></span>
											<div class="messages-item-time">
												<span class="text"><?=$row['prettyDate']?></span>
											</div>
											<span class="messages-item-subject">RFP <?=$row['related_rfp']?>:  <?=$row['rfp_title']?></span>
											<span class="messages-item-preview"><?=substr($row['body'],0,50)?></span>
										</li>
										<? } ?>
																		</ul>
									<div class="messages-content">
										<div class="message-header">
									
											<div class="message-time" id="rfp-message-time">
												
											</div>
											<div class="message-from" id="rfp-message-from">
											
											</div>
											<div class="message-to" id="rfp-message-to">
												
											</div>
											<div class="message-subject" id="rfp-message-subject">
												
											</div>
											<div class="message-actions">
												<a title="Move to trash" href="javascript:denyRFP();"><i class="fa fa-trash-o"></i></a>
												<a title="Reply" href="#SendMessage" data-toggle="modal"><i class="fa fa-reply"></i></a>
												<!--<a title="Forward" href="#"><i class="fa fa-long-arrow-right"></i></a>-->
											</div>
										</div>
										<div class="message-content" id="rfp-message-content">
											<p>
											

											</p>
											<hr>
											
											
											
										</div>
										
										<script>
										
										function denyRFP() {
												
			
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
												xmlhttp.open("GET","/network/functions/ajax-message.php?denyRFP="+document.getElementById('thisRFPid').value,true);
												xmlhttp.send();
												//alert("/network/functions/ajax-message.php?denyRFP="+document.getElementById('thisRFPid').value);
												document.getElementById('rfp-message-content').innerHTML = "RFP Application Archived";
											document.getElementById('rfp-message-buttons').style.display = 'none';	
										
											}
											
										</script>
										
										<div id="rfp-message-buttons" style="display: none; padding-left: 15px;">
												<button class="btn btn-green" type="button" href="#AwardRFP" data-toggle="modal" ><i class="fa fa-trophy"></i> AWARD RFP</button>   <button onClick="denyRFP();" class="btn btn-red" type="button"><i class="fa fa-minus-square"></i> DENY</button> <input type=hidden name="thisRFPid" id="thisRFPid" value="">
											</div>
									</div>
								</div>
								
							
							
													
							<!-- end: INBOX PANEL -->
						</div>
						
							
					</div>
					
					</div>
					<!-- end: PAGE CONTENT-->