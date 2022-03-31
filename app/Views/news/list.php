<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Page</title>
    <!-- Favicon -->
    <link rel="icon" href="avatar.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam:wght@100;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/animated-headline.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/jquery.fancybox.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/chosen.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">
</head>

<body>
    <!-- start per-loader -->
    <div class="loader-container">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- end per-loader -->

    <!-- ================================
    START DASHBOARD AREA
================================= -->
    <section class="dashboard-wrap d-flex">
        <ul class="navbar-nav dashboard-sidebar">
            <li>
                <span id="sidebar-close">
                    <i class="la la-times"></i>
                </span>
            </li>
            <li>
                <div class="sidebar-brand">
                    <h2 class="sec__title font-size-24 mb-0 text-white">Welcome</h2>
                </div>
            </li>
            <li class="sidebar-heading pt-3">Main</li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/dashboard">
                    <i class="la la-dashboard font-size-18 mr-1"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url(); ?>/list">
                    <i class="la la-list font-size-18 mr-1"></i>
                    <span>List News</span>
                </a>
            </li>
            <li><hr class="sidebar-divider border-top-color"></li>
            <li class="sidebar-heading">News</li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/create">
                    <i class="la la-folder-plus font-size-18 mr-1"></i>
                    <span>Create News</span>
                </a>
            </li>
            <li>
                <hr class="sidebar-divider border-top-color">
            </li>
            <li class="sidebar-heading">Account</li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url();?>/profile">
                    <i class="la la-user font-size-18 mr-1"></i>
                    <span>My Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/logout">
                    <i class="la la-power-off font-size-18 mr-1"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
        <div class="dashboard-body d-flex flex-column">
            <div class="dashboard-inner-body flex-grow-1">
                <nav class="navbar navbar-expand bg-navbar dashboard-topbar mb-4">
                    <button id="sidebarToggleTop" class="btn rounded-circle mr-3">
                        <i class="la la-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown border-left pl-3 ml-4">
                            <a class="nav-link dropdown-toggle after-none" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="user-thumb user-thumb-sm position-relative">
                                    <img src="<?= base_url('images/avatar.png')?>" alt=>
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <span
                                    class="ml-2 small font-weight-medium d-none d-lg-inline"><?= session()->get('username');?></span>
                            </a>
                        </li>
                    </ul>
                </nav><!-- end dashboard-topbar -->
                <div class="container-fluid dashboard-inner-body-container">
                    <div class="breadcrumb-content d-sm-flex align-items-center justify-content-between mb-4">
                        <div class="section-heading">
                            <h2 class="sec__title font-size-24 mb-0">List News</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div>
                <div class="row mx-2">
                    <div class="col-lg-12">
                        <div class="block-card dashboard-card mb-4">
                            <div class="block-card-header">
                                <h2 class="widget-title pb-0">News</h2>
                                <?php if (session()->getFlashdata('Ubah')) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= session()->getFlashdata('Ubah'); ?> 
                                    </div>
                                <?php endif; ?>
                                <?php if (session()->getFlashdata('success')) : ?>
                                    <div class="alert alert-warning" role="alert">
                                        <?= session()->getFlashdata('success'); ?> 
                                    </div>
                                <?php endif; ?>
                            </div>
                            <table class="table">
                                <thead>
                                    
                                    <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>

                                <?php foreach($news as $n) : ?>
                                    
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $n['judul']?></td>
                                            <td>
                                                <a href="<?= base_url();?>/edit/<?= $n['slug'];?>" class="btn btn-warning font-weight-small "><i class="la la-edit mr-1"></i>Edit</a>
                                                <a href="<?= base_url(); ?>/news/<?= $n['slug']; ?>" class="btn btn-info font-weight-small"><i class="la la-bars mr-1"></i>Detail</a>
                                                <a href="<?= base_url(); ?>/delete/<?= $n['id'];?>" class="btn btn-danger font-weight-small" onclick="return confirm('apakah anda yakin ingin menghapusnya?');"><i class="la la-trash mr-1"></i>Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
<!-- ================================
    START DASHBOARD AREA
================================= -->

                <!-- Template JS Files -->
                <script src="<?= base_url('js/jquery-3.4.1.min.js')?>"></script>
                <script src="<?= base_url('js/jquery-ui.js')?>"></script>
                <script src="<?= base_url('js/popper.min.js')?>"></script>
                <script src="<?= base_url('js/bootstrap.min.js')?>"></script>
                <script src="<?= base_url('js/owl.carousel.min.js')?>"></script>
                <script src="<?= base_url('js/jquery.fancybox.min.js')?>"></script>
                <script src="<?= base_url('js/animated-headline.js')?>"></script>
                <script src="<?= base_url('js/chosen.min.js')?>"></script>
                <script src="<?= base_url('')?>/js/moment.min.js"></script>
                <script src="<?= base_url('')?>/js/datedropper.min.js"></script>
                <script src="<?= base_url('')?>/js/waypoints.min.js"></script>
                <script src="<?= base_url('')?>/js/jquery.counterup.min.js"></script>
                <script src="<?= base_url('')?>/js/chart.min.js"></script>
                <script src="<?= base_url('')?>/js/line-chart.js"></script>
                <script src="<?= base_url('')?>/js/main.js"></script>
</body>

</html>