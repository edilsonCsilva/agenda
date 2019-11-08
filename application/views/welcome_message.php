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
                        <tbody id="indexTableContato">
                            <tr>

                                <td colspan="6">Não há Contatos no Cadastrados</td>
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
            <div class="modal fade" tabindex="-1" role="dialog"  id="indexCadastroUpdate" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" >
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                &nbsp;Novo Cadastro

                            </h4>
                        </div>
                        <div class="modal-body">



                            <form id="indexFormCadastro">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nome do Contato</label>
                                    <input type="text" class="form-control" id="indexTxtNome" placeholder="Digite o nome..">
                                </div>
                               
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Nome do Contato</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o nome..">
                                </div>
                                
                                
                                 <div class="form-group">
                                    <label  >Sexo</label>
                                      <div class="checkbox">
                                    <label>
                                        <input type="radio" checked="true" name="indexOpSexo"> Masculino
                                    </label>
                                          
                                     <label>
                                         <input type="radio" name="indexOpSexo"> Feminino
                                    </label>
                                          
                                          
                                </div>
                                 </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="indexSave" >Criar</button>
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
            function setContatosInTable(contatos) {
                console.log(contatos)

                var qtItens = contatos.length;
                var tds = "";
                for (var poss = 0; poss < qtItens; poss++) {
                    console.log(contatos[poss])

                    var sexo = contatos[poss].sexo == "M" ? "Masculino" : "Feminino";


                    var data = contatos[poss].id + "|" + contatos[poss].nome + "|" + sexo + "|" + contatos[poss].idade;


                    tds += " <tr>";
                    tds += "    <th scope=\"row\">" + contatos[poss].id + "</th>";
                    tds += "    <td>" + contatos[poss].nome + "</td>";
                    tds += "    <td>" + sexo + "</td>";
                    tds += "    <td>" + contatos[poss].idade + "</td>";
                    tds += "    <td><a href=\"javascript:void(0)\" data-role=\"" + data + "\"  class=\"indexEditContato_Action\"    >   <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> </a></td>";
                    tds += "    <td><a href=\"javascript:void(0)\" data-role=\"" + data + "\" class=\"indexRemoveContato_Action\"  ><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>";
                    tds += "</tr>";

                }


                $("#indexTableContato").html(tds)




            }
            function getListContatos() {
                //Lista os Contatos na Tela com consulta da Api
                var dados = {};
                $.ajax({
                    type: "POST",
                    url: 'api/getContatosAll',
                    data: dados,
                    success: function (response) {
                        // console.log(response)
                        try {

                            response = JSON.parse(response)
                            setChartPizza(response.qtMasc, response.qtFem);
                            setContatosInTable(response.contatos)





                        } catch (e) {
                            alert("Erro de Parser..!")
                        }


                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        alert("some error");
                    }
                });




            }



            $(function () {

                setChartPizza(0, 0);
                setBarChats();
                getListContatos();


                $("#indexNovoContato_Action").on("click", function () {
                    $("#indexCadastroUpdate").modal({"show": true})
                    
                    $('#indexCadastroUpdate').on('shown.bs.modal', function () {
                        $('#indexTxtNome').focus()
                    });
                  
                  
                  

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
