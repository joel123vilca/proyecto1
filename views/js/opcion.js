$(document).ready(function(){
$("#spa").click(function(evento){
  evento.preventDefault();
      $("#destino").load("../views/loyaut.php" , {tipo: "spa"});
});

$("#dentista").click(function(evento){
  evento.preventDefault();
      $("#destino").load("../views/loyaut.php" , {tipo: "dentista"});
});


$("#optica").click(function(evento){
  evento.preventDefault();
      $("#destino").load("../views/loyaut.php" , {tipo: "optica"});
});


$("#clinica").click(function(evento){
  evento.preventDefault();
      $("#destino").load("../views/loyaut.php" , {tipo: "tomografia"});
});

$("#medicina").click(function(evento){
  evento.preventDefault();
      $("#destino").load("../views/loyaut.php" , {tipo: "spa"});
});

$("#tomografia").click(function(evento){
  evento.preventDefault();
      $("#destino").load("../views/loyaut.php" , {tipo: "tomografia"});
});
})
