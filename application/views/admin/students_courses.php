<div class = "container">
    <div class = "col-md-1"></div>
    <div class = "col-md-10">
    	<a href="<?php echo base_url('adminhome/create_student_course') ?>">Add Student to Course</a>
            <div class = "table-responsive">
    			<table class = "table" style="width:100%; text-align:center; ">
                	<thead style="background-color:#222; color:#fff;">
                		<tr>
                            <td>ID</td>
                            <td>Student</td>
                            <td>Course</td>
                		</tr>
                	</thead>

                	<tbody class = "table-striped" style="background-color:#e5e5ff;"> 
                		<?php if(isset($records)) : foreach ($records as $row) : ?>
                        	<tr>
                        		<td><?php echo $row->students_courses_id ?></td>
                        		<td><?php echo $row->student_username ?></td>
                                <td><?php echo $row->course_code ?></td>
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