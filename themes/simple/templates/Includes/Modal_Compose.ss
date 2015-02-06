<div id="SendMessage" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	 <div class="modal-dialog">
    <div class="modal-content">
      <form action="{$BaseHref}pages/sendmessage" method="post" >
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
					<input type="text"  placeholder="" class="form-control" id="messageSubject" name="subject">
					</div>
					
					<div class="form-group">
					<label class="control-label">Message</label>
					<textarea maxlength="" name="message_body"  class="form-control" id="messageBody" rows="10"></textarea>
					</div>
			
					
					<input type=hidden id="message_id" name="message_id">
					<input type=hidden id="company_id" name="company_id">
					<input type=hidden id="rfpid" name="rfpid">
					
					
					
					
						
				</div>
			</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Cancel
				</button>
				<button type="submit"  class="btn btn-blue">
					Send Message
				</button>
			</div>
			</form>
		</div>
		</div>
		</div>
