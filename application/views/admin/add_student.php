<div class = "container">
	<div class = "col-md-1"></div>
	<div class =  "col-md-10">
		<div class="row">
			<?php 
				$student_number = array('id' => 'student_number' , 'name' => 'student_number', 'class' => 'form-control', 'placeholder' => 'Student Nunmber'  );
				$student_fname = array('id' => 'student_fname' , 'name' => 'student_fname', 'class' => 'form-control', 'placeholder' => 'Student First Name'  );
				$student_mi = array('id' => 'student_mi' , 'name' => 'student_mi', 'class' => 'form-control', 'placeholder' => 'Student Midlle Initial'  );
				$student_lname = array('id' => 'student_lname' , 'name' => 'student_lname', 'class' => 'form-control', 'placeholder' => 'Student Last Name'  );
				$student_program = array('id' => 'student_program' , 'name' => 'student_program', 'class' => 'form-control', 'placeholder' => 'Student Program'  );
				$student_yrlvl = array('id' => 'student_year' , 'name' => 'student_year', 'class' => 'form-control', 'placeholder' => 'Student Year'  );
				$student_email = array('id' => 'student_email' , 'name' => 'student_email', 'class' => 'form-control', 'placeholder' => 'Student Email Address'  );
				$student_contact = array('id' => 'student_contact' , 'name' => 'student_contact', 'class' => 'form-control', 'placeholder' => 'Student Contact Number'  );
				$student_address = array('id' => 'student_address' , 'name' => 'student_address', 'class' => 'form-control', 'placeholder' => 'Student Address'  );
			?>

				<?php
                    echo form_open('adminhome/add_student');
       
                    echo form_label('Student Number');
                    echo form_input($student_number);
                    echo '<br>';
					echo '<div id = "error">' . form_error('student_number') . '</div>';
                    echo '<br /><br />';
                	                
                	echo form_label('Student First Name');
                    echo form_input($student_fname);
                    echo '<br>';
                    echo '<div id = "error">' . form_error('student_fname') . '</div>';
                    echo '<br /><br />';
                	
                	echo form_label('Student Middle Initial');
                    echo form_input($student_mi);
                    echo '<br>';

                    echo form_label('Student Last Name');
                    echo form_input($student_lname);
                    echo '<br>';
                	echo '<div id = "error">' . form_error('student_lname') . '</div>';
                    echo '<br /><br />';

                	echo form_label('Student Program');
                    echo form_input($student_program);
                    echo '<br>';
                	echo '<div id = "error">' . form_error('student_program') . '</div>';
                    echo '<br /><br />';

                	echo form_label('Student Year');
                    echo form_input($student_yrlvl);
                    echo '<br>';
                	echo '<div id = "error">' . form_error('student_yrlvl') . '</div>';
                    echo '<br /><br />';
                	
                	echo form_label('Student Email Address');
                    echo form_input($student_email);
                    echo '<br>';
                	echo '<div id = "error">' . form_error('student_yrlvl') . '</div>';
                    echo '<br /><br />';
                	
                	echo form_label('Student Contact Number');
                    echo form_input($student_contact);
                    echo '<br>';
                	echo '<div id = "error">' . form_error('student_contact') . '</div>';
                    echo '<br /><br />';

                	echo form_label('Student Address');
                    echo form_input($student_address);
                    echo '<br>';
                	echo '<div id = "error">' . form_error('student_address') . '</div>';
                    echo '<br /><br />';

                	echo form_submit('submit', 'Add Student');
                    echo '<br /><br />';
                    echo form_close();
                ?>
		</div>	
	</div>
	<div class = "col-md-1"></div>
</div>