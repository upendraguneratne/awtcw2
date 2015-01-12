<?php
foreach ($qtninfo->result() as $row) {
    $data1 = json_encode($row);
    $result = json_decode($data1);
    var_dump($result);
    
    
    
    echo "-----------".$result->title;
}
?>
