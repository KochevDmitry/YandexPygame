<html>
<head>
</head>
<body>
Hello!
<?php
$comment[1]=$_POST['surname'];
$comment[2]=$_POST['name'];
$comment[3]=$_POST['comment'];
$fp = fopen('res.txt', 'a');
$file = "res.txt";
$comment[0]=count(file($file));

for($i=1; $i < 4; $i++){
    $test = fwrite($fp, $comment[$i]);
    $test = fwrite($fp, '&');
}
fwrite($fp, "\r\n");
$file = "res.txt";
$rows = count(file($file));
$cols = 4;

$table = '<table border="1">';

$lines = file('res.txt');

for ($tr=1; $tr<=$rows -1; $tr++){
    $table .= '<tr>';
    $arr = explode("&", $lines[$tr-1]);

    for ($td=1; $td<=$cols -1; $td++){
    $table .= '<td>'. $arr[$td-1] .'</td>';
    }
    $table .= '</tr>';
}

$table .= '</table>';
echo $table;
?>

</body>
</html>