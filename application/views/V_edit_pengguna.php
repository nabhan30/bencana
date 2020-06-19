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
    <link href="<?= base_url('assets/css/exe.css');?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="wrapper">
        <?php foreach($data as $u){ ?>
        <form role="form" method="post" action="<?= base_url('C_user/update');?>">
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

    <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Super Admin</h2>
                    </div>
                </div>
                </br>
                <?php echo $this->session->flashdata('msg') ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Silahkan Masukkan Data</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                            <input class="form-control" name="name" placeholder="Masukan Nama Lengkap" value="<?php echo $u->name ?>" required oninvalid="this.setCustomValidity('Masukan nama lengkap')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label>User Name</label>
                                            <input class="form-control" name="username" placeholder="Masukan Username" value="<?php echo $u->username ?>" required oninvalid="this.setCustomValidity('Masukan username')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" placeholder="Masukan Email" value="<?php echo $u->email ?>" required oninvalid="this.setCustomValidity('Masukan email')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="password" type="password" id="password1" placeholder="Masukan Password" required oninvalid="this.setCustomValidity('Masukan password')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label>Retype Password</label>
                                            <input class="form-control" name="retype" type="password" id="password2" placeholder="Masukan Password" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jabantan</label>
                                            <select class="form-control" name="jabatan" required oninvalid="this.setCustomValidity('Masukan jabatan')" oninput="setCustomValidity('')">
                                                <option value="executive" <?php echo $u->jabatan == 'executive' ? 'selected' : ''?> >Executive</option>
                                                <option value="superadmin" <?php echo $u->jabatan == 'superadmin' ? 'selected' : ''?> >Super Admin</option>
                                                <option value="adminoperator" <?php echo $u->jabatan == 'adminoperator' ? 'selected' : ''?> >Admin Operator</option>
                                            </select>
                                        </div>
                                        <input type="submit" name="submit" value="submit" class="btn btn-default">
                                        <button type="reset" class="btn btn-primary">Reset Button</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

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
    <script type="text/javascript">
        window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
        }
        function validatePassword(){
        var pass2=document.getElementById("password2").value;
        var pass1=document.getElementById("password1").value;
        if(pass1!=pass2)
        document.getElementById("password2").setCustomValidity("Password Tidak Sama");
        else
        document.getElementById("password2").setCustomValidity("");}
    </script>
</body>
</html>