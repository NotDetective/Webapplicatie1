<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../index.php");
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atomic Sushi backlog</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/icon-or-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Atomic+Age&display=swap');
    </style>
</head>
<body>
<header class="header-backlog">
        <div>
            <div>
                <img src="../img/icon-or-logo.png" alt="logo">
            </div>
            <h1 class="header-name-admin">Atomic Sushi Admin</h1>
        </div>
    </header>

    <?php
        require_once  '../pages/conn.php';

        $id = (int)$_GET['id'];

        $stmt = $conn->prepare("SELECT * FROM sushi WHERE id=:id");

        $stmt->execute(['id' => $id]); 
        $row = $stmt->fetch();

    ?>

    <main class="main-backlog">
        <form class="edit-item-form" naam="edit-menu-item" action="../backlog-pages/edit-menu-item-page.php" method="POST" enctype="multipart/form-data">

        <input class="style-input-add-item" type="text" name='name' value="<?php echo $row['name']; ?>" required>

        <textarea name='text' cols="30" rows="10" required><?php echo $row['description']; ?></textarea>

        <input class="style-input-add-item" type="number" name='price' value="<?php echo $row['price']; ?>" step="0.01" required>

        <input type="file" name="image">

        <fieldset>
            <div>
                <input type="radio" id="boxen" name='item_type' value=1 <?php if ($row['category'] == 1): ?> checked="checked" <?php endif; ?>>
                <label for="boxen">New Box item</label>
            </div>
            <div>
                <input type="radio" id="sushi"  name='item_type' value=2 <?php if ($row['category'] == 2): ?> checked="checked" <?php endif; ?>>
                <label for="sushi">New sushi item</label>
            </div>
            <div>
                <input type="radio" id="luxury" name='item_type' value=3 <?php if ($row['category'] == 3): ?> checked="checked" <?php endif; ?>>
                <label for="luxury">New luxury Sushi item</label>
            </div>
        </fieldset>

        <input class="hidden-input" type="number" name="id" value="<?php echo $id; ?>">
                    
        <input class="submit-button-add-new-item" type="submit" name='update-item' value="update-item">

        </form>
    </main>

    <?php
    if (isset($_POST['update-item'])) {

        var_dump($_FILES['image']['name']);

        $target = "../upload-images/".basename($_FILES['image']['name']);
        
        $image = $_FILES['image']['name'];

        $name = $_POST['name'];
        $description = $_POST['text'];
        $price = (double)$_POST['price'];
        $category = (int)$_POST['item_type'];
        $id = (int)$_POST['id'];
        
        $data = [
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'category' => $category,
            'image' => $image,
            'id' => $id,
        ];

        try {
            $sql = "UPDATE sushi SET name=:name, description=:description, price=:price, image=:image , category=:category 
            WHERE id=:id";
            
            $stmt = $conn->prepare($sql);
            
            $stmt->execute($data);
            

            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                echo "Image Uploaded";
            }else{
                echo "Not uploaded" ; 
            }

            header("Location: manage-menu-item-page.php");
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    ?>
</body>
</html>