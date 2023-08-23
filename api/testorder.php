<?php
$print = "";
foreach($_GET as $key => $value)
{
   $print .= 'Key = ' . $key . '<br />';
   $print .= 'Value= ' . $value;
   $print .= '\n\n';
}

// 👇 open a stream
$file = fopen("text.txt", "w");

// 👇 write to the stream
fwrite($file, $print);

// 👇 close the stream
fclose($file);

?>