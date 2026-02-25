<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION["user"];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>

    <h2>
        <?php
        echo "Bienvenue " . $user["role"] . " " . $user["name"];
        ?>
    </h2>

    <a href="logout.php">Se déconnecter</a>

</body>

</html>