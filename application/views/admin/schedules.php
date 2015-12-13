<div class = "container">
    <div class = "col-md-1"></div>
    <div class = "col-md-10">
        <a href="<?php echo base_url('adminhome/create_schedule') ?>">Add Schedule</a>
    		<div class = "table-responsive">
    			<table class = "table" style="width:100%; text-align:center; ">
                	<thead style="background-color:#222; color:#fff;">
                		<tr>
                            <td>ID</td>
                            <td>Days</td>
                            <td>Time Start</td>
                            <td>Time End</td>
                            <td>Room</td>
                            <td>Professor</td>
                            <td>Course Code</td>
                		</tr>
                	</thead>

                	<tbody class = "table-striped" style="background-color:#e5e5ff;"> 
                		<?php if(isset($records)) : foreach ($records as $row) : ?>
                        	<tr>
                        		<td><?php echo $row->schedule_id ?></td>
                        		<td><?php echo $row->days ?></td>
                        		<td><?php echo $row->time_start ?></td>
                                <td><?php echo $row->time_end ?></td>
                                <td><?php echo $row->room ?></td>
                                <td><?php echo $row->professor_username ?></td>
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