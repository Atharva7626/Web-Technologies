<?php

$str=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<BookInfo>
   <book>
      <bookno>1</bookno>
      <bookname>Java</bookname>
      <authorname> Bengaluru Swami</authorname>
      <price>250</price>
      <year>2006</year>
    </book>
    <book>
      <bookno>2</bookno>
      <bookname>C</bookname>
      <authorname>Denis Ritchie</authorname>
      <price>500</price>
      <year>1971</year>
    </book>
</BookInfo>
XML;
$fname="bookinfo.xml";
$fp=fopen($fname,"w");
fwrite($fp,$str);
fclose($fp);
echo"<br>Successfully created : ".$fname."<br>";

echo"The file contents are : <br>";

readfile($fname);
?>