<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form div {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .signup-link, .forgot-password {
            text-align: center;
            margin-top: 15px;
        }
        #response {
            margin-top: 15px;
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sign in</h2>
        <form id="loginForm">
            <div>
                <label for="username">Email</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <button type="submit">Sign In</button>
            </div>
        </form>
        <div>
            <p>Don't have an account?</p>
            <a href="register.php">Sign Up</a>
        </div>
        <div id="response"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#loginForm').on('submit', function (e) {
                    e.preventDefault();
                    $.ajax({
                        type: "post",
                        url: "../../src/routes/routes.php",
                        data: {
                            type: "login",
                            user: $('#username').val(),
                            pass: $('#password').val(),
                        },
                        success: function (data) {  
                            if (data.trim() === "Login successful!") {
                                window.location.href = "home.php";
                            } else {
                                $('#response').html(data);
                            }
                        },
                    });
                });
            });
        </script>
    </div>
</body>
</html>
