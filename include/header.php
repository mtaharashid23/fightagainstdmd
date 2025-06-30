<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php'; ?>
</head>

<body>

    <!-- PRELOADER -->
    <!-- <div class="preLoader black">
        <img src="images/logo.png" alt="img">
    </div>
    <div class="preLoader white"></div> -->

    <!-- HEADER -->
    <header class="header">
        <div class="header-top">
            <div class="container">
                <p>Meet Ibrahim – A Brave Little Warrior</p>
            </div>
        </div>
        <nav class="header-main navbar navbar-expand-lg">
            <div class="container">
                <a href="index.php" class="header-main__logo">
                    <img src="images/logo-white.png" alt="image" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fas fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto header-main__nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-ibrahim">About Ibrahim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#what-is-dmd">What is DMD?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#donate">Donate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>