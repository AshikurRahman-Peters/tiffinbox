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
				 
				
				
				
				
				<!--ASHIK------>
				 
						<h1>
							<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
							All Notice
							<small>
								<i class="icon-double-angle-right"></i>
								Static &amp; Dynamic Tables
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
									Results for "Latest Registered Classes"
								</div>

								<table id="sample-table-2" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											 
											<th>Student Name</th>
											<th>Name</th>
											<th>Address</th>
											<th>Contact no.</th>
											<th></th>
											 
										</tr>
									</thead>
										<tbody>
									<?php 
										 
										foreach(@$parents->result() as $row):
									?>		
								
										<tr>
											<td><?php echo @$row->StdName;?></td> 
											<td>
												<?php echo @$row->StdFatherName?><br/>
												<?php echo @$row->StdMotherName?>
											</td>
											<td>
												<?php echo @$row->StdPresentAddress?>
											</td> 
											 <td><?php echo @$row->StdContactNo;?></td> 
											 
											 
										 <td>
										 	
													<a class="green btn btn-sm btn-info" href="<?php echo base_url();?>students/parents_auth/<?php echo $row->Id; ?>">
														<i class="icon-pencil bigger-130"></i> Add Login info
													</a>
										 </td>
									 

											 
										</tr>
									<?php endforeach; ?>	
								</tbody>
								</table>
							</div>
 
						</div><!--/.span-->
					</div><!--/.row-fluid-->
				 
				
				
				<!--ASHIK------>
			<!--PAGE CONTENT ENDS-->
		</div><!--/.span-->
	</div><!--/.row-fluid-->
</div><!--/.page-content-->
