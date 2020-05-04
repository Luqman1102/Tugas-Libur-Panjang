<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

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
                <h3>Eagle Eyes News</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#">HOMEPAGE</a>
                </li>
                <li>
                    <a href="#">Apa Itu Narkoba</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Serba-Serbi Narkoba</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                             <a href="#serba-serbi" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle green">Jenis-Jenis Narkoba</a>
                             <ul class="collapse list-unstyled" id="serba-serbi">
                                <li>
                                    <a href="#" class="green">Ganja</a>
                                </li>
                                <li>
                                    <a href="#" class="green">Sabu-Sabu</a>
                                </li>
                                <li>
                                    <a href="#" class="green">Coming soon</a>
                                    <div class="dropdown-divider"></div>
                                </li>
                             </ul>
                        </li>
                        <li>
                            <a href="#" class="green">Bahaya Narkoba</a>
                        </li>
                        <li>
                            <a href="#" class="green">Pencegahan Narkoba</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Cerita</a>
                </li>
                <li>
                    <a href="#">Video</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Tentang Kami</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#" class="green">Tentang Web</a>
                        </li>
                        <li>
                            <a href="#" class="green">Contact</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="login">LOGIN</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="register">REGISTER</a>
                </li>
            </ul>
        </nav>

    <!-- Page Content  -->
    <div id="content">

        <!-- Header  -->
        <div class ="header">
            <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #00c4b7">

                <button type="button" id="sidebarCollapse" class="btn btn-info" style="background-color: #00c4b7">
                        <i class="fas fa-align-justify "></i>
                </button>

                 <div class="container">
                    
                        <a class="navbar-brand py-2" href="#">Navbar</a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                         <ul class="navbar-nav">
                            <li class="nav-item btn btn-info">
                            <a class="nav-link text-white" href="#">HOMEPAGE <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item btn btn-info">
                                <a class="nav-link text-white" href="#">Apa itu Narkoba</a>
                            </li>
                            <li class="nav-item dropdown dropdown-toggle btn btn-info">
                              <a class="nav-link text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Serba-Serbi Narkoba
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Jenis-Jenis Narkoba</a>
                                <a class="dropdown-item" href="#">Bahaya Narkoba</a>
                                <a class="dropdown-item" href="#">Pencegahan Narkoba</a>
                              </div>
                            </li>

                            <li class="nav-item btn btn-info">
                                <a class="nav-link text-white" href="#">Cerita</a>
                            </li>
                            <li class="nav-item btn btn-info">
                                <a class="nav-link text-white" href="#">Video</a>
                            </li>
                            <li class="nav-item dropdown dropdown-toggle btn btn-info ">
                              <a class="nav-link text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tentang Kami
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Tentang Web</a>
                                <a class="dropdown-item" href="#">Contact</a>
                              </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
        
        <div class="isi">

            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-4">Fluid jumbotron</h1>
                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
              </div>
            </div>

            <div></div>    

        </div>
        

    <footer class="main-footer">
        <div class="nav justify-content-center py-3" style="background-color: #00a398; color: white;">
        <strong>Copyright &copy; Eagle Eyes News</strong>. All rights
        reserved.
    </div>
    
    </footer>


    </div>



    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar,#content ').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>