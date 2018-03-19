<?php
namespace App\controllers\Admin;

class IndexController{

  public function GetIndex(){
    global $pdo;
    $query=$pdo->prepare('SELECT * FROM clinicas ORDER BY id DESC');
    $query->execute();
    $clinicas = $query->fetchAll(\PDO::FETCH_ASSOC);
    return render('../views/admin/index.php', ['clinicas'=>$clinicas]);
  }
}
 ?>
