<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Market POS</title>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="category.css">
</head>
<style>
    * {
    box-sizing: border-box;
}

body {
    background-color: #96B6C5;
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
}


/* Sidebar */

.sidebar {
    width: 220px;
    height: 100vh;
    background-color: #ADC4CE;
    padding: 20px;
    position: fixed;
    top: 0;
    left: 0;
}

.sidebar h2 {
    color: #24566f;
    margin-bottom: 30px;
    font-size: 22px;
}

.sidebar h2 i {
    margin-right: 8px;
}

.sidebar a {
    display: block;
    text-decoration: none;
    color: #24566f;
    padding: 13px 12px;
    margin-bottom: 8px;
    border-radius: 8px;
    font-size: 15px;
}

.sidebar a i {
    width: 25px;
}

.sidebar a:hover,
.sidebar a.active {
    background-color: #24566f;
    color: white;
}


/* Main */

.main {
    margin-left: 220px;
    width: calc(100% - 220px);
    padding: 35px;
}


/* Top */

.top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
}

.top h1 {
    margin: 0;
    color: #24566f;
    font-size: 30px;
}

.top p {
    margin-top: 8px;
    color: #3f5d6b;
}


/* Add Button */

.add-btn {
    background-color: #24566f;
    color: white;
    text-decoration: none;
    padding: 12px 18px;
    border-radius: 8px;
    font-size: 14px;
}

.add-btn:hover {
    opacity: 0.9;
}

.add-btn i {
    margin-right: 6px;
}


/* Table Card */

.table-card {
    background-color: #ADC4CE;
    padding: 20px;
    border-radius: 12px;
    overflow-x: auto;
}


/* Table */

table {
    width: 100%;
    border-collapse: collapse;
}

thead {
    background-color: #24566f;
    color: white;
}

th {
    padding: 14px;
    text-align: left;
    font-size: 14px;
}

td {
    padding: 15px 14px;
    border-bottom: 1px solid #91adb9;
    color: #294b5b;
    font-size: 14px;
}

tbody tr:last-child td {
    border-bottom: none;
}

tbody tr:hover {
    background-color: #b9cdd5;
}


/* Status */

.status {
    padding: 6px 10px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: bold;
}

.active-status {
    background-color: #d4edda;
    color: #236b35;
}

.inactive-status {
    background-color: #f1d5d5;
    color: #8a2d2d;
}


/* Action Buttons */

.edit,
.delete {
    text-decoration: none;
    padding: 7px 10px;
    border-radius: 6px;
    font-size: 13px;
    margin-right: 5px;
}

.edit {
    background-color: #24566f;
    color: white;
}

.delete {
    background-color: #8a3d3d;
    color: white;
}

.edit:hover,
.delete:hover {
    opacity: 0.85;
}


/* Responsive */

@media (max-width: 900px) {

    .sidebar {
        width: 190px;
    }

    .main {
        margin-left: 190px;
        width: calc(100% - 190px);
        padding: 25px;
    }

    .top {
        align-items: flex-start;
        gap: 15px;
    }

    th,
    td {
        white-space: nowrap;
    }
}
</style>
<body>

    <!-- Sidebar -->
    <div class="sidebar">

        <h2>
            <i class="fa-solid fa-store"></i>
            Market POS
        </h2>

        <a href="#">
            <i class="fa-solid fa-house"></i>
            Dashboard
        </a>

        <a href="#" class="active">
            <i class="fa-solid fa-layer-group"></i>
            Categories
        </a>

        <a href="#">
            <i class="fa-solid fa-box"></i>
            Products
        </a>

        <a href="#">
            <i class="fa-solid fa-truck"></i>
            Suppliers
        </a>

        <a href="#">
            <i class="fa-solid fa-cart-shopping"></i>
            Sales
        </a>

        <a href="#">
            <i class="fa-solid fa-chart-line"></i>
            Reports
        </a>

        <a href="#">
            <i class="fa-solid fa-users"></i>
            Users
        </a>

        <a href="#">
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
        </a>

    </div>


    <!-- Main Content -->
    <div class="main">

        <div class="top">
            <div>
                <h1>Categories</h1>
                <p>Manage your product categories</p>
            </div>

            <a href="#" class="add-btn">
                <i class="fa-solid fa-plus"></i>
                Add Category
            </a>
        </div>


        <!-- Category Table -->
        <div class="table-card">

            <table>

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Created Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                 <?php if($result){
                    while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>

                        <td>
                            <strong><?php echo $row['name']; ?></strong>
                        </td>

                        <td>
                           <?php echo $row['created_at'];  ?>
                        </td>

                        <td>
                            <span class="status<?php echo (strtolower($row['status']=='active') ? 'active-status' : 'inactive-status') ?>">
                                <?php echo $row['status'];?>
                            </span>
                        </td>

                        <td>
                            <a href="#" class="edit">
                                <i class="fa-solid fa-pen"></i>
                                Edit
                            </a>

                            <a href="#" class="delete">
                                <i class="fa-solid fa-trash"></i>
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

        </div>

    </div>

</body>
</html>