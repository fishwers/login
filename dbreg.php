<?php 

$conn = mysqli_connect("localhost","root","","utenti");
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$username = $_POST['username'];
$data = $_POST['anno_nascita'];
if (isset($_POST['sesso'])) {
    $sesso = $_POST['sesso'];
}
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO utenti VALUES ('$username', '$nome', '$cognome', '$data', '$sesso', '$email', '$password')";
$result = mysqli_query($conn, $query);   
echo "Utente inserito con successo";
echo '<br><a href="index.html">Vai al login</a>';
?>