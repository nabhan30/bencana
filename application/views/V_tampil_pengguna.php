<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?= base_url('assets/css/bootstrap.css');?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/font-awesome.css');?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/custom.css');?>" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="<?= base_url('assets/js/dataTables/dataTables.bootstrap.css');?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="wrapper">
    
    <nav class="navbar navbar-default navbar-fixed-top navbar-cls-top " role="navigation" style="margin-bottom: 0">    
        <div style="color: white;
                    padding: 15px 50px 10px 50px;
                    float: right;"><a href="<?= base_url('C_user');?>" class="btn btn-danger square-btn-adjust style='margin-bottom: 5px;'">Logout</a>
        </div>
        <div>
        <img style="margin-left: 10px; margin-top: 5px;" width=235 height=48 src="<?= base_url('assets/img/logo123.png');?>">
        </div>
    </nav>  
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <a href="<?= base_url('C_superadmin');?>"><i class="fa fa-keyboard-o"></i>Input</a>
                </li>
                <li>
                    <a href="<?= base_url('C_superadmin/tampil_data');?>"><i class="fa fa-pencil"></i>Edit</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-keyboard-o"></i>User</a><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?= base_url('C_user/tampil_register');?>">Tambah Pengguna</a>
                        </li>
                        <li>
                            <a href="<?= base_url('C_user/tampil_data_pengguna');?>">Edit Pengguna</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-2">
                        <h2>Super Admin</h2>
                    </div>
                </div> 
                </br>    
                <?php echo $this->session->flashdata('msg') ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-bordered" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Jabatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data as $v): ?>
                                            <tr>
                                                <td><?php echo $v["id"]; ?></td>
                                                <td><?php echo $v["name"]; ?></td>
                                                <td><?php echo $v["username"]; ?></td>
                                                <td><?php echo $v["email"]; ?></td>
                                                <td><?php echo $v["jabatan"]; ?></td>
                                                <td>
                                                <a href="<?php echo base_url() ?>C_user/edit/<?php echo $v['id'] ?>">Edit </a><br>
                                                <a href="<?php echo base_url() ?>C_user/delete/<?php echo $v['id'] ?>" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                                                </td>

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