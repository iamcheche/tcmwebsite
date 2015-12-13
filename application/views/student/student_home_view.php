<br><br>
<div class = "container">
<div class="col-md-3">
    <div class = "table-responsive">
        <table class = "table" style="width:100%; text-align:center; display: inline-block;">
            <thead style="background-color:#222; color:#fff;">
                <tr>
                    <th style="text-align:center;" colspan="2">Student Profile</th>                   
                </tr>
            </thead>                        
            
            <tbody class = "table-striped" style="background-color:#e5e5ff; width: 100%"> 
                <?php if(isset($profile)) : foreach ($profile as $row) : ?>
                    <tr>
                        <td>Student Number:</td>
                        <th><?php echo $row->student_number ?> </th>
                    </tr>

                    <tr>
                        <td>Name of Student:</td>
                        <th><?php echo $row->student_fname ?> <?php echo $row->student_mi ?>  <?php echo $row->student_lname ?> </th>
                    </tr>
                    
                    <tr>
                        <td>Program/Year:</td>                            
                        <th><?php echo $row->student_program ?> / <?php echo $row->student_yrlvl ?> </th>
                    </tr>

                    <tr>
                        <td> Edit Account:</td>
                        <th> <?php echo anchor("studenthome/show_student/$row->student_username", $row->student_username ); ?></th>
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
       
    <div class="col-md-1"></div>
	<div class = "col-md-8">
        <h4> Currently Enrolled Courses</h4> 
		<div class = "table-responsive">
			<table class = "table" style="width:100%; text-align:center; display: inline-block;">
            	<thead>
            		
            	</thead>
            	<thead style="background-color:#222; color:#fff;">
            		<tr>
            			<th>Course Code </th>
            			<th>Course Description</th>
            			<th>Units</th>
                        <th>Schedule</th>
            			<th>Professor</th>
                        <th>Options</th>
            		</tr>
            	</thead>
            	<tbody class = "table-striped" style="background-color:#e5e5ff;"> 
            		<?php if(isset($records)) : foreach ($records as $row) : ?>
                    	<tr>
                    		<td><?php echo $row->course_code ?></td>
                    		<td><?php echo $row->course_desc ?></td>
                    		<td><?php echo $row->credit_unit ?></td>
                            <td><?php echo $row->days ?> / <?php echo $row->time_start ?> - <?php echo $row->time_end ?> @ <?php echo $row->room ?></td>
                            <td><?php echo $row->professor_fname ?> <?php echo $row->professor_lname ?></td>
                    		<td>
                                <?php echo anchor("studenthome/show_view_grade/$row->course_code", 'View Grades'); ?>
                            </td>
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