<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['username']) && $_SESSION['user-roll'] <= 4){
            header("Location: ../../index.php");
        }
        require_once '../../pages/conn.php';

        if (isset($_POST['item_type'])) {
        }else{
            header("Location: ../manage-menu-item-page.php");
        }

        $target = "../upload-images/".basename($_FILES['image']['name']);
        
        $image = $_FILES['image']['name'];
        
        if (isset($image)) {

            $name = $_POST['name']; 
            $description = $_POST['text'];
            $price = (double)$_POST['price'];
            $category = (int)$_POST['item_type'];
            
            $data = [
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'image' => $image,
                'category' => $category,
            ];
            
            
            $sql = "INSERT INTO sushi (name, description, price, image,  category) 
            VALUES (:name, :description, :price ,:image , :category )";
            try {
                $stmt= $conn->prepare($sql);
                $stmt->execute($data);
            } catch (PDOException $e) {
                echo $e->getMessage()."<br>";
            }

        }

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            echo "Image Uploaded";
        }else{
            echo "Not uploaded" ; 
        }

        $_SESSION['menu-item-added'] ="New menu item was added";

        header("Location: ../manage-menu-item-page.php")
    ?>  

</body>
</html>