<div class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner pull-center">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </a>
            <div class="nav-center">
                <div class="span11">
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li <?php if(current_url() == (base_url() . 'index.php')) { echo 'class="active"'; } ?> >
                                <a href="<?php echo base_url(); ?>">Home</a>
                            </li>
                            <li class="dropdown <?php if(current_url() == base_url() . 'index.php/services') { echo ' active'; } ?>">
                                <a href="<?php echo base_url() . 'services'; ?>" class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                                    Our Services
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url() . 'services'; ?>">Our Services</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url() . 'services#workshop'; ?>">Workshop</a></li>
                                    <li><a href="<?php echo base_url() . 'services#conference'; ?>">Conference</a></li>
                                </ul>
                            </li>
                            <li <?php if(current_url() == base_url() . 'index.php/clients') { echo 'class="active"'; } ?> >
                                <a href="<?php echo base_url() . 'clients'; ?>">Our Clients</a>
                            </li>
                            <li <?php if(current_url() == base_url() . 'index.php/trainers') { echo 'class="active"'; } ?> >
                                <a href="<?php echo base_url() . 'trainers'; ?>">Our Trainers</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Career
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Career with EBIS</a></li>
                                    <li><a href="#">Current Vacancy</a></li>
                                </ul>
                            </li>
                            <li <?php if(current_url() == base_url()) { echo 'class="active"'; } ?> >
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>  <!--/.nav-collapse -->
                </div>
            </div>
        </div>  <!-- /.navbar-inner -->
    </div>  <!-- /.navbar -->
</div><!-- /.navbar-wrapper -->

