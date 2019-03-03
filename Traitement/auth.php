<?php

$login  =  isset($_POST["inputLogin"])  ? $_POST["inputLogin"] : "";
$MDP  =  isset($_POST["inputMDP"])  ? $_POST["inputMDP"] : "";

$req = "select * from users where login = '$login' and mdp  = '".md5($MDP)."' ";
echo $req;

?>