<!DOCTYPE html>
<html>
<body>

<?php
function mijnNaamIsGroot(){
    $voornaam = "Colin";
    $achternaam = "Wahlen";
    $gehelenaam = "mijn naam is " . $voornaam . " " . $achternaam;
    $gehelenaam = strtoupper($gehelenaam);
    echo ($gehelenaam);
}
mijnNaamIsGroot();
?>

</body>
</html> 