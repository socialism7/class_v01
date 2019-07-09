<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>IS-Class Analysis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="By analysis.alienasi.com" />
    <meta name="author" content="M Rahmat Hidayatulloh" />
    <!--Include Bootstrap-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/bootstrap.css">
    <?php $this->load->view('partials/load_css');?>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
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
                                    Result of Research;
                                </font>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-sm table-hover" id="mydata" style="border-style: double;">
                                            <thead>
                                                <tr>
                                                    <th scope="col">District</th>
                                                    <th scope="col" >Time</th>
                                                    <th scope="col">Category</th>
                                                </tr>
                                            </thead>
                                            <tbody id="show_data">

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
                                <div style="margin-right: 7%; margin-left: 7%; margin-bottom: 7%; margin-top: 7%; text-align: center;""><img src="<?php echo base_url().'assets/img/logo.PNG'?>" width="70%">
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

    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        tampil_data_result();   //pemanggilan fungsi tampil result.
        
        $('#mydata').dataTable();

        //fungsi tampil result
        function tampil_data_result(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>research/data_data',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                        '<td>'+data[i].nama_desa+'</td>'+
                        '<td>'+data[i].waktu+'</td>'+
                        '<td><font style="color: #b30000; font-weight: bold;">'+data[i].categories+'</font></td>'+
                        '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }

    });

</script>


</body>
</html>