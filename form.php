<?php

?>
<<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Document</title>
</head>
<body>
  <header>
  </header>
  <main>
      <form action="form.php" method="get">
        <strong>From : <input type="date" style="width: 223px; padding:14px;" name="d1" class="tcal" value="" /> To: <input type="date" style="width: 223px; padding:14px;" name="d2" class="tcal" value="" />
        <button class="btn btn-info" style="width: 123px; height:35px; margin-top:-8px;margin-left:8px;" type="submit"><i class="icon icon-search icon-large"></i> Search</button>
        </strong>
      </form>
      <div style="font-weight:bold; text-align:center;font-size:14px;margin-bottom: 15px;">
            Form Resumitted:  From: &nbsp;<?php echo $_GET['d1'] ?>&nbsp;To: &nbsp;<?php echo $_GET['d2'] ?>
      </div>
  </main>
  <footer>
  </footer>
  <script src="scripts.js"></script>
</body>
</html>
