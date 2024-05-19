<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nama: <input type="text" name="name"> <br>
        E-mail: <input type="email" name="email"><br>
        Komentar: <textarea name="comment" rows="5" cols="40"></textarea><br>
        <input type="submit" value="simpan">
        <input type="reset" value="bersihkan">
    </form>
</body>

<?php
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];
    echo ("Nama " . bersihkan_input($name) . "<br>");
    echo ("Email " . bersihkan_input($email) . "<br>");
    echo ("Komentar " . bersihkan_input($comment) . "<br>");
    echo ("<hr>");
}

function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

</html>