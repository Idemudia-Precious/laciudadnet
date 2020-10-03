@include('headers.header')
@include('headers.sm-header')
<body class="bg-white">
	<!-- Breadcrumb Area -->
        <section class="breadcrumb-area bg-light ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-box-set text-center mt-2">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="/">Home</a></li>
                                <li class="list-inline-item"><span>||</span> Settings</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->
   <div class="container">
   	   <div class="row">
        @include('headers.side-settings')
	        <div class="col-md-9 pt-5 pb-5">
	        	<h5 class="text-center accounts-h5"> Account settings</h5>
	        	<div class="card">
	        		<div class="card-body">
	        			<div class="pl-2 pb-2 pt-3 border-bottom">
	        				<div class="row">
	        					<div class="col-md-9">
	        						<h6>Notification Sound</h6>
	        				        <p class="not-toggle-but">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
	        					</div>
	        					<div class="col-md-3 slider-top-style">
	        						<label class="switch ">
                                       <input type="checkbox" class="default">
                                       <span class="sliders round"></span>
                                    </label>
	        					</div>
	        				</div>
	        			</div><!--end p-2-->

	        			<div class="pl-2 pt-4 pb-2 border-bottom">
	        				<div class="row">
	        					<div class="col-md-9">
	        						<h6>Notification Email</h6>
	        				        <p class="not-toggle-but">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
	        					</div>
	        					<div class="col-md-3 slider-top-style">
	        						<label class="switch ">
                                       <input type="checkbox" class="default">
                                       <span class="sliders round"></span>
                                    </label>
	        					</div>
	        				</div>
	        			</div><!--end p-2-->

	        			<div class="pl-2 pt-4 pb-2 border-bottom">
	        				<div class="row">
	        					<div class="col-md-9">
	        						<h6>Chat Message Sound</h6>
	        				        <p class="not-toggle-but">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
	        					</div>
	        					<div class="col-md-3 slider-top-style">
	        						<label class="switch ">
                                       <input type="checkbox" class="default">
                                       <span class="sliders round"></span>
                                    </label>
	        					</div>
	        				</div>
	        			</div><!--end p-2-->
	        			<div class="pt-4">
	        				<button type="button" class="btn btn-outline-secondary mr-3 set-btni">Save Setting</button>
	        				<button type="button" class="btn btn-outline-secondary set-btni">Restore Setting</button>
	        			</div>

	        		</div>
	        	</div>
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
