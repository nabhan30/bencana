<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?= 'assets/css/bootstrap.css';?>" rel="stylesheet" />
    <link href="<?= 'assets/css/font-awesome.css';?>" rel="stylesheet" />
    <link href="<?= 'assets/css/custom.css';?>" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background: #F3F3F3;">
<div class="background">
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <img width=200 height=125 src="<?= 'assets/img/logo.png';?>">
                <h2></h2>
                <br />
            </div>
        </div>
         <div class="row ">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <strong>Login to access </strong>  
                </div>
                <div class="panel-body">
                <?php echo $this->session->flashdata('msg') ?>
                  <form role="form" method="post" action="<?= base_url('C_user/login');?>">
                    <br />
                    <div class="form-group input-group">
                      <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                      <input type="text" class="form-control" placeholder="Your Username" name="username" required oninvalid="this.setCustomValidity('Masukan username')" oninput="setCustomValidity('')"/>
                    </div>
                    <div class="form-group input-group">
                      <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                      <input type="password" class="form-control"  placeholder="Your Password" name="password" required oninvalid="this.setCustomValidity('Masukan password')" oninput="setCustomValidity('')" />
                    </div>
                   
                      <input type="submit" value="submit" name="submit">
                  </form>
                </div>       
              </div>
            </div>       
        </div>
    </div>
    <script src="<?= base_url('assets/js/jquery-1.10.2.js');?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js');?>"></script>
</div>
</body>
</html>
