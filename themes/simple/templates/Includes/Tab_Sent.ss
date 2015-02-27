<div id="panel_sent" class="tab-pane">
  <div class="row"> 
    <!-- start: PAGE CONTENT -->
    <div class="row">
      <div class="col-md-12"> 
        <!-- start: INBOX PANEL -->
          <form method="post" action="/network/?page=messages&tab=sent">
        
        <div class="col-md-12">
          <div class="col-sm-8 col-md-10">
            <div class="form-group"> <span class="input-icon input-icon-right">
              <input type="text" placeholder="Search Messages" name="sent_search"  id="form-field-17" class="form-control">
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
             
             <% loop Sent %>
              <li class="messages-item" onClick="showMailMessage('s{$ID}')"> <span title="Mark as starred" class="messages-item-star"><i class="fa fa-star"></i></span>
                <a href={$BaseHref}pages/profile_page/{$sender.ID}/2 >
											  <% with sender %>
                              		<% include Avatar50 %>
                              	<% end_with %>
											  </a>
                <span class="messages-item-from">
                $sender.FirstName $Sender.Surname
                </span>
                <div class="messages-item-time"> <span class="text">
                  $Date_Sent.Date
                  </span> </div>
                <span class="messages-item-subject">&nbsp;
                 $Subject
                </span> <span class="messages-item-preview">
                  $preview
                </span> </li>
        
              <% end_loop %>
            </ul>
            
            <% loop Sent %>
										<div class="messages-content" id="s$ID" 
										  <% if First %>
      									style="display:block;">
      									<% else %>
      									style="display:none;">
      							 <% end_if%>
      							 
										<div class="message-header">
                <input type=hidden name id="sent-message-id">
                <div class="message-time" id="sent-message-time">$Created.Date </div>
                <div class="message-from" id="sent-message-from">$sender.FirstName $sender.Surname</div>
                <div class="message-to" id="sent-message-to">To: $receiver.FirstName $sender.Surname </div>
                <div class="message-subject" id="sent-message-subject">$Subject </div>
                <div class="message-actions"> <a title="Move to trash" href="javascript:deleteMail();"><i class="fa fa-trash-o"></i></a>
                                <a title="Reply" href="#SendMessage" onclick="getElementById('message_id').value=$ID" data-toggle="modal"><i class="fa fa-reply"></i></a> 
                  
                  <!--<a title="Forward" href="#"><i class="fa fa-long-arrow-right"></i></a>--> 
                </div>
              </div>
              <div class="message-content" id="sent-message-content">
                <p> $Body </p>
                <hr>
              </div>
            </div>
            <% end_loop %>
          </div>
       
          <!-- end: INBOX PANEL --> 
        </div>
      </div>
    </div>
    <!-- end: PAGE CONTENT--></div>
</div>
<!-- End Sent Tab --> 
