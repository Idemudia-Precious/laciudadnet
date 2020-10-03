@include('headers.header')
@include('headers.sm-header')
<body>
    <div class="py-4 edit-profile-top">
          <div class="container">
             <div class="row">
                <!-- Main Content -->
                <aside class="col-md-4">
                   <div class="mb-3 border rounded bg-white profile-box text-center w-10">
                      <div class="p-4 d-flex align-items-center">
                        @auth
                            <img src="{{ Auth::user()->dp }}" class="img-fluid rounded-circle edit-images shadow" alt="Responsive image">
                        @endauth
                         <div class="p-4 ml-2">
                             <form>
                            <label data-toggle="tooltip" data-placement="top" data-original-title="Select New Picture" class="btn btn-info m-0 btn-sm edit-pic-dlete mr-1" for="fileAttachmentBtn">
                            <i class="fa fa-picture-o"></i>
                            <input id="fileAttachmentBtn" name="file-attachment" type="file" required class="d-none">
                            </label>
                            <button id="fileAttachmentSub" name="file-attachment-sub" data-toggle="tooltip" data-placement="top" data-original-title="Upload Picture"  type="submit" class="btn btn-sm btn-success"><i class="fa fa-picture-o"></i></button>
                             </form>
                             <button data-toggle="tooltip" data-placement="top" data-original-title="Delete" type="submit" class="btn btn-danger btn-sm edit-trash-dlete"><i class="fa fa-trash-o "></i></button>

                         </div>
                      </div>
                   </div>
                   <div class="border rounded bg-white mb-3">
                      <div class="box-title border-bottom p-3">
                         <h6 class="m-0 edit-abouth6">About</h6>
                         <p class="mb-0 mt-0 edit-aboutp text-muted">Tell about yourself in two sentences.
                         </p>
                      </div>
                      <div class="box-body">
                         <div class="p-3 border-bottom">
                            <div class="form-group mb-4">
                               <label class="mb-1 edit-aboutlabelbio">BIO</label>
                               <div class="position-relative">
                                  <textarea class="form-control" id="about" rows="4" name="text" placeholder="About you">{{ Auth::user()->about }}</textarea>
                               </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="js-form-message">
                                     <label id="usernameLabel" class="form-label edit-aboutlabelbio">
                                     Interests
                                     <span class="text-danger">*</span>
                                     </label>
                                     <div class="form-group">
                                        <input type="text" class="form-control" id="Interests" placeholder="Enter Interests" value="{{ Auth::user()->interests }}" aria-label="" required="" aria-describedby="" data-msg="Please enter your Interests." data-error-class="u-has-error" data-success-class="u-has-success">
                                     </div>
                                  </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="js-form-message">
                                     <label id="usernameLabel" class="form-label edit-aboutlabelbio">
                                     Skills
                                     <span class="text-danger">*</span>
                                     </label>
                                     <div class="form-group">
                                        <input type="text" class="form-control" id="skills" placeholder="Enter skills" value="{{ Auth::user()->skills }}" aria-label="" required="" aria-describedby="" data-msg="Please enter your skills." data-error-class="u-has-error" data-success-class="u-has-success">
                                     </div>
                                  </div>

                            </div>
                         </div>
                         <div class="overflow-hidden text-center p-3">
                            <a class="font-weight-bold btn btn-outline-secondary rounded d-block editing-btn p-2" id="saveAbSk"> Save </a>
                            <div id="saveAbSkR"></div>
                         </div>
                      </div>
                   </div>
                   <div class="border rounded bg-white mb-3">
                      <div class="box-title border-bottom p-3">
                         <h6 class="m-0 edit-abouth6">Social profiles</h6>
                         <p class="mb-0 mt-0 text-muted edit-aboutp">Add elsewhere links to your profile.
                         </p>
                      </div>
                      <div class="box-body">
                         <div class="p-3 border-bottom">
                             <div class="position-relative icon-form-control mb-2">
                               <i class="fa fa-facebook-square position-absolute facebook-textcolor"></i>
                               <input placeholder="Add Facebook link" type="text" class="form-control">
                             </div>
                             <div class="position-relative icon-form-control mb-2">
                               <i class="fa fa-linkedin-square position-absolute text-primary"></i>
                               <input placeholder="Add Linkedin link" type="text" class="form-control">
                             </div>

                             <div class="position-relative icon-form-control mb-2">
                               <i class="fa fa-twitter-square position-absolute text-info"></i>
                               <input placeholder="Add Twitter link" type="text" class="form-control">
                             </div>
                         </div>
                         <div class="overflow-hidden text-center p-3">
                            <a class="font-weight-bold btn btn-outline-secondary rounded d-block editing-btn p-2" href="#"> Update Social Profiles </a>
                         </div>
                      </div>
                   </div>
                </aside>
                <main class="col-md-8">
                   <div class="border rounded bg-white mb-3">
                      <div class="box-title border-bottom p-3">
                         <h6 class="m-0 edit-abouth6">Edit Basic Info</h6>
                      </div>
                      <div class="box-body p-3">
                         <form class="js-validate" id="otForm" novalidate="novalidate">
                            <div class="row">
                               <!-- Input -->
                               <div class="col-sm-6 mb-2">
                                  <div class="js-form-message">
                                     <label id="" class="form-label formeditstyling">
                                     Username
                                     <span class="text-danger">*</span>
                                     </label>
                                     <div class="form-group">
                                        <input type="text" class="form-control" name="username" readonly value="{{ Auth::user()->username }}" required="" data-error-class="u-has-error" data-success-class="u-has-success">
                                     </div>
                                  </div>
                               </div>
                               <!-- End Input -->
                               <!-- Input -->
                               <div class="col-sm-6 mb-2">
                                  <div class="js-form-message">
                                     <label for="email" class="form-label formeditstyling">
                                     Email Address
                                     <span class="text-danger">*</span>
                                     </label>
                                     <div class="form-group">
                                        <input type="text" id="email" class="form-control" name="email" readonly value="{{ Auth::user()->email }}" required="" data-error-class="u-has-error" data-success-class="u-has-success">
                                     </div>
                                  </div>
                               </div>
                               <!-- End Input -->
                               <!-- Input -->
                               <div class="col-sm-6 mb-2">
                                  <div class="js-form-message">
                                     <label id="nameLabel" class="form-label formeditstyling">
                                     Name
                                     <span class="text-danger">*</span>
                                     </label>
                                     <div class="form-group">
                                        <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" placeholder="Enter your name" aria-label="Enter your name" required="" aria-describedby="nameLabel" data-msg="Please enter your name." data-error-class="u-has-error" data-success-class="u-has-success">
                                     </div>
                                  </div>
                               </div>
                               <!-- End Input -->
                               <!-- Input -->
                               <div class="col-sm-6 mb-2">
                                  <div class="js-form-message">
                                     <label id="phoneNumberLabel" class="form-label formeditstyling">
                                     Phone number
                                     <span class="text-danger">*</span>
                                     </label>
                                     <div class="form-group">
                                        <input class="form-control" type="tel" name="phoneNumber" value="{{ Auth::user()->phone }}" placeholder="Enter your phone number" aria-label="Enter your phone number" required="" aria-describedby="phoneNumberLabel" data-msg="Please enter a valid phone number" data-error-class="u-has-error" data-success-class="u-has-success">
                                     </div>
                                  </div>
                               </div>
                               <!-- End Input -->
                               <!-- Input -->
                               <div class="col-sm-6 mb-2">
                                  <div class="js-form-message">
                                     <label id="" class="form-label formeditstyling">
                                     Website
                                     <span class="text-danger">*</span>
                                     </label>
                                     <div class="form-group">
                                        <input class="form-control" type="url" name="website" value="{{ Auth::user()->website }}" placeholder="Enter your website" aria-label="Enter your website" required="" aria-describedby="websiteLabel" data-msg="Password enter a valid website" data-error-class="u-has-error" data-success-class="u-has-success">
                                        <small class="form-text text-muted edit-aboutp">Your home page, blog or company site.</small>
                                     </div>
                                  </div>
                               </div>
                               <!-- End Input -->
                               <!-- Input -->
                               <div class="col-md-6 mb-3 mb-sm-6">
                                  <div class="js-form-message">
                                      <label id="" class="form-label formeditstyling">
                                     Gender
                                     <span class="text-danger">*</span>
                                     </label>
                                     <div class="form-group">
                                        <input type="text" class="form-control" id="gender" name="gender" value="{{ Auth::user()->gender }}" placeholder="Enter your gender">
                                     </div>
                                  </div>
                               </div>
                               <!-- End Input -->
                               <!-- Input -->
                                  <div class="col-sm-6 mb-2">
                                     <div class="js-form-message">
                                        <label id="" class="form-label formeditstyling">
                                        Address
                                        <span class="text-danger">*</span>
                                        </label>
                                        <div class="form-group">
                                           <input type="text" class="form-control" id="address" name="Address" value="{{ Auth::user()->address }}" placeholder="Enter your address" aria-label="" required="" aria-describedby="" data-msg="Please enter your address." data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                     </div>
                                  </div>
                               <!-- End Input -->
                               <!-- Input -->
                                  <div class="col-sm-6 mb-2">
                                     <div class="js-form-message">
                                        <label id="" class="form-label formeditstyling">
                                        Country
                                        <span class="text-danger">*</span>
                                        </label>
                                        <div class="form-group">
                                           <input type="text" class="form-control" name="country" value="{{ Auth::user()->country }}" placeholder="Enter your country" aria-label="" required="" aria-describedby="" data-msg="" data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                     </div>
                                  </div>
                               <!-- End Input -->
                            </div>
                         </form>
                      </div>
                   </div>
                </main>
             </div>
          </div>
       </div>
    <script>
       function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
          document.getElementById("main").style.marginLeft = "0px";
          document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
       }
       function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
          document.getElementById("main").style.marginLeft= "0";
          document.body.style.backgroundColor = "white";
       }
    </script>
    <script>
       $(document).ready(function(){
       $('[data-toggle="tooltip"]').tooltip();
       });
    </script>
 </body>
 </html>
 <script>
    $(document).ready(function() {
        var me = '{{ Auth::user()->username }}';
       $("#saveAbSk").on("click", function(){
          var about = $("#about").val();
          var Interests = $("#Interests").val();
          var skills = $("#skills").val();
          $.ajax({
             url: 'update_details.php',
             type: 'post',
             data: 'about=' + about + '&Interests=' + Interests + '&skills=' + skills + '&saveAbSk&me=' + me,
             beforeSend: function() {
                $("#saveAbSk").html('<i class="fa fa-spinner fa-spin"></i> saving...');
             },
             success: function(response){
                $("#saveAbSk").html('Save');
                $("#saveAbSkR").html(response);
             }
          });
       });
       $("#saveOt").on("click", function(){
          var formData = $("#otForm").serialize();
          $.ajax({
             url: 'update_details.php',
             type: 'post',
             data: formData + '&saveOT&me=' + me,
             beforeSend: function() {
                $("#saveOt").html('<i class="fa fa-spinner fa-spin"></i> saving...');
             },
             success: function(response){
                $("#saveOt").html('Save Changes');
                $("#saveOtR").html(response);
             }
          });
       });
    });
 </script>
