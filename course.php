<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="webstyle.css">
    <link rel="stylesheet" href="course.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <title>View More</title>
    <?php
        session_start(); 
        echo $_SESSION['subject'];

        function title(){ 
            if ($_SESSION['subject'] == "maths"){
                echo("Mathmatics");
            }

            else if ($_SESSION['subject'] == "science"){
                echo("Science");
            }

            else if ($_SESSION['subject'] == "english"){
                echo("English");
            }

            else if ($_SESSION['subject'] == "history"){
                echo("History");
            }

            else if ($_SESSION['subject'] == "geography"){
                echo("Geography");
            }

            else if ($_SESSION['subject'] == "mfl"){
                echo("Modern Foreign Languages");
            }

            else if ($_SESSION['subject'] == "dt"){
                echo("Design and Technology");
            }

            else if ($_SESSION['subject'] == "ad"){
                echo("Art and Design");
            }

            else if ($_SESSION['subject'] == "music"){
                echo("Music");
            }

            else if ($_SESSION['subject'] == "pe"){
                echo("Physical Education");
            }

            else if ($_SESSION['subject'] == "citizenship"){
                echo("Citizenship");
            }

            else if ($_SESSION['subject'] == "computing"){
                echo("Computing");
            }
        }
    ?>
</head>
<body>
    
<nav class="navbar navbar-expand-sm grey fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="Homepage.php">
            <img src="logo.png" alt="Company logo" style="width:99px; height:60px">
        </a> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="Contact.php">Contact Us</a>
                </li>
            </ul>
       
        </div>
    </div>
</nav> 

<div class="container">
  <div class="title">
      <h2 class="text-white">
            <?php title() ?>
      </h2>
    </div>
  <div class="Content"></div>
  <div class="links"></div>
</div>


</body>
</html>