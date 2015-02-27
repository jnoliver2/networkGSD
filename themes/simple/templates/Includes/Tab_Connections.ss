<div id="panel_connection" class="tab-pane"> 
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="search-classic col-md-12">
        
        <% loop Connections %>
			<div class="search-result col-md-12" style="padding-left:0px;">
			  <div class="row">
			    <div class="search-post-image col-xs-4 col-sm-4 col-md-3">
      				<a href="{$BaseHref}pages/profile_page/{$connection_from.ID}/2" >
								  <% with  $connection_from %>
                        		<% include Avatar250 %>
                        	<% end_with %>
      					</a> 
			    </div>
			    <div class="search-post-content col-xs-8 col-sm-8 col-md-9"> <i class="fa fa-archive filter-icon filter-green"></i>
			      <h3><a href="{$BaseHref}pages/profile_page/{$connection_from.ID}/2">
			        $connection_from.FirstName
			        $connection_from.Surname
			        </a></h3>
			      <div class="search-post-info" style="display:block">
			        <% if $connection_from.Address.State.Full %>
			        <div class=""> <i class="fa fa-suitcase"></i>
			          $connection_from.Address.State.Full
			        </div>
			        <br/>
			        <% end_if %>
			        
			        <div class=""> <i class="fa fa-globe"></i>
			          <% loop $connection_from.bar_states %>
			            <% if not First %>
			            &bullet;
			            <% end_if %>
			            $State.Full
			          <% end_loop %>
			          
			         </div>
			         <br/>
			        <div class=""><i class="fa fa-legal"></i>
			           
			            <% loop connection_from.practice_areas %>
			               <% if not First %>
      			            &bullet;
      			            <% end_if %> 
			               $PracticeArea_List.Name
			            <% end_loop %>
			          			        </div>
			          			        
			          			        <br />
			      </div>
			      <p>
			       $connection_from.bio_preview
			      </p>
			      <div class="col-md-6">
			       <form action="{$BaseHref}pages/connection_approve" method="post" >
			         <input type=hidden name="connection_id" value="$ID">
			        <button class="btn btn-green" type="submit" name="accept" ><i class="fa fa-check-square"></i> ACCEPT</button>
			        <button class="btn btn-red" type="submit" name="deny"><i class="fa fa-minus-square"></i> DENY</button>
			      </form>
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
      
        <% end_loop %>
      </div>
    </div>
  </div>

</div>

<!-- End Connection Tab --> 
<script>

</script>