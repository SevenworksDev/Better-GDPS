<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $filePath = '../config/comment_bans.txt';
    $bannedUsers = file_get_contents($filePath);
    $bannedUsers = str_replace($username, '', $bannedUsers);
    $bannedUsers = trim(preg_replace('/\s+/', ' ', $bannedUsers));
    file_put_contents($filePath, $bannedUsers);
    echo 'User successfully unbanned.';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Unban User</title>
</head>
<body>
    <h1>Unban User</h1>
    <form method="post" action="process_unban.php">
        <label for="username">Username: </label>
        <input type="text" id="username" name="username" required><br><br>
        <input type="submit" value="Unban User">
    </form>
</body>
</html>
