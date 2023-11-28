<?php
$im = $_POST["ucz"];
$nz = $_POST["nz"];
$pr = $_POST["pr"];
$lacz = mysqli_connect('localhost','root','','szkoła');
$pyt = "INSERT INTO `nauczyciel`(`imie`,`nazwisko`,`przedmiot`) VALUES ('$im', '$nz', '$pr')";
$wynik = mysqli_query($lacz, $pyt);
if($wynik)
{
    echo "dodano nauczyciela";
}
else{
    echo "nie dodano";
}
mysqli_close($lacz);
?>