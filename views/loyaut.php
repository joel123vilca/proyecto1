
<!DOCTYPE html>
<html>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <head>
        <meta name="keywords" content="salud en tacna, clinicas tacna, odontologos tacna, optica tacna">
        <meta name="keywords" content="salud en tacna, clinicas tacna, odontologos tacna, optica tacna">
        <meta name="keywords" content="salud en tacna, clinicas tacna, odontologos tacna, optica tacna">

    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script type="text/JavaScript" src="../views/js/menu.js"></script>
    <script src="../views/js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="../views/js/opcion.js" type="text/javascript"></script>
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
      </head>

    <body style="background-color:#F0F8FF;">
    <div class="container">
        <div class="row">
            <!--la parte de publicidad-->
            <br>

        <!--la parte de listado-->
                <div class="col-md-7" id="destino" >
                    <link href="../views/estilos/lista.css" rel="stylesheet" title="Default Style">
                    <!-- Contenedor -->
                    <div class="pricing-wrapper clearfix">
                        <!-- Titulo -->
                        <h1 class="pricing-table-title">Lista de <?$tipo = $_POST["tipo"]; echo $tipo ?></h1>
                        <!--a partir de aqui-->
                        <?php
                         include_once '../config.php';
                         $query = $pdo->prepare("SELECT * FROM clinicas WHERE  tipo = '$tipo'");
                         $query->execute();
                         $clinicas = $query->fetchAll(\PDO::FETCH_ASSOC);
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
                                    </tr>

                                    <tr>
                                        <th></th>
                                        <td><a href="URL-Correo" target="_blank"><img alt="clinicas tacna" height="32" src="images/logo-gmail.png" title="sígueme por Correo" width="32" /></a>
                                            </td>
                                        <td><a><h5><? echo $clinicas['email']; ?></h5></a></td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td><a href="#" target="_blank"><img alt="clinicas en tacna" height="32" src="images/mundo-en-red.png" title="sígueme por Correo" width="32" /></a></td>
                                        <td><a target="_blank" href="<? echo $clinicas['website']; ?>" ><? echo $clinicas['website']; ?></a></td>
                                    </tr>

                                    <tr>
                                        <th></th>
                                        <td><a href="URL-FACEBOOK" target="_blank"><img alt="imagen tacna" height="32" src="images/facebook-logo.png" title="siguenos en facebook" width="32" /></a></td>
                                        <td><a target="_blank" href="<? echo $clinicas['facebook']; ?>" >facebook</a></td>
                                    </tr>
                                </table>
                                <div class="table-buy">
                                      <?php $id =$clinicas['id'];?>
                                    <a href="javascript:info('<?php echo $id; ?>');" class="pricing-action">Ver Mas</a>
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
                                                                      include '../config.php';
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
                                                                <iframe src="<? echo $clinicas['mapa'];?>" width="600" height="450" frameborder="0" style="border:0"></iframe>
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

                                                              <table  style="width: 100%;
                                                              border: 1px solid #000;">
                                                              <?php

                                                              $query = $pdo->prepare("SELECT * FROM clinicas, promociones WHERE clinicas.id = promociones.id_clinicas AND promociones.id_clinicas = '$id'");
                                                              $query->execute();
                                                              while ( $row = $query->fetch(\PDO::FETCH_ASSOC))
                                                              {
                                                              ?>
                                                              <tr>
                                                                <td class="promotd">comentario</td><td class="promo">S/.<? echo $row['promocion'];?></td>
                                                              </tr>
                                                                <?
                                                              } ?>
                                                            </table>
                                                            <style>
                                                            .promotd{
                                                              width: 70%;
   text-align: left;
   vertical-align: top;
   border: 1px solid #000;
   border-collapse: collapse;
                                                            }
                                                            .promo{
                                                              width: 30%;
   text-align: center;
   vertical-align: top;
   border: 1px solid #000;
   border-collapse: collapse;
   font size:3;
   font-weight: bold;
   color:#117A65;
                                                            }
                                                            </style>
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
        </div>
    </div>
  </body>
</html>
