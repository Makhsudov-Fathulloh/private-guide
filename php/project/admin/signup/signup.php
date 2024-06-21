<?php session_start(); ?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Project News</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
              crossorigin="anonymous">
    </head>

<body>

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
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container mt-4">

        <?php echo "<pre>";
        var_dump($_SESSION['error']);
        var_dump($_SESSION['success']);
        echo "</pre>"; ?>

        <h2 class="mt-4">Sign up</h2>
        <?php
        if (isset($_SESSION['error'])) {
            echo "<div class='alert alert-danger' role='alert'>
            " . $_SESSION['error'] . "<div>";
            unset($_SESSION['error']);
        }
        if (isset($_SESSION['success'])) {
            echo "<div class='alert alert-success' role='alert'>
                Registration is successful
            </div>";
            unset($_SESSION['success']);
        }
        ?>
        <form method="post" action="signupCheck.php">
            <div class="mb-3 mt-4">
                <label for="firstname" class="form-label">firstname</label>
                <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm password</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="checkbox">
                <label class="form-check-label" for="checkbox">Check me out</label>
            </div>

            <button type="submit" class="btn btn-primary" name="signup">Submit</button>
        </form>
    </div>

<?php include '../footer.php'; ?>