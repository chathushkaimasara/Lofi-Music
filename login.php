<?php
    session_start();
    include("db.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                $_SESSION['user'] = $row['username'];
                header("Location: index.php");
            } else {
                echo "Invalid credentials!";
            }
        } else {
            echo "User not found!";
        }
    }
    ?>
    <h2>Log In...</h2>
    <form method="POST" action="login.php" id="form">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
<link rel="stylesheet" href="styles2.css">