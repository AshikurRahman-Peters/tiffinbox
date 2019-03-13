<div class="page-content">
	<div class="row-fluid">
		<div class="span12 page-header position-relative">
			<!--PAGE CONTENT BEGINS-->
						<h1>
						<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
							Social Links Configuation
							 
						</h1>
					 </div>
					<div class="row-fluid">
						<div class="span12">
								<!--------------Message---------------------------------->
								<!--check any alert message or not -->
								 <?php
								 	if($this->session->flashdata('status_right')):
								 ?>
								 <!--Print Success Alert Message: -->
										<div class="alert alert-success no-margin">
											<button type="button" class="close" data-dismiss="alert">
												<i class="icon-remove red"></i>
											</button>
										
											<i class="icon-ok bigger-120 blue"></i>
											<?php echo $this->session->flashdata('status_right'); ?>
										</div>
								<?php endif; ?>
								<!--check any alert message or not -->
								 <?php
								 	if($this->session->flashdata('status_wrong')):
									
								 ?>
								 <!--Print Wrong Alert Message: -->		
										<div class="alert span12 alert-danger no-margin">
											<button type="button" class="close" data-dismiss="alert">
												<i class="icon-remove red"></i>
											</button>
										
											<div class="span1"><i class="icon-warning-sign icon-2x red"></i></div>
											<div class="span6"><?php echo $this->session->flashdata('status_wrong'); ?></div>
										</div>
									<?php endif; ?>	
								<!--------------Message---------------------------------->
									<div class="control-group">
										 
									<?php echo form_open(base_url().'website/updatesociallink','class="form-horizontal"'); 
										foreach($social->result() as $row):
									?>
							 		<div class="control-group">
								 		<label class="control-label" for="form-field-mask-1">
												<i class="icon-facebook-sign icon-2x blue"></i> 
											</label>
										 <div class="controls">
										 	 <?php
										 	 	$facebook = array(
													'name'			=> 'facebook',
													'id'			=>'facebook',
													'value'			=> ($this->input->post('facebook')) ? $this->input->post('facebook') : $row->facebook,
													'placeholder'	=> 'Enter facebook url'
												);
												
												echo form_input($facebook);
												echo form_error('facebook');
											 	echo form_hidden('id', $row->Id);
										
										 	 ?>
										</div> 
									</div>	
							 		<div class="control-group">
								 		<label class="control-label" for="form-field-mask-1">
												<i class="icon-twitter-sign icon-2x blue"></i> 
											</label>
										 <div class="controls">
										 	 <?php
										 	 	$twitter = array(
													'name'			=> 'twitter',
													'id'			=>'twitter',
													'value'			=> ($this->input->post('twitter')) ? $this->input->post('twitter') : $row->twitter,
													'placeholder'	=> 'Enter twitter url'
												);
												
												echo form_input($twitter);
												echo form_error('twitter');
										 	 ?>
										</div> 
									</div>
									<div class="control-group">
								 		<label class="control-label" for="form-field-mask-1">
												<i class="icon-linkedin-sign icon-2x blue"></i> 
											</label>
										 <div class="controls">
										 	 <?php
										 	 	$linkedin = array(
													'name'			=> 'linkedin',
													'id'			=>'linkedin',
													'value'			=> ($this->input->post('linkedin')) ? $this->input->post('linkedin') : $row->linkedin,
													'placeholder'	=> 'Enter linkedin url'
												);
												
												echo form_input($linkedin);
												echo form_error('linkedin');
										 	 ?>
										</div> 
									</div>	
									<div class="control-group">
								 		<label class="control-label" for="form-field-mask-1">
												<i class="icon-google-plus-sign icon-2x blue"></i> 
											</label>
										 <div class="controls">
										 	 <?php
										 	 	$gplus = array(
													'name'			=> 'gplus',
													'id'			=>'gplus',
													'value'			=> ($this->input->post('gplus')) ? $this->input->post('gplus') : $row->gplus,
													'placeholder'	=> 'Enter google-plus url'
												);
												
												echo form_input($gplus);
												echo form_error('gplus');
											endforeach;
										 	 ?>
										</div> 
									</div>		
									<div class="controls span4">
									<button class="btn btn-info pull-right " type="submit">
										update
									</button>	
									</div>				
							</div>
							 
						</div><!--/.span-->
					</div><!--/.row-fluid-->
					

							<?php echo form_close(); ?>
				
			<!--PAGE CONTENT ENDS-->
		</div><!--/.span-->
	</div><!--/.row-fluid-->
</div><!--/.page-content-->
