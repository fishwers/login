<?php
$conn = mysqli_connect("localhost","root","","utenti");
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM utenti WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)!=0) {
    echo "Login effettuato con successo";
    echo '<br><a href="index.html">Vai al login</a>';
} else {
    echo "<script>
        window.location.href='index.html';
        alert('Credenziali errate. Riprova.'); 
    </script>";
}
mysqli_close($conn);
?>