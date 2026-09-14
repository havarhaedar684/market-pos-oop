<!DOCTYPE html>
<html>
<head>
    <title>Suppliers - Market POS</title>
    <link rel="stylesheet" href="supplier.css">
</head>
<style>
    body {
    background-color: #96B6C5;
    margin: 0;
    font-family: Arial, sans-serif;
}

.main {
    padding: 40px;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 35px;
}

.header h1 {
    color: #245b78;
    margin: 0 0 8px 0;
    font-size: 36px;
}

.header p {
    color: #36596a;
    margin: 0;
    font-size: 17px;
}

.add-btn {
    background-color: #245b78;
    color: white;
    text-decoration: none;
    padding: 14px 22px;
    border-radius: 8px;
}

.add-btn:hover {
    background-color: #0891b2;
}

.table-box {
    background-color: #ADC4CE;
    padding: 20px;
    border-radius: 15px;
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: white;
}

th {
    background-color: #245b78;
    color: white;
    padding: 15px;
    text-align: left;
}

td {
    padding: 15px;
    color: #245b78;
    border-bottom: 1px solid #ddd;
}

tr:hover {
    background-color: #eef4f6;
}

.edit {
    background-color: #245b78;
    color: white;
    text-decoration: none;
    padding: 7px 12px;
    border-radius: 5px;
}

.delete {
    background-color: #c94c4c;
    color: white;
    text-decoration: none;
    padding: 7px 12px;
    border-radius: 5px;
}

.edit:hover {
    background-color: #0891b2;
}

.delete:hover {
    background-color: #a83232;
}
</style>
<body>

    <div class="main">

        <div class="header">
            <div>
                <h1>Suppliers</h1>
                <p>Manage your suppliers</p>
            </div>

            <a href="add_supplier.php" class="add-btn">
                + Add New Supplier
            </a>
        </div>


        <div class="table-box">

            <table>

                <tr>
                    <th>ID</th>
                    <th>Supplier Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

               <?php
               //it's ready for add new supplier
               if($result){
                while($row=mysqli_fetch_assoc($result)){
               
               ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['adress'];?></td>
                    <td><?php echo $row['status'];?></td>
                    <td>
                        <a href="#" class="edit">Edit</a>
                        <a href="#" class="delete">Delete</a>
                    </td>
                </tr>
                <?php
                }
               }
                ?>

            </table>

        </div>

    </div>

</body>
</html>