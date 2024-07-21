<?php
require_once "connection.php";

$id = $_GET["id"];

$sql = "SELECT * FROM library WHERE id = $id ";

$result = mysqli_query($conn, $sql);

$value = mysqli_fetch_assoc($result);

$layout = "<div class='col mb-4'>
                <div class='card h-100 text-center' style='width: 100%;'>
                    <img src='{$value["image"]}' class='card-img-top' alt='...' style='height: 350px; object-fit: cover;'>
                    <div class='card-body'>
                        <h5 class='card-title mb-3'>{$value["title"]}</h5>
                        <p class='card-text text-muted mb-1'>({$value["type"]})</p>
                        <p class='card-text mb-2'>{$value["short_description"]}</p>
                        <p class='card-text text-success mb-1'><strong>Status:</strong> {$value["status"]}</p>
                        <p class='card-text mb-1'><strong>Author:</strong> {$value["author_first_name"]} {$value["author_last_name"]}</p>
                        <p class='card-text mb-1'><strong>Publisher:</strong> {$value["publisher_name"]}</p>
                        <p class='card-text text-muted mb-1'><strong>Address:</strong> {$value["publisher_address"]}</p>
                        <p class='card-text mb-3'><strong>Publish Date:</strong> {$value["publish_date"]}</p>
                        <a href='index.php' class='btn btn-success'>Go Back</a>
                    </div>
                </div>
            </div>";

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
    <nav class="navbar bg-body-dark">
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