 <div class="container">
     <div class="col-md-1"></div>
     <div class="col-md-8">
        <?php foreach ($students as $student): ?>
        <?php 
            $student_number = array('id' => 'student_number' , 'name' => 'student_number', 'class' => 'form-control', 'placeholder' => 'Student Nunmber', 'value' => $student->student_number, 'readonly' => TRUE  );
            $student_fname = array('id' => 'student_fname' , 'name' => 'student_fname', 'class' => 'form-control', 'placeholder' => 'Student First Name' , 'value' => $student->student_fname, 'readonly' => TRUE   );
            $student_mi = array('id' => 'student_mi' , 'name' => 'student_mi', 'class' => 'form-control', 'placeholder' => 'Student Midlle Initial'  , 'value' => $student->student_mi, 'readonly' => TRUE  );
            $student_lname = array('id' => 'student_lname' , 'name' => 'student_lname', 'class' => 'form-control', 'placeholder' => 'Student Last Name'  , 'value' => $student->student_lname, 'readonly' => TRUE  );
            $student_program = array('id' => 'student_program' , 'name' => 'student_program', 'class' => 'form-control', 'placeholder' => 'Student Program'  , 'value' => $student->student_program, 'readonly' => TRUE  );
            $student_yrlvl = array('id' => 'student_year' , 'name' => 'student_year', 'class' => 'form-control', 'placeholder' => 'Student Year'  , 'value' => $student->student_yrlvl, 'readonly' => TRUE  );
            $student_email = array('id' => 'student_email' , 'name' => 'student_email', 'class' => 'form-control', 'placeholder' => 'Student Email Address'  , 'value' => $student->student_email  );
            $student_contact = array('id' => 'student_contact' , 'name' => 'student_contact', 'class' => 'form-control', 'placeholder' => 'Student Contact Number'  , 'value' => $student->student_contact  );
            $student_address = array('id' => 'student_address' , 'name' => 'student_address', 'class' => 'form-control', 'placeholder' => 'Student Address' , 'value' => $student->student_address );
            $student_username = array('id' => 'student_username' , 'name' => 'student_username', 'class' => 'form-control', 'placeholder' => 'Student Username' , 'value' => $student->student_username, 'readonly' => TRUE    );
            $student_password = array('id' => 'student_password' , 'name' => 'student_password', 'class' => 'form-control', 'placeholder' => 'Student Password' , 'value' => $student->student_password   );

            echo form_open('studenthome/account_update');
            
            echo '<h2 style = "background-color:#444; color:#fff; text-align:center; border-radius:5px;">Account Information</h2>';                           
            echo form_label('Student Number');
            echo form_input($student_number);
            echo '<br>';
            echo '<div id = "error">' . form_error('student_number') . '</div>';
            
                                                                    
            echo form_label('Student First Name');
            echo form_input($student_fname);
            echo '<br>';
            echo '<div id = "error">' . form_error('student_fname') . '</div>';
            
                                                        
            echo form_label('Student Middle Initial');
            echo form_input($student_mi);
            echo '<br>';

            echo form_label('Student Last Name');
            echo form_input($student_lname);
            echo '<br>';
            echo '<div id = "error">' . form_error('student_lname') . '</div>';
            

            echo form_label('Student Program');
            echo form_input($student_program);
            echo '<br>';
            echo '<div id = "error">' . form_error('student_program') . '</div>';
            
            echo form_label('Student Year');
            echo form_input($student_yrlvl);
            echo '<br>';
            echo '<div id = "error">' . form_error('student_yrlvl') . '</div>';
            
                                                        
            echo form_label('Student Email Address');
            echo form_input($student_email);
            echo '<br>';
            echo '<div id = "error">' . form_error('student_email') . '</div>';
            
                                                    
            echo form_label('Student Contact Number');
            echo form_input($student_contact);
            echo '<br>';
            echo '<div id = "error">' . form_error('student_contact') . '</div>';
            

            echo form_label('Student Address');
            echo form_input($student_address);
            echo '<br>';
            echo '<div id = "error">' . form_error('student_address') . '</div>';
            

            echo form_label('Student Username');
            echo form_input($student_username);
            echo '<br>';
            echo '<div id = "error">' . form_error('student_username') . '</div>';
            

            echo form_label('Student Password');
            echo form_password($student_password);
            echo '<br>';
            echo '<div id = "error">' . form_error('student_password') . '</div>';
            

            echo form_submit('submit', 'Update Account');
            echo form_close();
            echo '<br>';
        ?>
        <?php endforeach;?>
     </div> 
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <br><br>
         <h4 style="color:#ff1212;">*Note: You can only change your password, email, contact number, and password</h4>
     </div>
 </div>
 