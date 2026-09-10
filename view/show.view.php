<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Users - Market POS</title>

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

        .container {
            background-color: rgba(255, 255, 255, 0.18);
            padding: 34px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        /* Title */

        .title {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
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

        /* Table */

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #f4f4f4;
            border-radius: 10px;
            overflow: hidden;
        }

        th,
        td {
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid #d5dce0;
        }

        th {
            background-color: #24566f;
            color: white;
            text-transform: uppercase;
            font-size: 14px;
        }

        td {
            color: #222;
        }

        tr:hover {
            background-color: #e8eef1;
        }

        /* Actions */

        .action-links {
            white-space: nowrap;
        }

        .action-links a {
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 7px;
            font-size: 14px;
            display: inline-block;
            margin-right: 5px;
        }

        .edit-btn {
            background-color: #24566f;
            color: white;
        }

        .edit-btn:hover {
            background-color: #183f53;
        }

        .delete-btn {
            background-color: #d9534f;
            color: white;
        }

        .delete-btn:hover {
            background-color: #c9302c;
        }

        /* Add User Button */

        .add-user {
            margin-top: 20px;
        }

        .add-user a {
            display: inline-block;
            background-color: #24566f;
            color: white;
            padding: 13px 22px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 16px;
        }

        .add-user a:hover {
            background-color: #183f53;
        }

    </style>
</head>

<body>

    <!-- Sidebar -->

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


    <!-- Main Content -->

    <div class="main-content">

        <div class="container">

            <div class="title">

                <div class="title-icon">
                    <i class="fa-solid fa-users"></i>
                </div>

                <h2>Users Records</h2>

            </div>


            <!-- Users Table -->

            <table>

                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>

                </thead>

                <tbody>
                <?php
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                ?>

                    <tr>
                        <td><?php echo number_format($row['id']); ?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['email']; ?></td>

                        <td class="action-links">

                            <a href="#" class="edit-btn">
                                Edit
                            </a>

                            <a href="#" class="delete-btn">
                                Delete
                            </a>

                        </td>
                    </tr>
                  <?php
                    }
                }
                  ?>
                </tbody>

            </table>


            <!-- Add User -->

            <div class="add-user">

                <a href="insert.controller.php">

                    <i class="fa-solid fa-plus"></i>

                    Add New User

                </a>

            </div>

        </div>

    </div>

</body>

</html>