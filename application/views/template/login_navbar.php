<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=""><?php echo img(array('src'=>'img/logo.png', 'style' => 'width: 60%; height: 100%;')); ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">About TCM: Grade Viewer <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Tutorial</a></li>
            </ul>
            
           
            
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="height:100%">Login <span class="caret"></span></a>
                    <ul class="dropdown-menu" style="background-color:#222;">
                        <li>
                            <div style = "margin:5%; background-color:#222;">
                                <?php echo validation_errors(); ?>
                                
                                <p style="text-align:center; color:#fff; background-color: #222;">Student Login</p>
                                <?php echo form_open('verifystudent'); ?>
                                    
                                    <input type="text" size="20" id="username" name="username" class="form-control" placeholder="Username" />
                                    <br>
                                    <input type="password" size="20" id="passowrd" name="password" class="form-control" placeholder="Password"/>
                                    <br>
                                    <input type="submit" value="Login" class = "form-control" style = "background-color:#191919; color:#fff;"/>
                                </form>    
                            </div> 
                        </li>
                    </ul>
                </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
</nav>