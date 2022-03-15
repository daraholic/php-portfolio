<?php
include_once "../base.php";
dd($_POST);
foreach($_POST['id'] as $key => $id){
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        //刪除
        $DB->del($id);

    }else{
        //更新
        $data=$DB->find($id);

        switch($DB->table){
            case "poedit":
                $data['name']=$_POST['name'][$key];
                $data['href']=$_POST['href'][$key];
                $data['type']=$_POST['type'][$key];
                $data['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
            break;
            case "type":
                $data['type']=$_POST['type'][$key];
            break;
            case "photo":
                $data['text']=$_POST['text'][$key];
                $data['sh']=($_POST['sh']==$id)?1:0;
            break;
            case "icon":
                $data['text']=$_POST['text'][$key];
                $data['sh']=($_POST['sh']==$id)?1:0;
            break;
            
        }
        dd($data);
        $DB->save($data);
    }
}
// to("../back.php?do=".$DB->table);

?>