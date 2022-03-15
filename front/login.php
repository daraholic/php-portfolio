<?php include "../base.php";
if(!empty($_POST)){
    if($_POST['acc']=='admin'  && $_POST['pw']=='1234'){
        // header("location:../back.php");
        to("../back.php?do=photo");
    }else{
        echo "<script>";
        echo "alert('帳號或密碼錯誤')";
        echo "</script>";
    }
}

?>

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../styles.css">
<link rel="stylesheet" href="../scss/bootstrap.css">


<body style="background-image:url('../img/cover.jpg') ;height:100ch">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="../index.php"><i class="fas fa-cat fa-2x"></i>&nbsp;cat</a>
        </nav><br><br><br><br>
        <h2 class="d-flex justify-content-center text-VeryPeri font-weight-bold">LOGIN</h2>
        <!-- <p>Make the viewport larger than 576px wide to see that all of the form elements are inline and left-aligned. On small screens, the form groups will stack horizontally.</p> -->
        <form class="form-inline  d-flex flex-column" method="post">
            <label for="acc">Account:</label>
            <input type="text" class="form-control" id="acc" placeholder="Enter account" name="acc"><br>
            <label for="pw">Password:</label>
            <input type="password" class="form-control" id="pw" placeholder="Enter password" name="pw"><br>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
        <div class="d-flex justify-content-center m-3">
            <button type="submit" class="btn btn-VeryPeri">Ok</button>&nbsp;&nbsp;
            <button type="reset" class="btn btn-outline-VeryPeri">Clear</button>
        </div>
        </form><br>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>

</body>

</html>