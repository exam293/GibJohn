<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="webstyle.css">
    <link rel="stylesheet" href="Tdashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <title>Document</title>
    <?php 
        function Course_visibility($course_page){
            $page = "1";
            if($course_page == $page){
                echo "visible";
            }

            else{
                echo "hidden";
            }
            

        }
    ?>
</head>
<body>
    
<nav class="navbar navbar-expand-sm grey">
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
<!-- page 1 courses -->
<div class="container">
    <div class="c1 rounded 
    <?php 
        $page="1"; 
        Course_visibility($page) 
    ?>">
        <h4 class="title" >Science</h4> 
        <div class="VM">
            <a class="vm" href="Homepage.php">
                View More
            </a>
        </div>
    </div>
    <div class="c2 rounded 
        <?php 
        $page="1"; 
        Course_visibility($page) 
        ?>">
        <h4 class="title" >Maths</h4> 
        <div class="VM">
            <a class="vm" href="Homepage.php">
                View More
            </a>
        </div>
    </div>
    <div class="c3 rounded 
        <?php 
        $page="1"; 
        Course_visibility($page) 
        ?>">
        <h4 class="title" >English</h4> 
        <div class="VM">
            <a class="vm" href="Homepage.php">
                View More
            </a>
        </div>
    </div>
    <div class="c4 rounded 
        <?php 
        $page="1"; 
        Course_visibility($page) 
        ?>">
        <h4 class="title" >History</h4> 
        <div class="VM">
            <a class="vm" href="Homepage.php">
                View More
            </a>
        </div>
    </div>

    <div class="pc1 rounded"></div>
    <div class="pc2 rounded"></div>

    <!-- page 1 students -->
    <div class="s1 rounded"></div>
    <div class="s2 rounded"></div>
    <div class="s3 rounded"></div>
    <div class="s4 rounded"></div>
    <div class="s5 rounded"></div>
    <div class="s6 rounded"></div>

    <!-- page 2 courses -->
    <div class="c5 rounded 
        <?php 
            $page="2"; 
            Course_visibility($page) 
        ?>">
        <h4 class="title" >Geography</h4> 
        <div class="VM">
            <a class="vm" href="Homepage.php">
                View More
            </a>
        </div>
    </div>
    <div class="c6 rounded 
        <?php 
            $page="2"; 
            Course_visibility($page) 
        ?>">">
        <h4 class="title" >Modern Foreign Languages</h4> 
        <div class="VM">
            <a class="vm" href="Homepage.php">
                View More
            </a>
        </div>
    </div>
    <div class="c7 rounded 
        <?php 
            $page="2"; 
            Course_visibility($page) 
        ?>">">
        <h4 class="title" >Design and Technology</h4> 
        <div class="VM">
            <a class="vm" href="Homepage.php">
                View More
            </a>
        </div>
    </div>
    <div class="c8 rounded 
        <?php 
            $page="2"; 
            Course_visibility($page) 
        ?>">">
        <h4 class="title" >Art and Design</h4> 
        <div class="VM">
            <a class="vm" href="Homepage.php">
                View More
            </a>
        </div>
    </div>

    <!-- page 3 courses -->
    <div class="c9 rounded 
        <?php 
            $page="3"; 
            Course_visibility($page) 
        ?>">
        <h4 class="title" >Music</h4> 
        <div class="VM">
            <a class="vm" href="Homepage.php">
                View More
            </a>
        </div>
    </div>
    <div class="c10 rounded 
        <?php 
            $page="3"; 
            Course_visibility($page) 
        ?>">
        <h4 class="title" >Physical Education</h4> 
        <div class="VM">
            <a class="vm" href="Homepage.php">
                View More
            </a>
        </div>
    </div>
    <div class="c11 rounded 
        <?php 
            $page="3"; 
            Course_visibility($page) 
        ?>">
        <h4 class="title" >Citizenship</h4> 
        <div class="VM">
            <a class="vm" href="Homepage.php">
                View More
            </a>
        </div>
    </div>
    <div class="c12 rounded 
        <?php 
            $page="3"; 
            Course_visibility($page) 
        ?>">
        <h4 class="title" >Computing</h4> 
        <div class="VM">
            <a class="vm" href="Homepage.php">
                View More
            </a>
        </div>
    </div>

    <!-- page2 students -->
    <div class="s7"></div>
</div>

</body>
</html>