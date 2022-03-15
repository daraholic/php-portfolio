<?php
include_once "base.php";

?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0068)?do=admin&redo=title -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>後台</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="./css/style.css" rel="stylesheet" type="text/css">

    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+1+Code:wght@300&family=Noto+Sans+TC:wght@100;300;500&family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">

<body style="background-image:url('./img/cover.jpg') ;height:100ch">
<!-- modal -->
<div id="cover" style="display:none;">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                onclick="cl(&#39;#cover&#39;)">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
</div>
    <div class="container">
            <div id="lf" style="float:left;">
                <div id="menuput" class="dbor">
                    <!--主選單放此-->
                    <h3 class="t botli">後台管理選單</h3>

                    <div class="font-weight-bold">個人資料管理</div>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=photo">
                        <div class="mainmu">變更大頭照</div>
                    </a>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=info">
                        <div class="mainmu">編輯基本資料</div>
                    </a>

                    <div class="font-weight-bold">作品集管理</div>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=poedit">
                        <div class="mainmu">作品列表</div>
                    </a>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=type">
                        <div class="mainmu">變更分類</div>
                    </a>
                

                    <div class="font-weight-bold">網站管理</div>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=icon">
                        <div class="mainmu">變更icon</div>
                    </a>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=bottom">
                        <div class="mainmu">變更頁尾</div>
                    </a>
                </div>
            </div>

            <div class="di"
                style="height:540px; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
                <!--正中央-->
                <table width="100%">
                    <tbody>
                        <tr>
                            <td style="width:70%;font-weight:800;"
                                class="cent"><a href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a>
                            </td>
                            <td><button onclick="location.replace('index.php?do=login')"
                                    style="width:99%; margin-right:2px; height:50px;">管理登出</button></td>
                        </tr>
                    </tbody>
                </table>
                <?php

                $do = isset($_GET["do"]) ? $_GET["do"] : 'title';
                $file = "./back/" . $do . ".php";

                if (file_exists($file)) {
                    include $file;
                } else {
                    //echo "檔案不存在";
                    include "./back/title.php";
                }

                ?>
            </div>
    </div>

</body>

</html>