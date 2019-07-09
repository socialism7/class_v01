<!DOCTYPE html>
<html>
<head>
    <title>IS-Class Analysis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="By isca.alienasi.com" />
    <meta name="author" content="M Rahmat Hidayatulloh" />
    <!--Include Bootstrap-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/bootstrap.css">
    <?php $this->load->view('partials/load_css');?>

    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>

    <script>
        $(document).ready(function(){
            // Sembunyikan alert validasi kosong
            $("#kosong").hide();
        });
    </script>
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
                            <h5 class="card-title"></h5>
                            <div align="center" class="mb-5" style="margin-top:1%">
                                <font size= "5" style="font-family: Bookman Old Style; font-weight: bold; color: #b30000; text-decoration: underline;">Input Data Riset</font>
                            </div>

                            <center><!-- Buat sebuah tag form dan arahkan action nya ke controller ini lagi -->
                            <form method="post" action="<?php echo base_url("Datar/form"); ?>" enctype="multipart/form-data">
                                <!--
                                    Buat sebuah input type file
                                    class pull-left berfungsi agar file input berada di sebelah kiri
                                -->
                                <input type="file" name="file">
                                <!--
                                    -- BUat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
                                -->
                                <input type="submit" name="preview" value="Preview">
                            </form></center><br /><br />
                            <?php
                            if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form 
                                if(isset($upload_error)){ // Jika proses upload gagal
                                    echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
                                    die; // stop skrip
                                }// Buat sebuah tag form untuk proses import data ke database
                                echo "<form method='post' action='".base_url("Datar/import")."'>";
                                // Buat sebuah div untuk alert validasi kosong
                                echo "<div style='color: #b30000;' id='kosong' align=center><b>
                                All data has not been filled, there are some data that are still empty.</b>
                                </div>";
                                ?>


                                <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover table-dark table-bordered" style="border-style: double;">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="text-align:center">ID_Data</th>
                                                        <th scope="col" style="text-align:center">ID_Waktu</th>
                                                        <th scope="col" style="text-align:center">ID_Wilayah</th>
                                                        <th scope="col" style="text-align:center">ID_Peneliti</th>
                                                        <th scope="col" style="text-align:center">Salary</th>
                                                        <th scope="col" style="text-align:center">Data X</th>
                                                        <th scope="col" style="text-align:center">Data Y</th>
                                                        <th scope="col" style="text-align:center">Data Z</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 



                                /*echo "<table border='1' cellpadding='8'>
                                <tr>
                                <th colspan='5'>Preview Data</th>
                                </tr>
                                <tr>
                                <th>ID_Data</th>
                                <th>ID_Waktu</th>
                                <th>ID_Wilayah</th>
                                <th>ID_Peneliti</th>
                                <th>Data X</th>
                                <th>Data Y</th>
                                <th>Data Z</th>
                                </tr>"; */


                                $numrow = 1;
                                $kosong = 0;
                                // Lakukan perulangan dari data yang ada di excel
                                // $sheet adalah variabel yang dikirim dari controller
                                foreach($sheet as $row){ 
                                    // Ambil data pada excel sesuai Kolom
                                    $id_data = $row['A'];
                                    $id_waktu = $row['B'];
                                    $id_wilayah = $row['C'];
                                    $id_researcher = $row['D'];
                                    $salary = $row['E'];
                                    $data_x = $row['F'];
                                    $data_y = $row['G'];
                                    $data_z = $row['H'];
                                    // Cek jika semua data tidak diisi
                                    if(empty($id_data) && empty($id_waktu) && empty($id_wilayah) && empty($id_researcher) && empty($salary) && empty($data_x) && empty($data_y) && empty($data_z))
                                        continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
                                    // Cek $numrow apakah lebih dari 1
                                    // Artinya karena baris pertama adalah nama-nama kolom
                                    // Jadi dilewat saja, tidak usah diimport
                                    
                                    if($numrow > 1){
                                        // Validasi apakah semua data telah diisi
                                        $id_data_td = ( ! empty($id_data))? "" : " style='background: #E07171;'";
                                        $id_waktu_td = ( ! empty($id_waktu))? "" : " style='background: #E07171;'";
                                        $id_wilayah_td = ( ! empty($id_wilayah))? "" : " style='background: #E07171;'";
                                        $id_researcher_td = ( ! empty($id_researcher))? "" : " style='background: #E07171;'";
                                        $salary_td = ( ! empty($salary))? "" : " style='background: #E07171;'";
                                        $data_x_td = ( ! empty($data_x))? "" : " style='background: #E07171;'";
                                        $data_y_td = ( ! empty($data_y))? "" : " style='background: #E07171;'";
                                        $data_z_td = ( ! empty($data_z))? "" : " style='background: #E07171;'";
                                        // Jika salah satu data ada yang kosong
                                        if(empty($id_data) or empty($id_waktu) or empty($id_wilayah) or empty($id_researcher) or empty($salary) or empty($data_x) or empty($data_y) or empty($data_z)){
                                            $kosong++; // Tambah 1 variabel $kosong
                                        }

                                        echo "<tr>";
                                            echo "<td align=right".$id_data_td.">".$id_data."</td>";
                                            echo "<td align=right".$id_waktu_td.">".$id_waktu."</td>";
                                            echo "<td align=right".$id_wilayah_td.">".$id_wilayah."</td>";
                                            echo "<td align=right".$id_researcher_td.">".$id_researcher."</td>";
                                            echo "<td align=right".$salary_td.">".$salary."</td>";
                                            echo "<td align=right".$data_x_td.">".$data_x."</td>";
                                            echo "<td align=right".$data_y_td.">".$data_y."</td>";
                                            echo "<td align=right".$data_z_td.">".$data_z."</td>";
                                        echo "</tr>";
                                    }
                                    $numrow++; // Tambah 1 setiap kali looping
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                            <?php
                            
                            //echo "</table>";
                            // Cek apakah variabel kosong lebih dari 0
                            // Jika lebih dari 0, berarti ada data yang masih kosong
                            if($kosong > 0){
                            ?>
                            <script>
                                $(document).ready(function(){
                                            // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
                                            $("#jumlah_kosong").html('<?php echo $kosong; ?>');
                                            $("#kosong").show(); // Munculkan alert validasi kosong
                                        });
                                    </script>
                                    <?php
                                    }else{ // Jika semua data sudah diisi
                                        echo "<hr>";
                                        // Buat sebuah tombol untuk mengimport data ke database
                                        echo "<div align=center><button type='submit' name='import'>Import File</button></div><br />";
                                        //echo "<a href='".base_url("datar")."'>Cancel</a>";
                                    }echo "</form>";
                                }
                                ?>
                            </div>
                        </div>



                        <div class="col-md-3" style="margin-top:2%">
                            <div class="card" style="border-color:#b30000; border-style: dashed;">
                                <div style="background-color: #b30000;">
                                    <div style="margin-right: 7%; margin-left: 7%; margin-bottom: 7%; margin-top: 7%">
                                        <img src="<?php echo base_url().'assets/img/logo.PNG'?>" width="100%">
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