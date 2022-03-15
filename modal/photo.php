<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./scss/bootstrap.css">
    
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+1+Code:wght@300&family=Noto+Sans+TC:wght@100;300;500&family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">

<h3>新增大頭照</h3>
<hr>
<form action="api/add.php?do=<?=$_GET['table'];?>" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>照片：</td>
            <td><input type="file" name="img" ></td>
        </tr>
        <tr>
            <td>替代文字：</td>
            <td><input type="text" name="text" ></td>
        </tr>
    </table>
    <div><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>