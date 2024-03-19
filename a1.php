<?php
$str =<<<XML
<?xml version="1.0"encoding="ISO-8859-1"?>
<Item>
   <ItemName>Pen</ItemName>
   <ItemPrice>10</ItemPrice>
   <Quantity>20</Quantity>
</Item>
XML;
$fname="Item.xml";
$fp = fopen($fname,"w");
fwrite($fp, $str);
fclose($fp);
echo "created filename is:".$fname;
// echo"";

echo"<br><br>";
readfile('Item.xml');
?>