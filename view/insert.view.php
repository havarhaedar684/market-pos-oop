<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add User - Market POS</title>

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
            min-height: 100vh;
        }

        /* Sidebar */

        .sidebar {
            width: 240px;
            height: 100vh;
            background-color: #ADC4CE;
            position: fixed;
            left: 0;
            top: 0;
            padding: 25px;
        }

        .sidebar h2 {
            color: #234c63;
            margin-bottom: 35px;
            font-size: 23px;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            margin-bottom: 8px;
        }

        .sidebar ul li a {
            display: block;
            padding: 14px;
            text-decoration: none;
            color: #2c4a52;
            border-radius: 8px;
            font-size: 16px;
        }

        .sidebar ul li a i {
            width: 25px;
        }

        .sidebar ul li a:hover,
        .sidebar ul li a.active {
            background-color: #16839c;
            color: white;
        }

        /* Logout */

        .logout {
            position: absolute;
            bottom: 30px;
            left: 25px;
            right: 25px;
        }

        .logout a {
            display: block;
            text-align: center;
            padding: 14px;
            background-color: #d9534f;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        /* Main Content */

        .main-content {
            margin-left: 240px;
            padding: 40px;
        }

        /* Form Container */

        .form-container {
            background-color: rgba(255, 255, 255, 0.18);
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);

            width: 600px;
            max-width: 100%;
            margin: 40px auto;
        }

        /* Title */

        .title {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 30px;
        }

        .title-icon {
            width: 50px;
            height: 50px;
            background-color: #24566f;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            font-size: 20px;
        }

        .title h2 {
            color: #234c63;
            font-size: 26px;
        }

        /* Form */

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 7px;
            color: #234c63;
            font-weight: bold;
        }

        .input-container {
            position: relative;
        }

        .input-container i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #78909c;
        }

        .form-group input {
            width: 100%;
            padding: 13px 15px 13px 45px;
            border: 2px solid #8aa4b0;
            border-radius: 8px;
            font-size: 15px;
            outline: none;
            background-color: #f4f4f4;
        }

        .form-group input:focus {
            border-color: #24566f;
            background-color: white;
        }

        /* Buttons */

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .save-btn,
        .cancel-btn {
            padding: 13px 25px;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            text-decoration: none;
            cursor: pointer;
        }

        .save-btn {
            background-color: #24566f;
            color: white;
            flex: 1;
        }

        .save-btn:hover {
            background-color: #183f53;
        }

        .cancel-btn {
            background-color: #d9534f;
            color: white;
            text-align: center;
            flex: 1;
        }

        .cancel-btn:hover {
            background-color: #c9302c;
        }

    </style>

</head>

<body>


<div class="sidebar">

    <h2>Dashboard</h2>

    <ul>

        <li>
            <a href="home.php">
                <i class="fa-solid fa-house"></i>
                Home
            </a>
        </li>

        <li>
            <a href="categories.php">
                <i class="fa-solid fa-list"></i>
                Categories
            </a>
        </li>

        <li>
            <a href="products.php">
                <i class="fa-solid fa-capsules"></i>
                Products
            </a>
        </li>

        <li>
            <a href="suppliers.php">
                <i class="fa-solid fa-truck"></i>
                Suppliers
            </a>
        </li>

        <li>
            <a href="sales.php">
                <i class="fa-solid fa-cash-register"></i>
                Sales
            </a>
        </li>

        <li>
            <a href="report.php">
                <i class="fa-solid fa-chart-line"></i>
                Report
            </a>
        </li>

        <li>
            <a href="users.php" class="active">
                <i class="fa-solid fa-users"></i>
                Users
            </a>
        </li>

    </ul>

    <div class="logout">

        <a href="logout.php">
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
        </a>

    </div>

</div>

<div class="main-content">

    <div class="form-container">

        <div class="title">

            <div class="title-icon">
                <i class="fa-solid fa-user-plus"></i>
            </div>

            <h2>Add New User</h2>

        </div>


        <form method="POST">


           
            <div class="form-group">

                <label for="name">Name</label>

                <div class="input-container">

                    <i class="fa-solid fa-user"></i>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Enter user name"
                        required
                    >

                </div>

            </div>

            <div class="form-group">

                <label for="email">Email</label>

                <div class="input-container">

                    <i class="fa-solid fa-envelope"></i>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter email address"
                        required
                    >

                </div>

            </div>
             <div class="form-group">

                <label for="id">Passowrd</label>

                <div class="input-container">

                    <i class="fa-solid fa-id-card"></i>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter user passowrd"
                        required
                    >

                </div>

            </div>


            <div class="buttons">

                <button type="submit" class="save-btn">
                    <i class="fa-solid fa-save"></i>
                    Save User
                </button>

                <a href="show.php" class="cancel-btn">
                    Cancel
                </a>

            </div>


        </form>

    </div>

</div>
</body>
</html>