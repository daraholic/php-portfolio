<?php include_once "../base.php";

if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
    $data['img']=$_FILES['img']['name'];
}else{
    if($DB->table!='icon' && $DB->table!=''){
        $data['img']='';
    }
}
// dd($_POST);

switch($DB->table){
    case "photo":
        $data['text']=$_POST['text'];
        $data['sh']=0;
    break;
    case "poedit":
        $data['href']=$_POST['href'];
        $data['name']=$_POST['name'];
        $data['sh']=0;
        $data['type']=$_POST['type'];
    break;
    case "icon":
        $data['text']=$_POST['text'];
        $data['sh']=0;
    break;
}
// dd($data);
$DB->save($data);
to("../back.php?do=".$DB->table)
?>