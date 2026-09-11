<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Market POS</title>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #96B6C5;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            background-color: #ADC4CE;
            width: 400px;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .login-header {
            text-align: center;
            margin-bottom: 25px;
        }

        .logo-icon {
            width: 60px;
            height: 60px;
            background-color: #24566f;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            margin: 0 auto 15px;
            font-size: 25px;
        }

        .login-header h2 {
            color: #234c63;
            font-size: 27px;
            margin-bottom: 6px;
        }

        .login-header p {
            color: #4d6871;
            font-size: 14px;
        }

        .field {
            margin-bottom: 18px;
        }

        .field label {
            display: block;
            color: #2c4a52;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 7px;
        }

        .input-container {
            position: relative;
        }

        .input-container i {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #78909c;
        }

        .field input {
            width: 100%;
            padding: 13px 14px 13px 42px;
            border: 2px solid #8aa4b0;
            border-radius: 9px;
            background-color: #f4f7f9;
            color: #2c4a52;
            font-size: 15px;
            outline: none;
        }

        .field input:focus {
            border-color: #24566f;
            background-color: white;
        }

        .login-btn {
            width: 100%;
            padding: 14px;
            margin-top: 5px;
            background-color: #24566f;
            color: white;
            border: none;
            border-radius: 9px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .login-btn:hover {
            background-color: #183f53;
        }

        .bottom-text {
            text-align: center;
            margin-top: 20px;
            color: #4d6871;
            font-size: 14px;
        }

    </style>

</head>

<body>

    <div class="login-card">

        <div class="login-header">

            <div class="logo-icon">
                <i class="fa-solid fa-user"></i>
            </div>

            <h2>Market POS</h2>

            <p>Login to your account</p>

        </div>


        <form method="POST">

            
            <div class="field">

                <label for="email">Email</label>

                <div class="input-container">

                    <i class="fa-solid fa-envelope"></i>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter your email"
                        required
                    >

                </div>

            </div>

            <div class="field">

                <label for="password">Password</label>

                <div class="input-container">

                    <i class="fa-solid fa-lock"></i>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                        required
                    >

                </div>

            </div>

            <button type="submit" class="login-btn">
                <i class="fa-solid fa-right-to-bracket"></i>
                Login
            </button>

        </form>


        <div class="bottom-text">
            Market POS Management System
        </div>

    </div>

</body>

</html>