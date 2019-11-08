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
                            <div id="piechart" style="width: 700px; height: 500px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="col-md-6">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <div id="chart_div" style="width: 700px; height: 300px;"></div>
                            </div>
                        </div>



                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-md-8">



                    <table class="table">
                        <caption>
                            <a href="javascript:void(0)" id="indexNovoContato_Action" class="btn btn-danger"
                               ><span class="glyphicon glyphicon-pencil" aria-hidden="true" ></span> 
                                Cadastrar Novo Contato</a>   </caption>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome do Contato</th>
                                <th>Sexo</th>
                                <th>Idade</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td><a href="javascript:void(0)"  class="indexEditContato_Action"    >   <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </a></td>
                                <td><a href="javascript:void(0)"  class="indexRemoveContato_Action"  ><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
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



            <!--tela de Cadastro e Atualizacao-->
            <div class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>One fine body&hellip;</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!--tela de Cadastro e Atualizacao-->

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
            function setBarChats() {



            }


            function getListContatos(){
                //Lista os Contatos na Tela com consulta da Api
                
                
                
                
            }


         



            $(function () {

                setChartPizza(125, 52);
                setBarChats();
                getListContatos();


                $("#indexNovoContato_Action").on("click", function () {

                    alert("d")
                });

                $(".indexEditContato_Action").on("click", function () {

                    alert("s")
                });

                $(".indexRemoveContato_Action").on("click", function () {

                    alert("dd")
                });



            });
        </script>

    </body>

</html
 