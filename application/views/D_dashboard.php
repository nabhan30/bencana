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
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Konsumsi'],
          <?php
          foreach ($data_konsumsi as $key => $value) {
            echo json_encode($value).',';
          }
          ?>
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }

      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Industri'],
          <?php
          foreach ($data_industri as $key => $value) {
            echo json_encode($value).',';
          }
          ?>
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_industri'));
        chart.draw(data, options);
      }
    </script>
</head>
<body>
  <div class="wrapper">
    <form role="form" method="post" action="<?= base_url('C_executive/dashboard');?>">
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

    <div id="page-wrapper">
      <div id="page-inner">
        <div class="row">
          <div class="col-md-12">
            <h2>Executive</h2>
            <div id="chart_div" style="width: 98%; height: 400px;"></div>
            <div id="chart_industri" style="width: 98%; height: 400px;"></div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>