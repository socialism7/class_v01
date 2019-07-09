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
                            <?php foreach($wilayah as $a){ ?>
                                <h5 class="card-title"></h5>
                                <div align="center" class="mb-5" style="margin-top:1%">
                                    <font size= "5" style="font-family: Bookman Old Style; font-weight: bold; color: #b30000; text-decoration: underline;">Edit Data Wilayah Riset <?php echo $a->nama_desa ?></font>
                                </div>
                                <form action="<?php echo base_url().'research/update_territory'; ?>" method="post">
                                    <div class="form-group row">
                                        <div class="offset-2 col-8" align="center">
                                            <input id="id_wilayah" name="id_wilayah" placeholder="ID WILAYAH" type="text" readonly required value="<?php echo $a->id_wilayah ?>" class="form-control here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-2 col-8" align="center">
                                            <input id="nama_desa" name="nama_desa" placeholder="NAMA DESA" type="text" value="<?php echo $a->nama_desa ?>" required class="form-control here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-2 col-8" align="center">
                                            <input id="nama_kec" name="nama_kec" placeholder="NAMA KECAMATAN" type="text" value="<?php echo $a->nama_kec ?>" required class="form-control here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-2 col-8" align="center">
                                            <input id="nama_kab_kot" name="nama_kab_kot" placeholder="NAMA KAB./KOTA" type="text" value="<?php echo $a->nama_kab_kot ?>" required class="form-control here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-2 col-8" align="center">
                                            <input id="nama_prov" name="nama_prov" placeholder="NAMA PROVINSI" type="text" value="<?php echo $a->nama_prov ?>" required class="form-control here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-2 col-8" align="center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                <label class="form-check-label" for="invalidCheck"> Agree to terms and conditions </label>
                                                <div class="invalid-feedback"> You must agree before submitting. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="margin-bottom: 4%">
                                        <div class="offset-2 col-8">
                                            <button name="submit" type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3" style="margin-top:2%">
                        <div class="card" style="border-color:#b30000; border-style: dashed;">
                            <div style="background-color: #b30000;">
                                <div style="margin-right: 7%; margin-left: 7%; margin-bottom: 7%; margin-top: 7%">
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
                <div class="row" style="background-color:#b30000">
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
