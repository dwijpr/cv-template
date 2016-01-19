<?php
    $config_file = file_get_contents('data.json');
    $cfo = json_decode($config_file);
    $for = $cfo->for;

    $json_file = file_get_contents("data/$for/data.json");
    $jfo = json_decode($json_file);
    $colors = $jfo->colors;
    $person = $jfo->person;
    $educations = $jfo->educations;
    $experiences = $jfo->experiences;

?><!DOCTYPE html>

<html>

    <?php include 'index/head.php' ?>

    <?php include 'index/body.php' ?>
    
</html>