<div id="AwardRFP" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
		   <div class="modal-dialog">
        <div class="modal-content">
        <form action="{$BaseHref}pages/rfp_award" method="post" >
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
					<textarea name ="message" maxlength="" id="rfp-award-apply" class="form-control" rows="5" placeholder="Include additional information here in regards to the RFP."></textarea>
					</div>
						
					<input type=hidden id="msg_id" name="message_id" >

				    
						
					
	
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Cancel
				</button>
				<button type="submit"  class="btn btn-blue">
					Award RFP
				</button>
			</div>
		</div>
		</form>
		</div>	
		</div>
		</div>