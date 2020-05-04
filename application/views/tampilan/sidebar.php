<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> <?= $title ?> </title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Kustom CSS kita -->
    <link rel="stylesheet" href="<?= base_url() ?>sumber_daya/css/style2.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Seputar Narkoba</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="http://localhost/EEN/Web_narkoba/index">HOMEPAGE</a>
                </li>
                <li>
                    <a href="http://localhost/EEN/Web_narkoba/ain">Apa Itu Narkoba</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Serba-Serbi Narkoba</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                             <a href="#serba-serbi" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle green">Jenis-Jenis Narkoba</a>
                             <ul class="collapse list-unstyled" id="serba-serbi">
                                <li>
                                    <a href="http://localhost/EEN/Web_narkoba/ganja" class="green">Ganja</a>
                                </li>
                                <li>
                                    <a href="http://localhost/EEN/Web_narkoba/sabu" class="green">Sabu-Sabu</a>
                                </li>
                                <li>
                                    <a href="http://localhost/EEN/Web_narkoba/coming_soon" class="green">Coming soon</a>
                                    <div class="dropdown-divider"></div>
                                </li>
                             </ul>
                        </li>
                        <li>
                            <a href="http://localhost/EEN/Web_narkoba/bn" class="green">Bahaya Narkoba</a>
                        </li>
                        <li>
                            <a href="http://localhost/EEN/Web_narkoba/ppn" class="green">Pencegahan Narkoba</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="http://localhost/EEN/Web_narkoba/cerita">Cerita</a>
                </li>
                <li>
                    <a href="http://localhost/EEN/Web_narkoba/video">Video</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Tentang Kami</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="http://localhost/EEN/Web_narkoba/tweb" class="green">Tentang Web</a>
                        </li>
                        <li>
                            <a href="http://localhost/EEN/Web_narkoba/contact" class="green">Contact</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="http://localhost/EEN/Web_narkoba/login" class="login">LOGIN</a>
                </li>
                <li>
                    <a href="http://localhost/EEN/Web_narkoba/registrasi" class="register">REGISTER</a>
                </li>
            </ul>
        </nav>