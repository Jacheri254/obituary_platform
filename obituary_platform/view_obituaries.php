<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "obituary_platform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from database
$sql = "SELECT * FROM obituaries";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr class='headings'>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Date of Death</th>
            <th>Content</th>
            <th>Author</th>
            <th>Submission Date</th>
        </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr  class='content'>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["date_of_birth"] . "</td>";
        echo "<td>" . $row["date_of_death"] . "</td>";
        echo "<td>" . $row["content"] . "</td>";
        echo "<td>" . $row["author"] . "</td>";
        echo "<td>" . $row["submission_date"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
