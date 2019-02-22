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
        <h3 style="font-family: cursive">Bienvenido <?php echo $user->getNombre();  ?> <?php if(isset($_SESSION['user'])){ ?>
        <samp style="font-size: 10px;"><a href="controller/logout.php" >cerrar sesion</a></samp>
        <?php }?> </h3>
        <hr><br>
    </div>    
</body>
</html>