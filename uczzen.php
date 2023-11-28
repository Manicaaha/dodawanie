<?php
$im = $_POST["ucz"];
$nz = $_POST["nz"];
$mi = $_POST["mi"];
$lacz = mysqli_connect('localhost','root','','szkoła');
$pyt = "INSERT INTO `uczen`(`imie`,`nazwisko`,`miasto`) VALUES ('$im', '$nz', '$mi')";
$wynik = mysqli_query($lacz, $pyt);
if($wynik)
{
    echo "dodano ucznia";
}
else{
    echo "nie dodano";
}
mysqli_close($lacz);
?>