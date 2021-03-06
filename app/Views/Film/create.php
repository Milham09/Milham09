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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <style>
        .card {
            max-width: 760px;
            margin: auto;
            margin-top: 40px;
            box-shadow: -2px 9px 24px 1px rgba(3,114,140,0.4);
        }
        i{
            margin-right: 2px;
        }
    </style>
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>/Home/index">Home</a>
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
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Tambah list film yang akan ditonton 2022</h2>
                <form action="<?= base_url(); ?>/film/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                    <div class="mb-3 row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= old('judul'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('judul'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="sutradara" class="col-sm-2 col-form-label">Sutradara</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sutradara" name="sutradara" value="<?= old('sutradara'); ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="rilis" class="col-sm-2 col-form-label">Rilis</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="rilis" name="rilis" value="<?= old('rilis'); ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="poster" class="col-sm-2 col-form-label">Poster</label>
                        <div class="col-sm-10">
                            <div class="mb-3">
                                <label for="poster" class="form-label"><i class="bi bi-upload"></i>Upload Gambar</label>
                                <input class="form-control <?= ($validation->hasError('poster')) ? 'is-invalid' : ''; ?>"" type="file" id="poster" name="poster">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('poster'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-folder-plus"></i></i>Tambah Data</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url(); ?>js/scripts.js"></script>
</body>

</html>