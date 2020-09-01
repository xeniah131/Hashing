  <!DOCTYPE html>
  <html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aymen Irum</title>
  </head>
  <body>
    <h1>MD5 Maker</h1>
    <p>MD5: Not computed</p>
    <?php
    $md5 = "Not computed";
    if ( isset($_GET['encode']) ) {
      $md5 = hash('md5', $_GET['encode']);
    }
    ?>

    <form>
      <input type = "text"
      name = "encode"
      size ="40"/>
      <input type="submit" value="Compute MD5"/>
    </form>

    <pre>
      <a href="md5.php">Reset</a>
      <a href="index.php">Back to Cracking</a>
    </pre>




  </body>
</html>
