<?php
require_once "connection.php";

if (isset($_POST["create"])) {
    $title = $_POST["title"];
    $image = $_POST["image"];
    $isbn_no = $_POST["isbn_no"];
    $short_description = $_POST["short_description"];
    $type = $_POST["type"];
    $author_fname = $_POST["author_fname"];
    $author_lname = $_POST["author_lname"];
    $publisher_name = $_POST["publisher_name"];
    $publisher_address = $_POST["publisher_address"];
    $publish_date = $_POST["publish_date"];
    $status = $_POST["status"];

    $sql = "INSERT INTO `library`(`title`, `image`, `ISBN`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES ('{$title}','{$image}','{$isbn_no}','{$short_description}','{$type}','{$author_fname}','{$author_lname}','{$publisher_name}','{$publisher_address}','{$publish_date}','{$status}')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Success";
    } else {
        echo "Error";
    }


    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">e-Library</a>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <a class="btn btn-light" href="create.php">Create Item</a>
        </div>
    </nav>
    <div class="container">
        <h2>Item Details</h2>
        <form method="post">
            <input name="title" type="text" placeholder="Item Title" class="form-control my-2">
            <input name="image" type="text" placeholder="Item Image" class="form-control my-2">
            <input name="isbn_no" type="number" placeholder="ISBN number" class="form-control my-2">
            <textarea name="short_description" placeholder="Short Description" class="form-control my-2"></textarea>
            <div class="form-control">
                <span class="mx-4">Item Type:</span>
                <select name="type" class="my-2">
                    <option value="book">Book</option>
                    <option value="cd">CD</option>
                    <option value="dvd">DVD</option>
                </select>
            </div>
            <div class="form-control">
                <span class="mx-4">Status</span>
                <select name="status" class="my-2">
                    <option value="available">Available</option>
                    <option value="reserved">Reserved</option>
                </select>
            </div>
            <input name="author_fname" type="text" placeholder="Author First Name" class="form-control my-2">
            <input name="author_lname" type="text" placeholder="Author Last Name" class="form-control my-2">
            <input name="publisher_name" type="text" placeholder="Publisher Name" class="form-control my-2">
            <input name="publisher_address" type="text" placeholder="Publisher Address" class="form-control my-2">
            <input name="publish_date" type="date" placeholder="Publish Date" class="form-control my-2">
            <input type="submit" class="btn btn-primary" name="create" value="create">
        </form>
    </div>
    <footer class="bg-body-tertiary text-center text-lg-start">

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright:
            <p class="text-body">Mustafa Erkam Arafat - CodeFactory</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>