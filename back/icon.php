<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli"><?=$DB->title;?></p>
    <form method="post"  action="api/edit.php?do=<?=$DB->table;?>">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="23%"><?=$DB->append;?></td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $rows=$DB->all();
                foreach($rows as $row){
                    $checked=($row['sh']==1)?'checked':'';
                    // dd($row);
                ?>
                <tr>
                    <td width="43%">
                    <i class="fa-solid fa-cat"></i>
                        <input type="text" name="text[]" value="<?=$row['text'];?>" style="width:95%">
                    </td>
                    <td width="7%">
                        <input type="radio" name="sh" value="<?=$row['id'];?>" <?=$checked;?>>
                    </td>
                    <td width="7%">
                        <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                    </td>
                    <td>
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
                    <td width="200px">
                        <input type="button"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/<?=$DB->table;?>.php?table=<?=$DB->table;?>&#39;)" 
                              value="<?=$DB->button;?>">
                              
                    </td>
                    <td class="cent">
                        
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>