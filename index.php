<?php
    ini_set('display_errors', 1);

    $config_file = file_get_contents('data.json');
    $cfo = json_decode($config_file);

    $for = $cfo->for;
    $template = $cfo->template;

    $json_file = file_get_contents("data/$for/$template.json");
    $jfo = json_decode($json_file);
    $colors = $jfo->colors;
    $person = $jfo->person;
    $educations = $jfo->educations;
    $experiences = $jfo->experiences;

    // echo "<pre>";
    // var_dump($cfo);
    // echo "</pre>";
    // die;
?><!DOCTYPE html>

<html>

    <?php include "templates/$template/index.php" ?>
    
</html>