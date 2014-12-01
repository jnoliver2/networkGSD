
						
					
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="col-sm-12">
					<div class="page-header">
								<!--<h1>Michael Wendell <small>User Profile</small></h1>-->
							</div>
					<div class="col-md-4">
					
					<div class="space12" style="text-align:center;">
					<img src="<?=$user->image?>" style="max-width: 250px; max-height: 250px; " alt="">
					
										
					</div>	
					</div><!-- End Col 4 / Image Area -->
					
					
					<div class="col-md-8 well well-lg"> 
					<h4 class="zero-text"><?=$user->title?> &bull; <?=$company->company_name?></h4>
					<div class="col-md-6">
                  <p class="member-subtitle">Practice Areas</p>
                  <p class="col-md-12">
<?
foreach ($displayAreas as $thisDisplayArea) {
  echo "$thisDisplayArea <br/>";
}
?>
					</p><!-- End Practice Area -->
                  </div>
                  
					<div class="col-md-6">
					<p class="member-subtitle">Bar Admissions States</p>
					<p class="col-md-12">
<?
foreach ($displaybarstates as $thisState) {
  echo $states[$thisState]."<br />";
}
					//var_dump($displaybarstates); 
?>
					</p><!-- End Bar Admission State --> 
					</div>
                  <div class="col-md-6">
					<p class="member-subtitle">Diversity Certifications</p>
					<p class="col-md-12">
<?php 
foreach ((getCertifications($user->company_id)) as $thisCertification) {
  echo "$thisCertification <br/>";
}					
					//var_dump(getCertifications($user->company_id)) 
?>
					
					</p><!-- End Bar Admission State --> 
					</div>
					
					</div><!-- End Col 8 / Profile Information -->
					
					
					<hr>
					
					<div class="clearfix"></div>
					
					
					
					
					
					
					
					<div class="col-xs-12 col-sm-6 col-md-4">
					<hr>
					
					<div class="col-md-6">
					
					<? $score=getPoints($user->ID);
					?>
					<? if ($score>2500) { ?><img src="/GLADMIN/assets/GLimages/badge-green.jpg"><? } ?>
					<? if ($score>7500) { ?><img src="/GLADMIN/assets/GLimages/badge-red.jpg"><? } ?>
					<? if ($score>15000) { ?><img src="/GLADMIN/assets/GLimages/badge-yellow.jpg"><? } ?>
					<? if ($score>20000) { ?><img src="/GLADMIN/assets/GLimages/badge-blue.jpg"><? } ?>
					</div>
					
					<div class="col-md-6" style="text-align:right;">
					<h2 class="text-zero"><?=$score?></h2>
					</div>	
					
					<div class="clearfix"></div>
														
					<hr>
						
						
					<div class="clearfix"></div>
					<div class="well well-sm profile-info" style="overflow:hidden;">
					
					
					
					<div class="col-sm-12 col-md-4"><strong>MAIN OFFICE:</strong></div>
					<div class="col-sm-12 col-md-8">
					<?=$loc_address['address1']?> <?=$loc_address['address2']?><br>
					<?=$loc_address['city']?>, <?=$loc_address['st']?> <?=$loc_address['zip']?>
					</div>
					
					
					<div class="col-sm-12 col-md-4"><strong>PHONE:</strong></div>
					<div class="col-sm-12 col-md-8">
					<?=$user->phone?>
					</div>
					</div>
					
					
					<hr><div class="clearfix"></div>
					<div class="connection">
					<h4>Connections</h4>
					
						

<?  $con=getConnections('user',$user->ID);
	while ($conrow=mysql_fetch_assoc($con)) { 
		if ($conrow['image'] == "")  { $conrow['image'] = "/network/uploads/user.png"; } else { $conrow['image'] = "/network/uploads/".$conrow['image']; }
		
	?>
	<a href='/network/?page=profile&profile_id=<?=$conrow['ID']?>'><img border=0 alt="<?=$conrow['first_name']?> <?=$conrow['last_name']?>" src="<?=$conrow['image']?>" style="max-width: 50px; max-height: 50px;" class="circle-img info-button popovers" title="" data-content="<?=$conrow['title']?> &bullet; <?=$conrow['company_name']?>" data-placement="left" data-trigger="hover" data-rel="popover" data-original-title="<?=$conrow['first_name']?> <?=$conrow['last_name']?>" ></a>
<? } ?>
					

					
					
					<!--
