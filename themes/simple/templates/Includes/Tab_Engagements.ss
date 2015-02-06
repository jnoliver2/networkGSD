 <div id="panel_engagement" class="tab-pane"> 
    <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="search-classic col-md-12">
        <% loop Engagements %>
        <div class="search-result col-md-12" style="padding-left:0px;">
          <div class="row">
            <div class="search-post-image col-xs-4 col-sm-4 col-md-3">
              <a href='/network/?page=profile&profile_id=$profile'>
											  <img class="messages-item-avatar" src="{$BaseHref}assets/Uploads/user.png" border=0>
											  </a>
            </div>
            <div class="search-post-content col-xs-8 col-sm-8 col-md-9"> <i class="fa fa-archive filter-icon filter-green"></i>
              <h3><a href="/network/?page=profile&profile_id=<?=$row['related_id']?>">
                $from.FirstName
                $from.Surname
                </a></h3>
              <br/>
              <div class="search-post-info">
                <div class=""> <i class="fa fa-align-justify"></i> <strong>Significant Engagement:</strong>
                  $Name
                </div>
                <br/>
                <div class=""> <i class="fa fa-home"></i> <strong>Company/Attorney:</strong>
                  $Company_Attorney
                </div>
                <br/>
                <div class=""> <i class="fa fa-calendar"></i> <strong>Date of Engagement:</strong>
                  $Month
                  ,
                  $Year
                </div>
              </div>
              <p><strong>PROJECT DESCRIPTION:</strong>
                $Description
              </p>
              <div class="col-md-6">
                 <form action="{$BaseHref}pages/engagement_approve" method="post" >
      			         <input type=hidden name="connection_id" value="$ID">
      			        <button class="btn btn-green" type="submit" name="accept" ><i class="fa fa-check-square"></i> ACCEPT</button>
      			        <button class="btn btn-red" type="submit" name="deny"><i class="fa fa-minus-square"></i> DENY</button>
      			      </form>
              </div>
              <div class="col-md-6" style="text-align:right;"> </div>
            </div>
            <!-- End Content --> 
            
          </div>
          <div class="clearfix"></div>
          <br>
          </div>
          <% end_loop %>
        
      </div>
    </div>
  </div>
</div>
<!-- End Content -->
<!-- End Engagement Tab --> 