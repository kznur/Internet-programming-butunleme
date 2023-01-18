<?php
 try {
    $db = new PDO("mysql:host=localhost;dbname=otel_php;charset=utf8", "root", "k13579,mn");
        
} catch ( PDOException $e ){
    print $e->getMessage();
    exit;
}


?>