<div class = "container">
    <div class = "col-md-1"></div>
    <div class = "col-md-10">
    	<a href="<?php echo base_url('adminhome/create_course') ?>">Add Course</a>
            <div class = "table-responsive">
    			<table class = "table" style="width:100%; text-align:center;">
                	<thead style="background-color:#222; color:#fff;">
                		<tr>
                            <td>Course Code</td>
                            <td>Course Description</td>
                            <td>Credit Unit</td>
                		</tr>
                	</thead>

                	<tbody class = "table-striped" style="background-color:#e5e5ff;"> 
                		<?php if(isset($records)) : foreach ($records as $row) : ?>
                        	<tr>
                        		<td><?php echo $row->course_code ?></td>
                        		<td><?php echo $row->course_desc ?></td>
                                <td><?php echo $row->credit_unit ?></td>
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