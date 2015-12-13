<div class = "container">
	<div class = "col-md-1"></div>
	<div class =  "col-md-10">
		<div class="row">
			<?php 
				$course_code = array('id' => 'course_code' , 'name' => 'course_code', 'class' => 'form-control', 'placeholder' => 'Course Code'  );
				$course_desc = array('id' => 'course_desc' , 'name' => 'course_desc', 'class' => 'form-control', 'placeholder' => 'Course Desccription'  );
				$credit_unit = array('id' => 'credit_unit' , 'name' => 'credit_unit', 'class' => 'form-control', 'placeholder' => 'Credit Units'  );
			?>

				<?php
                    echo form_open('adminhome/add_course');
       
                    echo form_label('Course Code');
                    echo form_input($course_code);
                    echo '<br>';
					echo '<div id = "error">' . form_error('course_code') . '</div>';
                    echo '<br /><br />';
                	                
                	echo form_label('Course Desccription');
                    echo form_input($course_desc);
                    echo '<br>';
                    echo '<div id = "error">' . form_error('course_desc') . '</div>';
                    echo '<br /><br />';

                    echo form_label('Credit Unit');
                    echo form_input($credit_unit);
                    echo '<br>';
                	echo '<div id = "error">' . form_error('credit_unit') . '</div>';
                    echo '<br /><br />';

                	echo form_submit('submit', 'Add Course');
                    echo '<br /><br />';
                    echo form_close();
                ?>
		</div>	
	</div>
	<div class = "col-md-1"></div>
</div>