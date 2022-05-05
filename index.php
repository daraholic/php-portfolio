<?php include_once "base.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./scss/bootstrap.css">
    <title>作品集</title>
</head>

<body style="background-image:url('./img/cover.jpg') ;height:100ch">
    <!-- jumbotron -->
    <div class="jumbotron text-light text-center" style="background-image:url('./img/cover.jpg');">
        <br><br><br><br>
        <h1 class="display-4">Welcome to my website!</h1>
        <br><br><br><br><br>
        <p class="font-weight-bold text-Dewberryz">Hello! I'm Ann.</p>
        <hr><br><br><br><br><br><br>
        <p class="lead">
        <div class="contentDiv">
            <br><br><br>
            <a class="arrow" href="#start">
                <i class="fas fa-chevron-circle-down fa-4x text-VeryPeri"></i>
            </a>
        </div>
        </p>
    </div>
    <!-- jumbotron end-->

    <!-- nav -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">
                <?=$Icon->find(['sh'=>1])['text']?></i>&nbsp;
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#about">ABOUT<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#educ">EDUCATION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#expe">EXPERIENCE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skill">SKILL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#por">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./front/login.php">LOGIN</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
    <!-- nav end -->

    <!-- Page Container -->
    <div class="container" style="max-width:1000px;" id="start">
        <!-- about -->
        <?php include "./front/about.php";?>
        <!-- education -->
        <?php include "./front/edu.php";?>
        <!-- work -->
        <?php include "./front/work.php";?>
        <!-- skill & languages-->
        <?php include "./front/skill.php";?>
        <!-- portfolio -->
        <?php include "./front/po.php";?>

        <!-- top button -->
        <a onclick="topFunction()" id="myBtn" title="Go to top">
            <i class="fas fa-chevron-circle-up fa-3x text-EggshellBlue"></i>
        </a>
    </div><br><br>

    <!-- footer -->
    <footer>
        <div class="p-3 text-center text-VeryPeri bg-EggshellBlue fixed-bottom">
            <?=$Bottom->find(1)['bottom'];?>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $(".nav-tabs a").click(function () {
                $(this).tab('show');
            });
        });



        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }



    </script>

</body>

</html>