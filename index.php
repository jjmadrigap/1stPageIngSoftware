<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimeJJMP</title>
</head>
<body>
    <form method="post">
    	<h1>TuAnimeList</h1>
    	<input type="text" name="name" placeholder="Nombre Anime">
    	<input type="text" name="category" placeholder="Categoria">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("agregar.php");
        ?>
</body>
</html>