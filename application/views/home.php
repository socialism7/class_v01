<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <title>IS-Class Analysis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="By analysis.alienasi.com" />
    <meta name="author" content="M Rahmat Hidayatulloh" />
    <!--Include Bootstrap-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
    <?php $this->load->view('partials/load_css');?>
</head>
<body>
    <?php $this->load->view('partials/menu');?>
    <!--Include menu-->

    <?php $this->load->view('partials/header');?>
    <!--Include header-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-7" style="margin-top:2%">
                        <div class="card" style="border-color:#b30000; border-style: double;">
                            <div align="center" style="margin-top:1%; margin-right: 5%; margin-left: 5%;">
                                <font style="font-family: Birch Std; font-weight: bold; color: #000000; font-size: 33px; text-decoration: underline;">Class Analysis<br/>based on Basic Income and Basic Human Needs
                                </font>
                                <hr/>
                            </div>
                            <div class="card" style="margin-left: 3%; margin-right: 3%; border-color: #b30000; border-style: dotted;">
                                <div class="card-header">
                                    <font style="font-family: Brush Script Std; font-size: 23px">The history of all hitherto existing society is the history of <b>class</b> struggles</font>
                                </div>
                                <div class="card-text" align="right" style="margin-right: 1%">
                                    <footer class="blockquote-footer">Marx & Engels, <cite title="Source Title">Manifesto</cite></footer>
                                </div>
                            </div>
                            <div style="margin-top:3%; margin-left: 2%; margin-right: 2%; margin-bottom: 3%; text-align: justify;">
                                <font style="font-family: Arial;">
                                    Welcome Comrade <?php echo $this->session->userdata('ses_nama');?> to Information System of "Class Analysis". In this information system, researchers can input research variables obtained from the results of social class research. Then the system will process the data using the <i>"Class Analysis based on Basic Income and Basic Human Needs"</i> algorithm.
                                </font>
                            </div>
                        </div>

                        
                        <div class="card-text" align="right">
                            <div style="text-align: center; margin-bottom: 10px; margin-top: 10px">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="card" style="border-color: #b30000; border-style: double; margin-top: 10px;">
                                            <div class="card-header">
                                                <font style="font-family: Bahnschrift Condensed; font-size: 130%; font-weight: bold; color: #b30000">Information</font>
                                            </div>
                                            <table class="table table-borderless" style="border-style: none; text-align: left; margin-left: 3%; margin-right: 3%">
                                                <tbody>
                                                    <?php 
                                                    foreach($informasi as $a){ 
                                                        ?>
                                                        <tr><td width="1%"><font style="font-weight: bold; color: #b30000;">»</font></td>
                                                            <td width="99%"><?php echo $a->isi ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card" style="border-color: #b30000; border-style: dashed; margin-top: 10px;">
                                            <div class="card" style="border-color: #b30000; border-style: dashed;">
                                                <div class="card-header">
                                                    <font style="font-family: Bahnschrift Condensed; font-size: 130%; font-weight: bold; color: #b30000">Download Documents</font>
                                                </div>
                                                <div class="card-text">
                                                    <div style="text-align: left; margin-bottom: 3%; margin-top: 3%; margin-right: 3%">
                                                        <ul>
                                                            <li>
                                                                <a href="<?php echo base_url().'excel/format.xlsx'?>" target="_blank">
                                                                    <font style="font-weight: bold; color: #b30000">
                                                                        Format Data Riset
                                                                    </font>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="" target="_blank">
                                                                    <font style="font-weight: bold; color: #b30000">
                                                                        Petunjuk Pelaksanaan Riset
                                                                    </font>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-3" style="margin-top:2%">

                        <div class="card" style="border-color:#b30000; border-style: double;">
                            <div style="background-color: #b30000;">
                                <div style="margin-right: 7%; margin-left: 7%; margin-bottom: 7%; margin-top: 7%; text-align: center;">
                                    <a href="<?php echo base_url()?>"><img src="<?php echo base_url().'assets/img/logo.PNG'?>" width="100%"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="border-color: #b30000; border-style: double; margin-top: 2%">
                            <div class="card-header" align="center">
                                <font style="font-family: Bahnschrift Condensed; font-size: 23px;">IS-CA Archives</font>
                            </div>
                            <div class="card-text" align="right" style="margin-right: 1%">
                                <div style="text-align: center; margin-bottom: 7%; margin-top: 7%">
                                    <a href="<?php echo base_url().'archives.php'?>" target="_blank"><img src="<?php echo base_url().'assets/img/archives.png'?>" width="70%"></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="row" style="margin-top:2%; background-color:#333333">
                    <br />
                </div>
                <div class="row" style="background-color:#B30000">
                    <div class="col-md-1"></div>
                    <div class="col-md-5" style="margin-top:0.3%; margin-bottom: 0.3%;">
                        <?php $this->load->view('partials/address');?>
                    </div>
                    <div class="col-md-5" align="right" style="margin-top:0.3%; margin-bottom: 0.3%;">
                        <?php $this->load->view('partials/copy'); ?>
                        <!--Include menu-->
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>            
        </div>
    </div>
    <!-- /container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php $this->load->view('partials/load_js');?>
</body>
</html>
