<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
     $(function(){
        $("#btn-scan-qr").click();
     });
  </script>
    <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
  </head>
<style>
          html {
            height: 100%;
          }

          body {
            font-family: sans-serif;
            padding: 0 10px;
            height: 100%;
            background: black;
            margin: 0;
          }

          h1 {
            color: white;
            margin: 0;
            padding: 15px;
          }

          #container {
            text-align: center;
            margin: 0;
          }

          #qr-canvas {
            margin: auto;
            width: calc(100% - 20px);
            max-width: 400px;
          }

          #btn-scan-qr {
            cursor: pointer;
          }

          #btn-scan-qr img {
            height: 10em;
            padding: 15px;
            margin: 15px;
            background: white;
          }

          #qr-result {
            font-size: 1.2em;
            margin: 20px auto;
            padding: 20px;
            max-width: 700px;
            background-color: white;
          }
</style>

  <body>
    <div id="container">
      <h1>Lütfen Masa Kodu Okutunuz</h1>

      <a id="btn-scan-qr">
        <img src="https://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2017/07/1499401426qr_icon.svg">
      </a>

      <canvas hidden="" id="qr-canvas"></canvas>

      <div id="qr-result" hidden="">
        <b>Data:</b> <span id="outputData"></span>
      </div>
    </div>

    <script src="js/qrCodeScanner.js?1"></script>
  </body>
</html>
