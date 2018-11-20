<footer class="site-footer text-center px-3 py-4 mt-4">
  <div class="container">
    <small class="footer-text">Made by <strong>Chirag Patel</strong></small>
  </div>
</footer>
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $(".search-icon").on("click", function(e) {
  	if(e && e.preventDefault)  {
    e.preventDefault();
    }
    $(".search-box").toggleClass("open");
  });
  $(".menu-toggle").on("click", function(e) {
    if(e && e.preventDefault)  {
    e.preventDefault();
    }
    $(".menu,.mobile-menu-overlay").addClass("open");
    //$("body").addClass("overflow-hidden");
  });
  $(".mobile-menu-overlay").on("click", function() {
    $(".menu,.mobile-menu-overlay").removeClass("open");
    //$("body").removeClass("overflow-hidden");
  });
});
</script>