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

<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">頁尾版權資料管理</p>
    <form method="post"  action="./api/bottom.php">
        <table width="70%" style="margin:auto">
            <tbody>
                <tr class="yel">
                    <td width="40%">頁尾版權顯示文字:</td>
                    <td width="60%">
                        <input style="width:95%" type="text" name="bottom" value="<?=$Bottom->find(1)['bottom'];?>">
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px">
                            
                    </td>
                    <td class="cent"><input class=" m-5 btn btn-VeryPeri" type="submit" value="Ok"><input class="btn btn-outline-VeryPeri" type="reset" value="Cancel"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>