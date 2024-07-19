<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "obituary_platform";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$date_of_birth = $_POST['date_of_birth'];
$date_of_death = $_POST['date_of_death'];
$content = $_POST['content'];
$author = $_POST['author'];
$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($name));

$sql = "INSERT INTO obituaries (name, date_of_birth, date_of_death, content, author, slug)
VALUES ('$name', '$date_of_birth', '$date_of_death', '$content', '$author', '$slug')";

if ($conn->query($sql) === TRUE) {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>$name Obituary</title>
        <meta name='description' content='Obituary for $name'>
        <meta name='keywords' content='obituary, $name'>
        <meta property='og:title' content='Obituary for $name'>
        <meta property='og:description' content='$content'>
        <meta property='og:type' content='article'>
        <meta property='og:url' content='http://localhost/obituary_platform/view_obituary.php?slug=$slug'>
        <meta property='og:site_name' content='Obituary Platform'>
        <link rel='stylesheet' href='styles.css'>
    </head>
    <body>
        <h1>Obituary for $name</h1>
        <p>$content</p>
        <p>Submitted by: $author</p>
        <p>Date of Birth: $date_of_birth</p>
        <p>Date of Death: $date_of_death</p>
    </body>
    </html>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
