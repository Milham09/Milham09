<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Landing Page</title>
    <!-- Favicon-->
    <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#!">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>/Home/profile">My Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>/Film">List Film</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>/logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header - set the background image for the header in the line below-->
    <header class="py-5 bg-image-full"
        style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
        <div class="text-center my-5">
            <img class="img-fluid rounded-circle mb-4" src=""
                alt="..." />
            <h1 class="text-white fs-3 fw-bolder">WELCOME</h1>
            <h2 class="text-white-50 mb-0"><?= session()->get('name'); ?></h2>
        </div>
    </header>
    <!-- Content section-->
    <section class="py-5">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2>Full Width Backgrounds</h2>
                    <p class="lead">A single, lightweight helper class allows you to add engaging, full width background
                        images to sections of your page.</p>
                    <p class="mb-0">The universe is almost 14 billion years old, and, wow! Life had no problem starting
                        here on Earth! I think it would be inexcusably egocentric of us to suggest that we're alone in
                        the universe.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Image element - set the background image for the header in the line below-->
    <div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/4ulffa6qoKA/1200x800')">
        <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
        <div style="height: 20rem"></div>
    </div>
    <!-- Content section-->
    <section class="py-5">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2>Engaging Background Images</h2>
                    <p class="lead">The background images used in this template are sourced from Unsplash and are open
                        source and free to use.</p>
                    <p class="mb-0">I can't tell you how many people say they were turned off from science because of a
                        science teacher that completely sucked out all the inspiration and enthusiasm they had for the
                        course.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url(); ?>js/scripts.js"></script>
</body>

</html>