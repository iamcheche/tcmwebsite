<div class = "container">
    <div class = "col-md-1"></div>
    <div class = "col-md-10">
        <a href="<?php echo base_url('adminhome/create_professor') ?>">Add Professor</a>
    		<div class = "table-responsive">
    			<table class = "table" style="width:100%; text-align:center;">
                	<thead style="background-color:#222; color:#fff;">
                		<tr>
                            <td>Professor Number</td>
                            <td>Professor Name</td>
                            <td>Professor Department</td>
                            <td>Professor Email Address</td>
                            <td>Professor Contact Number</td>
                		</tr>
                	</thead>

                	<tbody class = "table-striped" style="background-color:#e5e5ff;"> 
                		<?php if(isset($records)) : foreach ($records as $row) : ?>
                        	<tr>
                        		<td><?php echo $row->professor_number ?></td>
                        		<td><?php echo $row->professor_fname ?> <?php echo $row->professor_lname ?> </td>
                        		<td><?php echo $row->professor_dept ?></td>
                                <td><?php echo $row->professor_email ?></td>
                                <td><?php echo $row->professor_contact ?></td>
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