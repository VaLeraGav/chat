<?php


$table = "messenger";
try {
    $db = new PDO('sqlite:tabledb');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Error Handling
    $sql = "CREATE TABLE $table(
    id int(11) NOT NULL,
    title text NOT NULL,
    creation_time date NOT NULL
    )";
    $db->exec($sql);
    print("Created $table Table.\n");
} catch (PDOException $e) {
    echo $e->getMessage();//Remove or change message in production code
}
