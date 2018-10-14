<body>

  <!-- great work checking the source code, agent. no hints here, THoUgh. -->

  <article class="container">
    <section class="row">
      <div class="col-md-12" id="terminal">
        <p><span id="one"></span></p>
        <form id="passcode" action="riddle.php" method="post">
          > <input type="text" name="passcode">
        </form>
      </div>
    </section>
  </article>

  <!-- JavaScript/JQuery -->
  <script type="text/javascript" src="jquery/jquery-2.2.1.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery/typed.js"></script>
  <script type="text/javascript">
    $(function(){
        $("#passcode").hide();
        $("#one").typed({
            strings: [
              "EVALUATING LAST KNOWN INPUT...^5000 <br><br> <span class='incorrect'>PASSCODE REJECTED.</span><br><br> THE FIRST TASK WILL BE RELOADING SHORTLY.<br><br>LOADING...^3000 <br><br>THERE ARE THREE SIBLINGS BEFORE ME,<br>AND THREE SIBLINGS AFTER.<br>BUT ONLY THE SIXTH, THE FIFTH, AND I<br>SHALL HAVE THE ENIGMA.^5000<br><br>INPUT AUTHORIZATION PASSCODE TO CONTINUE:"
            ],
            typeSpeed: 5,
            callback: function(){
                $(".typed-cursor").hide();
                $("#passcode").show();
                $("#passcode input").focus();
            }
        });
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