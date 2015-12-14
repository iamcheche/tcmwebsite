<div class = "container">
	<div class = "col-md-4" style="background-color:#e5e5ff; border-radius:10px; border: 1px solid #444;">
		<h1 style="text-align:center;">Professor Login</h1>
		<br>
		<div style = "color:#ff1919; text-align:center;">
            <?php echo validation_errors(); ?>
        </div>
        <?php echo form_open('verifyprofessor'); ?>
                                        
        <input type="text" size="20" id="username" name="username" class="form-control" placeholder="Username" />
        <br>
        <input type="password" size="20" id="passowrd" name="password" class="form-control" placeholder="Password"/>
        <br>
        <input type="text" size="20" id="code" name="code" class="form-control" placeholder="Access Code"/>
        <br>
        <input type="submit" value="Login" class = "form-control" style = "background-color:#191919; color:#fff; border-radius:5px;"/>
        </form>
        <br>    
    </div>
	<div class="col-md-1"></div>
	<div class="col-md-7">
        <div>
            <h3 style="width:100%; background-color:#333; color:#fff; padding: 5px; text-align:center; border-radius:5px;"><a href="#openAccess" >Request Access Code</a></h3>     
            <div id="openAccess" class="modalDialog">
                    <div>
                        <a href="professorlogin" title="Close" class="close">X</a>
                        <?php echo form_open('accesscode/sendtoprofessor'); ?>
                                        
                        <br>
                        <input type="text" size="20" id="username" name="username" class="form-control" placeholder="Professor Username"/>
                        <br>
                        <input type="submit" value="Send Access Code To My Email" class = "form-control" style = "background-color:#191919; color:#fff; border-radius:5px;"/>
                        </form>
                        <br>              
                    </div>
            </div>    
        </div>
        <?php echo img(array('src'=>'img/slider1.jpg', 'style' => 'height:100%; width:100%; border-radius:10px;')); ?>	
	   
    </div>
</div>