
<!DOCTYPE html>
<html>
    <title>SALUD EN TACNA</title>
    <link rel="shortcut icon" href="images/icono.png" />

    <head>
        <meta name="keywords" content="salud en tacna, clinicas tacna, odontologos tacna, optica tacna">
        <meta name="keywords" content="salud en tacna, clinicas tacna, odontologos tacna, optica tacna">
        <meta name="keywords" content="salud en tacna, clinicas tacna, odontologos tacna, optica tacna">
    <link href="../views/estilos/estylo.css" rel="stylesheet" title="Default Style">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script type="text/JavaScript" src="../views/js/menu.js"></script>
    <script src="../views/js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script>
    $(document).ready(function(){
    $("#spa").click(function(evento){
      evento.preventDefault();
          $("#destino").load("../views/prueba.php" , {tipo: "spa"});
    });

    $("#dentista").click(function(evento){
      evento.preventDefault();
          $("#destino").load("../views/prueba.php" , {tipo: "dentista"});
    });


    $("#optica").click(function(evento){
      evento.preventDefault();
          $("#destino").load("../views/prueba.php" , {tipo: "optica"});
    });


    $("#clinica").click(function(evento){
      evento.preventDefault();
          $("#destino").load("../views/prueba.php" , {tipo: "clinica"});
    });

    $("#medicina").click(function(evento){
      evento.preventDefault();
          $("#destino").load("../views/prueba.php" , {tipo: "medicina"});
    });

    $("#tomografia").click(function(evento){
      evento.preventDefault();
          $("#destino").load("../views/prueba.php" , {tipo: "tomografia"});
    });
    })
    </script>
    <script languaje="Javascript">

    function info(capa,enlace)
    {
        if (document.getElementById)
        {
            var aux = document.getElementById(capa).style;
            aux.display = aux.display? "":"block";
        }
    }
    </script>
    <style type="text/css">div.cp_oculta{display: none;}</style>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="../views/estilos/masinformacion.css" rel="stylesheet" title="Default Style">

    <div class="topnav" id="myTopnav">
        <a href="index.php" class="active">SERVICIOS DE SALUD<br>Bienvenido</a>
        <a  id="dentista">ODONTOLOGOS<br>Tacna</a>
        <a  id="spa">SPA'S<br>Tacna</a>
        <a  id="clinica">CLINICAS<br>Tacna</a>
        <a  id="optica">OPTICAS<br>Tacna</a>
        <a  id="tomografia">TOMOGRAFIA<br>Tacna</a>
        <a  id="medicina">MEDICINA ESTETICA<br>Tacna</a>
        <a href="javascript:void(0);" class="menu" onclick="menu()">&#9776;</a>
      </div>
    </head>
    <body style="background-color:#F0F8FF;">
    <div class="container">
        <div class="row">
            <!--la parte de publicidad-->
            <br>
            <div class="col-md-2">
                    <div class="slider">
                            <ul>
                                <li>
                                <img src="images/hoteles_tacna.jpg" alt="">
                                </li>
                                <li>
                                <img src="images/agencias_tacna.jpg" alt="">
                                </li>
                                <li>
                                <img src="images/salud_tacna.jpg" alt="">
                                </li>
                                <li>
                                <img src="images/turismo_tacna_peru.jpg" alt="">
                                </li>
                            </ul>
                        </div>
                <table class="table-publicidad">
                        <tr class="tr-publicidad">
                            <th class="th-publicidad">Circuitos Turisticos</th>
                        </tr>
                        <tr class="tr-publicidad">
                            <td class="td-publicidad"><a href="#">City Tour Tacna</a></td>
                        </tr>

                        <tr class="tr-publicidad">
                                <td class="td-publicidad"><a href="#">Circuito Andino</a></td>
                        </tr>

                        <tr class="tr-publicidad">
                                <td class="td-publicidad"><a href="#">Miculla Valle Viejo</a></td>
                        </tr>

                        <tr class="tr-publicidad">
                                <td class="td-publicidad"><a href="#">Circuito Litoral</a></td>
                        </tr>
                </table>

            </div>
        <!--la parte de listado-->
                <div class="col-md-7" id="destino">
                    <link href="../views/estilos/lista.css" rel="stylesheet" title="Default Style">
                    <!-- Contenedor -->
                    <div class="pricing-wrapper clearfix">
                        <!-- Titulo -->
                        <h1 class="pricing-table-title">LISTA PRINCIPAL</h1>
                        <!--a partir de aqui-->
                        <?php
                        foreach ($clinicas as $clinicas) {
                        ?>
                        <div class="pricing-table recommended">
                            <h2 class="pricing-title"><?php echo $clinicas['nombre']; ?></h2>
                            <!-- Lista de Caracteristicas / Propiedades -->
                            <ul class="table-list">
                                <table class="tabla-principal">
                                    <tr>
                                        <th></th>
                                      <td WIDTH="80%" HEIGHT="80%" rowspan="6"><img src="<? echo $clinicas['img'];?>" alt="odontologias tacna" style="width:80%;"></td>
                                      <td><a href="URL-maps" target="_blank"><img alt="ubicame en tacna" height="32" src="images/direccion.png" title="sígueme por Correo" width="32" /></a></td>
                                      <td><a><h5><? echo $clinicas['ubicacion']; ?><a></h5></td>
                                    </tr>
                                    <tr>
                                      <th></th>
                                      <td><a href="URL-maps" target="_blank"><img alt="odontologias tacna" height="32" src="images/telefono.png" title="sígueme por Correo" width="32" /></a></td>
                                      <td><h5><? echo $clinicas['celular']; ?></h5></td>
                                    </tr>
                                    <tr>
                                      <th></th>
                                      <td><a href="URL-maps" target="_blank"><img alt="ubicame en tacna" height="32" src="images/usuario.png" title="sígueme por Correo" width="32" /></a></td>
                                      <td><h5><? echo $clinicas['horario']; ?></h5></td>
                                    </tr>

                                    <tr>
                                        <th></th>
                                        <td><a href="URL-Correo" target="_blank"><img alt="sígueme por Correo" height="32" src="images/logo-gmail.png" title="sígueme por Correo" width="32" /></a>
                                            </td>
                                        <td><a><h5><? echo $clinicas['email']; ?></h5></a></td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td><a href="URL-web" target="_blank"><img alt="sígueme por Correo" height="32" src="images/mundo-en-red.png" title="sígueme por Correo" width="32" /></a></td>
                                        <td><a><h5><? echo $clinicas['website']; ?></h5></a></td>
                                    </tr>

                                    <tr>
                                        <th></th>
                                        <td><a href="URL-FACEBOOK" target="_blank"><img alt="siguenos en facebook" height="32" src="images/facebook-logo.png" title="siguenos en facebook" width="32" /></a></td>
                                        <td><a>facebook</a></td>
                                    </tr>
                                </table>
                                <div class="table-buy">
                                      <?php $id =$clinicas['id'];?>
                                    <a href="javascript:info('<?php echo $id; ?>');" class="pricing-action">mas informacion</a>
                                    <div class="cp_oculta" id="<?php echo $id; ?>">
                                              <table BORDER WIDTH="100%" class="tabla-info">
                                                  <tr>
                                                    <td>
                                                      <div id="contenedor">
                                                          <input id="tab1" type="radio" name="opcion" checked="checked" />
                                                          <label for="tab1">GALERIA</label>
                                                          <input id="tab2" type="radio" name="opcion" />
                                                          <label for="tab2">INFORMACION</label>
                                                          <input id="tab3" type="radio" name="opcion" />
                                                          <label for="tab3">OFERTAS</label>
                                                          <div id="contenido">
                                                            <div id="contenido1">

                                                              <p class="left">
                                                                  <div class="w3-content w3-display-container">
                                                                    <?php
                                                                      include_once '../views/config.php';
                                                                      $query = $pdo->prepare("SELECT * FROM clinicas, galeria WHERE clinicas.id = galeria.id_clinicas AND galeria.id_clinicas = '$id'");
                                                                      $query->execute();
                                                                      while ( $imagenes = $query->fetch(\PDO::FETCH_ASSOC))
                                                                      {
                                                                      ?>
                                                                        <img class="mySlides" src="<? echo $imagenes['imagenes'];?>" style="width:100%">
                                                                      <?} ?>
                                                                      <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                                                                      <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                                                                    </div>
                                                              </p>
                                                              <script type="text/JavaScript" src="../views/js/masinformacion.js"></script>

                                                          </div>
                                                            <div id="contenido2">
                                                              <!--google maps-->

                                                                <div class="google-maps">
                                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12698.017302765014!2d-5.924386855443038!3d37.28317952472348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd12705c945f7355%3A0x1f6735c306757c59!2sDos+Hermanas%2C+Sevilla%2C+Espa%C3%B1a!5e0!3m2!1ses!2s!4v1387797719272" width="600" height="450" frameborder="0" style="border:0"></iframe>
                                                                </div>
                                                                <?php

                                                                $query = $pdo->prepare("SELECT * FROM clinicas, promociones WHERE clinicas.id = promociones.id_clinicas AND promociones.id_clinicas = '$id'");
                                                                $query->execute();
                                                                while ( $row = $query->fetch(\PDO::FETCH_ASSOC))
                                                                {
                                                                 echo $row['promocion'];
                                                                }
                                                                ?>
                                                              <!--Termina google maps-->
                                                            </div>
                                                            <div id="contenido3">
                                                              <p>Contenido 3</p>
                                                              <?php

                                                              $query = $pdo->prepare("SELECT * FROM clinicas, promociones WHERE clinicas.id = promociones.id_clinicas AND promociones.id_clinicas = '$id'");
                                                              $query->execute();
                                                              while ( $row = $query->fetch(\PDO::FETCH_ASSOC))
                                                              {
                                                              ?>
                                                              <ul>
                                                                <li><p>precios :</p><? echo $row['promocion'];?></li>
                                                              </ul>
                                                                <?
                                                              } ?>
                                                              <p>promocion</p>
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </td>
                                                  </tr>
                                                </table>

                                    </div>

                                        <!--fin-->
                                </div>
                            </ul>
                        </div><!--fin del bloque1-->
                      <?
                        //aqui se encuetra el final del php
                        }
                       ?>
                        <!--fin del bloque2-->
                    </div>
                </div>
            <!--la parte de links de paginas-->
                <div  class="col-md-3">
                    <div class="slider">
                        <ul>
                            <li>
                            <img src="images/restaurantes_arica.jpg"  alt="restaurantes arica">
                            </li>
                            <li>
                            <img src="images/restaurantes_tacna.jpg" alt="restaurantes tacna">
                            </li>
                            <li>
                            <img src="images/hoteles_tacna.jpg" alt="hoteles en tacna">
                            </li>
                            <li>
                            <img src="images/diviertete_tacna.jpg" alt="diversion tacna">
                            </li>
                        </ul>
                    </div>
                 <table class="table-publicidad">
                        <tr class="tr-publicidad">
                            <th class="th-publicidad">Clima en Tacna</th>
                        </tr>
                </table>
                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                     <tr>
                        <td><div id="TT_VhZ7Arn7o6pSgT9Z7sKY7oypSct9Z"><h2><a href="http://www.tutiempo.net/">El tiempo</a></h2>
                            <a href="http://www.tutiempo.net/tiempo/Tacna/SPTN.htm">El tiempo en Tacna</a></div>
                        <script type="text/javascript" src="http://www.tutiempo.net/TTapi/cc/VhZ7Arn7o6pSgT9Z7sKY7oypSct9Z"></script></td>
                    </tr>
                 </table>
                 <br>
                 <table class="table-publicidad">
                        <tr class="tr-publicidad">
                            <th class="th-publicidad">visitanos!</th>
                        </tr>
                        <tr class="tr-publicidad">
                                <td class="td-publicidad"><a title="turismo" href="http://www.saludentacna.com"><img src="images/agencias_tacna.jpg" alt="agencias"></a></td>
                        </tr>
                        <tr class="tr-publicidad">
                                <td class="td-publicidad"><img src="images/fotos_tacna.jpg" alt="fotos de tacna"></td>
                        </tr>

                        <tr class="tr-publicidad">
                                <td class="td-publicidad"><img src="images/hoteles_tacna.jpg" alt="hoteles en Tacna"></td>
                        </tr>

                        <tr class="tr-publicidad">
                                <td class="td-publicidad"><img src="images/salud_tacna.jpg" alt="salud en , odontologias clinicas tacna"></td>
                        </tr>
                </table>
                </div>
        </div>
    </div>
  </body>
</html>
