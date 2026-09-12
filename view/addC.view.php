<!DOCTYPE html>
<html>
<head>
    <title>Add Category - Market POS</title>
    <link rel="stylesheet" href="add-category.css">
</head>
<style>
    body {
    background-color: #96B6C5;
    margin: 0;
    font-family: Arial, sans-serif;
}

.container {
    width: 70%;
    margin: 60px auto;
}

.header h1 {
    color: #245b78;
    margin-bottom: 8px;
}

.header p {
    color: #36596a;
    margin-bottom: 30px;
}

.form-box {
    background-color: #ADC4CE;
    width: 500px;
    padding: 35px;
    border-radius: 15px;
}

label {
    display: block;
    color: #245b78;
    font-weight: bold;
    margin-bottom: 8px;
}

input,
select {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: none;
    border-radius: 6px;
    box-sizing: border-box;
    font-size: 15px;
}

input:focus,
select:focus {
    outline: 2px solid #0891b2;
}

.buttons {
    display: flex;
    gap: 10px;
    margin-top: 10px;
}

button {
    background-color: #245b78;
    color: white;
    padding: 12px 22px;
    border: none;
    border-radius: 6px;
    font-size: 15px;
    cursor: pointer;
}

button:hover {
    background-color: #0891b2;
}

.buttons a {
    background-color: #d5dfe3;
    color: #245b78;
    padding: 12px 22px;
    border-radius: 6px;
    text-decoration: none;
    font-size: 15px;
}

.buttons a:hover {
    background-color: #c4d1d6;
}
</style>
<body>

    <div class="container">

        <div class="header">
            <h1>Add New Category</h1>
            <p>Create a new product category</p>
        </div>

        <div class="form-box">

            <form method="POST">

                <label>Category Name</label>
                <input type="text" name="category_name" placeholder="Enter category name">

                <label>Status</label>
                <select name="status">
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>

                <div class="buttons">
                    <button type="submit">Save Category</button>
                    <a href="category.controller.php">Cancel</a>
                </div>

            </form>

        </div>

    </div>

</body>
</html>