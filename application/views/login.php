<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SI-Class Analysis</title>
  <link rel="icon" type="image/png" href="assets/img/icon.PNG">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
  <link href="<?php echo base_url().'assets/login/css/font-awesome.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/login/css/bootstrap.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/login/css/bootstrap.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/login/css/demo.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/login/css/templatemo-style.css'?>" rel="stylesheet">
  <script src="<?php echo base_url().'assets/login/js/modernizr.custom.86080.js'?>"></script>

  <!-- Bootstrap -->
  <!--Include Bootstrap-->
  <link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
  <?php $this->load->view('partials/load_css');?>
</head>
<body>
  <div id="particles-js"></div>
  <ul class="cb-slideshow">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row" style="margin-top:5%;">
          <div class="col-md-4">
          </div>
          <div class="tm-content col-md-4">
            <div class="card"> <img class="card-img-top" src="assets/login/img/l1.gif" high="50px" alt="Card image cap">
              <div class="offcard-body" style="background-image:url(assets/login/img/i2.jpg)"><br />
                <form action="<?php echo base_url().'login/auth'?>" method="post">
                  <div class="form-group row">
                    <div class="offset-1 col-10" align="center">
                      <input id="username" name="username" placeholder="USERNAME" type="text" required class="form-control here">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-1 col-10" align="center">
                      <input id="password" name="password" placeholder="PASSWORD" type="password" required class="form-control here">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-1 col-10">
                      <button name="submit" type="submit" class="btn btn-dark">Login</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="margin-bottom:10px">
          </div>

          <div class="col-md-12" align="center" style="margin-top:2%;">
            <?php $this->load->view('partials/copy'); ?>
            <!--Include menu--> 
          </div>
        </div>
      </div>
    </div>
  </body>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <?php $this->load->view('partials/load_js');?>

  <script src="<?php echo base_url().'assets/login/js/particles.js'?>"></script>
  <script src="<?php echo base_url().'assets/login/js/app.js'?>"></script>
  </html>
  </html>