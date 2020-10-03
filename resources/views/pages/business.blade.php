@include('headers.landing_header')
@auth
    <script>
        window.location.replace('/profile');
    </script>
@endauth
<div class="overlayPage">
    <div class="card reset-form">
      <div class="card-body">
         <a href="#"><img class="delete-img" src="/images/criss-cross.png"/></a>
        <div class="card-text text-center mt-5">

          <img class="card-title check-img" src="/images/check.png"/>
          <p class="font-weight-bold mb-1 mt-3">Your account has been created successfully.</p>
           <p class="font-weight-bold mb-1">Check your E-mail for confirmation</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4  col-sm-12">
        <div class="row">
          <h5 class="busin-0h5">
            <a href="signup" class="h5fastyle"> <i class="fa fa-chevron-left fastyle"></i> Create your Business Account</a>
        </h5>
        <form id="business_account">
          @csrf
          <div class="form-group">
            <input type="text" value="{{ old('name') }}" class="form-control formstyle3 @error('name') is-invalid @enderror" id="business_name" name="name" placeholder="full name" required >
            @error('name')
                <div class="invalid-feedback formstyle3">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
          </div>

          <div class="form-group">
           <input type="text" value="{{ old('username') }}" class="form-control formstyle3  @error('username') is-invalid @enderror" id="username" name="username" placeholder="username" required >
           <small id="usernameRes" class="form-text text-muted formstyle3"></small>
           @error('username')
                <div class="invalid-feedback formstyle3">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
          </div>

          <div class="form-group">
            <input type="email" value="{{ old('email') }}" class="form-control formstyle3 @error('email') is-invalid @enderror" id="email" name="email" placeholder="email" required >
            <small id="emailRes" class="form-text text-muted formstyle3"></small>
            @error('email')
                <div class="invalid-feedback formstyle3">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
          </div>

          <div class="form-group">
           <input type="text" value="{{ old('ref') }}" class="form-control formstyle3 @error('ref') is-invalid @enderror" id="referral" name="ref" placeholder="referral link / code">
           <small id="refRes" class="form-text text-muted formstyle3"></small>
           @error('ref')
                <div class="invalid-feedback formstyle3">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
          </div>

          <div class="form-group">
            <input type="password" class="@error('password') is-invalid @enderror form-control formstyle3" id="pwd" name="password" placeholder="password" required >
            <small class="form-text text-muted formstyle3" id="password-strength"><span id="strength_message"></span></small>
            @error('password')
                <div class="invalid-feedback formstyle3">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
          </div>

          <div class="form-group">
            <input type="password" class="form-control formstyle3 @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="pwdconfirm" placeholder="confirm password" required >
            <small id="pwdcRes" class="form-text text-muted formstyle3"></small>
            @error('password_confirmation')
                <div class="invalid-feedback formstyle3">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
          </div>
          <input type="hidden" name="type" value="business">
          <button type="submit" class="Getstarted-button btn btn-outline-basic btn-block sign">Get started</button>

        </form>
        </div>
        <div class="inst">
          By Signing up, you agree to Laciudad Network’s  <a href="terms-condition">terms of service</a> and <a href="privacy">privacy policy</a>.
        </div>
        <div class="instruction">Already signed up?
          <a href="login"><b>Log in</b></a>
        </div>
      </div><!--end col 3-->
      <div class="col-md-7 col-sm-12 offset-md-1 columnimg">
        <img src="images/landing-image.svg" class="d-none d-md-block mt-5" style="width: 100%; padding-top: 20px;">
      </div><!--end col 7-->
      @include('footers.landing_footer')
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>
<script>
    setTimeout(function(){
        $('.loaderbg').fadeToggle();
    }, 1500);
</script>
<script>
    $(document).ready(function () {
        $('Getstarted-button').click(function () {
            $(".overlayPage").fadeIn(700);
        });
        $(".delete-img").click(function(){
            $(".overlayPage").fadeOut(700);
            var email = $('#email').val();
            window.location.replace('/login');
        });
        $('#referral').on('keyup', function(){
          var ref = $('#referral').val();
          $.ajax({
            url: 'bprocesses.php',
            data: 'checkRef1&ref=' + ref,
            success: function(response){
              $("#refRes").html(response);
            }
          });
        });
        $('#username').on('keyup', function(){
          var uname = $('#username').val();
          if(uname.length < 6){
            $("#usernameRes").html('<i class="text-danger">Minimum Length is 6</i>');
            $(".Getstarted-button").attr("disabled", "true");
          } else {
            $.ajax({
              url: 'bprocesses.php',
              data: 'checkUname1&uname=' + uname,
              success: function(response){
                $("#usernameRes").html(response);
                $(".Getstarted-button").attr("disabled", false);
              }
            });
          }
        });
        $('#email').on('keyup', function(){
          var email = $('#email').val();
          $.ajax({
            url: 'bprocesses.php',
            data: 'checkEmail1&email=' + email,
            success: function(response){
              $("#emailRes").html(response);
            }
          });
        });
        $("#business_account").on("submit", function(e) {
          e.preventDefault();
          var formData = $('#business_account').serialize();
          $.ajax({
            url: '/bprocesses.php',
            data: formData + '&business_account',
            type: 'POST',
            success: function(response){
              $('#pwdcRes').html(response);
            }
          });
        });
        $('#pwd').keyup(function() {
          $('#strength_message').html(checkStrength(
            $('#pwd').val()))
        });
        function checkStrength(password) {
            var strength = 0
            if (password.length < 6) {
              $('#strength_message').removeClass()
              $('#strength_message').addClass('short')
              return 'Too short'
            }
            if (password.length > 6) strength += 1
            if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/))  strength += 1
            if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/))  strength += 1
            if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/))  strength += 1
            if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
            if (strength < 2 ) {
              $('#strength_message').removeClass();
              $('#strength_message').addClass('weak');
              $(".Getstarted-button").attr("disabled", "true");
              return 'Weak'
            } else if (strength == 2 ) {
              $('#strength_message').removeClass()
              $('#strength_message').addClass('good')
              $(".Getstarted-button").attr("disabled", "false");
              return 'Good'
            } else {
              $('#strength_message').removeClass()
              $('#strength_message').addClass('strong')
              return 'Strong'
          }
        }
        $('#pwdconfirm').keyup(function() {
          var pwd = $('#pwd').val();
          var cpwd = $('#pwdconfirm').val();
          if(pwd.length == cpwd.length){
            if(pwd == cpwd){
              $("#pwdcRes").html('<i class="text-success">password matches</i>');
              $(".Getstarted-button").attr("disabled", false);
            } else {
              $("#pwdcRes").html('<i class="text-success">password mismatch</i>');
              $(".Getstarted-button").attr("disabled", "true");
            }
          } else {
            $(".Getstarted-button").attr("disabled", "true");
          }
        });
    });
</script>
<style>
    #password-strength{
      margin-left:5px;
    }

    #password-strength .short{
      color:#FF0000;
    }

    #password-strength .weak{
      color:#E66C2C;
    }

    #password-strength .good{
      color:#2D98F3;
    }

    #password-strength .strong{
      color:#006400;
    }
</style>
</html>
