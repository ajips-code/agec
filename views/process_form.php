<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Data validasi sederhana
    if (empty($fullname) || empty($email) || empty($message)) {
        die('Please fill all required fields.');
    }

    // Buat koneksi ke database
    $servername = "localhost"; // Sesuaikan dengan nama server Anda
    $username = "root"; // Sesuaikan dengan username database Anda
    $password = ""; // Sesuaikan dengan password database Anda
    $dbname = "agc"; // Sesuaikan dengan nama database Anda

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Cek koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Buat pernyataan SQL untuk memasukkan data
    $sql = "INSERT INTO contacts (fullname, email, message) VALUES (?, ?, ?)";

    // Siapkan pernyataan dan ikat parameternya
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $fullname, $email, $message);

    // Eksekusi pernyataan
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup pernyataan dan koneksi
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
