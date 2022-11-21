<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Battle</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="assets/irelia.jpg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;500&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    include('objects&procedures.php');

    if ($_GET) {
        $characterSelectionOne = (isset($_GET['txtChoiceOne'])) ? $_GET['txtChoiceOne'] : "";
        $characterSelectionTwo = (isset($_GET['txtChoiceTwo'])) ? $_GET['txtChoiceTwo'] : "";


        $eleccion1 = chooseCharacter($characterSelectionOne);
        $eleccion2 = chooseCharacter($characterSelectionTwo);


        session_start();
        $_SESSION['namePlayerOne'] = $eleccion1['nombre'];
        $_SESSION['namePlayerTwo'] = $eleccion2['nombre'];

        $_SESSION['typePlayerOne'] = $eleccion1['tipo'];
        $_SESSION['typePlayerTwo'] = $eleccion2['tipo'];

        $_SESSION['vidaPlayerOne'] = $eleccion1['vida'];
        $_SESSION['vidaPlayerTwo'] = $eleccion2['vida'];

        $_SESSION['nameHabilityOneOne'] = $eleccion1['nombreHabilidad1'];
        $_SESSION['nameHabilityTwoOne'] = $eleccion2['nombreHabilidad1'];

        $_SESSION['nameHabilityOneTwo'] = $eleccion1['nombreHabilidad2'];
        $_SESSION['nameHabilityTwoTwo'] = $eleccion2['nombreHabilidad2'];

        $_SESSION['nameHabilityOneThree'] = $eleccion1['nombreHabilidad3'];
        $_SESSION['nameHabilityTwoThree'] = $eleccion2['nombreHabilidad3'];

        $_SESSION['damageHabilityOneOne'] = $eleccion1['dañoHabilidad1'];
        $_SESSION['damageHabilityTwoOne'] = $eleccion2['dañoHabilidad1'];

        $_SESSION['damageHabilityOneTwo'] = $eleccion1['dañoHabilidad2'];
        $_SESSION['damageHabilityTwoTwo'] = $eleccion2['dañoHabilidad2'];

        $_SESSION['damageHabilityOneThree'] = $eleccion1['dañoHabilidad3'];
        $_SESSION['damageHabilityTwoThree'] = $eleccion2['dañoHabilidad3'];

        $_SESSION['typePlayerOne'] = $eleccion1['tipo'];
        $_SESSION['typePlayerTwo'] = $eleccion2['tipo'];

        $_SESSION['stateBuffOne'] = false;
        $_SESSION['stateBuffTwo'] = false;

        $msj1 = "";
        $msj2 = "";
    }

    if ($_POST) {
        session_start();

        $attackOne = $_POST['txtAttackOne'];
        $attackTwo = $_POST['txtAttackTwo'];


        switch ($attackOne) {
            case "1":
                if ($_SESSION['stateBuffOne']) {
                    $newBuffAttack = buffAbility($_SESSION['damageHabilityOneOne'], $_SESSION['damageHabilityOneThree']);

                    if (criticProbabilityWithCounter($_SESSION['typePlayerOne'], $_SESSION['typePlayerTwo'])) {
                        $criticHit = criticHitCalc($newBuffAttack);
                        $totalDamage = $newBuffAttack + $criticHit;
                        $_SESSION['vidaPlayerTwo'] = hitEnemy($newBuffAttack, $_SESSION['vidaPlayerTwo']) - $criticHit;

                        $msj1 = "Accion: Ataque<br><br>" . $_SESSION['namePlayerOne'] . " Ha asestado un golpe critico de: " . $criticHit . "<br><br>Daño infligido: " . $totalDamage;
                        $_SESSION['stateBuffOne'] = false;
                    } else {
                        $_SESSION['vidaPlayerTwo'] = hitEnemy($newBuffAttack, $_SESSION['vidaPlayerTwo']);
                        $msj1 = "Accion: Ataque<br><br>Daño Infligido: " . $newBuffAttack;
                        $_SESSION['stateBuffOne'] = false;
                    }
                } else {
                    if (criticProbabilityWithCounter($_SESSION['typePlayerOne'], $_SESSION['typePlayerTwo'])) {
                        $criticHit = criticHitCalc($_SESSION['damageHabilityOneOne']);
                        $totalDamage = $_SESSION['damageHabilityOneOne'] + $criticHit;
                        $_SESSION['vidaPlayerTwo'] = hitEnemy($_SESSION['damageHabilityOneOne'], $_SESSION['vidaPlayerTwo']) - $criticHit;

                        $msj1 = "Accion: Ataque<br><br>" . $_SESSION['namePlayerOne'] . " Ha asestado un golpe critico de: " . $criticHit . "<br><br>Daño infligido: " . $totalDamage;
                    } else {
                        $_SESSION['vidaPlayerTwo'] = hitEnemy($_SESSION['damageHabilityOneOne'], $_SESSION['vidaPlayerTwo']);
                        $msj1 = "Accion: Ataque<br><br>Daño Infligido: " . $_SESSION['damageHabilityOneOne'];
                    }
                }
                break;
            case "2":
                if ($_SESSION['stateBuffOne']) {
                    $newBuffAttack = buffAbility($_SESSION['damageHabilityOneTwo'], $_SESSION['damageHabilityOneThree']);

                    if (criticProbabilityWithCounter($_SESSION['typePlayerOne'], $_SESSION['typePlayerTwo'])) {
                        $criticHit = criticHitCalc($newBuffAttack);
                        $totalDamage = $newBuffAttack + $criticHit;
                        $_SESSION['vidaPlayerTwo'] = hitEnemy($newBuffAttack, $_SESSION['vidaPlayerTwo']) - $criticHit;

                        $msj1 = "Accion: Ataque<br><br>" . $_SESSION['namePlayerOne'] . " Ha asestado un golpe critico de: " . $criticHit . "<br><br>Daño infligido: " . $totalDamage;
                        $_SESSION['stateBuffOne'] = false;
                    } else {
                        $_SESSION['vidaPlayerTwo'] = hitEnemy($newBuffAttack, $_SESSION['vidaPlayerTwo']);
                        $msj1 = "Accion: Ataque<br><br>Daño Infligido: " . $newBuffAttack;
                        $_SESSION['stateBuffOne'] = false;
                    }
                } else {
                    if (criticProbabilityWithCounter($_SESSION['typePlayerOne'], $_SESSION['typePlayerTwo'])) {
                        $criticHit = criticHitCalc($_SESSION['damageHabilityOneTwo']);
                        $totalDamage = $_SESSION['damageHabilityOneTwo'] + $criticHit;
                        $_SESSION['vidaPlayerTwo'] = hitEnemy($_SESSION['damageHabilityOneTwo'], $_SESSION['vidaPlayerTwo']) - $criticHit;

                        $msj1 = "Accion: Ataque<br><br>" . $_SESSION['namePlayerOne'] . " Ha asestado un golpe critico de: " . $criticHit . "<br><br>Daño infligido: " . $totalDamage;
                    } else {
                        $_SESSION['vidaPlayerTwo'] = hitEnemy($_SESSION['damageHabilityOneTwo'], $_SESSION['vidaPlayerTwo']);
                        $msj1 = "Accion: Ataque<br><br>Daño Infligido: " . $_SESSION['damageHabilityOneTwo'];
                    }
                }
                break;
            case "3":
                $msj1 = "Accion: Potenciar<br><br>" . $_SESSION['namePlayerOne'] . " Ha decidido potenciar sus habilidades para el proximo ataque";
                $_SESSION['stateBuffOne'] = true;
                break;
        }

        switch ($attackTwo) {
            case "1":
                if ($_SESSION['stateBuffTwo'] == true) {
                    $newBuffAttack = buffAbility($_SESSION['damageHabilityTwoOne'], $_SESSION['damageHabilityTwoThree']);

                    if (criticProbabilityWithCounter($_SESSION['typePlayerTwo'], $_SESSION['typePlayerOne'])) {
                        $criticHit = criticHitCalc($newBuffAttack);
                        $totalDamage = $newBuffAttack + $criticHit;
                        $_SESSION['vidaPlayerOne'] = hitEnemy($newBuffAttack, $_SESSION['vidaPlayerOne']) - $criticHit;

                        $msj2 = "Accion: Ataque<br><br>" . $_SESSION['namePlayerTwo'] . " Ha asestado un golpe critico de: " . $criticHit . "<br><br>Daño infligido: " . $totalDamage;
                        $_SESSION['stateBuffTwo'] = false;
                    } else {
                        $_SESSION['vidaPlayerOne'] = hitEnemy($newBuffAttack, $_SESSION['vidaPlayerOne']);
                        $msj2 = "Accion: Ataque<br><br>Daño Infligido: " . $newBuffAttack;
                        $_SESSION['stateBuffTwo'] = false;
                    }
                } else {
                    if (criticProbabilityWithCounter($_SESSION['typePlayerTwo'], $_SESSION['typePlayerOne'])) {
                        $criticHit = criticHitCalc($_SESSION['damageHabilityTwoOne']);
                        $totalDamage = $_SESSION['damageHabilityTwoOne'] + $criticHit;
                        $_SESSION['vidaPlayerOne'] = hitEnemy($_SESSION['damageHabilityTwoOne'], $_SESSION['vidaPlayerOne']) - $criticHit;

                        $msj2 = "Accion: Ataque<br><br>" . $_SESSION['namePlayerTwo'] . " Ha asestado un golpe critico de: " . $criticHit . "<br><br>Daño infligido: " . $totalDamage;
                    } else {
                        $_SESSION['vidaPlayerOne'] = hitEnemy($_SESSION['damageHabilityTwoOne'], $_SESSION['vidaPlayerOne']);
                        $msj2 = "Accion: Ataque<br><br>Daño Infligido: " . $_SESSION['damageHabilityTwoOne'];
                    }
                }
                break;
            case "2":
                if ($_SESSION['stateBuffTwo'] == true) {
                    $newBuffAttack = buffAbility($_SESSION['damageHabilityTwoTwo'], $_SESSION['damageHabilityTwoThree']);

                    if (criticProbabilityWithCounter($_SESSION['typePlayerTwo'], $_SESSION['typePlayerOne'])) {
                        $criticHit = criticHitCalc($newBuffAttack);
                        $totalDamage = $newBuffAttack + $criticHit;
                        $_SESSION['vidaPlayerOne'] = hitEnemy($newBuffAttack, $_SESSION['vidaPlayerOne']) - $criticHit;

                        $msj2 = "Accion: Ataque<br><br>" . $_SESSION['namePlayerTwo'] . " Ha asestado un golpe critico de: " . $criticHit . "<br><br>Daño infligido: " . $totalDamage;
                        $_SESSION['stateBuffTwo'] = false;
                    } else {
                        $_SESSION['vidaPlayerOne'] = hitEnemy($newBuffAttack, $_SESSION['vidaPlayerOne']);
                        $msj2 = "Accion: Ataque<br><br>Daño Infligido: " . $newBuffAttack;
                        $_SESSION['stateBuffTwo'] = false;
                    }
                } else {
                    if (criticProbabilityWithCounter($_SESSION['typePlayerTwo'], $_SESSION['typePlayerOne'])) {
                        $criticHit = criticHitCalc($_SESSION['damageHabilityTwoTwo']);
                        $totalDamage = $_SESSION['damageHabilityTwoTwo'] + $criticHit;
                        $_SESSION['vidaPlayerOne'] = hitEnemy($_SESSION['damageHabilityTwoTwo'], $_SESSION['vidaPlayerOne']) - $criticHit;

                        $msj2 = "Accion: Ataque<br><br>" . $_SESSION['namePlayerTwo'] . " Ha asestado un golpe critico de: " . $criticHit . "<br><br>Daño infligido: " . $totalDamage;
                    } else {
                        $_SESSION['vidaPlayerOne'] = hitEnemy($_SESSION['damageHabilityTwoTwo'], $_SESSION['vidaPlayerOne']);
                        $msj2 = "Accion: Ataque<br><br>Daño Infligido: " . $_SESSION['damageHabilityTwoTwo'];
                    }
                }
                break;
            case "3":
                $msj2 = "Accion: Potenciar<br><br>" . $_SESSION['namePlayerTwo'] . " Ha decidido potenciar sus habilidades para el proximo ataque";
                $_SESSION['stateBuffTwo'] = true;
                break;
        }

        if (gameOver($_SESSION['vidaPlayerOne']) == true) {
            $_SESSION['winner'] = 2;
            header("Location: gameOver.php");
        }

        if (gameOver($_SESSION['vidaPlayerTwo']) == true) {
            $_SESSION['winner'] = 1;
            header("Location: gameOver.php");
        }
    }
    ?>

    <div class="formAttack">
        <form action="ronda.php" method="post">
            <h2>Ataques de <?php echo $_SESSION['namePlayerOne'] . "<----------vida----------> " . $_SESSION['vidaPlayerOne'];  ?></h2>

            <div class="pickThisAttack">
                <div class="cardChoice">
                    <img src="assets/at1.webp" alt="imgCharacter.jpg">
                    <div class="controls">
                        <label for="one"><?php echo $_SESSION['nameHabilityOneOne'] ?></label>
                        <input class="hidden" type="radio" name="txtAttackOne" id="one" value="1" checked>
                    </div>
                </div>

                <div class="cardChoice">
                    <img src="assets/at2.jpg" alt="imgCharacter.jpg">
                    <div class="controls">
                        <label for="two"><?php echo $_SESSION['nameHabilityOneTwo'] ?></label>
                        <input class="hidden" type="radio" name="txtAttackOne" id="two" value="2">
                    </div>
                </div>

                <div class="cardChoice">
                    <img src="assets/at3.webp" alt="imgCharacter.jpg">
                    <div class="controls">
                        <label for="three"><?php echo $_SESSION['nameHabilityOneThree'] ?></label>
                        <input class="hidden" type="radio" name="txtAttackOne" id="three" value="3">
                    </div>
                </div>
            </div>

            <h2>Ataques de <?php echo $_SESSION['namePlayerTwo'] . " <----------vida----------> " . $_SESSION['vidaPlayerTwo']; ?></h2>

            <div class="pickThisAttack">
                <div class="cardChoice">
                    <img src="assets/at1.webp" alt="imgCharacter.jpg">
                    <div class="controls">
                        <label for="oneTwo"><?php echo $_SESSION['nameHabilityTwoOne'] ?></label>
                        <input class="hidden" type="radio" name="txtAttackTwo" id="oneTwo" value="1" checked>
                    </div>
                </div>

                <div class="cardChoice">
                    <img src="assets/at2.jpg" alt="imgCharacter.jpg">
                    <div class="controls">
                        <label for="twoTwo"><?php echo $_SESSION['nameHabilityTwoTwo'] ?></label>
                        <input class="hidden" type="radio" name="txtAttackTwo" id="twoTwo" value="2">
                    </div>
                </div>

                <div class="cardChoice">
                    <img src="assets/at3.webp" alt="imgCharacter.jpg">
                    <div class="controls">
                        <label for="threeTwo"><?php echo $_SESSION['nameHabilityTwoThree'] ?></label>
                        <input class="hidden" type="radio" name="txtAttackTwo" id="threeTwo" value="3">
                    </div>
                </div>
            </div>

            <div class="btn">
                <input type="submit" value="Attack" class="success">
            </div>

        </form>

        <div class="consoleInfo">
            <h3><?php echo $msj1; ?></h3>
            <br>
            <h3><?php echo $msj2; ?></h3>
        </div>
    </div>
</body>

</html>
<!-- Desarrollado Por Jin Cabuya y Jonathan Arias -->