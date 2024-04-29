<?php
@include 'config.php';

$message = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_product'])) {
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $product_price = mysqli_real_escape_string($conn, $_POST['product_price']);
    $person_link = mysqli_real_escape_string($conn, $_POST['person_link']);
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'uploaded_img/' . $product_image;

    if (empty($product_name) || empty($product_price) || empty($person_link) || empty($product_image)) {
        $message[] = 'Please fill out all fields';
    } else {
        $insert = "INSERT INTO products(name, testimonial, link, image) VALUES('$product_name', '$product_price', '$person_link', '$product_image')";
        $upload = mysqli_query($conn, $insert);
        if ($upload) {
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            $message[] = 'New product added successfully';
            // Redirect to prevent form resubmission
            header('Location: admin_page.php');
            exit; // Ensure script stops execution after the redirect
        } else {
            $message[] = 'Could not add the product';
        }
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM products WHERE id = $id");
    header('Location: admin_page.php');
    exit; // Ensure script stops execution after the redirect
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <div class="admin-product-form-container">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                <h3>Add a New Testimonial</h3>
                <input type="text" placeholder="Enter person name" name="product_name" class="box">
                <input type="text" placeholder="Enter testimonial" name="product_price" class="box">
                <input type="text" placeholder="Enter LinkedIn link" name="person_link" class="box">
                <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
                <input type="submit" class="btn" name="add_product" value="Add Product">
            </form>
        </div>

        <div class="product-display">
            <table class="product-display-table">
                <thead>
                    <tr>
                        <th>Person Image</th>
                        <th>Person Name</th>
                        <th>Person Testimonial</th>
                        <th>Person Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                $select = mysqli_query($conn, "SELECT * FROM products");
                while ($row = mysqli_fetch_assoc($select)) {
                ?>
                    <tr>
                        <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['testimonial']; ?>.</td>
                        <td><?php echo $row['link']; ?></td>
                        <td>
                            <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"><i class="fas fa-edit"></i> Edit</a>
                            <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="btn"><i class="fas fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>
