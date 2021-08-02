<?php require_once "vistas/partes/head.php"; ?>

<?php include_once "vistas/partes/menu.php"?>

<div class="bg-light">
    <div class="container">
        <h1 class="display-3 py-5"><?php echo $pagina; ?></h1>
    </div>
</div>

<div class="container">
    <div class="group-form">
    <form action="">
    <input name="nombre" type="text" class="form-control" placeholder="Write Here">
    <button name="buscar" class="btn btn-primary">Search</button>
    </form>
    </div>
</div>

<hr>

<div class="container">
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Language_id</th>
      <th scope="col">Name</th>
      <th scope="col">Last_update</th>
    </tr>
  </thead>
  <tbody>
      <?php
        while($lenguaje = mysqli_fetch_assoc($lenguajes)){
          echo "<tr>
                    <th scope='row'>{$lenguaje['language_id']}</th>
                    <td>{$lenguaje['name']}</td>
                    <td>{$lenguaje['last_update']}</td>
                </tr>";
        }
      ?>
  </tbody>
</table>
</div>
<?php require_once "vistas/partes/foot.php"; ?>