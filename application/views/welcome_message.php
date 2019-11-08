<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">



        <script src="js/jquery-3.4.1.min.js"></script>
        <title>Agenda de Contatos</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

        <!-- Custom styles for this template -->
        <link href="css/sticky-footer-navbar.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>

        <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index">Agenda de Contatos</a>
                </div>

                <!--/.nav-collapse -->
            </div>
        </nav>

        <!-- Begin page content -->
        <div class="container">
            <div class="page-header">
                <h1>Agenda de  Contatos</h1>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div id="piechart" style="width: 400px; height: 500px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="col-md-6">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <div id="chart_div" style="width: 700px; height: 400px;"></div>
                            </div>
                        </div>



                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-md-8">



                    <table class="table">
                        <caption>
                            <a href="javascript:void(0)" class="btn btn-danger"
                               ><span class="glyphicon glyphicon-pencil" aria-hidden="true" ></span> 
                                Cadastrar Novo Contato</a>   </caption>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>








                </div>

                <div class="col-md-4">&nbsp;</div>
            </div>






            <footer class="footer">
                <div class="container">
                    <p class="text-muted">Place sticky footer content here.</p>
                </div>
            </footer>

        </div>

        <!-- Bootstrap core JavaScript
================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <script>
            window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
        </script>
        <script src="js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


        <script type="text/javascript">
            function setChartPizza(masculino, feminino) {
                google.charts.load('current', {
                    'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {

                    var data = google.visualization.arrayToDataTable([
                        ['', ''],
                        ['Masculino', masculino],
                        ['Feminino', feminino],
                    ]);

                    var options = {
                        title: 'Total de Contatos (Masculino/Femenino)'
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                    chart.draw(data, options);
                }
            }


            function drawMaterial() {
                var data = new google.visualization.DataTable();
                data.addColumn('timeofday', 'Time of Day');
                data.addColumn('number', 'Motivation Level');
                data.addColumn('number', 'Energy Level');

                data.addRows([
                    [{
                            v: [8, 0, 0],
                            f: '8 am'
                        }, 1, .25],
                    [{
                            v: [9, 0, 0],
                            f: '9 am'
                        }, 2, .5],
                    [{
                            v: [10, 0, 0],
                            f: '10 am'
                        }, 3, 1],
                    [{
                            v: [11, 0, 0],
                            f: '11 am'
                        }, 4, 2.25],
                    [{
                            v: [12, 0, 0],
                            f: '12 pm'
                        }, 5, 2.25],
                    [{
                            v: [13, 0, 0],
                            f: '1 pm'
                        }, 6, 3],
                    [{
                            v: [14, 0, 0],
                            f: '2 pm'
                        }, 7, 4],
                    [{
                            v: [15, 0, 0],
                            f: '3 pm'
                        }, 8, 5.25],
                    [{
                            v: [16, 0, 0],
                            f: '4 pm'
                        }, 9, 7.5],
                    [{
                            v: [17, 0, 0],
                            f: '5 pm'
                        }, 10, 10],
                ]);

                var options = {
                    title: 'Motivation and Energy Level Throughout the Day',
                    hAxis: {
                        title: 'Time of Day',
                        format: 'h:mm a',
                        viewWindow: {
                            min: [7, 30, 0],
                            max: [17, 30, 0]
                        }
                    },
                    vAxis: {
                        title: 'Rating (scale of 1-10)'
                    }
                };

                var materialChart = new google.charts.Bar(document.getElementById('chart_div'));
                materialChart.draw(data, options);
            }



            function setBarChats() {
                google.charts.load('current', {
                    packages: ['corechart', 'bar']
                });
                google.charts.setOnLoadCallback(drawMaterial);

            }



            $(function () {
                setChartPizza(125, 52);
                setBarChats();

            });
        </script>

    </body>

</html>