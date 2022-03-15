<?php
date_default_timezone_set("Asia/Taipei");
session_start();

class DB{
    // protected $dsn="mysql:host=localhost;charset=utf8;dbname=web01";
    // mac have to change localhost to 127.0.0.1
    // protected $dsn="mysql:host=localhost;charset=utf8;dbname=s1100409";
    // protected $user="s1100409";
    // protected $pw='s1100409';
    protected $dsn="mysql:host=127.0.0.1;charset=utf8;dbname=portfolio";
    protected $user="root";
    protected $pw='root';
    // protected $dsn="mysql:host=localhost;charset=utf8;dbname=portfolio";
    // protected $user="root";
    // protected $pw='';
    protected $pdo;
    public $table;
    public $title;
    public $button;
    public $header;
    public $append;
    public $upload;

    public function __construct($table){
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,$this->user,$this->pw);
        $this->setStr($table);
    }

    private function setStr($table){
        switch($table){
            case "bottom";
            $this->title="頁尾版權資料管理";
            $this->button="";
            $this->header="頁尾版權資料";
            break;
            case "photo";
                $this->title="個人頭像管理";
                $this->button="新增頭像";
                $this->header="大頭照";
                $this->append="說明文字";
                $this->upload="圖片";
            break;
            case "info";
            $this->title="編輯基本資料";
            $this->button="新增基本資料";
            $this->header="項目";
            break;
            case "poedit";
            $this->title="作品集管理";
            $this->button="新增作品";
            $this->upload="作品縮圖";
            $this->header="作品名稱";
            $this->append="作品網址";
            break;
            case "icon";
                $this->title="icon管理";
                $this->button="新增icon";
                $this->header="icon縮圖";
                $this->append="語法";
                $this->upload="icon";
            break;
        }
    }

    public function find($id){
        $sql="SELECT * FROM $this->table WHERE ";

        if(is_array($id)){
            foreach($id as $key => $value){
                $tmp[]="`$key`='$value'";
            }

            $sql .= implode(" AND ",$tmp);
        }else{
            $sql .= " `id`='$id'";
        }

        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }


    public function all(...$arg){
        $sql="SELECT * FROM $this->table ";

        switch(count($arg)){
            case 2:
                foreach($arg[0] as $key => $value){
                    $tmp[]="`$key`='$value'";
                }

                $sql .=" WHERE ".implode(" AND ",$tmp)." ".$arg[1];

            break;
            case 1:
                if(is_array($arg[0])){
                    
                    foreach($arg[0] as $key => $value){
                        $tmp[]="`$key`='$value'";
                    }
                    $sql .= " WHERE ".implode(" AND ",$tmp);
                }else{
                    $sql .= $arg[0];
                    
                }
            break;
        }

        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    public function math($method,$col,...$arg){
        $sql="SELECT $method($col) FROM $this->table ";

        switch(count($arg)){
            case 2:
                foreach($arg[0] as $key => $value){
                    $tmp[]="`$key`='$value'";
                }

                $sql .=" WHERE ".implode(" AND ",$tmp)." ".$arg[1];

            break;
            case 1:
                if(is_array($arg[0])){
                    foreach($arg[0] as $key => $value){
                        $tmp[]="`$key`='$value'";
                    }
                    $sql .= " WHERE ".implode(" AND ",$tmp);
                }else{
                    $sql .= $arg[0];
                    
                }
            break;
        }


        return $this->pdo->query($sql)->fetchColumn();
    }
    public function save($array){
        if(isset($array['id'])){
            //update
            foreach($array as $key => $value){
                if($key!='id'){

                    $tmp[]="`$key`='$value'";
    
                }
                // $tmp[]="`$key`='$value'";
            }
            $sql="UPDATE $this->table 
                     SET ".implode(",",$tmp)."
                   WHERE `id`='{$array['id']}'";
        }else{
            //insert

            $sql="INSERT INTO $this->table (`".implode("`,`",array_keys($array))."`) 
                                     VALUES('".implode("','",$array)."')";
        }

    //    echo $sql;
        return $this->pdo->exec($sql);
    }

    public function del($id){
        $sql="DELETE FROM $this->table WHERE ";

        if(is_array($id)){
            foreach($id as $key => $value){
                $tmp[]="`$key`='$value'";
            }

            $sql .= implode(" AND ",$tmp);
        }else{
            $sql .= " `id`='$id'";
        }

        return $this->pdo->exec($sql);
    }
    public function q($sql){
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }


}


function to($url){
    header("location:".$url);
}


function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$Bottom=new DB('bottom');
$Icon=new DB('icon');
$Info=new DB('info');
$Photo=new DB('photo');
$Poedit=new DB('poedit');
$Type=new DB('type');

//$tt=(isset($_GET['do']))?$_GET['do']:'';
//$tt=isset($_GET['do'])??'';
$tt=$_GET['do']??'';

switch($tt){
    case "bottom":
        $DB=$Bottom;
    break;
    case "icon":
        $DB=$Icon;
    break;
    case "info":
        $DB=$Info;
    break;
    case "photo":
        $DB=$Photo;
    break;
    case "poedit":
        $DB=$Poedit;
    break;
    case "type":
        $DB=$Type;
    break;
    default:
        $DB=$Photo;
    break;
}

?>