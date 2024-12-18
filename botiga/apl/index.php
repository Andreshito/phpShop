<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>phpShop</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h3><b>Pàgina d'inici</b></h3>
    <a href="login.php">Login</a><br>        
    <a href="info.php">Informació</a><br>
    <label class="diahora"> 
        <?php
            date_default_timezone_set('Europe/Andorra');
            echo "Data i hora: " . date('d/m/Y h:i:s');
        ?>
    </label>
    <br>
    
</body>
</html>
