﻿<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Software académico</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#"></a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#"></a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br><br>
                <h1 class="header center orange-text">Software académico</h1>
                <br><br>
            </div>
        </div>
        <div class="container">
            <div class="section">

                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s4">
                                <input class="validate" id="cod" name="cod" type="text">
                                <label for="cod">Código estudiantil</label>
                            </div>
                            <div class="input-field col s2">
                                <input id="semestre" name="semestre" type="number" class="validate">
                                <label for="semestre">Semestre</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="years" name="years" type="number" class="validate">
                                <label for="years">Año</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="periodo" name="periodo" type="number" class="validate">
                                <label for="periodo">Periodo Actual</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6 offset-s6">
                                <p class="right-align">
                                    <input type="checkbox" id="nivelado" name="nivelado" checked="checked" />
                                    <label for="nivelado">El estudiante se encuentra nivelado?</label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6 offset-s6 right-align">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Calcular
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br><br>
        </div>
        <footer class="page-footer orange">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text"></h5>
                        <p class="grey-text text-lighten-4"></p>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text"></h5>
                        <ul>
                            <li><a class="white-text" href="#!"></a></li>
                            <li><a class="white-text" href="#!"></a></li>
                        </ul>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text"></h5>
                        <ul>
                            <li><a class="white-text" href="#!"></a></li>
                            <li><a class="white-text" href="#!"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <a class="orange-text text-lighten-3" href="http://materializecss.com"></a>
                </div>
            </div>
        </footer>
        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
    </body>
</html>
