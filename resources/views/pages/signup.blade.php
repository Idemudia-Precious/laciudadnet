@include('headers.landing_header')
@auth
    <script>
        window.location.replace('/profile');
    </script>
@endauth
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="row">
            <h5 class="sign0h5">Connect, Trade, Make Wealth.
           </h5>
          </div>
          <p class="text-muted ptext">Laciudad Network is used globally by individuals and businesses for; collaboration and networking, creation of generational wealth, and exchange of values for money. </p>
          <p class="ptext"><b>Create an account with us, it's free!</b> </p>

          <a href="business_account" button type="button" class="btn btn-outline-basic btn-block bstyle">Create business account</a>
          <a href="personal_account" type="button" class="btn btn-outline-basic  btn-block bstyle">Create personal account</a>
          <div class="instruction">Already sign up?
            <a href="login"><b>Log in</b></a>
          </div>
        </div><!--end col 3-->
        <div class="col-md-7 col-sm-12 offset-md-1 columnimg">
          <img src="images/landing-image.svg" style="width: 100%; padding-top: 20px;" class="d-none d-md-block mt-5">
        </div><!--end col 7-->

        @include('footers.landing_footer')
      </div>
    </div>
  </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        setTimeout(function(){
            $('.loaderbg').fadeToggle();
        }, 1500);
    </script>
</body>
</html>
