<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Over</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="assets/irelia.jpg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;500&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
    session_start(); 

    if($_SESSION['winner'] == 1){
        $ganador = $_SESSION['namePlayerOne'];
        $vida = $_SESSION['vidaPlayerOne']; 
        session_destroy();
    }else{
        $ganador = $_SESSION['namePlayerTwo'];
        $vida = $_SESSION['vidaPlayerTwo']; 
        session_destroy();
    }
    ?>
    <h1 class="gameOver">GAME OVER</h1>
    <h2>WINNER: <?php echo $ganador ?> WITH <?php echo $vida ?> POINTS OF LIFE</h2>
    <a href="http://localhost/game/" class="again">Play Again</a>
</body>
</html>

<!-- Desarrollado Por Jin Cabuya y Jonathan Arias -->