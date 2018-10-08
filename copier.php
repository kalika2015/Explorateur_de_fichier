<?php
/**
 * Created by PhpStorm.
 * User: kalidou
 * Date: 08/10/2018
 * Time: 10:40
 */

if (isset($_POST['copy'])){
    $file = $_POST['doc1'];
    $past = $_POST['doc2'];
    if (copy($file,$past)){
        header('location: index.php');
    }
}

