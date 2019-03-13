<div class="page-content">
	<div class="row-fluid">
		<div class="span12 page-header position-relative">
			<!--PAGE CONTENT BEGINS-->
				<a href="<?php echo base_url();?>classes/index">
					<button class="btn btn-primary pull-right">
											<i class="icon-cogs bigger-125"></i>
											Manage Classes
					</button>
				</a>	
					 
						<h1>
						<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
							Create New Class
							<small>
								<i class="icon-double-angle-right"></i>
								Please Provide the following informations: 
							</small>
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
								<label class="control-label" for="class_name">Class Name</label>
							<?php echo form_open(base_url().'classes/insert','class="form-horizontal"'); 
								
								$ClassName = array(
									'name'			=> 'ClassName',
									'id'			=>'ClassName',
									'placeholder'	=> 'Enter class name',
									'value'			=> @$this->input->post('ClassName')
								);
								
								echo form_input($ClassName);
								echo '<br/>'.form_error('ClassName', '&nbsp;&nbsp;<span class="text-warning orange"><i class="icon-warning-sign"></i>&nbsp;', '</span>');
							
								$ClassNumaricName = array(
									'name'		=>'ClassNumaricName',
									'id'		=>'ClassNumaricName',
									'placeholder'	=> 'Enter class numaric value',
									'value'			=> @$this->input->post('ClassNumaricName')
								);
								echo '<br/>'.form_label('Class Numeric Value');
								echo form_input($ClassNumaricName);
								echo '<br/>'.form_error('ClassNumaricName', '&nbsp;&nbsp;<span class="text-warning orange"><i class="icon-warning-sign"></i>&nbsp;', '</span>');
								
							?>
							
							 </div>
							 
							<div class="control-group">
									<label class="control-label" for="form-field-tags">
									<input name="haveAnySection" id="haveAnySection" value="1" class="ace-checkbox-2" type="checkbox">
									<span class="lbl green">&nbsp;&nbsp;Have any section?</span> 
									</label>

									<div class="controls hide" id="section">
										<input type="text" name="SectionName" id="form-field-tags" value=" 
										<?php echo @$this->input->post('SectionName'); ?>" placeholder="Enter Sections ..." /><br/>
										<span class="help-inline blue">* Add all Sections by coma separation!</span>
										<?php
										echo '<br/>'.form_error('SectionName', '&nbsp;&nbsp;<span class="text-warning orange"><i class="icon-warning-sign"></i>&nbsp;', '</span>');
										?>
									</div>
								</div>
								
								<div class="control-group" id="teacher">
									<label class="control-label" for="form-field-tags">
									<?php echo form_label('Class Teacher'); ?>
									</label>

									<div class="controls">
										<?php
											$teachers[''] ='-------class teacher---------';
											foreach($teacher as $item):
												$teachers[$item->Id]=$item->EmployeeName; 
											endforeach;
											
											echo form_dropdown('ClassTeacherId',$teachers, @$this->input->post('ClassTeacherId'));
											echo '<br/>'.form_error('ClassTeacherId', '&nbsp;&nbsp;<span class="text-warning orange"><i class="icon-warning-sign"></i>&nbsp;', '</span>');
											
										?>
									</div>
								</div>
							<div class="control-group">
									<label class="control-label" for="form-field-tags1">Subject's of this Class:</label>

									<div class="controls">
										<input type="text" name="subjects" id="form-field-tags1" value="<?php echo @$this->input->post('subjects'); ?>" placeholder="Enter Subjects ..." /><br/>
										<span class="help-inline blue">* Add all subjects by coma separation!</span>
										<?php
										echo '<br/>'.form_error('subjects', '&nbsp;&nbsp;<span class="text-warning orange"><i class="icon-warning-sign"></i>&nbsp;', '</span>');
										?>
									</div>
								</div>
							 
							 <div class="control-group">
								   <label class="control-label" for="status">Class Status</label>
								 
								 <?php 
											
										 
										echo form_dropdown('ClassStatus',array('1'=>'active','0'=>'inactive'), @$this->input->post('ClassStatus') ? @$this->input->post('ClassStatus') : 1 );
										echo '<br/>'.form_error('ClassStatus', '&nbsp;&nbsp;<span class="text-warning orange"><i class="icon-warning-sign"></i>&nbsp;', '</span>');
								 ?>
							</div> 
						</div><!--/.span-->
					</div><!--/.row-fluid-->
				
					
					 
							<button class="btn btn-info" type="submit">
								<i class="icon-ok bigger-110"></i>
								Add this class
							</button>

							&nbsp; &nbsp; &nbsp;
							<button class="btn" type="reset">
								<i class="icon-undo bigger-110"></i>
								Reset
							</button>
						 	<input type="hidden" name="SectionName" id="tag">	
							<input type="hidden" name="subjects" id="tag1">	
							<?php echo form_close(); ?>
				
			<!--PAGE CONTENT ENDS-->
		</div><!--/.span-->
	</div><!--/.row-fluid-->
</div><!--/.page-content-->
<script type="text/javascript">
$( document ).ready(function() {
  
$('#haveAnySection').click(function() {
    if($("#haveAnySection").is(':checked')){
    	$("#section").removeClass('hide');   
	    $("#teacher").addClass('hide');
    }
	       
	else{
		$("#section").addClass('hide');
	     $("#teacher").removeClass('hide');
	}
	     
	});
});


</script>