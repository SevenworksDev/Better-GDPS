<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $filePath = '../config/comment_bans.txt';
    file_put_contents($filePath, $username . PHP_EOL, FILE_APPEND | LOCK_EX);
    echo 'User successfully banned.';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ban User</title>
</head>
<body>
    <h1>Ban User</h1>
    <form method="post" action="commentBanUser.php">
        <label for="username">Username: </label>
        <input type="text" id="username" name="username" required><br><br>
        <input type="submit" value="Ban User">
    </form>
</body>
</html>
