<footer>
    <div class="cpr"> <a href="#" class="sns-logo" title="tsns-logo">이용약관</a> <a href="#" class="sns-logo" title="tsns-logo">인정보처리방침</a> <a href="#" class="sns-logo" title="tsns-logo">이메일무단수집거부</a> <a href="#" class="sns-logo" title="tsns-logo">찾아옹시는길</a> <a href="#" class="sns-logo" title="tsns-logo" style="border: none;">싸이트맵</a> </div>
    <a href="" onclick="topFunction()" id="topBtn" title="Go to top">TOP</a> </footer>
  <!--//footer--> 
  
</div>
<!--Go to top--> 
<script>
//Get the button
var mybutton = document.getElementById("topBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script> 
</body>
</html>
