<?php

$xml=simplexml_load_file("bookinfo.xml");

foreach($xml->book as $bk){
    echo"<br> Book no: ".$bk->bookno."<br>";
    echo"<br> Book name: ".$bk->bookname."<br>";
    echo"<br> Book's Author: ".$bk->authorname."<br>";
    echo"<br> Book's price : ".$bk->price."<br>";
    echo"<br> Book release year : ".$bk->year."<br>";
}

?>