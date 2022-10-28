<?php


// $mysqli =  mysqli_connect("127.0.0.1", "root", "", "сuculus");


//$pdo = new PDO("sqlite:dbname=tabledb;host=localhost", "root", "" );

//try {
//    $pdo = new PDO('sqlite:tablegdb');
//} catch (PDOException $e) {
//    echo $e->getMessage();
//}
//$statement = $pdo->query("SELECT * FROM sqlite_master");
//$rows = $statement->fetchAll(PDO:: FETCH_ASSOC);
//
//echo "<pre>";
//print_r($rows);
//echo "</pre>";

$table = "tcompany";
try {
    $db = new PDO('sqlite:tabledb');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Error Handling
    $sql = "CREATE TABLE $table(
        author_id   INT AUTO_INCREMENT,
        first_name  VARCHAR(100) NOT NULL,
        middle_name VARCHAR(50) NULL,
        last_name   VARCHAR(100) NULL,
        PRIMARY KEY(author_id)
    )";
    $db->exec($sql);``
    print("Created $table Table.\n");
} catch (PDOException $e) {
    echo $e->getMessage();//Remove or change message in production code
}


