<html>
<head>
    <title>
    </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?= base_url('assets/css/bootstrap.css');?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/font-awesome.css');?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/custom.css');?>" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="<?= base_url('assets/js/dataTables/dataTables.bootstrap.css');?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?= base_url('assets/css/exe.css');?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
  <div class="wrapper">
    <form role="form" method="post" action="<?= base_url('C_executive/bisnis');?>">
      <nav class="navbar navbar-default navbar-fixed-top navbar-cls-top " role="navigation" style="margin-bottom: 0">    
                <div style="color: white;
                            padding: 15px 50px 10px 50px;
                            float: right;"><a href="<?= base_url('C_user');?>" class="btn btn-danger square-btn-adjust">Logout</a>
                </div>
                <div>
                <img style="margin-left: 10px; margin-top: 5px;" width=235 height=48 src="<?= base_url('assets/img/logo123.png');?>">
                </div>
            </nav>  
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li>
                            <a href="<?= base_url('C_executive/tampil_data_user');?>"><i class="fa fa-bar-chart"></i>Data User</a>
                        </li>
                        <li>
                            <a href="<?= base_url('C_executive/tampil_data');?>"><i class="fa fa-bar-chart"></i>Data Barang</a>
                        </li>
                        <li>
                            <a href="<?= base_url('C_executive/dashboard');?>"><i class="fa fa-bar-chart"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?= base_url('C_executive/proses_bisnis');?>"><i class="fa fa-area-chart"></i>Bisnis</a>
                        </li>
                    </ul>
                </div>
            </nav>
    </form>
  </div>

    <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-2">
                        <h2>Executive</h2>
                    </div>
                </div>
            </br>     
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Kode</th>
                                                <th>Merk</th>
                                                <th>Tanggal Kadaluarsa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data as $v): ?>
                                            <tr>
                                                <td><?php echo $v["kode_barang"]; ?></td>
                                                <td><?php echo $v["merk"]; ?></td>
                                                <td><?php echo $v["tanggal_kadaluarsa"]; ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        </table>
                                    </div> 
                                </div>
                    </div>
                </div>
            </div>         
        </div>

    <script src="<?= base_url('assets/js/jquery-1.10.2.js');?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('assets/js/jquery.metisMenu.js');?>"></script>
    <script src="<?= base_url('assets/js/dataTables/jquery.dataTables.js');?>"></script>
    <script src="<?= base_url('assets/js/dataTables/dataTables.bootstrap.js');?>"></script>
    <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    <script src="<?= base_url('assets/js/custom.js');?>"></script>
</body>
</html>