<?php
namespace App\controllers\Admin;
class PostController{
  public function getIndex(){
    //admin/post or admin/post/index
    return render('../views/admin/post.php');
  }

}
 ?>
