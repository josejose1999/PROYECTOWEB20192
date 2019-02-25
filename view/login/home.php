<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div id="menu" style="color: green; text-align: center;">
        
        <br><br><br><hr>
        <?php if(isset($_SESSION['user'])){ ?>
    <div class="btn-group">
        <button type="button" class="btn btn-susses">Informacion</button>
        <button type="button" class="btn btn-susses dropdown-toggle"
          data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only">Desplegar menú</span>
        </button>
      <ul class="dropdown-menu" role="menu">
            <li><a href="#"><?php echo $user->getNombre();?></a></li>
            <li><a href="controller/logout.php">Cerrar sesion</a></li>
      </ul>
    </div>
    <?php }?>
        <hr><br>
    </div>    
</body>
</html>