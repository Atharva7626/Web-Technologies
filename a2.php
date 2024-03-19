<?php
$str = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Item xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
   <?xml-stylesheet type="text/css" href="Item.css"?>
   <ItemName>Pen</ItemName>
   <ItemPrice>10</ItemPrice>
   <Quantity>20</Quantity>
</Item>
XML;

$fname = "Item.xml";
$fp = fopen($fname, "w");
fwrite($fp, $str);
fclose($fp);
echo "Created filename is: " . $fname;
echo "<br><br>";

// Display the contents of the created XML file
echo "Contents of Item.xml:<br>";
readfile($fname);
?>
