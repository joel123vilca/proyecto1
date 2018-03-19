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
