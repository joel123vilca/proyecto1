<?php
namespace App\controllers\Admin;
class CreateController{

  public function getCreate(){

      return render('../views/admin/insert_clinica.php');
  }

  public function postCreate(){
    global $pdo;
    $imgFile = $_FILES['img']['name'];
     $tmp_dir = $_FILES['img']['tmp_name'];
     $imgSize = $_FILES['img']['size'];
     $upload_dir = 'images/';
     $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
     $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
     $userpic = rand(1000,1000000).".".$imgExt;
     move_uploaded_file($tmp_dir,$upload_dir.$userpic);

    $sql = 'INSERT INTO clinicas (nombre, ubicacion, horario, celular, email, website, facebook, img, mapa, tipo) VALUES (:nombre, :ubicacion, :horario, :celular,:email,:website,:facebook,:img,:mapa,:tipo)';
    $query = $pdo->prepare($sql);
    $result=$query->execute([
    'nombre'=>$_POST['nombre'],
    'ubicacion'=>$_POST['ubicacion'],
    'horario'=>$_POST['horario'],
    'celular'=>$_POST['celular'],
    'email'=>$_POST['email'],
    'website'=>$_POST['website'],
    'facebook'=>$_POST['facebook'],
    'img'=>$userpic,
    'mapa'=>$_POST['mapa'],
    'tipo'=>$_POST['tipo']
  ]);


  return render('../views/admin/index.php',['result'->$result]);
  }

}
 ?>
