<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>about Me</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <header>
        <div class="menu-btn">
            <div class="btn-line"></div>
            <div class="btn-line"></div>
            <div class="btn-line"></div>
        </div>

        <nav class="menu">
            <div class="menu-branding">
                <div class="portrait"></div>
            </div>
            <ul class="menu-nav">
                <li class="nav-item">
                    <a href="index.html" class="nav-link">
                        Home
                    </a>
                </li>
                <li class="nav-item current">
                    <a href="about.php" class="nav-link">
                        About me
                    </a>
                </li>
                <li class="nav-item">
                    <a href="work.php" class="nav-link">
                        My Work
                    </a>
                </li>
                <li class="nav-item">
                    <a href="contact.html" class="nav-link">
                        How to reach me
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main id="about">
        <h1 class="lg-heading">
            About 
            <span class='text-secondary'>Me</span>
        </h1>
        <h2 class="sm-heading">
            Kenneth Uyttendaele
        </h2>
        <div class="about-info">
            <img src="img/iksm.png" alt="Me" class="bio-image">
            <div class="bio">
                <h3 class="text-secondary">Info</h3>
                <p>Ik ben Kenneth Uyttendaele 27 jaar, omgeschoold tot web-developer.<br>
                Ik heb een echte hobby gevonden in programmeren, ikzelf heb nu iets meer affiniteit voor back-end,<br>
                maar het is mijn droom om uiteindelijk een full-stack te worden nadat mijn front-end de nodige verfijning heeft gekregen die het nodig heeft. </p>
            </div>    
        </div>
    </main>

    <footer class="main-footer">
        Copyright &copy;
        <?php echo date("Y"); ?>
    </footer></center>

    <script src="js/main.js"></script>
</body>

</html>