<img alt="Michael Hall" src="./assets/images/avatar-2.jpg" class="circle-img info-button popovers" title="" data-content="Senior Partner • MediumFour, LLC" data-placement="left" data-trigger="hover" data-rel="popover" data-original-title="Michael W. Hall">
<img alt="Michael Hall" src="./assets/images/avatar-2.jpg" class="circle-img info-button popovers" title="" data-content="Senior Partner • MediumFour, LLC" data-placement="left" data-trigger="hover" data-rel="popover" data-original-title="Michael W. Hall">
<img alt="Michael Hall" src="./assets/images/avatar-2.jpg" class="circle-img info-button popovers" title="" data-content="Senior Partner • MediumFour, LLC" data-placement="left" data-trigger="hover" data-rel="popover" data-original-title="Michael W. Hall">
<img alt="Michael Hall" src="./assets/images/avatar-2.jpg" class="circle-img info-button popovers" title="" data-content="Senior Partner • MediumFour, LLC" data-placement="left" data-trigger="hover" data-rel="popover" data-original-title="Michael W. Hall">
<img alt="Michael Hall" src="./assets/images/avatar-2.jpg" class="circle-img info-button popovers" title="" data-content="Senior Partner • MediumFour, LLC" data-placement="left" data-trigger="hover" data-rel="popover" data-original-title="Michael W. Hall">
<img alt="Michael Hall" src="./assets/images/avatar-2.jpg" class="circle-img info-button popovers" title="" data-content="Senior Partner • MediumFour, LLC" data-placement="left" data-trigger="hover" data-rel="popover" data-original-title="Michael W. Hall">-->
					</div>	
					
						
					
					
					<hr>				
						
						
						
						
					</div><!-- End Left Column -->
					
					<div class="col-xs-12 col-sm-6 col-md-8"> 
					<hr>	
						
										<p class="member-subtitle">Law School</p>
										<p><?=$user->law_school?></p>

										<p class="member-subtitle">Years of Practice</p>
										<p><?=$user->years_of_practice?></p> 



										<p class="member-subtitle">Bio</p>
										<p><?=$user->bio?></p>
						
						
					
						
						
						<hr>
						<div class="clearfix"></div>
						
						<div class="panel-group accordion-custom accordion-teal" id="accordion">
						
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
													<i class="icon-arrow"></i>
													Board Certifications
												</a></h4>
											</div>
											<div id="collapseOne" class="panel-collapse collapse">
												<div class="panel-body">
													
<?
foreach ($showboardcertifications as $thisboardcertifications) {
  echo "<div class='single_award' style='display: block; float: left; width: 49%; height: 40px; overflow: auto; padding-left: 30px;'>".$thisboardcertifications."</div>";
}
?>														   
												</div>
											</div>
										</div>
						
						
						
						
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
													<i class="icon-arrow"></i>
													Clients (Private)
												</a></h4>
											</div>
											<div id="collapseFour" class="panel-collapse collapse">
												<div class="panel-body">
													<div class="col-md-6">
<?
foreach ($showprivateclients as $thisclient) {
  echo "<div class='single_award' style='display: block; float: left; width: 49%; height: 40px; overflow: auto; padding-left: 30px;'>".$thisclient."</div>";
}
?>
												</div>
													   
												</div>
											</div>
										</div>
										
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
													<i class="icon-arrow"></i>
													Clients (Government)
												</a></h4>
											</div>
											<div id="collapseTwo" class="panel-collapse collapse">
												<div class="panel-body">
													<div class="col-md-6">
<?
foreach ($showgovclients as $thisclient) {
  echo "<div class='single_award' style='display: block; float: left; width: 49%; height: 40px; overflow: auto; padding-left: 30px;'>".$thisclient."</div>";
}
?>
												</div>		   
												</div>
											</div>
										</div>
										
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
													<i class="icon-arrow"></i>
													Significant Engagements
												</a></h4>
											</div>
											<div id="collapseThree" class="panel-collapse collapse">
												<div class="panel-body">
