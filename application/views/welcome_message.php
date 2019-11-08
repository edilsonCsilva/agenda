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
                    <div class="card" style="width:55rem; border: 1px solid #000;">
                        <div class="card-body">
                            <div id="piechart" style="width: 540px; height: 395px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="col-md-12">
                        <div class="card" style="width: 30rem; border: 1px solid #000;">
                            <img src="img/img.jpeg" class="card-img-top" alt="...">
                            <hr>
                            <div class="card-body">
                                <h4>&nbsp;Media das Idades</h4>

                                <p id="indexMedia" class="text-center" style="font-size:102px; ">
                                    0
                                </p>
                            </div>
                        </div>



                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-md-8">



                    <table class="table">
                        <caption>
                            <br>
                            <a href="javascript:void(0)" id="indexNovoContato_Action" class="btn btn-danger"
                               ><span class="glyphicon glyphicon-pencil" aria-hidden="true" ></span>
                                Cadastrar Novo Contato</a>  
                            <br>
                        </caption>
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



            <!--tela de Cadastro -->
            <div class="modal fade" tabindex="-1" role="dialog"  id="indexCadastro" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="indexCadastroTitle">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                &nbsp;Novo Cadastro

                            </h4>
                        </div>
                        <div class="modal-body">
                            <div id="indexCadastroMsn"></div>

                            <form id="indexFormCadastro">

                                <input type="hidden" id="_codigo_" name="_codigo_" value="" />
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nome do Contato</label>
                                    <input type="text" class="form-control" id="indexTxtNome" name="indexTxtNome" placeholder="Digite o nome..">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Idade</label>
                                    <input type="text" class="form-control" id="indexTxtidade" name="indexTxtidade"  placeholder="Digite o nome..">
                                </div> 
                                <div class="form-group">
                                    <label  >Sexo</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="radio" value="M" checked="true" name="indexOpSexo"> Masculino
                                        </label>

                                        <label>
                                            <input type="radio" value="F" name="indexOpSexo"> Feminino
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
            <!--tela de Cadastro -->

            <!--tela de remocao-->

            <div class="modal fade" tabindex="-1" role="dialog" id="indexDelete">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Remover Registro</h4>
                        </div>
                        <div class="modal-body" id="indexDeleteBody">
                            <h3><p>Processando...</p></h3>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="indexRemove">Excluir</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->



            <!--tela de remocao-->






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
            function setContatosInTable(contatos) {
                //console.log(contatos)

                var qtItens = contatos.length;
                var tds = "";
                var soma = 0;
                for (var poss = 0; poss < qtItens; poss++) {
                    //  console.log(contatos[poss])

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

                    soma += parseInt(contatos[poss].idade);

                }

                if(qtItens==0){
                    tds="<td colspan='6'><h1>Não há Contatos Cadastrados..!</h1></td>";
                    $("#indexMedia").html("0");
                }else{
                    $("#indexTableContato").html(tds)
                    $("#indexMedia").html(parseInt(soma / qtItens))
                }


                $(".indexEditContato_Action").on("click", function () {
                    var dados = $(this).attr("data-role").split("|");
                    $("#indexCadastroMsn").html("");

                    $("#_codigo_").val(dados[0])
                    $("#indexTxtNome").val(dados[1])
                    $("#indexTxtidade").val(dados[3])

                    if (dados[2] == "Masculino") {
                        $('input:radio[name="indexOpSexo"]').filter('[value="M"]').attr('checked', true);
                    } else {
                        $('input:radio[name="indexOpSexo"]').filter('[value="F"]').attr('checked', true);
                    }
                    $("#indexCadastroTitle").html(" <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>&nbsp;Editar  Cadastro")
                    $("#indexSave").html("Atualizar")
                    $("#indexCadastro").modal()

                });

                $(".indexRemoveContato_Action").on("click", function () {

                    var dados = $(this).attr("data-role").split("|");
                    $("#_codigo_").val(dados[0]);
                    getContatoBY(dados[0]);




                });





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
            function getContatoBY(id) {


                $.ajax({
                    type: "GET",
                    url: 'api/getContatosBy/' + id,
                    success: function (response) {
                        console.log(response)
                        try {
                            response = JSON.parse(response)
                            var contato = response.contatos[0];
                            var sexo = contato.sexo == "M" ? "Masculino" : "Feminino";

                            var html = "Deseja Remover o Registro ?"
                            html += "<br><br>";
                            html += "Codigo:";
                            html += "";
                            html += "<div class=\"alert alert-success\" role=\"alert\">" + contato.id + "</div>";
                            html += "";
                            html += "Nome do Contato:";
                            html += "<br>";
                            html += "<div class=\"alert alert-success\" role=\"alert\">" + contato.nome + "</div>";
                            html += "Sexo:";
                            html += "<br>";
                            html += "<div class=\"alert alert-success\" role=\"alert\">" + sexo + "</div>";
                            html += "Idade:";
                            html += "<br>";
                            html += "<div class=\"alert alert-success\" role=\"alert\">" + contato.idade + "</div>";
                            $("#indexDeleteBody").html(html)
                            $("#indexDelete").modal();
                            
                            $("#indexRemove").on("click", function () {
                                var dados ={"codigo": $("#_codigo_").val()};
                                $.ajax({
                                    type: "POST",
                                    url: 'api/delContato',
                                    data: dados,
                                    success: function (response) {
                                        console.log(response)
                                        
                                        
                                        try {
                                            /*
                                            response = JSON.parse(response)
                                            if (response.erros) {
                                                var erros = response.msn.split("|");
                                                var ul = "<ul>";
                                                for (var i = 0; i < erros.length; i++) {
                                                    if (erros[i] != '') {
                                                        ul += "<li>" + erros[i] + "</li>";
                                                    }
                                                }
                                                ul = ul + "</ul>";
                                                var alert = "<div class=\"alert alert-success\" role=\"alert\">" + ul + "</div>";
                                                $("#indexCadastroMsn").html(alert)
                                            } else {
                                                getListContatos();
                                                $('#indexCadastro').modal('hide')
                                            }
                                            */
                                            getListContatos();
                                            $('#indexDelete').modal('hide')
                                           
                                           
                                        } catch (e) {
                                            alert("Erro de Parser..!")
                                        }


                                    },
                                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                                        alert("some error");
                                    }
                                });
                                
                            });
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
                getListContatos();
                $("#indexNovoContato_Action").on("click", function () {
                    $("#indexCadastroMsn").html("");
                    $("#_codigo_").val("")
                    $("#indexTxtNome").val("")
                    $("#indexTxtidade").val("")
                    $("#indexCadastroTitle").html(" <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>&nbsp;Novo Cadastro")
                    $("#indexSave").html("Criar")
                    $("#indexCadastro").modal()

                    $('#indexCadastro').on('shown.bs.modal', function () {
                        $('#indexTxtNome').focus()

                    });
                });
                $("#indexSave").on("click", function () {


                    var dados = $("#indexFormCadastro").serialize()
                    $.ajax({
                        type: "POST",
                        url: 'api/createContatos',
                        data: dados,
                        success: function (response) {
                            console.log(response)
                            try {

                                response = JSON.parse(response)
                                if (response.erros) {
                                    var erros = response.msn.split("|");
                                    var ul = "<ul>";
                                    for (var i = 0; i < erros.length; i++) {
                                        if (erros[i] != '') {
                                            ul += "<li>" + erros[i] + "</li>";
                                        }
                                    }
                                    ul = ul + "</ul>";
                                    var alert = "<div class=\"alert alert-success\" role=\"alert\">" + ul + "</div>";
                                    $("#indexCadastroMsn").html(alert)
                                } else {
                                    getListContatos();
                                    $('#indexCadastro').modal('hide')
                                }

                            } catch (e) {
                                alert("Erro de Parser..!")
                            }


                        },
                        error: function (XMLHttpRequest, textStatus, errorThrown) {
                            alert("some error");
                        }
                    });


                });
            });
        </script>

    </body>

</html
