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
    <script type="text/javascript">
    function populate(s1,s2) {
        var s1 = document.getElementById(s1);
        var s2 = document.getElementById(s2);
        s2.innerHTML="";
        if(s1.value=="konsumsi") {
            var optionArray=["makanan|Makanan","minuman|Minuman"];
            $("#tglK").fadeIn();
        } else {
            var optionArray=["alat rumah tangga|Alat Rumah Tangga", "elektronik|Elektronik", "bangunan|Bangunan"];
            $("#tglK").fadeOut();
        }
        for(var option in optionArray) {
            var pair=optionArray[option].split("|");
            var newOption=document.createElement("option");
            newOption.value=pair[0];
            newOption.innerHTML=pair[1];
            s2.options.add(newOption);
        }
    }
    </script>
</head>
<body>
    <div class="wrapper">
        <form role="form" method="post" action="<?= base_url('C_adminoperator/input');?>">
            <nav class="navbar navbar-default navbar-fixed-top navbar-cls-top" role="navigation" style="margin-bottom:0">
                <div style="color:white;
                            padding:15px 50px 10px 50px;
                            float:right;">
                            <a href="<?= base_url('C_user');?>" class="btn btn-danger square-btn-adjust">Logout
                            </a>
                </div>
                <div>
                <img style="margin-left: 10px; margin-top: 5px;" width=235 height=48 src="<?= base_url('assets/img/logo123.png');?>">
                </div>
            </nav>
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li>
                            <a href="<?= base_url('C_adminoperator');?>"><i class="fa fa-keyboard-o"></i>Input</a>
                        </li>
                    </ul>
                </div>
            </nav>
        
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Admin Operator</h2>
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
                                            <label>Kategori</label>
                                            <select class="form-control" name="kategori" id="kategori" onChange="populate(this.id,'tipe')" required oninvalid="this.setCustomValidity('Masukan kategori')" oninput="setCustomValidity('')">
                                                <option value="" selected disabled>Pilih Kategori</option>
                                                <option value="konsumsi" onChange="showdate(this.checked)">Konsumsi</option>
                                                <option value="industri">Industri</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tipe</label>
                                            <select class="form-control" name="tipe" id="tipe" required oninvalid="this.setCustomValidity('Masukan tipe')" oninput="setCustomValidity('')">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Barang</label>
                                            <input class="form-control" name="merk" required oninvalid="this.setCustomValidity('Masukan nama barang')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label>Kode Barang</label>
                                            <input class="form-control" name="kode" required oninvalid="this.setCustomValidity('Masukan kode barang')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Barang</label>
                                            <input class="form-control" name="jumlah" type="number" required oninvalid="this.setCustomValidity('Masukan jumlah barang')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Masuk</label>
                                            <input class="form-control" name="tglM" type="date" required oninvalid="this.setCustomValidity('Masukan tanggal masuk')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <p id="tglK" style="display:none;"><label>Tanggal Kadaluarsa</label>
                                            <input class="form-control" name="tglK" type="date"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Beli</label>
                                            <input class="form-control" name="hargaB" type="number" required oninvalid="this.setCustomValidity('Masukan harga beli')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Jual</label>
                                            <input class="form-control" name="hargaJ" type="number" required oninvalid="this.setCustomValidity('Masukan harga jual')" oninput="setCustomValidity('')">
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
        </form>
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