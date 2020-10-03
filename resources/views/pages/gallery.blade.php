@include('headers.header')
@include('headers.sm-header')

<body>
    <div class="container alltop">
        <div class="row">
            <!-- Main Content -->
            <main class="col col-xl-9 order-xl-5 col-lg-12 order-lg-4 col-md-12 col-sm-12 col-12">
            <div class="d-block d-lg-none mobileuser-side">
                @include('headers.mobilepost-view')
                </div>
                <div class="box rounded mb-3 overflow-hidden bg-white main-pro-gal-profile">
                    <div class="container">
                    <h5 class="pro-gallery-h5"><a href="profile" class="bus-astylings"><i class="fa mdi mdi-chevron-left"></i> Gallery </a></h5>
                        <div class="row">
                            <div class="row p-3">
                                <div class="col-lg-3 col-md-4 col-xs-6 col-4 thumb pro-thumbcolumn1">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="image/seller14.jpg" data-target="#image-gallery">
                                    <img class="img-fluid galleryimg shadow-sm" src="/image/seller14.jpg" alt="">
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 col-4 thumb pro-thumbcolumn1">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="image/seller7.jpg" data-target="#image-gallery">
                                    <img class="img-fluid galleryimg shadow-sm" src="/image/seller7.jpg" alt="">
                                </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 col-4 thumb pro-thumbcolumn2">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="image/seller11.jpg" data-target="#image-gallery">
                                    <img class="img-fluid galleryimg shadow-sm" src="/image/seller11.jpg"alt="">
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 col-4 thumb pro-thumbcolumn1">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="image/seller12.jpg" data-target="#image-gallery">
                                    <img class="img-fluid galleryimg shadow-sm" src="/image/seller12.jpg"alt="">
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 col-4 thumb pro-thumbcolumn1">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="image/lipstick.jpg" data-target="#image-gallery">
                                    <img class="img-fluid galleryimg shadow-sm" src="/image/lipstick.jpg" alt="">
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 col-4 thumb pro-thumbcolumn2">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="image/seller9.jpg" data-target="#image-gallery">
                                    <img class="img-fluid galleryimg shadow-sm" src="/image/seller9.jpg"alt="">
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 col-4 thumb  pro-thumbcolumn1">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="image/chicken.jpg" data-target="#image-gallery">
                                    <img class="img-fluid galleryimg shadow-sm" src="/image/chicken.jpg"alt="">
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 col-4 thumb pro-thumbcolumn1">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="image/seller17.jpg" data-target="#image-gallery">
                                    <img class="img-fluid galleryimg shadow-sm" src="/image/seller17.jpg"alt="">
                                </a>
                                </div>

                            </div>


                            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="image-gallery-title"></h4>
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="font-size: 40px!important">×</span><span class="sr-only">Close</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-sm float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                                        </button>

                                        <button type="button" id="show-next-image" class="btn btn-secondary btn-sm float-right"><i class="fa fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end container -->

                </div>

            </main>
            <aside class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">

                @include('sidebox')
                <div class="box  rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3 d-flex align-items-center">
                    <h6 class="sides-gal-h5">Photos</h6>
                    <a class="ml-auto name-p3" href="gallery">See All <i class="fa fa-angle-right"></i></a>
                    </div>
                    <div class="box-body p-3">
                    <div class="gallery-aside-top">
                        <div class="gallery-aside">
                            <img class="img-fluid" src="/image/seller14.jpg" alt="">
                            <img class="img-fluid" src="/image/seller5.jpg" alt="">
                            <img class="img-fluid" src="/image/seller7.jpg" alt="">
                        </div>
                        <div class="gallery-aside">
                            <img class="img-fluid" src="/image/lipstick.jpg" alt="">
                            <img class="img-fluid" src="/image/francisco.jpg" alt="">
                            <img class="img-fluid" src="/image/dan.jpg" alt="">
                        </div>
                        <div class="gallery-aside">
                            <img class="img-fluid" src="/image/seller8.jpg" alt="">
                            <img class="img-fluid" src="/image/camera.jpg" alt="">
                            <img class="img-fluid" src="/image/seller16.jpg" alt="">
                        </div>
                    </div>
                    </div>
                </div>
                <div class="box rounded bg-white mb-3 d-none">
                    <div class="box-title border-bottom p-3">
                    <h6 class="sides-gal-h5">Citizens you might know</h6>
                    </div>
                    <div class="box-body p-3">
                    <div class="d-flex align-items-center side-user">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle sides-img" src="/image/place.png" alt="">
                        </div>
                        <div class="sideuser2 mr-2">
                            <div class="text-truncate truc">Sophia Lee</div>
                            <div class="truc2">Student at Harvard
                            </div>
                        </div>
                        <span class="ml-auto"><button type="button" class="btn btn-outline-secondary btn-sm"><i class="mdi mdi-account-plus-outline"></i></button>
                        </span>
                    </div>
                    <div class="d-flex align-items-center side-user pt-3">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle sides-img" src="/image/place.png" alt="">
                        </div>
                        <div class="sideuser2 mr-2">
                            <div class="text-truncate truc">John Doe</div>
                            <div class="truc2">Traveller
                            </div>
                        </div>
                        <span class="ml-auto"><button type="button" class="btn btn-outline-secondary btn-sm"><i class="mdi mdi-account-plus-outline"></i></button>
                        </span>
                    </div>
                    <div class="d-flex align-items-center side-user pt-3">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle sides-img" src="/image/place.png" alt="">
                        </div>
                        <div class="sideuser2 mr-2">
                            <div class="text-truncate truc">Julia Cox</div>
                            <div class="truc2">Art Designer

                            </div>
                        </div>
                        <span class="ml-auto"><button type="button" class="btn btn-outline-secondary btn-sm"><i class="mdi mdi-account-plus-outline"></i></button>
                        </span>
                    </div>
                    <div class="d-flex align-items-center side-user pt-3">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle sides-img" src="/image/place.png" alt="">
                        </div>
                        <div class="sideuser2 mr-2">
                            <div class="text-truncate truc">Robert Cook</div>
                            <div class="truc2">Photographer at photography studio

                            </div>
                        </div>
                        <span class="ml-auto"><button type="button" class="btn btn-outline-secondary btn-sm"><i class="mdi mdi-account-plus-outline"></i></button>
                        </span>
                    </div>
                    <div class="d-flex align-items-center side-user pt-3">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle sides-img" src="/image/place.png" alt="">
                        </div>
                        <div class="sideuser2 mr-2">
                            <div class="text-truncate truc">Richard Bell</div>
                            <div class="truc2">Graphic designer at envato

                            </div>
                        </div>
                        <span class="ml-auto"><button type="button" class="btn btn-outline-secondary btn-sm"><i class="mdi mdi-account-plus-outline"></i></button>
                        </span>
                    </div>



                    </div>
                </div>
            </aside>

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
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<script>
   let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });

</script>



</body>
</html>
