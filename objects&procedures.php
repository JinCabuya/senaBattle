<?php
class character
{
    public $nameCharacter;
    public $lifeCharacter;

    public $nameHability1;
    public $damageHability1;

    public $nameHability2;
    public $damageHability2;

    public $nameHability3;
    public $damageHability3;

    public $critic;

    public $type;

    function setAttributes($nameCh, $lifeCh, $nh1, $dh1, $nh2, $dh2, $nh3, $dh3, $type)
    {
        $this->nameCharacter = $nameCh;

        $this->lifeCharacter = $lifeCh;

        $this->nameHability1 = $nh1;
        $this->damageHability1 = $dh1;

        $this->nameHability2 = $nh2;
        $this->damageHability2 = $dh2;

        $this->nameHability3 = $nh3;
        $this->damageHability3 = $dh3;

        $this->type = $type;
    }
    
    // function setCriticProbability($criticProbabily){
    //     $this->critic = $criticProbabily;
    // }

    public function getAttributes()
    {
        $dataReturn = array("nombre" => $this->nameCharacter, "vida" => $this->lifeCharacter, "nombreHabilidad1" => $this->nameHability1, "dañoHabilidad1" => $this->damageHability1, "nombreHabilidad2" => $this->nameHability2, "dañoHabilidad2" => $this->damageHability2, "nombreHabilidad3" => $this->nameHability3, "dañoHabilidad3" => $this->damageHability3, "tipo" => $this->type);

        return $dataReturn;
    }
}

class pick extends character
{
    public function showAttributes()
    {
        $dataAdapter = parent::getAttributes();
        return $dataAdapter;
    }
}

function chooseCharacter($choice)
{
    switch ($choice) {
        case "1":
            $sendInformation = new pick;

            $sendInformation->setAttributes("Nietzsche", 100000, "Bootstrap mode: ON", 5000, "Que colores tan feos", 6000, "El examen", 0.5, "profesor");

            $characterData = $sendInformation->showAttributes();
            return $characterData;
            break;

        case "2":
            $sendInformation = new pick;

            $sendInformation->setAttributes("IDK Man", 80000, "Codigo a la izquierda", 4500, "Identacion", 7700, "Profe no se", 0.3, "estudiante");

            $characterData = $sendInformation->showAttributes();
            return $characterData;
            break;

        case "3":
            $sendInformation = new pick;

            $sendInformation->setAttributes("Albion", 60000, "Estoy derecho", 3000, "No me quite el huevo doctor", 3500, "Perdi los pasajes weon", 0.2, "marinilla");

            $characterData = $sendInformation->showAttributes();
            return $characterData;
            break;

        case "4":
            $sendInformation = new pick;

            $sendInformation->setAttributes("Nigga", 57000, "Solo negros", 1700, "Matando Blancos", 2400, "Furia acolorada", 0.2, "maleante");

            $characterData = $sendInformation->showAttributes();
            return $characterData;
            break;

        case "5":
            $sendInformation = new pick;

            $sendInformation->setAttributes("Sad Pigeon", 70000, "Ponchada Rj-45", 2000, "Paloma triste", 2700, "Paloma Feliz", 0.1, "sad man");

            $characterData = $sendInformation->showAttributes();
            return $characterData;
            break;
    }
}

function criticProbabilityWithCounter($typeA, $typeB)
{
    if ((($typeA == "profesor" && $typeB == "estudiante") || ($typeA == "profesor" && $typeB == "marinilla")) || (($typeA == "estudiante" && $typeB == "marinilla") || ($typeA == "estudiante" && $typeB == "sad man")) || (($typeA == "sad man" && $typeB == "profesor") || ($typeA == "sad man" && $typeB == "marinilla")) || (($typeA == "maleante" && $typeB == "profesor") || ($typeA == "maleante" && $typeB == "estudiante") || ($typeA == "maleante" && $typeB == "sad man")) || (($typeA == "marinilla" && $typeB == "maleante"))) 
    {
        return true;
    }else{
        $CRITIC_HIT = rand(1, 100);
        if($CRITIC_HIT<=40){
            return true; 
        }else{
            return false;
        }
    }
}

function hitEnemy($selfDamageHability, $enemyLife){
    $hittingCalc = $enemyLife - $selfDamageHability;
    return $hittingCalc;
}

function criticHitCalc($baseDamage){
    $criticHit = $baseDamage * 0.25;
    return $criticHit;
}

function buffAbility($hability, $percent)
{
    $buffHability = ($hability * $percent) + $hability;
    return $buffHability;
}

function gameOver($lifeCharacter){
    if($lifeCharacter<=0){
        return true;
    }
}

// <!-- Desarrollado Por Jin Cabuya y Jonathan Arias -->