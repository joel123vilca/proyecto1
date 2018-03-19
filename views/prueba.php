
<link href="../views/estilos/lista.css" rel="stylesheet" title="Default Style">
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
<div class="pricing-wrapper clearfix">
    <!-- Titulo -->
    <h1 class="pricing-table-title">LISTA DE <?php $tipo = $_POST["tipo"]; echo $tipo;?></h1>
    <!--a partir de aqui-->
    <div class="pricing-table recommended">
      <?php
        include_once '../views/config.php';
        $query = $pdo->prepare("SELECT * FROM clinicas WHERE  tipo = '$tipo'");
        $query->execute();
        while ( $lista = $query->fetch(\PDO::FETCH_ASSOC))
        {
        ?>
        <h2 class="pricing-title"><?php echo $lista['nombre']; ?></h2>
        <!-- Lista de Caracteristicas / Propiedades -->
        <ul class="table-list">
            <table class="tabla-principal">
                <tr>
                    <th></th>
                  <td WIDTH="80%" HEIGHT="80%" rowspan="6"><img src="<? echo $lista['img'];?>" alt="odontologias tacna" style="width:80%;"></td>
                  <td><a href="URL-maps" target="_blank"><img alt="ubicame en tacna" height="32" src="images/direccion.png" title="sígueme por Correo" width="32" /></a></td>
                  <td><h4><? echo $lista['ubicacion'];?></h4></td>
                </tr>
                <tr>
                  <th></th>
                  <td><a href="URL-maps" target="_blank"><img alt="ubicame en tacna" height="32" src="images/telefono.png" title="sígueme por Correo" width="32" /></a></td>
                  <td><h4><? echo $lista['celular'];?></h4></td>
                </tr>
                <tr>
                  <th></th>
                  <td><a href="URL-maps" target="_blank"><img alt="ubicame en tacna" height="32" src="images/usuario.png" title="sígueme por Correo" width="32" /></a></td>
                  <td><h4><? echo $lista['horario'];?></h4></td>
                </tr>

                <tr>
                    <th></th>
                    <td><a href="URL-Correo" target="_blank"><img alt="sígueme por Correo" height="32" src="images/logo-gmail.png" title="sígueme por Correo" width="32" /></a>
                        </td>
                    <td><h4><? echo $lista['email'];?></h4></td>
                </tr>
                <tr>
                    <th></th>
                    <td><a href="URL-web" target="_blank"><img alt="sígueme por Correo" height="32" src="images/mundo-en-red.png" title="sígueme por Correo" width="32" /></a></td>
                    <td><h4><? echo $lista['website']; ?></h4></td>
                </tr>

                <tr>
                    <th></th>
                    <td><a href="URL-FACEBOOK" target="_blank"><img alt="siguenos en facebook" height="32" src="images/facebook-logo.png" title="siguenos en facebook" width="32" /></a></td>
                    <td><a>facebook</a></td>
                </tr>
            </table>


            <div class="table-buy">
                <a class="pricing-action" href="javascript:info('texto1');" >mas informacion</a>
                <br><br>
                <div class="cp_oculta" id="texto1">
                  <table BORDER WIDTH="100%" class="tabla-info">
                      <tr>
                        <td>
                          <div id="contenedor">
                              <input id="tab1" type="radio" name="opcion" checked="checked" />
                              <label for="tab1">IMAGENES</label>
                              <input id="tab2" type="radio" name="opcion" />
                              <label for="tab2">INFORMACION</label>
                              <input id="tab3" type="radio" name="opcion" />
                              <label for="tab3">OFERTAS</label>
                              <div id="contenido">
                                <div id="contenido1">
                                  <p class="left">
                                      <div class="w3-content w3-display-container">
                                        <?php
                                        $id= $lista['id'];
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
    <? } ?>

</div>
