<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="img/arrow.png" width="50px" height="50px"><br>Do góry</button>
    <script>
      var mybutton = document.getElementById("myBtn");
      window.onscroll = function() {scrollFunction()};
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
      }
    </script>