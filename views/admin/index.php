
<html>
<head>
  <title>salud en tacna</title>
</head>
<div>
</div>
<body>
  <div>
    <h1>ADMIN PANEL</h1>
  </div>
  <div>
    <h2>admin:</h2>
    <table class "table">
      <td>
        <th>nombre</th>
        <th>edit</th>
        <th>delete</th>
      </td>
      <?php
      foreach ($clinicas as $clinicas) {
        echo '<tr><td>'.$clinicas['nombre'].'</td>';
      }
       ?>
       <td>editar</td>
       <td>delete</td></tr>
    </table>
    <a href="<?php echo BASE_URL;?>admin/post">post</a>
  </div>
</body>
</html>
