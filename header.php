<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/owl.carousel.min.css">
    <link rel="stylesheet" href="src/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="src/css/aos.css">
    <link rel="stylesheet" href="src/scss/main.css">
    <link rel="icon" type="image/png" href="src/images/favicon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CostCatalyst | Aggarwal Ashwani K. & Associates</title>
</head>
<body>
    <header class="custom">
        <nav class="menu navbar-expand-lg">
            <div class="row">
                <div class="col-md-4 menu-left">        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item <?=$_SERVER['REQUEST_URI']=='/CMS/index.php'?'menu-active':''?>">
                                    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item <?=$_SERVER['REQUEST_URI']=='/CMS/about.php'?'menu-active':''?>" >
                                    <a class="nav-link " href="about.php">About</a>
                                </li>
                                <li class="nav-item <?=$_SERVER['REQUEST_URI']=='/CMS/services.php'?'menu-active':''?>">
                                    <a class="nav-link" href="services.php">Services</a>
                                </li>
                                <li class="nav-item <?=$_SERVER['REQUEST_URI']=='/CMS/contact.php'?'menu-active':''?>">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="menu-mid">
                        <a class="navbar-brand" href="index.php"><img src="src/images/logo-2.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-4 menu-right">
                    <div class="header-info">
                        <ul>
                            <li><div><i class="fas fa-envelope-open-text"></i>admin@costcatalyst.com</div>
                                <div><i class="fas fa-envelope-open-text"></i>akaficwa@gmail.com</div></li>
                            <li><div><i class="fas fa-phone-alt"></i><a href="tel:011-47059269">011-47059269</a></div>
                                <div><i class="fas fa-mobile-alt"></i><a href="tel:9811282502">+91 9811282502</a></div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
