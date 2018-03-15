<?php
namespace App\controllers;

 class IndexController extends BaseController{
   public function getIndex(){
     global $pdo;
     $query=$pdo->prepare('SELECT * FROM clinicas ORDER BY id DESC');
     $query->execute();
     $clinicas = $query->fetchAll(\PDO::FETCH_ASSOC);
     $query = $pdo->prepare("SELECT * FROM clinicas, promociones WHERE clinicas.id = promociones.id_clinicas");
     $query->execute();
     $promociones = $query->fetchAll(\PDO::FETCH_ASSOC);
     //Select * clínicas as c inner join promociones p where c.id = p.id_clinicas

      return render('../views/index.php', ['clinicas'=> $clinicas, 'promociones'=>$promociones]);
     //include '../views/index.php';
   }
 }
?>
