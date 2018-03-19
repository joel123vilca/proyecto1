
<html>

<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<div class="col-md-2">
</div>
<div class="col-md-8">
<title>salud admin</title>
<style>
form {
  display: grid;
  padding: 1em;
  background: #f9f9f9;
  border: 1px solid #c1c1c1;
  margin: 2rem auto 0 auto;
  max-width: 600px;
  padding: 1em;
}
form input {
  background: #fff;
  border: 1px solid #9c9c9c;
}
form button {
  background: lightgrey;
  padding: 0.7em;
  width: 100%;
  border: 0;
}
form button:hover {
  background: gold;
}

label {
  padding: 0.5em 0.5em 0.5em 0;
}

input {
  padding: 0.7em;
  margin-bottom: 0.5rem;
}
input:focus {
  outline: 3px solid gold;
}

@media (min-width: 400px) {
  form {
    grid-template-columns: 200px 1fr;
    grid-gap: 16px;
  }

  label {
    text-align: right;
    grid-column: 1 / 2;
  }

  input,
  button {
    grid-column: 2 / 3;
  }
}
</style>
<form class="form1" method="post">
    <label for="nombre" class="nombre">Nombre:</label>
    <input id="nombre" name="nombre" type="text">
    <label for="ubicacion" class="ubicacion">Ubicacion:</label>
    <input id="ubicacion" name="ubicacion"  type="text">
    <label for="horario">Horario:</label>
    <input id="horario" name="horario"  type="text">
    <label for="email">Email:</label>
    <input id="email" name="email" type="email">
    <label for="celular">Celular:</label>
    <input id="celular" name="celular" type="text">
    <label for="website">website:</label>
    <input id="website" name="website" type="text">
    <label for="facebook">Facebook:</label>
    <input id="facebook" name="facebook" type="text">
    <label for="mapa">Google_maps:</label>
    <input id="mapa" name="mapa" type="text">
    <label for="tipo">Tipo_clinica:</label>
    <select name="tipo">
      <option value="dentista">Dentista</option>
      <option value="optica">Optica</option>
      <option value="medicina">Medicina</option>
      <option value="tomografia">Tomografia</option>
      </select>
    <label for="imagen">subir foto de Perfil</label>
    <input type="file" name="imagen" id="imagen">

    <br>
    <button>Submit</button>
</form>
</div>
<div class="col-md-2">
</div>
</html>
