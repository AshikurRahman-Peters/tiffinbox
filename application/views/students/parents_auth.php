 <script>
function confirmdelete(){
	var conf = confirm("Are you sure to delete this Notice?");
	 
	if(conf==true){
		 
		
	}else{
		event.preventDefault();
	}
	
}

</script>

<div class="page-content">
	<div class="row-fluid">
		<div class="span12 page-header position-relative">
			<!--PAGE CONTENT BEGINS--> 
				 
						<h1>
							<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
							Parents Username and Password Settings
							<small>
								<i class="icon-double-angle-right"></i>
								 Set Parents username and password
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->
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
						<!--------------End of Message---------------------------------->
							<div class="row-fluid">
								 
								<div class="table-header">
									Sutdent information details
								</div>

								 <?php foreach($parents->result() as $row):
								 	$Sid = $row->Id;
								 	echo "Student Name: ". $row->StdName.'<br/>';
								 	echo "Parents Name: ". $row->StdFatherName.'<br/>'.$row->StdMotherName.'<br/>';
								 	echo "Address Name: ". $row->StdPresentAddress.'<br/>';
								 	echo "Contact Number: ". $row->StdContactNo.'<hr/>';	
								 	?>
								 	<form action="<?php echo base_url().'students/parents_auth/'.$Sid; ?>" method="POST">
								 		<label>Parents User Name</label>
								 		<input type="text" name="parents_username" value="<?php echo @$row->parents_username ? $row->parents_username : ''; ?>">
								 			<label>Parents Password</label>
								 		<input type="password" name="parents_password" value="<?php echo @$row->parents_password ? $row->parents_password : ''; ?>"><br/>
								 		<input type="submit" value="Save" class="btn btn-sm btn-success" />
								 	</form>
								<?php endforeach; ?>


								 
								 	
							</div>
 
						</div><!--/.span-->
					</div><!--/.row-fluid-->
				 
				
				
				<!--ASHIK------>
			<!--PAGE CONTENT ENDS-->
		</div><!--/.span-->
	</div><!--/.row-fluid-->
</div><!--/.page-content-->
