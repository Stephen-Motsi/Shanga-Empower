<?php
@include 'config.php';

$select = mysqli_query($conn, "SELECT * FROM products");
$products = mysqli_fetch_all($select, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Product List</title>
   <link rel="stylesheet" href="path_to_your_css_file.css">
</head>
<body>
   <h1>Testimonials</h1>
   <table>
      <thead>
         <tr>
            <th>Person</th>
            <th>Testimonial</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($products as $product) { ?>
            <tr>
               <td><?php echo htmlspecialchars($product['name']); ?></td>
               <td>$<?php echo htmlspecialchars($product['price']); ?>/-</td>
            </tr>
         <?php } ?>
      </tbody>
   </table>
</body>
</html>
