<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obituary Platform</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="header">
    <h1 class="title">Create an Obituary</h1>
    <a href="view_obituaries.php">View Obituaries</a>
    </div>
    <form action="submit_obituary.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>

        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth"><br>
        
        <label for="date_of_death">Date of Death:</label>
        <input type="date" id="date_of_death" name="date_of_death"><br>
        
        <label  for="content">Content:</label>
        <textarea id="content" name="content"></textarea><br>
        
        <label for="author">Author:</label>
        <input type="text" id="author" name="author"><br>
        
        <button type="submit" class="btn">Submit</button>
    </form>
    
    <script src="/app.js"></script>
</body>
</html>