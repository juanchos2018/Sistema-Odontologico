<?php 
session_start();
  if (isset($_POST['enviar'])) {

    $_SESSION[$_POST['articulo']]=$_POST['precio'];
  }
  if (isset($_POST['limpiar'])) {
    session_unset();
    session_destroy();

  }
  $pagina="Vista5.php";

 ?>

<!DOCTYPE html>
<html>
<head>
  <title> varialbes de sesion</title>
</head>
<body bgcolor="#D2EBF7">
  <h3>DAtos de articulo</h3>
  <form method="post" action="<?php echo($pagina) ?>">
    <table width="240">
      <tr>
        <td width="76"> Articulo</td>
        <td width="152"><input type="text" name="articulo"> </td>
      </tr>
      <tr>
        <td>Precio</td>
        <td> <input type="text" name="precio"> </td>

      </tr>

    </table>

    <p>
      <input type="submit" name="enviar" id="enviar" value="enviar">
      <input type="" name="">
    </p>

  </form>

  <?php if ($_SESSION>0) { ?>
    <table border="1" width="200">
        <tr>
          <th>Articulo</th>
          <th>Precio</th>
        </tr>

      <?php foreach ($_SESSION as $clave => $valor) {?>
        <tr>
          
          <td> <?php echo $clave; ?></td>
          <td> <?php echo $valor; ?></td>
        </tr>
      
<?php } ?>

    </table>
  <?php } ?>


  <a href="borrar.php"> elimnarSesion</a>
  

</body>
</html>