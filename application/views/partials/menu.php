<link href="../../../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<?php $this->load->view('partials/load_css');?>
<!--Navbar -->
<nav class="navbar navbar-light navbar-expand-lg fixed-top" style="background-color: #ffffff; border-bottom: double; border-color: #b30000;">
    <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url().'assets/img/logohum.png'; ?>" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>"><img src="<?php echo base_url().'assets/img/home.png'?>" /> <font color="#b30000"><b>Home</b></font>
                </a>
            </li>

            <!--Akses Menu Untuk Admin-->
            <?php if($this->session->userdata('akses')=='1'){?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url().'research/show_territory'?>"><img src="<?php echo base_url().'assets/img/ter.png'?>" /> <font color="#b30000"><b>District</b></font></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="dropdown dropdown-toggle nav-link" id="navbarDropdown" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url().'assets/img/researcher.png'?>" /> <font color="##b30000"><b>Researcher</b></font>
                    </a>
                    <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink" style="background-color:#b30000">
                        <a class="dropdown-item" href="<?php echo base_url().'user/'?>"><img src="<?php echo base_url().'assets/img/researcher_show.png'?>" /> <font color="#ffff00">Show Researcher Data</font></a>
                        <a class="dropdown-item" href="<?php echo base_url().'user/add_new'?>"><img src="<?php echo base_url().'assets/img/researcher_in.png'?>" /> <font color="#ffff00">Input Researcher Data</font></a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="dropdown dropdown-toggle nav-link" id="navbarDropdown" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url().'assets/img/research_data.png'?>" /> <font color="#b30000"><b>Research</b></font>
                    </a>
                    <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333" style="background-color:#b30000">
                        <a class="dropdown-item" href="<?php echo base_url().'research/show_info'?>"><img src="<?php echo base_url().'assets/img/information.png'?>" /> <font color="#ffff00">Manage Info & Time</font></a>
                        <a class="dropdown-item" href="<?php echo base_url().'research/create'?>"><img src="<?php echo base_url().'assets/img/research_show.png'?>" /> <font color="#ffff00">Show Research Data</font></a>
                        <a class="dropdown-item" href="<?php echo base_url().'datar/'?>"><img src="<?php echo base_url().'assets/img/research_in.png'?>" /> <font color="#ffff00">Input Research Data</font></a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url().'research/result'?>"><img src="<?php echo base_url().'assets/img/result_r.png'?>" /> <font color="#b30000"><b>Research Results</b></font></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="dropdown dropdown-toggle nav-link" id="navbarDropdown" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url().'assets/img/admin.png'?>" /> <font color="#b30000"><b>Administrator</b></font>
                    </a>
                    <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333" style="background-color:#b30000">
                        <a class="dropdown-item" href="<?php echo base_url().'sica/show'?>"><img src="<?php echo base_url().'assets/img/admin_show.png'?>" /> <font color="#ffff00">Show Administrator/Co Data</font></a>
                        <a class="dropdown-item" href="<?php echo base_url().'sica/add_new'?>"><img src="<?php echo base_url().'assets/img/admin_in.png'?>" /> <font color="#ffff00">Input Administrator/Co Data</font></a>
                    </div>
                </li>

                <!--Akses Menu Untuk Co-Admin-->
            <?php }elseif($this->session->userdata('akses')=='2'){?>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url().'research/show_territory'?>"><img src="<?php echo base_url().'assets/img/ter.png'?>" /> <font color="#b30000"><b>District</b></font></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="dropdown dropdown-toggle nav-link" id="navbarDropdown" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url().'assets/img/researcher.png'?>" /> <font color="##b30000"><b>Researcher</b></font>
                    </a>
                    <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink" style="background-color:#b30000">
                        <a class="dropdown-item" href="<?php echo base_url().'user/'?>"><img src="<?php echo base_url().'assets/img/researcher_show.png'?>" /> <font color="#ffff00">Show Researcher Data</font></a>
                        <a class="dropdown-item" href="<?php echo base_url().'user/add_new'?>"><img src="<?php echo base_url().'assets/img/researcher_in.png'?>" /> <font color="#ffff00">Input Researcher Data</font></a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="dropdown dropdown-toggle nav-link" id="navbarDropdown" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url().'assets/img/research_data.png'?>" /> <font color="#b30000"><b>Research</b></font>
                    </a>
                    <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333" style="background-color:#b30000">
                        <a class="dropdown-item" href="<?php echo base_url().'research/show_info'?>"><img src="<?php echo base_url().'assets/img/information.png'?>" /> <font color="#ffff00">Manage Info & Time</font></a>
                        <a class="dropdown-item" href="<?php echo base_url().'research/create'?>"><img src="<?php echo base_url().'assets/img/research_show.png'?>" /> <font color="#ffff00">Show Research Data</font></a>
                        <a class="dropdown-item" href="<?php echo base_url().'datar/'?>"><img src="<?php echo base_url().'assets/img/research_in.png'?>" /> <font color="#ffff00">Input Research Data</font></a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url().'research/result'?>"><img src="<?php echo base_url().'assets/img/result_r.png'?>" /> <font color="#b30000"><b>Research Results</b></font></a>
                </li>

                
                <!--Akses Menu Untuk Pengguna-->
            <?php }else{?>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url().'research/territory'?>"><img src="<?php echo base_url().'assets/img/ter.png'?>" /> <font color="#b30000"><b>District</b></font></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="dropdown dropdown-toggle nav-link" id="navbarDropdown" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url().'assets/img/research_data.png'?>" /> <font color="#b30000"><b>Research</b></font>
                    </a>

                    <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333" style="background-color:#b30000">
                        <a class="dropdown-item" href="<?php echo base_url().'research/create'?>"><img src="<?php echo base_url().'assets/img/research_show.png'?>" /> <font color="#ffff00">Show Research Data</font></a>
                        <a class="dropdown-item" href="<?php echo base_url().'datar/'?>"><img src="<?php echo base_url().'assets/img/research_in.png'?>" /> <font color="#ffff00">Input Research Data</font></a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url().'research/result'?>"><img src="<?php echo base_url().'assets/img/result_r.png'?>" /> <font color="#b30000"><b>Research Results</b></font></a>
                </li>


            <?php };?>



            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url().'page/help'?>"><img src="<?php echo base_url().'assets/img/tulung.png'?>" /> <font color="#b30000"><b>Help!</b></font></a>
            </li>


        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="dropdown dropdown-toggle nav-link" id="navbarDropdown" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="<?php echo base_url().'assets/img/akun.png'?>" /> <font color="#b30000"><b>Account</b></font>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink" style="background-color:#b30000">
                    <a class="dropdown-item" href="<?php echo base_url().'page/profil'?>"><img src="<?php echo base_url().'assets/img/profile.png'?>" /> <font color="#ffff00">Profile</font></a>
                    <a class="dropdown-item" href="<?php echo base_url().'login/logout'?>"><img src="<?php echo base_url().'assets/img/logout.png'?>" /> <font color="#ffff00">Logout</font></a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar -->