<ul><?
while ($row=mysql_fetch_assoc($engagements)) {
  echo "<il><strong>".$row['engagement_name']."</strong><br />".$row['description']."<br/>"."<strong>Company/Attorney:</strong>".$row['company_attorney']."<br/><strong>Dates:</strong>".$row['month'].", ".$row['year']."</il><hr/>";
}
?></ul>
												</div>
											</div>
										</div>
										
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
													<i class="icon-arrow"></i>
													Professional Associations
												</a></h4>
											</div>
											<div id="collapse5" class="panel-collapse collapse">
												<div class="panel-body">
<?
foreach ($showprofassociations as $thisassociation) {
  echo "<div class='single_award' style='display: block; float: left; width: 49%; min-height: 50px; overflow: auto; padding-left: 30px;'>".$thisassociation."</div>";
}
?>
												</div>
											</div>
										</div>
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6">
													<i class="icon-arrow"></i>
													Government Level of Clearance 
												</a></h4>
											</div>
											<div id="collapse6" class="panel-collapse collapse">
												<div class="panel-body">
												<p><strong><?=$user->governmentclearance?></strong></p>
												</div>
											</div>
										</div>
										
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse7">
													<i class="icon-arrow"></i>
													Awards & Honors
												</a></h4>
											</div>
											<div id="collapse7" class="panel-collapse collapse">
												<div class="panel-body">

<?
while ($row=mysql_fetch_assoc($showawards)) {
  echo "<div class='single_award' style='display: block; float: left; width: 49%; height: 60px; overflow: auto; padding-left: 30px;'>".$row['award_name']." <br /> <strong> Date:</strong> ".$row['award_year']."</div>";

}
?>   
											</div>
											</div>
										</div>
										
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse8">
													<i class="icon-arrow"></i>
													Speaking Engagements
												</a></h4>
											</div>
											<div id="collapse8" class="panel-collapse collapse">
												<div class="panel-body">
<?
while ($row=mysql_fetch_assoc($speaking)) {
echo "<div class='single_award' style='display: block; float: left; width: 49%; height: 80px; overflow: auto; padding-left: 30px;'><strong>".$row['name']."</strong><br /><strong>Location:</strong> ".$row['location']."<br />"."<strong>Date:</strong> ".$row['date']."</div>";
}
?> 
												</div>
											</div>
										</div>
										
										
												<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse9">
													<i class="icon-arrow"></i>
													Publications & Press
												</a></h4>
											</div>
											<div id="collapse9" class="panel-collapse collapse">
												<div class="panel-body">


<ul><?
while ($row=mysql_fetch_assoc($press)) {
  echo "<il><strong>".$row['title']."</strong><br />".$row['publication']."<br/>"."<strong>Description:</strong> ".$row['description']."<br/><strong>Date of Publication:</strong> ".$row['date']."</il><hr/>";
}
?></ul>

												</div>
											</div>
										</div>
										
										
											<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse10">
													<i class="icon-arrow"></i>
													Languages
												</a></h4>
											</div>
											<div id="collapse10" class="panel-collapse collapse">
												<div class="panel-body">

<?
while ($row=mysql_fetch_assoc($showanguages)) {
  echo "<div class='single_language' style='display: block; float: left; width: 49%; padding: 20px; overflow: auto; padding-left: 30px;'>".$row['language']." </div>";	
}
?>

												</div>
											</div>
										</div>
										
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse11">
													<i class="icon-arrow"></i>
													Web Site
												</a></h4>
											</div>
											<div id="collapse11" class="panel-collapse collapse">
												<div class="panel-body">
												<p><strong><?=$user->website?></strong></p>
												</div>
											</div>
										</div>
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse12">
													<i class="icon-arrow"></i>
													Ability to Work Onsite
												</a></h4>
											</div>
											<div id="collapse12" class="panel-collapse collapse">
												<div class="panel-body">
												<p><strong><?=$user->workonsite?></strong></p>
												</div>
											</div>
										</div>
										
										
									</div> </div></div>
									
						