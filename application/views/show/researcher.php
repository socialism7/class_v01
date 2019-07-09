<!DOCTYPE html>
<html>
<head>
    <title>IS-Class Analysis</title>
    <script>
    var baseurl = "<?php echo base_url("index.php/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
    </script>
    <script src="<?php echo base_url("js/jquery.min.js"); ?>"></script> <!-- Load library jquery -->
    <script src="<?php echo base_url("js/config.js"); ?>"></script> <!-- Load file process.js -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="By analysis.alienasi.com" />
    <meta name="author" content="M Rahmat Hidayatulloh" />
    <!--Include Bootstrap-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/bootstrap.css">
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
                    <div class="col-md-1"></div>
                    <div class="col-md-7" style="margin-top:2%">
                        <div class="card"  style="border-color:#b30000; border-style: dashed;">
                            <h5 class="card-title">
                            </h5>
                            <div align="center" class="mb-3" style="margin-top:1%">
                                <font size= "5" style="font-family: Bookman Old Style; font-weight: bold; color: #b30000; text-decoration: underline;">
                                    Data Peneliti
                                </font>

                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-sm table-hover table-dark" style="border-style: double;">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col" >Identity</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Hanphone</th>
                                                    <th scope="col">Alamat</th>
                                                    <th scope="col" style="text-align:center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $no = 1;
                                                foreach($researcher as $a){ 
                                                    ?>

                                                    <tr>
                                                        <th scope="row"><?php echo $no++ ?></th>
                                                        <td><?php echo $a->username ?></td>
                                                        <td><?php echo $a->nama ?></td>
                                                        <td><?php echo $a->hp ?></td>
                                                        <td><?php echo $a->alamat ?></td>
                                                        <td style="text-align:center">
                                                            <?php echo anchor('user/edit/'.$a->id_researcher,'<img src="../assets/img/up.png" title="Edit">'); ?>
                                                            <?php echo anchor('user/delete/'.$a->id_researcher,'<img src="../assets/img/del.png" title="Delete">'); ?>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="margin-top:2%">
                        <div class="card" style="border-color:#b30000; border-style: dashed;">
                            <div style="background-color: #b30000;">
                                <div style="margin-right: 7%; margin-left: 7%; margin-bottom: 7%; margin-top: 7%; text-align: center;"">
                                <img src="<?php echo base_url().'assets/img/logo.PNG'?>" width="70%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"> </div>
            </div>
            <div class="row" style="margin-top:2%; background-color:#333333">
                <br />
            </div>
            <div class="row" style=" background-color:#b30000">
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