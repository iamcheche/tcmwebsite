<div class = "container">
	<div class = "col-md-1"></div>
	<div class =  "col-md-10">
		<div class="row">
			<?php 
				$professor_number = array('id' => 'professor_number' , 'name' => 'professor_number', 'class' => 'form-control', 'placeholder' => 'professor Nunmber'  );
				$professor_fname = array('id' => 'professor_fname' , 'name' => 'professor_fname', 'class' => 'form-control', 'placeholder' => 'professor First Name'  );
				$professor_lname = array('id' => 'professor_lname' , 'name' => 'professor_lname', 'class' => 'form-control', 'placeholder' => 'professor Last Name'  );
				$professor_dept = array('id' => 'professor_dept' , 'name' => 'professor_dept', 'class' => 'form-control', 'placeholder' => 'professor Program'  );
				$professor_email = array('id' => 'professor_email' , 'name' => 'professor_email', 'class' => 'form-control', 'placeholder' => 'professor Email Address'  );
				$professor_contact = array('id' => 'professor_contact' , 'name' => 'professor_contact', 'class' => 'form-control', 'placeholder' => 'professor Contact Number'  );
				$student_address = array('id' => 'professor_address' , 'name' => 'professor_address', 'class' => 'form-control', 'placeholder' => 'professor Address'  );
			?>

				<?php
                    echo form_open('adminhome/add_professor');
       
                    echo form_label('Professor Number');
                    echo form_input($professor_number);
                    echo '<br>';
					echo '<div id = "error">' . form_error('professor_number') . '</div>';
                    echo '<br /><br />';
                	                
                	echo form_label('professor First Name');
                    echo form_input($professor_fname);
                    echo '<br>';
                    echo '<div id = "error">' . form_error('professor_fname') . '</div>';
                    echo '<br /><br />';

                    echo form_label('professor Last Name');
                    echo form_input($professor_lname);
                    echo '<br>';
                	echo '<div id = "error">' . form_error('professor_lname') . '</div>';
                    echo '<br /><br />';

                	echo form_label('professor Department');
                    echo form_input($professor_dept);
                    echo '<br>';
                	echo '<div id = "error">' . form_error('professor_dept') . '</div>';
                    echo '<br /><br />';
                	
                	echo form_label('professor Email Address');
                    echo form_input($professor_email);
                    echo '<br>';
                	echo '<div id = "error">' . form_error('professor_yrlvl') . '</div>';
                    echo '<br /><br />';
                	
                	echo form_label('professor Contact Number');
                    echo form_input($professor_contact);
                    echo '<br>';
                	echo '<div id = "error">' . form_error('professor_contact') . '</div>';
                    echo '<br /><br />';

                	echo form_submit('submit', 'Add Professor');
                    echo '<br /><br />';
                    echo form_close();
                ?>
		</div>	
	</div>
	<div class = "col-md-1"></div>
</div>