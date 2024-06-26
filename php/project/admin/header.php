<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

<?php if (!isset($_SESSION["logged"])) {
    header("location: /php/project/admin/login/login.php");
} ?>


<div>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="/php/project/admin">project.news</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/php/project/admin/category">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/php/project/admin/post">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/php/project/admin/tag">Tags</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/php/project/admin/login/login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/php/project/admin/login/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>