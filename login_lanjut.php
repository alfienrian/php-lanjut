<?php
session_start();

$name = $email = "";
$nameErr = $emailErr = "";

function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["u"])) {
        $nameErr = "masukkan username";
    } else {
        $name = bersihkan_input($_POST["u"]);
    }
    if (empty($_POST["p"])) {
        $emailErr = "masukkan password";
    } else {
        $email = bersihkan_input($_POST["p"]);
    }

    if ($name == 'user' && $email == 'user') { // Replace this with your actual login validation logic
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $name;
        header("Location: welcome.php"); // Redirect to a welcome page after successful login
        exit();
    } else {
        $nameErr = "Username atau password salah";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Username: <input type="text" name="u">
        <span class="error"> <?php echo $nameErr; ?></span>
        <br><br>
        Password: <input type="password" name="p">
        <span class="error"> <?php echo $emailErr; ?></span> <br><br>
        <input type="submit" value="Login">
    </form>
</body>

<style>
    .error {
        font-size: 14px;
        color: red;
    }
</style>

</html>
