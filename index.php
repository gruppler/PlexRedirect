<?php require('config.php'); ?>
<?php require('messages.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" type="image/x-icon" href="plexlanding.ico" />`
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <style>
    body.offline #link-bar {
      display: none;
    }

    body.online #link-bar {
      display: block;
    }
  </style>
  <script src="assets/js/ping.js"></script>
  <script type='text/javascript'>
    HTMLElement.prototype.hasClass = function(className) {
      if (this.classList) {
        return this.classList.contains(className);
      } else {
        return (-1 < this.className.indexOf(className));
      }
    };

    HTMLElement.prototype.addClass = function(className) {
      if (this.classList) {
        this.classList.add(className);
      } else if (!this.hasClass(className)) {
        var classes = this.className.split(" ");
        classes.push(className);
        this.className = classes.join(" ");
      }
      return this;
    };

    HTMLElement.prototype.removeClass = function(className) {
      if (this.classList) {
        this.classList.remove(className);
      } else {
        var classes = this.className.split(" ");
        classes.splice(classes.indexOf(className), 1);
        this.className = classes.join(" ");
      }
      return this;
    };

    function checkServer() {
      var p = new Ping();
      var server = "<?=$PLEX_SERVER?>";
      var timeout = 2000; //Milliseconds
      var body = document.getElementsByTagName("body")[0];
      p.ping(server, function(data) {
        var serverMsg = document.getElementById("server-status-msg");
        var serverImg = document.getElementById("server-status-img");
        if (data < 1000) {
          serverMsg.innerHTML = 'Up and reachable';
          serverImg.src = "assets/img/ipad-hand-on.png";
          body.addClass('online').removeClass("offline");
        } else {
          serverMsg.innerHTML = 'Down and unreachable';
          serverImg.src = "assets/img/ipad-hand-off.png";
        }
      }, timeout);
    }

  </script>


  <title>
    <?=$SERVER_NAME?>
  </title>


  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Fonts from Google Fonts -->
  <link href='//fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>


</head>

<body onload="checkServer()" class="offline">
  <?=$message_html?>

  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top">
    <?=$message_html?>
    <div class="container">
      <div class="navbar-header">
        <a href="//<?=$PLEX_URL?>" <a class="navbar-brand" href="#"><b><?=$SERVER_NAME?></b></a>
      </div>
    </div>
  </div>
  <div class="container" id="link-bar">
    <div class="row mt centered">
      <div class="col-lg-6 col-lg-offset-3"></div>
    </div>
    <!-- /row -->

    <div class="row mt centered">
      <div class="col-lg-<?=strlen($PLEX_EMAIL) > 0 ? 4 : 6?>">
        <a href="//<?=$PLEX_URL?>" target="_top">
          <img src="assets/img/s01.png" width="180" alt="">
          <h4>Access <?=$SERVER_NAME?></h4>
          <p>Access the
            <?=$SERVER_NAME?> library with over X Movies &amp; X TV Shows available instantly.
              <p>
        </a>
      </div>
      <!--/col-lg-4 -->

      <div class="col-lg-<?=strlen($PLEX_EMAIL) > 0 ? 4 : 6?>">
        <a href="//<?=$PLEX_REQUESTS?>" target="_top">
          <img src="assets/img/s02.png" width="180" alt="">
          <h4>Request</h4>
          <p>Want to watch a Movie or TV Show but it's not currently on
            <?=$SERVER_NAME?>? Request it here!</p>
        </a>
      </div>
      <!--/col-lg-4 -->

      <?php if (strlen($PLEX_EMAIL) > 0) { ?>
        <div class="col-lg-4">
          <a href="//<?=$PLEX_EMAIL?>" target="_top">
            <img src="assets/img/s03.png" width="180" alt="">
            <h4>What's New</h4>
            <p>See what has been recently added to
              <?=$SERVER_NAME?> without having to log in.</p>
          </a>
        </div>
        <!--/col-lg-4 -->
      <?php } ?>
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->

    <div id="headerwrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h1><?=$SERVER_NAME?> Status:</h1>
            <h4 id="server-status-msg"><img src="assets/img/puff.svg">   Checking...</h4>
          </div>
          <!-- /col-lg-6 -->
          <div class="col-lg-6">
            <img id="server-status-img" class="img-responsive" src="assets/img/ipad-hand.png" alt="">
          </div>
          <!-- /col-lg-6 -->

        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /headerwrap -->
</body>

</html>
