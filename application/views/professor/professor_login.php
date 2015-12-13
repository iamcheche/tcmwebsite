<div class = "container">
	<div class = "col-md-6" style="background-color:#e5e5ff; border-radius:10px; border: 1px solid #444;">
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
      	<input type="submit" value="Login" class = "form-control" style = "background-color:#191919; color:#fff; border-radius:5px;"/>
        </form>
        <br>    
    </div>
	<br>
	<div class="col-md-6">
		<?php echo img(array('src'=>'img/slider1.jpg', 'style' => 'height:100%; width:100%; border-radius:10px;')); ?>	
	</div>
</div>