  <!DOCTYPE html>
  <html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aymen Irum</title>
  </head>
  <body>
    <h1>MD5 Maker</h1>
    <?php
    $goodtext = 'Not computed';

    if ( isset($_GET['encode']) ) {
      $md5 = hash('md5',$_GET['encode']);
      $goodtext=$md5;
    }
    print "MD5: $goodtext\n";
    ?>

    <form>
      <input type = "text"
      name = "encode"
      size ="40"/>
      <input type="submit" value="Compute MD5"/>
    </form>
<p><a href="md5.php">Reset</a></p>
<p><a href="index.php">Back to Cracking</a></p>

  </body>
</html>
