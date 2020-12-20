<?php
$conn = mysqli_connect("localhost", "root", "", "project_4");

$result = mysqli_query($conn, "SELECT * FROM products where pro_id={$_GET['product_id']}");
$row = mysqli_fetch_assoc($result);
//echo '<pre>';

echo "<h1>Product Name: {$row['pro_name']}</h1>";
echo "<h1>Product Description: {$row['pro_short_desc']}</h1>";
echo "<h1>Product Price $ {$row['pro_price']}</h1>";

//echo "<option>{$row['admin_email']}</option>";
