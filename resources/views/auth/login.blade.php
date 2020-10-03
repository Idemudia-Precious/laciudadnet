@include('headers.landing_header')
@auth
    <script>
        window.location.replace('/profile');
    </script>
@endauth
    <div class="overlayPage">
      <div class="card reset-form">
	<div class="card-body">
      <a href="#"><img class="delete-img" src="images/criss-cross.png"/></a>
		<h3 class="card-title text-center mt-5">Forgot Password</h3>

		<div class="card-text">
      <form>
        <div class="form-group mt-4">
          <label for="E-mail1">Enter your email address and we will send you a link to reset your password.</label>
          <input type="email" class="form-control mt-3 input-lg" placeholder="Enter your email address">
				</div>

        <button type="submit" class="btn btn-block resetbtn">Send password reset email</button>
        <a type="submit" class="btn btn-block mt-3 loginbtn " href="login">Back to Login</a>
			</form>
		</div>
	</div>
  </div>

    </div>
    <div class="container-fluid">
       <div class="row">
        <div class="col-md-3  col-sm-12">
          <div class="row">
          <h5 class="statement">
           <a href="signup"> <i class="fa fa-chevron-left fastyle"></i> Log in to your account</a>
          </h5>
          </div>
          <form id="login-form" action="/login" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" value="{{ old('email') }}" class="form-control formstyle3 @error('email') is-invalid @enderror" id="business_name" name="email" placeholder="Email" required >
                @error('email')
                    <div class="invalid-feedback formstyle3">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" value="{{ old('password') }}" class="@error('password') is-invalid @enderror form-control formstyle3" id="pwd" name="password" placeholder="Password" required >
                <small class="form-text text-muted formstyle3" id="password-strength"><span id="strength_message"></span></small>
                @error('password')
                    <div class="invalid-feedback formstyle3">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <button type="submit" class="Getstarted-button btn btn-outline-basic btn-block sign">Log in</button>
            <br>
            @if ($errors->all())
                <div style="width: 100%" class="alert formstyle3 alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    @foreach ($errors->all() as $err)
                        <li style="list-style: none">{{ $err }}</li>
                    @endforeach
                </div>
            @endif
          </form>
          <div class="password">
            <a href="#" class="reset-button">Forget Password?</a>
          </div>
          <div class="instructionlogin">New to Laciudad Network?
            <a href="signup"><b>Sign up</b></a>
          </div>
        </div><!--end col 3-->
        <div class="col-md-7 col-sm-12 offset-md-1 columnimg">
          <img src="images/landing-image.svg" class="d-none d-md-block mt-5" style="width: 100%; padding-top: 20px;">
        </div><!--end col 7-->

        @include('footers.landing_footer')
      </div>
    </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
  <script>
    setTimeout(function(){
      $('.loaderbg').fadeToggle();
    }, 1500);
  </script>

  <script>
        $(document).ready(function () {
            $('.reset-button').click(function () {
                $(".overlayPage").fadeIn(700);
            })

            $(".delete-img").click(function(){
                $(".overlayPage").fadeOut(700);
            })
        });
    </script>

    <script>
      $(document).ready(function() {
           $("#login-form").validate({
            rules:{
              email:{
                required: true,
                email: true
              },

              password: {
                required: true,
                minlength: 5,
              }
            },
            messages{
              login-form:{
                required: "The Email address and Password supplied does not match any of our records!"
              }
            },

            submitHandler: function(form) {
      form.submit();
    }
           })
      });
    </script>
</body>
</html>

