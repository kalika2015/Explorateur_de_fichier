<?php
/**
 * Created by PhpStorm.
 * User: kalidou
 * Date: 05/10/2018
 * Time: 16:16
 */


if (isset($_POST['upload'])){
    $fichier = $_FILES['file']['name'];
    $taille_max = 2097152;
    $taille = filesize($_FILES['file']['tmp_name']);
    $extensions = ['.png','.jpg','.jpeg'];
    $extension = strrchr($fichier, '.');

    if (!in_array($extension, $extensions)){
        $error = '<div class="alert">Vous devez uploader un fichier de type </div>';
    }
    if ($taille > $taille_max){
        $error = '<div class="alert">Fichier trop volumineux ...</div>';
    }
    if (!isset($error)){
        $fichier = preg_replace('/([^.a-z0-9]+)/', '.', $fichier);
        move_uploaded_file($_FILES['file']['tmp_name'], "upload/".$fichier);
    } else {
        echo $error;
    }
}

header('location: index.php');