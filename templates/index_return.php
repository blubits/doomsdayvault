<body>

  <article class="container">
    <section class="row">

      <div class="col-md-3 left">
        <nav class="sidebar">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <!-- Sidebar -->
          <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav nav-pills nav-stacked">
              <li role="presentation"><a href="mission.php">Your Mission</a></li>
              <li role="presentation"><a href="assembly.php">The Assembly</a></li>
              <li role="presentation"><a href="updates.php">Updates</a></li>
            </ul>
          </div>

        </nav>
      </div>

      <div class="col-md-9 right">

        <section id="description">
          <img src="assets/enigma.png" class="img-responsive">
          <span id="strings_mobile" class="visible-xs-inline"></span>
          <span id="strings" class="hidden-xs"></span>
        </section>

      </div>
    </section>
  </article>

  <!-- JavaScript/JQuery -->
  <script type="text/javascript" src="jquery/jquery-2.2.1.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery/typed.js"></script>
  <script type="text/javascript">
      $("#strings").typed({
            strings: [
              "WELCOME BACK, AGENT.<br><br>LINKS TO YOUR MISSION DETAILS ARE LOCATED AT THE SIDE, FOR YOUR CONVENIENCE. DO NOT FORGET TO REGULARLY CHECK FOR MISSION UPDATES ON FACEBOOK AND TWITTER -- CHECK THE UPDATE LINK AT THE LEFT.<br><br>WE WISH YOU WELL ON YOUR JOURNEY.<br><br>-- COMMAND"
            ],
            typeSpeed: 5
        });
      $("#strings_mobile").typed({
            strings: [
              "WELCOME BACK, AGENT.<br><br>LINKS TO YOUR MISSION DETAILS ARE LOCATED AT THE MENU ON THE TOP, FOR YOUR CONVENIENCE. DO NOT FORGET TO REGULARLY CHECK FOR MISSION UPDATES ON FACEBOOK AND TWITTER -- CHECK THE UPDATE LINK IN THE MENU.<br><br>WE WISH YOU WELL ON YOUR JOURNEY.<br><br>-- COMMAND"
            ],
            cursorChar: '',
            typeSpeed: 5
        });
  </script>

  <!-- Google Tag Manager -->
  <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PB4KQ3"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PB4KQ3');</script>
  <!-- gAnalytics -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-68097958-2', 'auto');
  ga('send', 'pageview');
  </script>


</body>
</html>