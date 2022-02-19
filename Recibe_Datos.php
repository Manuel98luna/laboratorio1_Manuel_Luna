<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <?php require_once "Menu.php" ?>
    </head>
<body>
<section>

<br>
<table class="table table-dark " table-layout: fixed width: 130px>
 
  <tbody>
    <tr class="table-active">
    <td>CODIGO:</td>
            <td>NOMBRE:</td>
            <td>APELLIDO:</td>
            <td>DUI:</td>
            <td>DIRECCION:</td>
            <td>TELEFONO:</td>
    </tr>
    <tr>
     
    </tr>
    <tr>
    <td> <?php echo $_POST ['codigo'] ?></td>
        <td><?php echo $_POST ['nombre'] ?></td>
        <td><?php echo $_POST ['apellidos'] ?></td>
        <td><?php echo $_POST ['dui'] ?></td>
        <td><?php echo $_POST ['direccion'] ?></td>
        <td><?php echo $_POST ['telefono'] ?></td>
    </tr>
  </tbody>
</table>

</section>  
</body>
</html>