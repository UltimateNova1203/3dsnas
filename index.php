<html>
  <head>
    <title>3DS NAS</title>
    <script type="text/javascript" src="qrcode/html5-qrcode.js"></script>
    <script type="text/javascript" src="qrcode/qrcode.js"></script>
    <script type="text/javascript" src="javascript.js"></script>
    <link rel="stylesheet" href="css.css">
  </head>
  <body style="color: white;">
    <div class="bg-modal">
      <div class="close" onclick="closeModal()">+</div>
      <div class="modal-content">
        <div id="qrcode"></div>
      </div>
    </div>
    <div class="bg-main">
    <?php
      $dir = '/var/www/html/cias';

      if (file_exists($dir) && is_dir($dir) ) {
        $scan_arr = scandir($dir);
        $files_arr = array_diff($scan_arr, array('.','..') );
        $currentPageUrl = 'http://' . $_SERVER["HTTP_HOST"] . '/cias/';

        foreach ($files_arr as $file) {
          $ciaUrl = 'http://' . $_SERVER["HTTP_HOST"] . '/cias/' . $file;
          echo "<button type=\"button\" onclick=\"updateQRCode('$ciaUrl'); openModal(); updateQRCode('$ciaUrl');\">QR Code</button>";
          echo $file.'<br>';
        }
      } else { echo "Directory missing"; }
    ?>
    </div>
  </body>
</html>
