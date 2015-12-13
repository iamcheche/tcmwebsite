<div class = "container">
	<div class = "col-md-1"></div>
	<div class =  "col-md-10">
		<div class="row">

				<?php
                    echo form_open('adminhome/add_course');
       
                    echo form_label('Course Code');
                    echo "<select name='course_code' id='course_code' class='form-control'>";
                    if (count($get_course)) {
                        foreach ($get_course as $course) {
                            echo "<option value='". $course['course_code'] . "'>" . $course['course_code'] . "</option>";
                        }
                    }
                    echo "</select><br/>";
                    
                    echo form_label('Student');
                    echo "<select name='course_code' id='course_code' class='form-control'>";
                    if (count($get_student)) {
                        foreach ($get_student as $student) {
                            echo "<option value='". $student['student_username'] . "'>" . $student['student_username'] . "</option>";
                        }
                    }
                    echo "</select><br/>";
                	
                    echo form_submit('submit', 'Add Student to Course');
                    echo '<br /><br />';
                    echo form_close();
                ?>
		</div>	
	</div>
	<div class = "col-md-1"></div>
</div>