<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character pick</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="assets/irelia.jpg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="form">
        <form action="ronda.php" method="get">
            <h2>Jugador 1</h2>

            <div class="pickThis">
                <div class="cardChoice">
                    <img src="assets/abys.webp" alt="imgCharacter.jpg">
                    <div class="controls">
                        <label for="one">Nietzsche</label>
                        <input class="hidden" type="radio" name="txtChoiceOne" id="one" value="1" checked>
                    </div>
                </div>

                <div class="cardChoice">
                    <img src="assets/idk.jpg" alt="imgCharacter.jpg">
                    <div class="controls">
                        <label for="two">IDK Man</label>
                        <input class="hidden" type="radio" name="txtChoiceOne" id="two" value="2">
                    </div>
                </div>

                <div class="cardChoice">
                    <img src="assets/white.jpg" alt="imgCharacter.jpg">
                    <div class="controls">
                        <label for="three">Albion</label>
                        <input class="hidden" type="radio" name="txtChoiceOne" id="three" value="3">
                    </div>
                </div>

                <div class="cardChoice">
                    <img src="assets/nigga.jpg" alt="imgCharacter.jpg">
                    <div class="controls">
                        <label for="four">Nigga</label>
                        <input class="hidden" type="radio" name="txtChoiceOne" id="four" value="4">
                    </div>
                </div>

                <div class="cardChoice">
                    <img src="assets/sad.jpg" alt="imgCharacter.jpg">
                    <div class="controls">
                        <label for="five">Sad Pigeon</label>
                        <input class="hidden" type="radio" name="txtChoiceOne" id="five" value="5">
                    </div>
                </div>
            </div>

            <h2>Jugador 2</h2>

            <div class="pickThis">
                <div class="cardChoice">
                    <img src="assets/abys.webp" alt="imgCharacter.jpg">
                    <div class="controls">
                        <label for="oneTwo">Nietzsche</label>
                        <input class="hidden" type="radio" name="txtChoiceTwo" id="oneTwo" value="1">
                    </div>
                </div>

                <div class="cardChoice">
                    <img src="assets/idk.jpg" alt="imgCharacter.jpg">
                    <div class="controls">
                        <label for="twoTwo">IDK Man</label>
                        <input class="hidden" type="radio" name="txtChoiceTwo" id="twoTwo" value="2" checked>
                    </div>
                </div>

                <div class="cardChoice">
                    <img src="assets/white.jpg" alt="imgCharacter.jpg">
                    <div class="controls">
                        <label for="threeTwo">Albion</label>
                        <input class="hidden" type="radio" name="txtChoiceTwo" id="threeTwo" value="3">
                    </div>
                </div>

                <div class="cardChoice">
                    <img src="assets/nigga.jpg" alt="imgCharacter.jpg">
                    <div class="controls">
                        <label for="fourTwo">Nigga</label>
                        <input class="hidden" type="radio" name="txtChoiceTwo" id="fourTwo" value="4">
                    </div>
                </div>

                <div class="cardChoice">
                    <img src="assets/sad.jpg" alt="imgCharacter.jpg">
                    <div class="controls">
                        <label for="fiveTwo">Sad Pigeon</label>
                        <input class="hidden" type="radio" name="txtChoiceTwo" id="fiveTwo" value="5">
                    </div>
                </div>
            </div>

            <div class="btn">
                <input type="submit" value="Fight" class="success">
            </div>

        </form>
    </div>

</body>

</html>

<!-- Desarrollado Por Jin Cabuya y Jonathan Arias -->