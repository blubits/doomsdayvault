<body>

  <article class="container">
    <section class="row">
      <div class="col-md-12" id="terminal">
        <p>$ <span id="one"></span></p>
        <button type="button" onClick="redirect();" id="next">NEXT ></button>
      </div>
    </section>
  </article>

  <!-- JavaScript/JQuery -->
  <script type="text/javascript" src="jquery/jquery-2.2.1.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery/typed.js"></script>
  <script type="text/javascript">
    function redirect() {
        window.location.assign("./riddle.php")
    }
    $(function(){
        $("#next").hide();
        $("#one").typed({
            strings: [
              "^3000 telnet 312.264.5.3:5000 <br><br>^3000 [BROADCAST CODE: EDJBIA]<br><br>GREETINGS, AGENT.<br><br>ALTHOUGH THIS METHOD OF RECRUITMENT IS HIGHLY UNUSUAL FOR COMMAND, WE THINK YOUR SERVICES ARE VALUABLE ENOUGH FOR THE OPERATION.<br><br>THIS MISSION WILL NOT BE EASY. YOU WILL BE UP AGAINST DANGERS FEARED EVEN BY OUR BEST. THE FUTURE OF OUR SOCIETY IS AT STAKE.^2000 BUT WE HAVE FULL FAITH IN YOUR ABILITIES. WE BELIEVE IN THE SUCCESS OF OPERATION: ENIGMA. THE QUESTION IS, ARE YOU?<br><br>[Y]ES/[N]O >^2000 Y<br><br>EXCELLENT. WELCOME TO COMMAND, AGENT.^2000 <br><br> WE HOPE YOU ARE READY FOR YOUR FIRST TASK.^5000"
            ],
            typeSpeed: 5,
            callback: function(){
                $(".typed-cursor").hide();
                $("#next").show();
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