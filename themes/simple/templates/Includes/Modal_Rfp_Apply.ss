<div id="ApplyForRFP" class="modal fade" tabindex="-1" data-width="760" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">					
		<div class="modal-dialog">
    <div class="modal-content">
      <form action="{$BaseHref}pages/rfp_apply" method="post">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Apply for RFP</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				
					
					<div class="col-md-12">
					
					<div class="form-group">
					<label class="control-label">From previous experience, what makes your company the best candidate for this request?</label>
					<textarea name="experience" maxlength="" id="question1" class="form-control" rows="5"></textarea>
					</div>
					
					<div class="form-group">
					<label class="control-label">Please give us some case examples that relate directly to this request.</label>
					<textarea name="examples" maxlength="" id="question2" class="form-control" rows="5"></textarea>
					</div>
						
						
					
	
				</div>
			</div>
			<div class="modal-footer">
				<input name="rfp_id" type=hidden id="rfp_id" value="">
				<input name="to_id" type=hidden id="to_id" value="">
			
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Cancel
				</button>
				<button type="submit" class="btn btn-blue">
					Submit Application
				</button>
			</div>
		</div></div> 
		</form>
</div></div> 