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
    <p class="t cent botli"><?=$DB->title;?></p>
    <form method="post"  action="api/edit.php?do=<?=$DB->table;?>">
        <table width="100%">
            <tbody>
                <tr class="yel">

                    <td width="10%"><?=$DB->header;?></td>
                    <td width="70%">內容</td>
                    <td width="10%">顯示</td>
                    <!-- <td width="10%">刪除</td> -->

                </tr>
                <?php
                $rows=$DB->all();
                foreach($rows as $row){
                    $checked=($row['sh']==1)?'checked':'';
                ?>
                <tr>
                    <td width="10%" class="text-center text-VeryPeri "><?=$row['item'];?></td>
                    <td>
                        <input type="text" name="text[]" value="<?=$row['text'];?>" style="width:95%">
                    </td>
                    <td>
                        <input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=$checked;?>>
                        <!-- 如果沒有hidden 就會抓不到id沒辦法用checked去控制sh -->
                        <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td class="cent">
                        <input class=" m-5 btn btn-VeryPeri" type="submit" value="Ok">
                        <input class="btn btn-outline-VeryPeri" type="reset" value="Cancel">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>