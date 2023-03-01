<?php
try
{
$db = new PDO('mysql:host=57.128.65.58;dbname=marionsg_404_quiz_anime;charset=utf8','marionsg_404','Cloud_9610');
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

?>