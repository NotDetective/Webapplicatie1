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
        require_once '../pages/conn.php';
        echo "start <br>";

        if (isset($_POST['item_type'])) {
        }else{
            header("Location: add-menu-item-page.php");
        }

        $name = $_POST['name']; 
        $description = $_POST['text'];
        $price = (double)$_POST['price'];
        $category = (int)$_POST['item_type'];

        $data = [
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'category' => $category,
        ];
        
        
        $sql = "INSERT INTO sushi (name, description, price, category) 
        VALUES (:name, :description, :price , :category )";
        try {
            $stmt= $conn->prepare($sql);
            $stmt->execute($data);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
         echo "new record created";

        echo "end";
    ?>  

    <a href="add-menu-item-page.php">
        <button>back</button>
    </a>
</body>
</html>