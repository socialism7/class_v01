    <!DOCTYPE html>
    <html>
    <head>
        <title>IS-Class Analysis</title>
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
                                        Manajemen Waktu Pelaksanaan Riset
                                    </font>

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover table-dark" style="border-style: double;">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" width="100px" style="text-align: center; background-color: #b30000; color: #ffea00;">Identity</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col" style="text-align:center" width="77px">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    function TanggalIndo($date){
                                                        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

                                                        $tahun  = substr($date, 0, 4);
                                                        $bulan  = substr($date, 5, 2);
                                                        $tgl    = substr($date, 8, 2);
                                                        $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
                                                        return($result);
                                                    }
                                                    foreach($waktu as $a){ 
                                                        ?>
                                                        <tr>
                                                            <td style="text-align: center; background-color: #b30000; color: #ffea00"><?php echo $a->id_waktu ?></td>
                                                            <td><?php echo TanggalIndo($a->waktu) ?></td>
                                                            <td style="text-align:center">
                                                                <?php echo anchor('research/edit_time/'.$a->id_waktu,'<img src="../assets/img/up.png" title="Edit">'); ?>
                                                                <?php echo anchor('research/delete_waktu/'.$a->id_waktu,'<img src="../assets/img/del.png" title="Delete">'); ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div align="right" class="mb-3" style="margin-right:20px">
                                    <a href="<?php echo base_url().'research/add_time'; ?>">
                                        <button type="button" class="btn btn-success">
                                            <font style="font-family: Bahnschrift Condensed;">
                                                Create New Post
                                            </font>
                                        </button>
                                    </a>

                                    <a href="<?php echo base_url().'research/show_info'; ?>">
                                        <button type="button" class="btn btn-danger">
                                            <font style="font-family: Bahnschrift Condensed;">
                                                Manage Info
                                            </font>
                                        </button>
                                    </a>
                                </div>


                            </div>
                        </div>
                        <div class="col-md-3" style="margin-top:2%">
                            <div class="card" style="border-color:#b30000; border-style: dashed;">
                                <div style="background-color: #b30000;">
                                    <div style="margin-right: 7%; margin-left: 7%; margin-bottom: 7%; margin-top: 7%; text-align: center;">
                                        <a href="<?php echo base_url()?>"><img src="<?php echo base_url().'assets/img/logo.PNG'?>" width="100%"></a>
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