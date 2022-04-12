<!DOCTYPE HTML>  
<html>
<head>
<style>

</style>
</head>
<body>  

<form action="homework2.php" method="get">
몇년: <input type="text" name="year"><br>
몇월: <input type="text" name="month"><br>
<input type="submit">
</form>

<?php
// define variables and set to empty values
$n = $m = $L = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $n = test_input($_POST["n"]);
    $m = test_input($_POST["m"]);
    $L = test_input($_POST["L"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error"></span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  N: <input type
  ="text" name="n" value="<?php echo $n;?>">
  <br><br>
  m: <input type="text" name="m" value="<?php echo $m;?>">
  <br><br>
  L: <input type="text" name="L" value="<?php echo $L;?>">
  <input type="submit" name="submit" value="Submit">  
</form>


<?php
echo "<h2>Your Input:</h2>";
echo $n;
echo "<br>";
echo "n까지의 합 :";
echo $n*($n+1);
echo "<br>";
function factorial($n) {
   if( $n <= 1 ) return 1;
   return $n * factorial($n-1);
}
echo "n까지의 곱 :";
echo factorial($n);
echo "<br>";
echo "피보나치 수열:";
function fibo($n)
{
  
if($n ==  0 || $n ==1) return (1);
return (fibo($n -1) + fibo($n -2));
}
for ($i=1; $i <= $n; $i++)
print(fibo($i - 1))." ";


$a = 1;
$b = 1;
   
for($i = 0; $i < $n; $i++)
{
$c = $b +$a;
echo $a." ";
$a = $b;
$b = $c;
}

echo "<br>";
echo "삼각형면적:";
echo ($n*$m)/2;
echo "<br>";
echo "직사각형부피:";
echo ($n*$m);
echo "<br>";
echo "원면적:";
echo 3.14*$n;
echo "<br>";
echo "직육면체부피:";
echo $n*$m*$L;
echo "<br>";
echo "원통부피:";
echo 3.14*$n*$L;
echo "<br>";
echo "구부피:";
echo 4/3*3.14*$n*$n*$n;
?>

</body>
</html>