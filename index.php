<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <h1>MD5 cracker</h1>
  <p>This application takes an MD5 hash of a four digit pin and check all 10,000 possible four digit PINs to determine the PIN.</p>
  <pre>
Debug Output:
<?php
$goodtext='Not Found';


if (  isset($_GET['md5']) ){
  $timepre= microtime(true);
  $md5= $_GET['md5'];


  $txt= "0123456789";
  $show=10;

  for($i=0;$i<strlen($txt);$i++)
  {
    $ch1=$txt[$i];
    for($j=0;$j<strlen($txt);$j++)
    {
      $ch2=$txt[$j];
      for($k=0;$k<strlen($txt);$k++)
      {
        $ch3=$txt[$k];
        for($l=0;$l<strlen($txt);$l++)
        {
          $ch4=$txt[$l];

          $try= $ch1.$ch2.$ch3.$ch4;

          $check=hash('md5', $try);

          if($check==$md5){
            $goodtext=$try;
            break;
          }
          if($show>0){
          print "$check $try\n";
            $show=$show-1;
          }
        }
      }
    }
  }
  $posttime=microtime(true);
  print "Elapsed Time:\n";
  print $posttime-$timepre;
  print "\n";
}
?>
  </pre>
  <p>Original Text: <?= htmlentities($goodtext); ?></p>
  <form>
    <input type = "text"
    name = "md5"
    size ="60"/>
    <input type="submit" value="Crack MD5"/>
  </form>

  <ul>
    <li><a href="index.php">Reset</a></li>
    <li><a href="md5.php">MD5 Encoder</a></li>
    <li><a href="makecode.php">MD5 Code Maker</a></li>
    <li><a href="https://github.com/xeniah131/Hashing">Source code for this application</a></li>
  </ul>


</body>
</html>
