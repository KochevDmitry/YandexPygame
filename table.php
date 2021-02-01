<html>
<head>
</head>
<body>
<h1 align="center">All comments</h1>
<?php
if ($_POST['surname'] != null and $_POST['name'] != null and $comment[3]=$_POST['comment'] != null){
$comment[1]=$_POST['surname'];
$comment[2]=$_POST['name'];
$comment[3]=$_POST['comment'];
$comment[4] = date('d.m.Y');
$fp = fopen('res.txt', 'a');
$file = "res.txt";
$comment[0]=count(file($file));

for($i=1; $i < 5; $i++){
    $test = fwrite($fp, $comment[$i]);
    $test = fwrite($fp, '&');
}
fwrite($fp, "\r\n");
}
$file = "res.txt";
$rows = count(file($file));
$cols = 3;
$line = "";
$lines = file('res.txt');

for ($tr=$rows-1; $tr>=0; $tr--){
    $arr = explode("&", $lines[$tr]);
    $line = $arr[0].' '.$arr[1];
    $num = $rows - $tr;
    echo '<h3>'.$num.') '.$line.':'.'</h3>';
    echo '<p>'.$arr[2].'<p>';
    echo '<h6>'.$arr[3].'</h6>';
    echo '<br>';
}
?>

</body>
</html>
