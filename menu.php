<html>
<head>
   <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/bootstrap.js'></script>
</head>

    <body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="home.php">SD Negeri Kencana 02</a>
        </div>
                    
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="home.php"><span class='glyphicon glyphicon-home'> Home</a>
                </li>
                <li>
                    <a href="profile.php"><span class='glyphicon glyphicon-list-alt'> Profil</a>
                </li>
                <li>
                    <a href="daftar.php"><span class='glyphicon glyphicon-list-alt'> Daftar</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?php
                    ob_start();
                    session_start();
                    if(empty($_SESSION['login'])){
                        echo "<a href='login.php'><span class='glyphicon glyphicon-user'> Login</a>";}
                    else{
                        echo "<a href='logout.php'><span class='glyphicon glyphicon-inbox'> Logout</a>";
                    }?>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    </body>
</html>

