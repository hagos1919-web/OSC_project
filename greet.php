<!DOCTYPE html>
<html>
<head>
    <title>My First PHP Form</title>
</head>
<body>
    <h2>Who are you?</h2>
    
    <form method="POST">
        <input type="text" name="username" placeholder="Enter your name" required>
        <button type="submit">Say Hello</button>
    </form>

    <hr>

    <?php
    // This PHP code only runs IF the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['username'];
        echo "<h3>Hello, " . htmlspecialchars($name) . "! Welcome to your server.</h3>";
        echo "<p>Your name has " . strlen($name) . " letters in it.</p>";
    }
    ?>
</body>
</html>

