<?php
 try {
    $db = new PDO("mysql:host=localhost;dbname=admin_panel;charset=utf8", "root", "k13579,mn");
        
} catch ( PDOException $e ){
    print $e->getMessage();
    exit;
}

$ayar=$db->query("SELECT * FROM ayar")->fetch();    

?>