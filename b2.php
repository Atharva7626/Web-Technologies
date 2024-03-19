<?php

$dom=new DOMDocument();
$dom->load('movie.xml');
echo"<br> The file contents are  : <br>";


$movt=$dom->getElementsByTagName("MovieTitle");
$act=$dom->getElementsByTagName("ActorName");
echo"<br> Movie Titles are";
foreach($movt as $m){
    echo"<br> Title  : ".$m->textContent."<br>";
}

echo"<br> Movie Actors are";
// echo"<br> Movie Titles are";
foreach($act as $a){
    echo"<br> Actors  : ".$a->textContent."<br>";
}
?>