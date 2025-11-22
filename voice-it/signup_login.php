<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "voice-it";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Login
// Handle Login
$login_msg = "";
if (isset($_POST['login'])) {
    $username = trim($_POST['login_username']);
    $password = trim($_POST['login_password']);

    $stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            header("Location: home.php");
            exit();
        } else {
            $login_msg = "Invalid password!";
        }
    } else {
        $login_msg = "User does not exist. Please signup first.";
    }
}


// Handle Signup
$signup_msg = "";
if (isset($_POST['signup'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);

    $check = $conn->prepare("SELECT * FROM users WHERE username=? OR email=?");
    $check->bind_param("ss", $username, $email);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
        $signup_msg = "Username or Email already exists!";
    } else {
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);
        if ($stmt->execute()) {
            $signup_msg = "Signup successful! You can login now.";
        } else {
            $signup_msg = "Error: " . $stmt->error;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login & Signup</title>
    <style>
        * { margin:0; padding:0; box-sizing:border-box; }
        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('login.jpg') no-repeat center center fixed;
            background-size: cover;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
        .container {
            width: 400px;
            background: rgba(255,255,255,0.95);
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            padding: 30px 25px;
        }
        .tab {
            display: flex;
            justify-content: space-around;
            margin-bottom: 25px;
            cursor: pointer;
        }
        .tab div {
            padding: 10px 20px;
            border-bottom: 3px solid transparent;
            font-weight: bold;
            color: #555;
            transition: all 0.3s ease;
        }
        .tab .active {
            border-color: #2575fc;
            color: #2575fc;
        }
        form { display: none; }
        form.active { display: block; }
        input {
            width: 100%;
            padding: 12px 15px;
            margin: 8px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
        }
        input:focus {
            border-color: #2575fc;
            outline: none;
            box-shadow: 0 0 5px rgba(37,117,252,0.5);
        }
        button {
            width: 100%;
            padding: 12px;
            background: #2575fc;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s ease;
        }
        button:hover { background: #6a11cb; }
        .msg {
            margin-bottom: 15px;
            color: red;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="tab">
        <div id="loginTab" class="active">Login</div>
        <div id="signupTab">Signup</div>
    </div>

    <!-- Login Form -->
    <form id="loginForm" class="active" method="POST">
        <?php if(!empty($login_msg)) echo '<div class="msg">'.$login_msg.'</div>'; ?>
        <input type="text" name="login_username" placeholder="Username" required>
        <input type="password" name="login_password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>

    <!-- Signup Form -->
    <form id="signupForm" method="POST">
        <?php if(!empty($signup_msg)) echo '<div class="msg">'.$signup_msg.'</div>'; ?>
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="signup">Signup</button>
    </form>
</div>

<script>
    const loginTab = document.getElementById('loginTab');
    const signupTab = document.getElementById('signupTab');
    const loginForm = document.getElementById('loginForm');
    const signupForm = document.getElementById('signupForm');

    loginTab.addEventListener('click', () => {
        loginTab.classList.add('active'); signupTab.classList.remove('active');
        loginForm.classList.add('active'); signupForm.classList.remove('active');
    });
    signupTab.addEventListener('click', () => {
        signupTab.classList.add('active'); loginTab.classList.remove('active');
        signupForm.classList.add('active'); loginForm.classList.remove('active');
    });
</script>
</body>
</html>
