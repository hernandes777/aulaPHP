<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O seu Nome</title>
</head>
<body>
    <h1>Verifique se você pode dirigir</h1>

    <form method="POST" action="">
        <input type="number" name="idade" placeholder="Coloque sua idade" require>
        <button type="submit"> verificar </button>
    </form>

    <?php 
    

        if( isset(($_POST['idade']))){
            $idade = $_POST['idade'];
    
            if($idade >= 18) {
                echo "<p> Você pode dirigir! </p>";
            }
            else{

            echo "<p> Você é muito novo para dirigir </p>";
            }
        }
    ?>

</body>
</html>