<div class = "container">
    <div class = "col-md-1"></div>
    <div class = "col-md-10">
    		
            <a href="<?php echo base_url('adminhome/create_student') ?>">Add Student</a>

            <div class = "table-responsive">
    			<table class = "table" style="width:100%; text-align:center; ">
                	<thead style="background-color:#222; color:#fff;">
                		<tr>
                            <td>Student Number</td>
                            <td>Student Name</td>
                            <td>Student Program</td>
                            <td>Year / Level</td>
                            <td>Student Email Address</td>
                            <td>Student Contact Number</td>
                            <td>Student Address</td>
                		</tr>
                	</thead>

                	<tbody class = "table-striped" style="background-color:#e5e5ff;"> 
                		<?php if(isset($records)) : foreach ($records as $row) : ?>
                        	<tr>
                        		<td><?php echo $row->student_number ?></td>
                        		<td><?php echo $row->student_fname ?> <?php echo $row->student_mi ?> <?php echo $row->student_lname ?> </td>
                        		<td><?php echo $row->student_program ?></td>
                                <td><?php echo $row->student_yrlvl ?></td>
                                <td><?php echo $row->student_email ?></td>
                                <td><?php echo $row->student_address ?></td>
                                <td><?php echo $row->student_contact ?></td>
                            </tr>
                        <?php endforeach; ?>
                		<?php else : ?>     
    	            	<h2>No records were returned.</h2>
    	            	<?php endif; ?>                                     
    	            	<hr >
                		</tbody>
    			</table>
    		</div> 
    	</div>	
    </div>
    <div class="col-md-1"></div>
</div>