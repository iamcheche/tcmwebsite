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
            <a class="navbar-brand"><?php echo img(array('src'=>'img/logo.png', 'style' => 'width: 60px; height: 100%;')); ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" > <b>Manage <span class="caret"></span></b></a>
                    <ul class="dropdown-menu">
                        <?php 

                        ?>

                        <li><a href="<?php echo base_url('adminhome/students') ?>">Student</a></li>
                        <li><a href="<?php echo base_url('adminhome/courses') ?>">Courses</a></li>
                        <li><a href="<?php echo base_url('adminhome/professors') ?>">Professors</a></li>
                        <li><a href="<?php echo base_url('adminhome/schedules') ?>">Schedules</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url('adminhome/students_courses') ?>"><b>Students & Courses</b></a></li>
                <li><a href="<?php echo base_url('adminhome/profs_courses') ?>"><b>Professors & Courses</b></a></li>
            </ul>
         
            <ul class="nav navbar-nav navbar-right">
                <li><a href=""><b><?php echo $username ?></b></a></li>        
                <li><a href="<?php echo base_url('adminlogout') ?>"><b>Logout</b></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>