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
<!-- header -->
    <?php include "./front/header.php";?>

    <!-- Page Container -->
    <div class="container" style="max-width:1000px;" id="start">
        <div class="row">
        <!-- about -->
        <?php include "./front/about.php";?>

            <!-- education -->
            <?php include "./front/edu.php";?>

            <!-- experience -->
            <div class="col-12 text-grey transbox mb-5" id="expe"><br>
                <h2><i class="fa fa-suitcase fa-fw"></i>Experience
                </h2>
                <div class="container">
                    <h5>Japanese customer service specialist / NextDrive Co., Ltd.</h5>
                    <h6><i class="fa fa-calendar fa-fw"></i>Mar. 2018 – Apr. 2019</h6>
                    <p>Established a Japanese customer service database to optimize the customer service process.</p>
                    <p>Integrated UX project, App, and multi-language database.</p>
                    <hr>
                </div>
                <div class="container">
                    <h5>Japanese international trade specialist / Hitachi Chemical International Co., Ltd.</h5>
                    <h6><i class="fa fa-calendar fa-fw"></i>Dec. 2016 – Aug. 2017</h6>
                    <p>Controlled the balance of the inventory and made both demand and supply meet.</p>
                    <p>Made reports of monthly commissions and turnover.</p>
                    <hr>
                </div>
                <div class="container">
                    <h5>Japanese business assistant / Matsuda Sangyo Co., Ltd. Taiwan branch</h5>
                    <h6><i class="fa fa-calendar fa-fw"></i>Aug. 2014 – Aug.2016</h6>
                    <p>Maintained the relationship between Japanese Headquarter and customers.</p>
                    <p>Handled the matters of import and export customs clearance business.</p>
                    <br>
                </div>
            </div>
            <!-- work experience end-->

            <!-- sills & languages -->
            <div class="col-12 text-grey transbox mb-5" id="skill"><br>
                <h3><i class="fa fa-asterisk fa-fw"></i>Skills</h3>

                <div>Adobe Photoshop</div>
                <div class="progress">
                    <div class="progress-bar bg-VeryPeri" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                        aria-valuemax="100" style="width:70%">
                        70%
                    </div>
                </div><br>
                <div>Illustrator</div>
                <div class="progress">
                    <div class="progress-bar bg-VeryPeri" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                        aria-valuemax="100" style="width:70%">
                        70%
                    </div>
                </div><br>
                <div>HTML / CSS</div>
                <div class="progress">
                    <div class="progress-bar bg-VeryPeri" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                        aria-valuemax="100" style="width:90%">
                        90%
                    </div>
                </div><br>
                <div>Bootstrap</div>
                <div class="progress">
                    <div class="progress-bar bg-VeryPeri" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                        aria-valuemax="100" style="width:90%">
                        90%
                    </div>
                </div><br>
                <div>JavaScript / jQuery</div>
                <div class="progress">
                    <div class="progress-bar bg-VeryPeri" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                        aria-valuemax="100" style="width:80%">
                        80%
                    </div>
                </div>
                <br>
                <div>PHP / MySQL</div>
                <div class="progress">
                    <div class="progress-bar bg-VeryPeri" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                        aria-valuemax="100" style="width:70%">
                        70%
                    </div>
                </div>
                <hr>

                <h3><i class="fa fa-globe fa-fw"></i>Languages</h3>

                <div>English</div>
                <div class="progress">
                    <div class="progress-bar bg-Dewberryz" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                        aria-valuemax="100" style="width:70%">
                        70%
                    </div>
                </div><br>
                <div>Japanese</div>
                <div class="progress">
                    <div class="progress-bar bg-Dewberryz" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                        aria-valuemax="100" style="width:90%">
                        90%
                    </div>
                </div><br>
                <div>Korean</div>
                <div class="progress">
                    <div class="progress-bar bg-Dewberryz" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                        aria-valuemax="100" style="width:80%">
                        80%
                    </div>
                </div><br>
            </div>
            <!-- sills & languages end-->
            <!-- 作品集 -->
            <?php include "./front/po.php";?>

            <!-- top button -->
            <a onclick="topFunction()" id="myBtn" title="Go to top"><i
                    class="fas fa-chevron-circle-up fa-3x text-EggshellBlue"></i></a>
    </div><br><br>

    <footer>
        <!-- <div class="p-3 text-center text-VeryPeri bg-EggshellBlue fixed-bottom">daraholic, Inc. © 2021 All Rights
            Reserved.</div> -->
            <div class="p-3 text-center text-VeryPeri bg-EggshellBlue fixed-bottom"><?=$Bottom->find(1)['bottom'];?></div>

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
