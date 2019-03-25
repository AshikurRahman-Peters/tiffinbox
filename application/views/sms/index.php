<script type="text/javascript">
$( document ).ready(function() {
	$(".smstype").click(function()
	{ 
		if($(this).val()==1){
			 
			$.ajax({
		  method: "POST",
		  url: "<?php echo base_url();?>sms/getClasses",
		 
		})
		  .done(function( data ) {
		  	$("#classes").html(data);
		    // console.log( "Data Saved: " + data );
		  });
			//$("#Classdiv").removeClass('hide');
		}else{
			$("#classes").html('');
			//$("#Classdiv").addClass('hide');
			$("#students").html('');
		}
	    
	});
	$( "#classes" ).delegate( "#classNamediv", "change", function(){
		var class_id = this.value;
		//get students of this class:
		$.ajax({
		  method: "POST",
		  url: "<?php echo base_url();?>accounting/getStudentByClassId",
		  data: { class_id: class_id }
		})
		  .done(function( data ) {
		  	$("#students").html(data);
		    //console.log( "Data Saved: " + data );
		  });
	});
	$( "#students" ).delegate( "#checkAll", "change", function() {
	   if($(this).is(':checked')){
	   		$('.std').prop('checked',true);
	   }else{
	   		$('.std').prop('checked',false);
	   }	
	});
});


</script>
<div class="page-content">
	<div class="row-fluid">
		<div class="span12">
			<!--PAGE CONTENT BEGINS-->
				
					<div class="page-header position-relative">
					 <a href="<?php echo base_url();?>">
						<button class="btn btn-primary pull-right">
							<i class="icon-th bigger-125"></i>
							view SMS Balence 
						</button>
					 </a>
						<h1>
							Send SMS
							<small>
								<i class="icon-double-angle-right"></i>
								Please Provide the following informations: 
							</small>
						</h1>
					</div><!--/.page-header-->
					<div class="row-fluid">
						<div class="span12">
							
							<!--------------Message---------------------------------->
						
						 <?php
						 //check any alert message or not
						 	if($this->session->flashdata('status_right')):
							
						 ?>
						 //Print Success Alert Message: 
								<div class="alert alert-success no-margin">
									<button type="button" class="close" data-dismiss="alert">
										<i class="icon-remove red"></i>
									</button>
								
									<i class="icon-ok bigger-120 blue"></i>
									<?php echo $this->session->flashdata('status_right'); ?>
								</div>
						<?php endif; ?>
						   
						 <?php
						 	//check any alert message or not
						 	if($this->session->flashdata('status_wrong')):
							 //Print Wrong Alert Message:
						 ?>
						 <div class="alert alert-danger no-margin">
							<button type="button" class="close" data-dismiss="alert">
								<i class="icon-remove red"></i>
							</button>
							<i class="icon-warning-sign bigger-120 blue"></i>
							<?php echo $this->session->flashdata('status_wrong'); ?>
						</div>
							<?php endif; ?>	
						<!--------------End of Message---------------------------------->
							<?php echo form_open_multipart(base_url().'accounting/insertpayment','class="form-horizontal"'); ?>
						
							<div class="row-fluid">
								 
								<h1>Receipents:</h1>
									
										<label class="span11">
											<input id="form-field-radio1" name="smstype" class="smstype" value="1" type="checkbox">
											<span class="lbl" for="form-field-radio1"> Students</span>
										</label>
										<label class="span11">
											<input id="form-field-radio1" name="smstype" class="smstype" value="2" type="checkbox">
											<span class="lbl" for="form-field-radio1"> Teachers</span>
										</label>
										<label class="span11">
											<input id="form-field-radio1" name="smstype" class="smstype" value="1" type="checkbox">
											<span class="lbl" for="form-field-radio1"> Parents</span>
										</label>
										<label class="span11">
											<input id="form-field-radio2" name="smstype" class="smstype" value="3" type="checkbox">
											<span class="lbl" for="form-field-radio2"> Others</span>
										</label>

										<label class="span3">
												
													<input id="form-field-radio2" name="smstype" class="smstype"   type="input"></input>
												
											</label>
									
								 
							</div>
						
						 
							<div class="" id="classes"> 
									<?php
									 
									if($this->input->post('classId')){
										echo '<label class="" for="form-field-11">
											Class <span class="red">* </span>:
										</label><div class="" id="Classdiv">';
										
										$classes = $this->db->get_where('classes', array('ClassStatus'=>1));
										$options[] = '---Select Class---';
										 foreach($classes->result() as $class){
										 	$options[$class->Id] = $class->ClassName;
										 }
										 echo form_dropdown('classId', $options,'','id="classNamediv"',$this->input->post('classId'));
										 echo '</div> ';
									}
										 
									?>
								
							</div>

							<div class="" id="employee"> 
									<?php
									 
									if($this->input->post('employeeId')){
										echo '<label class="" for="form-field-11">
											employee <span class="red">* </span>:
										</label><div class="" id="Classdiv">';
										
										$employee = $this->db->get_where('employeeId', array('EmployeeName'=>1));
										$options[] = '---Select employee---';
										 foreach($employee->result() as $name){
										 	$options[$name->Id] = $name->EmployeeName;
										 }
										 echo form_dropdown('employeeId', $options,'','id="classNamediv"',$this->input->post('employeeId'));
										 echo '</div> ';
									}
										 
									?>
								
							</div>
							
							
					

				 		</div>
				 		<div id="employee" class="span6">
						</div>	
						<div id="students" class="span6">
						</div>	 	
					 <?php echo form_close(); ?>
					<div class="row-fluid">	
						<div class="span12">				 		
						 	<textarea id="form-field-radio2" name="smstype" class="smstype" value="3"  type="input">
						 	</textarea>
						</div>
						
						
					</div>

					 		<button class="btn btn-info" type="submit">
								<i class="icon-ok bigger-110"></i>
								Submit
							</button>
					
							&nbsp; &nbsp; &nbsp;
						
							<button class="btn" type="reset">
								<i class="icon-undo bigger-110"></i>
								Reset
							</button>

				
			<!--PAGE CONTENT ENDS-->
		</div><!--/.span-->
	</div><!--/.row-fluid-->
</div><!--/.page-content-->
