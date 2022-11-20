<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SLICING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css"); ?> " />
</head>

<body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg bg-transparant fixed-top">
        <div class="container">
            <h1 class="navbar-brand" style="font-weight: 700">GANDULWEB</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navigation -->

    <!-- jumbotron -->
    <div class="jumbotron overflow-hidden">
        <div class="content h-100 d-flex align-items-center">
            <div class="content-text">
                <p style="color: #7b9cff; font-weight: 700">HELLO WELCOME!</p>
                <h1 style="font-weight: 700">
                    CREATE YOUR <br />
                    BEAUTIFUL WEBSITE
                </h1>
                <p>we’re can develop your website with popular TechStach, beautiful and clean code.</p>
                <a href="<?=base_url('index.php/welcome/login');?>"><button type="button" class="btn px-4"
                        style="background-color: #7b9cff; color: white; border-radius: 15px">GET STARTED</button></a>
            </div>
            <div class="content-img">
                <img src="<?= base_url("assets/assets/landing-page.png")?>" class="img-fluid" height="500px"
                    width="500px" />
            </div>
        </div>
    </div>
    <!-- end jumbotron -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>