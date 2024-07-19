<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "obituary_platform";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

header('Content-Type: application/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

$sql = "SELECT slug FROM obituaries";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<url>';
        echo '<loc>http://localhost/obituary_platform/view_obituary.php?slug=' . $row["slug"] . '</loc>';
        echo '<changefreq>weekly</changefreq>';
        echo '</url>';
    }
}

echo '</urlset>';

$conn->close();
