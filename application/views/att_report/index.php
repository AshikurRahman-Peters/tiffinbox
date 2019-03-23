 
<div class="page-content">
 	<div class="row-fluid">
		<div class="span12 page-header position-relative">
			<!--PAGE CONTENT BEGINS--> 
				<h1>
					<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
					Attendance
					<small>
						<i class="icon-double-angle-right"></i>
						 
					</small>
				</h1>
		</div><!--/.page-header-->

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
				<!--------------End of Message---------------------------------->
						 <?php
						 	#get all classes:
						 	$classes = $this->db->get_where('classes', array('ClassStatus'=>1))->result();
						 	  
						 ?>
							<div class="row-fluid">
								<form class="form-search" method="POST" action="<?php echo base_url().'att_report/index';?>" />
									 
										<div class="control">
											
											<div class="row-fluid span3">
											<select class="chzn-select add-section" name="classId" id="form-field-select-3" data-placeholder="Choose a Class...">
												<option value="" />
												<?php 
													foreach($classes as $class):
														$cls[$class->Id] = $class->ClassName.' :: '.$class->ClassNumaricName;
														 echo '<option value="'.$class->Id.'" />'.$class->ClassName.' :: '.$class->ClassNumaricName;
													endforeach;
												?> 
											</select>
											</div>

										
										
										<select name="month">
											<option>Choose Month -</option>
											<option value="01">January</option>
											<option value="02">Febuary</option>
											<option value="03">March</option>
											<option value="04">April</option>
											<option value="05">May</option>
											<option value="06">June</option>
											<option value="07">July</option>
											<option value="08">August</option>
											<option value="09">September</option>
											<option value="10">October</option>
											<option value="11">November</option>
											<option value="12">December</option>
										</select>
										<select name="year">
											<option>Choose Year -</option>
											<option value="2020">2020</option>
											<option value="2019">2019</option>
											<option value="2018">2018</option>
											<option value="2017">2017</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
											<option value="2012">2012</option>
											<option value="2011">2011</option>
											<option value="2010">2010</option>
											<option value="2009">2009</option>
											<option value="2008">2008</option>
											<option value="2007">2007</option>
											<option value="2006">2006</option>
											<option value="2005">2005</option>
											<option value="2004">2004</option>
											<option value="2003">2003</option>
											<option value="2002">2002</option>
											<option value="2001">2001</option>
											<option value="2000">2000</option>
									
										</select>

											<div id="report" class="span"></div>	
											<button  type="submit" class="btn-primary btn ">
												Attendence 
											</button>

											
										    <button onclick="printDiv('printMe')" class="btn-success btn"/>
										        Print
										    </button>
											
									</div> 
										
								 
								</form> 
						
						

					<div>
						<h2>student attecdence</h2>
					</div>
					<table id="printMe" class="table table-bordered">
									      <thead>

									        <tr>
									          <th>students Name:</th>
									          <th>1</th>
									          <th>2</th>
									          <th>3</th>
									          <th>4</th>
									          <th>5</th>
									          <th>6</th>
									          <th>7</th>
									          <th>8</th>
									          <th>9</th>
									          <th>10</th>
									          <th>11</th>
									          <th>12</th>
									          <th>13</th>
									          <th>14</th>
									          <th>15</th>
									          <th>16</th>
									          <th>17</th>
									          <th>18</th>
									          <th>19</th>
									          <th>20</th>
									          <th>21</th>
									          <th>22</th>
									          <th>23</th>
									          <th>24</th>
									          <th>25</th>
									          <th>26</th>
									          <th>27</th>
									          <th>28</th>
									          <th>29</th>
									          <th>30</th>
									          <th>31</th>
									        </tr>    
									    </thead>
									    <tbody>
									      
									        		
										 
											<?php
											foreach($student->result() as $items){
												// echo form_hidden('roll['.$items->StdName.']');
												echo '<tr><td>'.$items->StdName.'</td><td>'.$items->StdStatus.'</td><td></td>
												</tr>';
											}?>
										          
										 
										</tbody>
				</table>	
			
		</div><!--/.span-->
	</div><!--/.row-fluid-->
</div><!--/.page-content-->


<!-- <?php 
	echo $this->db->last_query();
	echo "<br>";
?> -->

<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.js"></script>
