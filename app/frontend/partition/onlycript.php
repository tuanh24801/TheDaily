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