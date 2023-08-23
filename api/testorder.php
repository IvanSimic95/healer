<?php
$print = "Start of print: \n
";
foreach($_POST as $key => $value)
{
   $print .= 'Key = ' . $key . '<br />';
   $print .= 'Value= ' . $value;
   $print .= '\n\n';
}

// ðŸ‘‡ open a stream
$file = fopen("text.txt", "w");

// ðŸ‘‡ write to the stream
fwrite($file, $print);

// ðŸ‘‡ close the stream
fclose($file);

echo $print;
?>