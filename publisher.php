<?php
require_once "connection.php";

$publisher_name = $_GET["publisher_name"];

$sql = "SELECT * FROM library WHERE publisher_name = '$publisher_name'";

$result = mysqli_query($conn, $sql);

$layout = "";
if (mysqli_num_rows($result) == 0) {
    $layout .= "<p>No items found!</p>";
} else {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach ($rows as $key => $value) {
        $layout .=  "<div><div class='card' style='width: 18rem;'>
                        <img src='{$value["image"]}' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$value["title"]}</h5>
                            <p class='card-text'>{$value["type"]}</p>
                            <a>{$value["publisher_name"]}</a>
                            <p class='card-text'>{$value["short_description"]}</p>
                            <a href='details.php?id={$value["id"]}' class='btn btn-success'>Details</a>

                        </div>
                    </div>
                </div>";
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Library</title>
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
        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-xs-1">
            <?= $layout ?>

        </div>
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