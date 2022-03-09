  <!-- footer -->
  <div class="footer">
      <div class="container"> 
        <div class="row">
          <div class="footer-col">
            <h4>company</h4>
            <ul>
              <li><a href="#">about us</a></li>
              <li><a href="#">our services</a></li>
              <li><a href="#">privacy policy</a></li>
              <li><a href="#">affiliate program</a></li>
            </ul>
          </div>

          <div class="footer-col">
            <h4>get help</h4>
            <ul>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">shipping</a></li>
              <li><a href="#">returns</a></li>
              <li><a href="#">order status</a></li>
              <li><a href="#">payment options</a></li>
            </ul>
          </div>

          <div class="footer-col">
            <h4>online shop</h4>
            <ul>
              <li><a href="#">watch</a></li>
              <li><a href="#">bag</a></li>
              <li><a href="#">shoe</a></li>
              <li><a href="#">dress</a></li>
            </ul>
          </div>

          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

          
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" 
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
        crossorigin="anonymous"></script>
    <script src="../scripts/app.js"></script>
    <script type="text/javascript">
      // search
      $(document).on('click', '.search', function(){
        $('.search-bar').addClass('search-bar-active')
      });
      $(document).on('click', '.search-cancel', function(){
        $('.search-bar').removeClass('search-bar-active')
      })
      // login sign up form
      $(document).on('click', '.user,.already-account', function(){
        $('.form').addClass('login-active').removeClass('sign-up-active')
      });
      $(document).on('click', '.sign-up-btn', function(){
        $('.form').addClass('sign-up-active').removeClass('login-active')
      });
      $(document).on('click', '.form-cancel', function(){
        $('.form').removeClass('login-active').removeClass('sign-up-active')
      });
      // scroll windown
      $(window).scroll(function(){
        if($(document).scrollTop() > 50){
          $('.navigation').addClass('fix-nav');
        }else{
          $('.navigation').removeClass('fix-nav');
        }
      })
      // Responsive menu
      $(document).ready(function(){
        $('.toggle').click(function(){
          $('.toggle').toggleClass('active')
          $('.navigation').toggleClass('active')
        })
      })
    </script>
  </body>
</html>