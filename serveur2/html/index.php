<h1>Serveur 2</h1>

<?php
$host = 'mariadb2';
$user = 'root';
$pass = 'rootpassword';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}
echo "Connexion réussie à MariaDB!";