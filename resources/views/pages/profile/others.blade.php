@auth
    @include('headers.header')
    @include('headers.sm-header')
    <body>
        <div class="container alltop">
            <div class="row">
                <!-- Main Content -->
                <main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12 mainpro-profile">
                    <div class="d-block d-lg-none mobileuser-side pt-3">
                    @include('headers.mobilepost-view')
                    </div>


                    <div class="box shadow-sm rounded bg-white mb-3 overflow-hidden">
                    <ul class="nav border-bottom profiletabss" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Network</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="type-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="type" aria-selected="false">Reviews</a>
                        </li>
                        <li class="nav-item d-block d-lg-none">
                            <a class="nav-link" id="more-tab" data-toggle="dropdown" href="#more" role="tab" aria-controls="type" aria-selected="false">More</a>
                            <div class="dropdown-menu more-dropdown-pro">
                                <a class="dropdown-item" href="sm-referees">Referees</a>
                                <a class="dropdown-item" href="sm-citizen-suggestions">Suggested Citizens</a>
                                <a class="dropdown-item" href="sm-profile-visitor">profile visitors</a>
                            </div>
                        </li>
                    </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade " id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="box rounded bg-white mb-3 shadow-sm">
                            <div class="box-title border-bottom p-3">
                                <h6 class="sides-h5-pro">About Me</h6>
                            </div>
                            <div class="box-body p-3">
                                <p class="text-muted name-about-pp p-3">
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                </p>
                            </div>
                        </div>
                        <div class="box rounded bg-white mb-3 shadow-sm">
                            <div class="box-title border-bottom p-3">
                                <h6 class="sides-h5-pro">Overview</h6>
                            </div>
                            <div class="box-body">
                                <table class="table table-borderless protable">
                                <tbody>
                                    <tr class="">
                                        <th class="proth">Website</th>
                                        <td class="proth2"><a href="#">www.google.com</a></td>
                                    </tr>
                                    <tr class="">
                                        <th class="proth">Username</th>
                                        <td class="text-muted proth2">Gurg@659</td>
                                    </tr>
                                    <tr class="">
                                        <th class="proth">Marital Status</th>
                                        <td class="text-muted proth2">
                                            Single
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <th class="proth">Career Field</th>
                                        <td class="text-muted proth2">
                                            ict
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <th class="proth">Religion</th>
                                        <td class="text-muted proth2">
                                            ict
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <th class="proth">Email</th>
                                        <td class=" text-muted proth2">example@gmail.com</td>
                                    </tr>
                                    <tr class="">
                                        <th class="prothh">Phone Number</th>
                                        <td class="text-muted proth2">234 0993 333 89</td>
                                    </tr>
                                    <tr class="">
                                        <th class="prothh">Address</th>
                                        <td class="text-muted prothh2">PO Box 16122 Collins Street West Victoria 8007 Australia</td>
                                    </tr>
                                    <tr class="">
                                        <th class="prothh">Province / State</th>
                                        <td class="text-muted proth2">mystate</td>
                                    </tr>
                                    <tr class="">
                                        <th class="proth">Country</th>
                                        <td class="text-muted proth2">Nigeria</td>
                                    </tr>
                                    <tr class="">
                                        <th class="proth">Zip Code</th>
                                        <td class="text-muted proth2">54776</td>
                                    </tr>
                                    <tr class="">
                                        <th class="proth">High school</th>
                                        <td class="text-muted proth2">Richhigh school 2019</td>
                                    </tr>
                                    <tr class="">
                                        <th class="proth">College</th>
                                        <td class="text-muted proth2">Richhigh school 2019</td>
                                    </tr>
                                    <tr class="">
                                        <th class="prothh">more educational info</th>
                                        <td class="text-muted proth2">Richhigh school 2019</td>
                                    </tr>
                                    <tr class="">
                                        <th class="prothh">Previous Work Place 1</th>
                                        <td class="text-muted proth2">Richhigh school 2019</td>
                                    </tr>
                                    <tr class="">
                                        <th class="prothh">Previous Work Place 2</th>
                                        <td class="text-muted proth2">Richhigh school 2019</td>
                                    </tr>
                                    <tr class="">
                                        <th class="proth">Skills</th>
                                        <td class="text-muted proth2">Richhigh</td>
                                    </tr>
                                    <tr class="">
                                        <th class="proth">Interest</th>
                                        <td class="text-muted proth2">Richhigh</td>
                                    </tr>




                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="box rounded bg-white mb-3 side-user shadow-sm">
                            <div class="patobia d-flex align-items-center side-user">

                                <div class="dropdown-list-image mr-3">

                                <img src="/image/place.png" alt=""  class="rounded-circle sides-img shadow-sm">
                                </div>
                                <div class="sideuser2 pt-0">
                                <div class="text-truncate truc">Tobia Crivellari</div>
                                <div class="truc2">Fashion Designer
                                    <span class="ml-2 text-muted bus-span-globe-time">. 18 hrs <i class='mdi mdi-earth'> </i></span>
                                </div>
                                </div>

                                <ul class="ml-auto list-unstyled">
                                <li class="dropdown pull-right">
                                    <a href="#" class='dropdown-toggle mainh' data-toggle="dropdown">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu maindropdown">
                                        <a class="dropdown-item" href="#">Save to gallery</a>
                                        <a class="dropdown-item" href="#">Chat</a>
                                        <a class="dropdown-item" href="#">Copy link</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                        <a class="dropdown-item" href="#">Block</a>
                                        <a class="dropdown-item" href="#">Report</a>
                                    </div>
                                </li>
                                </ul>
                            </div>
                            <div class="border-bottom osahan-post-body">
                                <img src="/image/burger.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="container border-bottom  iconcont">
                                <!--icons-->
                                <div class="mainicons">
                                <span class="cardbox-base">
                                    <ul class="float-right cardbox-ul">
                                        <li class="cardbox-li"><a><i class="fa fa-comments cardbase-i"></i></a></li>
                                        <li class="cardbox-li"><a><em class="mr-5">12</em></a></li>
                                        <li class="cardbox-li"><a><i class="mdi mdi-share cardbase-i"></i></a></li>
                                        <li class="cardbox-li"><a><em class="mr-3">03</em></a></li>
                                    </ul>
                                    <ul class="cardbox-ul" >
                                        <span class='mainp'>
                                            <a href="" data-toggle="tooltip" title="like" class="mainpp shadow-sm"><i class='mdi mdi-thumb-up'></i></a>
                                            <a href="" data-toggle="tooltip" title="cart" class="cart-likes shadow-sm"><i class='fa fa-cart-plus'></i></a>
                                        </span>

                                        <li class="cardbox-li"><a href="#"><img src="/image/user.jpg" class="img-fluid rounded-circle shadow-sm" alt="User"></a></li>
                                        <li class="cardbox-li"><a href="#"><img src="/image/user2.jpg" class="img-fluid rounded-circle shadow-sm" alt="User"></a></li>
                                        <li class="cardbox-li"><a href="#"><img src="/image/lablady.jpg" class="img-fluid rounded-circle shadow-sm" alt="User"></a></li>
                                        <li class="cardbox-li"><a href="#"><img src="/image/user.jpg" class="img-fluid rounded-circle shadow-sm" alt="User"></a></li>
                                        <li class="cardbox-li"><a><span class="" data-toggle="modal" data-target="#exampleModalCenter">2k</span></a></li>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header promodal-header">
                                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                        <li class="nav-item">
                                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All 2k</a>
                                                        </li>
                                                        <li class="nav-item">
                                                        <a class="nav-link" id="pills-likes-tab" data-toggle="pill" href="#pills-likes" role="tab" aria-controls="pills-likes" aria-selected="false"> <i class='mdi mdi-thumb-up modal-i'></i> 1k</a>
                                                        </li>
                                                        <li class="nav-item">
                                                        <a class="nav-link" id="pills-cart-tab" data-toggle="pill" href="#pills-cart" role="tab" aria-controls="pills-cart" aria-selected="false"><i class='mdi mdi-cart modal2-i' ></i> 300</a>
                                                        </li>
                                                        <li class="nav-item">
                                                        <a class="nav-link" id="pills-share-tab" data-toggle="pill" href="#pills-share" role="tab" aria-controls="pills-share" aria-selected="false"><i class='mdi mdi-share modal3-i'></i> 20</a>
                                                        </li>
                                                    </ul>

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>

                                                </div>
                                                <div class="modal-body" style="height: 329px; overflow-y: auto;">
                                                    <div class="tab-content" id="pills-tabContent">
                                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                        <div>
                                                            <div class="media">
                                                                <img class="mr-3 medimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                                    <div class="media-body">
                                                                    <span class="pull-right mediabutton">
                                                                        <button type="button" class="btn btn btn-outline-primary btn-sm">follow</button>
                                                                    </span>
                                                                    <h5 class="md"><a href="pro2">Sophia Lanen Joe</a></h5>
                                                                    <span class="liked"><i class='mdi mdi-thumb-up modal-i'></i> Liked</span>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-mediatop">
                                                            <div class="media">
                                                                <img class="mr-3 medimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                                <div class="media-body">
                                                                    <span class="pull-right mediabutton">
                                                                    <button type="button" class="btn btn btn-outline-success btn-sm">following</button>
                                                                    </span>
                                                                    <h5 class="md"><a href="pro2">Sophia Lanen Joe</a></h5>
                                                                    <span class="cart"><i class='mdi mdi-cart modal2-i'></i> cart</span>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-mediatop">
                                                            <div class="media">
                                                                <img class="mr-3 medimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                                <div class="media-body">
                                                                    <span class="pull-right mediabutton">
                                                                    <button type="button" class="btn btn btn-outline-success btn-sm">following</button>
                                                                    </span>
                                                                    <h5 class="md"><a href="pro2">Sophia Lanen Joe</a></h5>
                                                                    <span class="cart"><i class='mdi mdi-cart modal2-i'></i> cart</span>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-mediatop">
                                                            <div class="media">
                                                                <img class="mr-3 medimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                                <div class="media-body">
                                                                    <span class="pull-right mediabutton">
                                                                    <button type="button" class="btn btn btn-outline-primary btn-sm">follow</button>
                                                                    </span>
                                                                    <h5 class="md"><a href="pro2">Sophia Lanen Joe</a></h5>
                                                                    <span class="share"><i class='mdi mdi-share' style="color:red;"></i> Shared</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        a...
                                                        </div>
                                                        <div class="tab-pane fade" id="pills-likes" role="tabpanel" aria-labelledby="pills-likes-tab">
                                            <div>
                                            <div class="media">
                                                <img class="mr-3 medimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                <div class="media-body">
                                                <span class="pull-right mediabutton">
                                                    <button type="button" class="btn btn btn-outline-primary btn-sm">follow</button>
                                                </span>
                                                <h5 class="md"><a href="pro2">Sophia Lanen Joe</a></h5>
                                                <span class="liked"><i class='mdi mdi-thumb-up modal-i'></i> Liked</span>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="modal-mediatop">
                                            <div class="media">
                                                <img class="mr-3 medimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                <div class="media-body">
                                                <span class="pull-right mediabutton">
                                                    <button type="button" class="btn btn btn-outline-success btn-sm">following</button>
                                                </span>
                                                <h5 class="md"><a href="pro2">Sophia Lanen Joe</a></h5>
                                                <span class="liked"><i class='mdi mdi-thumb-up modal-i'></i> liked</span>

                                                </div>
                                            </div>
                                            </div>
                                                        b...
                                                        </div>
                                                        <div class="tab-pane fade" id="pills-cart" role="tabpanel" aria-labelledby="pills-cart-tab">
                                            <div class="">
                                            <div class="media">
                                                <img class="mr-3 medimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                <div class="media-body">
                                                <span class="pull-right mediabutton">
                                                    <button type="button" class="btn btn btn-outline-success btn-sm">following</button>
                                                </span>
                                                <h5 class="md"><a href="pro2">Sophia Lanen Joe</a></h5>
                                                <span class="cart"><i class='mdi mdi-cart modal2-i'></i> cart</span>

                                                </div>
                                            </div>
                                            </div>
                                            <div class="modal-mediatop">
                                            <div class="media">
                                                <img class="mr-3 medimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                <div class="media-body">
                                                <span class="pull-right mediabutton">
                                                    <button type="button" class="btn btn btn-outline-primary btn-sm">follow</button>
                                                </span>
                                                <h5 class="md"><a href="pro2">Sophia Lanen Joe</a></h5>
                                                <span class="cart"><i class='mdi mdi-cart modal2-i'></i> cart</span>

                                                </div>
                                            </div>
                                            </div>
                                                            c...
                                                        </div>
                                                        <div class="tab-pane fade" id="pills-share" role="tabpanel" aria-labelledby="pills-share-tab">
                                            <div class="">
                                            <div class="media">
                                                <img class="mr-3 medimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                <div class="media-body">
                                                <span class="pull-right mediabutton">
                                                    <button type="button" class="btn btn btn-outline-primary btn-sm">follow</button>
                                                </span>
                                                <h5 class="md"><a href="pro2">Sophia Lanen Joe</a></h5>
                                                <span class="share"><i class='mdi mdi-share' style="color:red;"></i> Shared</span>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="modal-mediatop">
                                            <div class="media">
                                                <img class="mr-3 medimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                <div class="media-body">
                                                <span class="pull-right mediabutton">
                                                    <button type="button" class="btn btn btn-outline-success btn-sm">following</button>
                                                </span>
                                                <h5 class="md"><a href="pro2">Sophia Lanen Joe</a></h5>
                                                <span class="share"><i class='mdi mdi-share' style="color:red;"></i> Shared</span>
                                                </div>
                                            </div>
                                            </div>
                                                        d...
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            </div>
                                        </div>
                                    </ul>
                                </span><!--/ cardbox-base -->
                                </div>
                            </div>
                            <div class='p-3 post-actions border-bottom'>
                                <div class="row">
                                <div class='col-3 col-md-3 col-lg-3 asidepro-column1' >
                                    <a href='#' class=""><i class='fa fa-comments'></i> Comment
                                    </a>
                                </div>
                                <div class='col-3 col-md-3 col-lg-3 asidebus-column2'>
                                    <a href='#'><i class='mdi mdi-thumb-up'></i> Like
                                    </a>
                                </div>
                                <div class='col-3 col-md-3 col-lg-3 asidebus-column3'>
                                    <a href='#'><i class='mdi mdi-cart-plus'></i>Cart
                                    </a>
                                </div>
                                <div class='col-3 col-md-3 col-lg-3 asidebus-column4'>
                                    <a href='#'><i class='mdi mdi-share'></i> Share
                                    </a>
                                </div>
                                </div>
                            </div>
                            <div class="media ppost-act">
                                <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                <div class="media-body mdd">
                                <a href="" class="commenter">Alexandra Gills</a>
                                <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                <span class='mdaction'>
                                    <a class="likeaction" href=''>Like
                                    </a>
                                    <a href="" data-toggle="collapse" data-target="#collapseOne">
                                    Reply<span class="badge badge-notify">5</span></a>
                                    <div id="collapseOne" class="collapse">
                                        <div class="media maincomment">
                                            <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                            <div class="media-body mdd">
                                            <a href="" class="commenter">Alexandra Gills</a>
                                            <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                            <span class='mdaction'>
                                                <a class="likeaction" href=''>Like</a>
                                                <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                            </span>
                                            </div>
                                        </div><!--end nested media-->
                                        <div class="media maincomment">
                                            <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                            <div class="media-body mdd">
                                            <a href="" class="commenter">Alexandra Gills</a>
                                            <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                            <span class='mdaction'>
                                                <a class="likeaction" href=''>Like</a>
                                                <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                            </span>
                                            <div class="media medianested">
                                                <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                <div class="media-body mdd">
                                                    <a href="" class="commenter">Alexandra Gills</a>
                                                    <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                    <span class='mdaction'>
                                                        <a class="likeaction" href=''>Like</a>
                                                        <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                    </span>
                                                </div>
                                            </div><!--end nested media-->
                                            </div>
                                        </div><!--end media-->
                                    </div>
                                </span>
                                </div>
                            </div>
                            <div class="container">
                                <div class="d-flex justify-content-center row">
                                <div class="d-flex flex-column col-md-12">
                                    <div class="d-flex flex-row justify-content-between align-items-center action-collapse ppost-act2" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" href="#collapse-2">
                                        <span  class="ml-auto maincomments">More comments <i class="fa fa-angle-down"></i></span><i class="fa fa-chevron-down servicedrop"></i>
                                    </div>
                                    <div id="collapse-2" class="collapse " style=" overflow-y: scroll !important;max-height: 400px !important;">
                                        <div class="commented-section mt-2"><hr>
                                            <div class="media maincomment">
                                            <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                            <div class="media-body mdd">
                                                <a href="" class="commenter">Alexandra Gills</a>
                                                <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                <span class='mdaction'>
                                                    <a class="likeaction" href=''>Like</a>
                                                    <!--collapse reply--><a href="" data-toggle="collapse" data-target="#collapseTwo">
                                                    Reply<span class="badge badge-notify">5</span></a>
                                                    <div id="collapseTwo" class="collapse">
                                                        <div class="media maincomment">
                                                        <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                        <div class="media-body mdd">
                                                            <a href="" class="commenter">Alexandra Gills</a>
                                                            <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                            <span class='mdaction'>
                                                                <a class="likeaction" href=''>Like </a>
                                                                <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                            </span>
                                                        </div>
                                                        </div><!--end nested media-->
                                                        <div class="media maincomment">
                                                        <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                        <div class="media-body mdd">
                                                            <a href="" class="commenter">Alexandra Gills</a>
                                                            <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                            <span class='mdaction'>
                                                                <a class="likeaction" href=''>Like</a>
                                                                <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                            </span>
                                                            <div class="media medianested">
                                                                <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                                <div class="media-body mdd">
                                                                    <a href="" class="commenter">Alexandra Gills</a>
                                                                    <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                                    <span class='mdaction'>
                                                                    <a class="likeaction" href=''>Like <</a>
                                                                    <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                                    </span>
                                                                </div>
                                                            </div><!--end nested media-->
                                                        </div>
                                                        </div><!--end media-->
                                                    </div>
                                                </span>

                                            </div>
                                            </div><!--end media-->
                                            <div class="media maincomment">
                                            <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                            <div class="media-body mdd">
                                                <a href="" class="commenter">Alexandra Gills</a>
                                                <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                <span class='mdaction'>
                                                    <a class="likeaction" href=''>Like </a>
                                                    <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                </span>

                                            </div>
                                            </div><!--end media-->
                                            <div class="media maincomment">
                                            <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                            <div class="media-body mdd">
                                                <a href="" class="commenter">Alexandra Gills</a>
                                                <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                <span class='mdaction'>
                                                    <a class="likeaction" href=''>Like</a>
                                                    <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                </span>

                                            </div>
                                            </div><!--end media-->
                                        </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="cardbox-comments p-3">
                                <span class="comment-avatar float-left">
                                <a href=""><img src="/image/place.png" alt="..." class="shadow-sm"></a>
                                </span>
                                <div class="search">
                                <input placeholder="Write a comment" type="text" style="outline: none;">
                                <button><i class="fa fa-camera"></i></button>
                                </div><!--/. Search -->
                            </div><!--/ cardbox-like -->




                        </div>
                        <div class="box rounded bg-white mb-3 side-user shadow-sm">
                            <div class="patobia d-flex align-items-center side-user">

                                <div class="dropdown-list-image mr-3">

                                <img src="/image/place.png" alt=""  class="rounded-circle sides-img shadow-sm">
                                </div>
                                <div class="sideuser2 pt-3">
                                <div class="text-truncate truc">Tobia Crivellari</div>
                                <div class="truc2">Fashion Designer
                                    <span class="ml-2 text-muted bus-span-globe-time">. 12 days <i class='mdi mdi-earth'> </i></span>
                                </div>
                                </div>

                                <ul class="ml-auto list-unstyled">
                                <li class="dropdown pull-right">
                                    <a href="#" class='dropdown-toggle mainh' data-toggle="dropdown">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu maindropdown">
                                        <a class="dropdown-item" href="#">Save to gallery</a>
                                        <a class="dropdown-item" href="#">Chat</a>
                                        <a class="dropdown-item" href="#">Copy link</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                        <a class="dropdown-item" href="#">Block</a>
                                        <a class="dropdown-item" href="#">Report</a>
                                    </div>
                                </li>
                                </ul>
                            </div>
                            <div class="border-bottom">
                                <img src="/image/coke.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class='p-3 post-actions border-bottom'>
                                <div class="row">
                                <div class='col-3 col-md-3 col-lg-3 asidepro-column1' >
                                    <a href='#' class=""><i class='fa fa-comments'></i> Comment
                                    </a>
                                </div>
                                <div class='col-3 col-md-3 col-lg-3 asidebus-column2'>
                                    <a href='#'><i class='mdi mdi-thumb-up'></i> Like
                                    </a>
                                </div>
                                <div class='col-3 col-md-3 col-lg-3 asidebus-column3'>
                                    <a href='#'><i class='mdi mdi-cart-plus'></i>Cart
                                    </a>
                                </div>
                                <div class='col-3 col-md-3 col-lg-3 asidebus-column4'>
                                    <a href='#'><i class='mdi mdi-share'></i> Share
                                    </a>
                                </div>
                                </div>
                            </div>

                            <div class="cardbox-comments p-3">
                                <span class="comment-avatar float-left">
                                <a href=""><img src="/image/place.png" alt="..." class="shadow-sm"></a>
                                </span>
                                <div class="search">
                                <input placeholder="Write a comment" type="text" style="outline: none;">
                                <button><i class="fa fa-camera"></i></button>
                                </div><!--/. Search -->
                            </div><!--/ cardbox-like -->




                        </div>

                        <div class="container slider-pro d-block d-lg-none">
                            <h6 class="font-weight-bold">Suggested Citizens</h6>
                                <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
                                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                    <div class="carousel-item col-md-3  active">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                            <a href="#" title="image 1" class="thumb">
                                                <img class="img-fluid mx-auto d-block" src="///via.placeholder.com/600x400?text=1" alt="slide 1">
                                            </a>
                                            </div>
                                            </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                            <a href="#" title="image 3" class="thumb">
                                            <img class="img-fluid mx-auto d-block" src="///via.placeholder.com/600x400?text=2" alt="slide 2">
                                            </a>
                                            </div>
                                            </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                            <a href="#" title="image 4" class="thumb">
                                            <img class="img-fluid mx-auto d-block" src="///via.placeholder.com/600x400?text=3" alt="slide 3">
                                            </a>
                                            </div>
                                            </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                            <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                            <a href="#" title="image 5" class="thumb">
                                            <img class="img-fluid mx-auto d-block" src="///via.placeholder.com/600x400?text=4" alt="slide 4">
                                            </a>
                                            </div>
                                            </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                            <a href="#" title="image 6" class="thumb">
                                                <img class="img-fluid mx-auto d-block" src="///via.placeholder.com/600x400?text=5" alt="slide 5">
                                            </a>
                                            </div>
                                            </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                            <a href="#" title="image 7" class="thumb">
                                                <img class="img-fluid mx-auto d-block" src="///via.placeholder.com/600x400?text=6" alt="slide 6">
                                            </a>
                                            </div>
                                            </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                            <a href="#" title="image 8" class="thumb">
                                                <img class="img-fluid mx-auto d-block" src="///via.placeholder.com/600x400?text=7" alt="slide 7">
                                            </a>
                                            </div>
                                            </div>
                                    </div>
                                        <div class="carousel-item col-md-3  ">
                                            <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                            <a href="#" title="image 2" class="thumb">
                                            <img class="img-fluid mx-auto d-block" src="///via.placeholder.com/600x400?text=8" alt="slide 8">
                                            </a>
                                            </div>

                                            </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                </div>
                        </div>

                        <div class="box rounded bg-white mb-3 side-user shadow-sm">
                            <div class="patobia d-flex align-items-center side-user">

                                <div class="dropdown-list-image mr-3">

                                <img src="/image/place.png" alt=""  class="rounded-circle sides-img shadow-sm">
                                </div>
                                <div class="sideuser2 pt-3">
                                <div class="text-truncate truc">Tobia Crivellari</div>
                                <div class="truc2">Fashion Designer
                                    <span class="ml-2 text-muted bus-span-globe-time">. 2 mins <i class='mdi mdi-earth'> </i></span>
                                </div>
                                </div>

                                <ul class="ml-auto list-unstyled">
                                <li class="dropdown pull-right">
                                    <a href="#" class='dropdown-toggle mainh' data-toggle="dropdown">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu maindropdown">
                                        <a class="dropdown-item" href="#">Save to gallery</a>
                                        <a class="dropdown-item" href="#">Chat</a>
                                        <a class="dropdown-item" href="#">Copy link</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                        <a class="dropdown-item" href="#">Block</a>
                                        <a class="dropdown-item" href="#">Report</a>
                                    </div>
                                </li>
                                </ul>
                            </div>
                            <div class="border-bottom">
                                <div id="summarys">
                                <p class="collapse p-3 text-muted name-pp" id="collapseSummary">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porttitor 😍😎  maximus laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Suspendisse venenatis sollicitudin erat in gravida. Sed eget nisl tristique, commodo lectus sit amet, vulputate sem. Cras porttitor lorem ipsum, sit amet iaculis massa feugiat vitae. Curabitur sapien odio, ullamcorper tincidunt interdum vitae, vestibulum eu neque. Nam leo massa, fringilla eget mauris feugiat, auctor suscipit justo.
                                </p>
                                <a class="collapsed" data-toggle="collapse" href="#collapseSummary" aria-expanded="false" aria-controls="collapseSummary"></a>
                            </div>
                                <img src="/image/lipstick.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="container border-bottom  iconcont">
                                <!--icons-->
                                <div class="mainicons">
                                <span class="cardbox-base">
                                    <ul class="float-right cardbox-ul">
                                        <li class="cardbox-li"><a><i class="fa fa-comments cardbase-i"></i></a></li>
                                        <li class="cardbox-li"><a><em class="mr-5">12</em></a></li>
                                        <li class="cardbox-li"><a><i class="mdi mdi-share cardbase-i"></i></a></li>
                                        <li class="cardbox-li"><a><em class="mr-3">03</em></a></li>
                                    </ul>
                                    <ul class="cardbox-ul" >
                                        <span class='mainp'>
                                            <a href="" data-toggle="tooltip" title="like" class="mainpp"><i class='mdi mdi-thumb-up shadow-sm'></i></a>
                                        </span>

                                        <li class="cardbox-li"><a href="#"><img src="/image/user.jpg" class="img-fluid rounded-circle shadow-sm" alt="User"></a></li>
                                        <li class="cardbox-li"><a href="#"><img src="/image/user2.jpg" class="img-fluid rounded-circle shadow-sm" alt="User"></a></li>
                                        <li class="cardbox-li"><a href="#"><img src="/image/lablady.jpg" class="img-fluid rounded-circle shadow-sm" alt="User"></a></li>
                                        <li class="cardbox-li"><a href="#"><img src="/image/user.jpg" class="img-fluid rounded-circle shadow-sm" alt="User"></a></li>
                                        <li class="cardbox-li"><a><span class="" data-toggle="modal" data-target="">2k</span></a></li>
                                        <!-- Modal -->
                                    </ul>
                                </span><!--/ cardbox-base -->
                                </div>
                            </div>
                            <div class='p-3 post-actions border-bottom'>
                                <div class="row">
                                <div class='col-3 col-md-3 col-lg-3 asidepro-column1' >
                                    <a href='#' class=""><i class='fa fa-comments'></i> Comment
                                    </a>
                                </div>
                                <div class='col-3 col-md-3 col-lg-3 asidebus-column2'>
                                    <a href='#'><i class='mdi mdi-thumb-up'></i> Like
                                    </a>
                                </div>
                                <div class='col-3 col-md-3 col-lg-3 asidebus-column3'>
                                    <a href='#'><i class='mdi mdi-cart-plus'></i>Cart
                                    </a>
                                </div>
                                <div class='col-3 col-md-3 col-lg-3 asidebus-column4'>
                                    <a href='#'><i class='mdi mdi-share'></i> Share
                                    </a>
                                </div>
                                </div>
                            </div>
                            <div class="media ppost-act">
                                <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                <div class="media-body mdd">
                                <a href="" class="commenter">Alexandra Gills</a>
                                <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                <span class='mdaction'>
                                    <a class="likeaction" href=''>Like
                                    </a>
                                    <a href="" data-toggle="collapse" data-target="#collapseOne">
                                    Reply<span class="badge badge-notify">5</span></a>
                                    <div id="collapseOne" class="collapse">
                                        <div class="media maincomment">
                                            <img class="mr-3 commentimag rounded-circle" src="/image/place.png" alt="image">
                                            <div class="media-body mdd">
                                            <a href="" class="commenter">Alexandra Gills</a>
                                            <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                            <span class='mdaction'>
                                                <a class="likeaction" href=''>Like</a>
                                                <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                            </span>
                                            </div>
                                        </div><!--end nested media-->
                                        <div class="media maincomment">
                                            <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                            <div class="media-body mdd">
                                            <a href="" class="commenter">Alexandra Gills</a>
                                            <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                            <span class='mdaction'>
                                                <a class="likeaction" href=''>Like</a>
                                                <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                            </span>
                                            <div class="media medianested">
                                                <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                <div class="media-body mdd">
                                                    <a href="" class="commenter">Alexandra Gills</a>
                                                    <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                    <span class='mdaction'>
                                                        <a class="likeaction" href=''>Like</a>
                                                        <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                    </span>
                                                </div>
                                            </div><!--end nested media-->
                                            </div>
                                        </div><!--end media-->
                                    </div>
                                </span>
                                </div>
                            </div>
                            <div class="container">
                                <div class="d-flex justify-content-center row">
                                <div class="d-flex flex-column col-md-12">
                                    <div class="d-flex flex-row justify-content-between align-items-center action-collapse ppost-act2" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" href="#collapse-2">
                                        <span  class="ml-auto maincomments">More comments <i class="fa fa-angle-down"></i></span><i class="fa fa-chevron-down servicedrop"></i>
                                    </div>
                                    <div id="collapse-2" class="collapse " style=" overflow-y: scroll !important;max-height: 400px !important;">
                                        <div class="commented-section mt-2"><hr>
                                            <div class="media maincomment">
                                            <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                            <div class="media-body mdd">
                                                <a href="" class="commenter">Alexandra Gills</a>
                                                <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                <span class='mdaction'>
                                                    <a class="likeaction" href=''>Like</a>
                                                    <!--collapse reply--><a href="" data-toggle="collapse" data-target="#collapseTwo">
                                                    Reply<span class="badge badge-notify">5</span></a>
                                                    <div id="collapseTwo" class="collapse">
                                                        <div class="media maincomment">
                                                        <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                        <div class="media-body mdd">
                                                            <a href="" class="commenter">Alexandra Gills</a>
                                                            <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                            <span class='mdaction'>
                                                                <a class="likeaction" href=''>Like </a>
                                                                <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                            </span>
                                                        </div>
                                                        </div><!--end nested media-->
                                                        <div class="media maincomment">
                                                        <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                        <div class="media-body mdd">
                                                            <a href="" class="commenter">Alexandra Gills</a>
                                                            <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                            <span class='mdaction'>
                                                                <a class="likeaction" href=''>Like</a>
                                                                <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                            </span>
                                                            <div class="media medianested">
                                                                <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                                <div class="media-body mdd">
                                                                    <a href="" class="commenter">Alexandra Gills</a>
                                                                    <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                                    <span class='mdaction'>
                                                                    <a class="likeaction" href=''>Like <</a>
                                                                    <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                                    </span>
                                                                </div>
                                                            </div><!--end nested media-->
                                                        </div>
                                                        </div><!--end media-->
                                                    </div>
                                                </span>

                                            </div>
                                            </div><!--end media-->
                                            <div class="media maincomment">
                                            <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                            <div class="media-body mdd">
                                                <a href="" class="commenter">Alexandra Gills</a>
                                                <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                <span class='mdaction'>
                                                    <a class="likeaction" href=''>Like </a>
                                                    <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                </span>

                                            </div>
                                            </div><!--end media-->
                                            <div class="media maincomment">
                                            <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                            <div class="media-body mdd">
                                                <a href="" class="commenter">Alexandra Gills</a>
                                                <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                <span class='mdaction'>
                                                    <a class="likeaction" href=''>Like</a>
                                                    <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                </span>

                                            </div>
                                            </div><!--end media-->
                                        </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="cardbox-comments p-3">
                                <span class="comment-avatar float-left">
                                <a href=""><img src="/image/place.png" alt="..." class="shadow-sm"></a>
                                </span>
                                <div class="search">
                                <input placeholder="Write a comment" type="text" style="outline: none;">
                                <button><i class="fa fa-camera"></i></button>
                                </div><!--/. Search -->
                            </div><!--/ cardbox-like -->




                        </div>
                        <div class="box rounded bg-white mb-3 side-user shadow-sm">
                            <div class="p-3 d-flex align-items-center side-user">

                                <div class="dropdown-list-image mr-3">

                                <img src="/image/place.png" alt=""  class="rounded-circle sides-img shadow-sm">
                                </div>
                                <div class="sideuser2 pt-3">
                                <div class="text-truncate truc">Tobia Crivellari</div>
                                <div class="truc2">Fashion Designer
                                    <span class="ml-2 text-muted bus-span-globe-time">. 2 mins <i class='mdi mdi-earth'> </i></span>
                                </div>

                                </div>

                                <ul class="ml-auto list-unstyled">
                                <li class="dropdown pull-right">
                                    <a href="#" class='dropdown-toggle mainh' data-toggle="dropdown">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu maindropdown">
                                        <a class="dropdown-item" href="#">Save to gallery</a>
                                        <a class="dropdown-item" href="#">Chat</a>
                                        <a class="dropdown-item" href="#">Copy link</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                        <a class="dropdown-item" href="#">Block</a>
                                        <a class="dropdown-item" href="#">Report</a>
                                    </div>
                                </li>
                                </ul>
                            </div>
                            <div class="p-3 border-bottom osahan-post-body">
                                <p class="text-muted name-pp">Tmpo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                            </div>
                            <div class='p-3 post-actions border-bottom'>
                                <div class="row">
                                <div class='col-3 col-md-3 col-lg-3 asidepro-column1' >
                                    <a href='#' class=""><i class='fa fa-comments'></i> Comment
                                    </a>
                                </div>
                                <div class='col-3 col-md-3 col-lg-3 asidebus-column2'>
                                    <a href='#'><i class='mdi mdi-thumb-up'></i> Like
                                    </a>
                                </div>
                                <div class='col-3 col-md-3 col-lg-3 asidebus-column3'>
                                    <a href='#'><i class='mdi mdi-cart-plus'></i>Cart
                                    </a>
                                </div>
                                <div class='col-3 col-md-3 col-lg-3 asidebus-column4'>
                                    <a href='#'><i class='mdi mdi-share'></i> Share
                                    </a>
                                </div>
                                </div>
                            </div>


                            <div class="cardbox-comments p-3">
                                <span class="comment-avatar float-left">
                                <a href=""><img src="/image/place.png" alt="..." class="shadow-sm"></a>
                                </span>
                                <div class="search">
                                <input placeholder="Write a comment" type="text" style="outline: none;">
                                <button><i class="fa fa-camera"></i></button>
                                </div><!--/. Search -->
                            </div><!--/ cardbox-like -->




                        </div>
                        <div class="box rounded bg-white mb-3 side-user shadow-sm">
                            <div class="patobia d-flex align-items-center side-user">

                                <div class="dropdown-list-image mr-3">

                                <img src="/image/place.png" alt=""  class="rounded-circle sides-img shadow-sm">
                                </div>
                                <div class="sideuser2 pt-3">
                                <div class="text-truncate truc">SERP Digitals</div>
                                <div class="truc2">Director
                                    <span class="ml-2 text-muted bus-span-globe-time">. 6 mins <i class='mdi mdi-earth'> </i></span>
                                </div>
                                </div>

                                <ul class="ml-auto list-unstyled">
                                <li class="dropdown pull-right">
                                    <a href="#" class='dropdown-toggle mainh' data-toggle="dropdown">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu maindropdown">
                                        <a class="dropdown-item" href="#">Save to gallery</a>
                                        <a class="dropdown-item" href="#">Chat</a>
                                        <a class="dropdown-item" href="#">Copy link</a>
                                        <a class="dropdown-item" href="#">Unfollow</a>
                                        <a class="dropdown-item" href="#">Block</a>
                                        <a class="dropdown-item" href="#">Report</a>
                                    </div>
                                </li>
                                </ul>
                            </div>
                            <div class="">
                                <!-- Container for the image gallery -->
                            <div class="container" style="padding: 0;">

                            <!-- Full-width images with number text -->
                            <div class="mySlides">
                                <img src="/image/digital.jpg" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <img src="/image/lipstick.jpg" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <img src="/image/read.jpg" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <img src="/image/campaig.jpg" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <img src="/image/evolution.jpg" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <img src="/image/slide.jpg" style="width:100%">
                            </div>

                            <!-- Next and previous buttons -->
                            <a class="pre" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="nex" onclick="plusSlides(1)">&#10095;</a>

                            <!-- Thumbnail images -->

                                <div class="column">
                                <img class="demo cursor pro-plentyimg" src="/image/digital.jpg" onclick="currentSlide(1)" alt="">
                                </div>
                                <div class="column">
                                <img class="demo cursor pro-plentyimg" src="/image/lipstick.jpg" onclick="currentSlide(2)" alt="">
                                </div>
                                <div class="column">
                                <img class="demo cursor pro-plentyimg" src="/image/read.jpg" onclick="currentSlide(3)" alt="">
                                </div>
                                <div class="column">
                                <img class="demo cursor pro-plentyimg" src="/image/campaig.jpg" onclick="currentSlide(4)" alt="">
                                </div>
                                <div class="column">
                                <img class="demo cursor pro-plentyimg" src="/image/evolution.jpg" onclick="currentSlide(5)" alt="">
                                </div>
                                <div class="column">
                                <img class="demo cursor pro-plentyimg" src="/image/slide.jpg" onclick="currentSlide(6)" alt="">
                                </div>

                            </div>
                            </div>
                            <div class="container border-bottom  iconcont">
                                <!--icons-->
                                <div class="mainicons">
                                <span class="cardbox-base">
                                    <ul class="float-right cardbox-ul">
                                        <li class="cardbox-li"><a><i class="fa fa-comments cardbase-i"></i></a></li>
                                        <li class="cardbox-li"><a><em class="mr-5">12</em></a></li>
                                        <li class="cardbox-li"><a><i class="mdi mdi-share cardbase-i"></i></a></li>
                                        <li class="cardbox-li"><a><em class="mr-3">03</em></a></li>
                                    </ul>
                                    <ul class="cardbox-ul" >
                                        <span class='mainp'>
                                            <a href="" data-toggle="tooltip" title="like" class="mainpp shadow-sm"><i class='mdi mdi-thumb-up'></i></a>
                                        </span>

                                        <li class="cardbox-li"><a href="#"><img src="/image/user.jpg" class="img-fluid rounded-circle shadow-sm" alt="User"></a></li>
                                        <li class="cardbox-li"><a href="#"><img src="/image/user2.jpg" class="img-fluid rounded-circle shadow-sm" alt="User"></a></li>
                                        <li class="cardbox-li"><a href="#"><img src="/image/lablady.jpg" class="img-fluid rounded-circle shadow-sm" alt="User"></a></li>
                                        <li class="cardbox-li"><a href="#"><img src="/image/user.jpg" class="img-fluid rounded-circle shadow-sm" alt="User"></a></li>
                                        <li class="cardbox-li"><a><span class="" data-toggle="modal" data-target="">2k</span></a></li>
                                        <!-- Modal -->
                                    </ul>
                                </span><!--/ cardbox-base -->
                                </div>
                            </div>
                            <div class='p-3 post-actions border-bottom'>
                                <div class="row">
                                <div class='col-3 col-md-3 col-lg-3 asidepro-column1' >
                                    <a href='#' class=""><i class='fa fa-comments'></i> Comment
                                    </a>
                                </div>
                                <div class='col-3 col-md-3 col-lg-3 asidebus-column2'>
                                    <a href='#'><i class='mdi mdi-thumb-up'></i> Like
                                    </a>
                                </div>
                                <div class='col-3 col-md-3 col-lg-3 asidebus-column3'>
                                    <a href='#'><i class='mdi mdi-cart-plus'></i>Cart
                                    </a>
                                </div>
                                <div class='col-3 col-md-3 col-lg-3 asidebus-column4'>
                                    <a href='#'><i class='mdi mdi-share'></i> Share
                                    </a>
                                </div>
                                </div>
                            </div>
                            <div class="media ppost-act">
                                <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                <div class="media-body mdd">
                                <a href="" class="commenter">Alexandra Gills</a>
                                <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                <span class='mdaction'>
                                    <a class="likeaction" href=''>Like
                                    </a>
                                    <a href="" data-toggle="collapse" data-target="#collapseOne">
                                    Reply<span class="badge badge-notify">5</span></a>
                                    <div id="collapseOne" class="collapse">
                                        <div class="media maincomment">
                                            <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                            <div class="media-body mdd">
                                            <a href="" class="commenter">Alexandra Gills</a>
                                            <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                            <span class='mdaction'>
                                                <a class="likeaction" href=''>Like</a>
                                                <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                            </span>
                                            </div>
                                        </div><!--end nested media-->
                                        <div class="media maincomment">
                                            <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                            <div class="media-body mdd">
                                            <a href="" class="commenter">Alexandra Gills</a>
                                            <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                            <span class='mdaction'>
                                                <a class="likeaction" href=''>Like</a>
                                                <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                            </span>
                                            <div class="media medianested">
                                                <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                <div class="media-body mdd">
                                                    <a href="" class="commenter">Alexandra Gills</a>
                                                    <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                    <span class='mdaction'>
                                                        <a class="likeaction" href=''>Like</a>
                                                        <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                    </span>
                                                </div>
                                            </div><!--end nested media-->
                                            </div>
                                        </div><!--end media-->
                                    </div>
                                </span>
                                </div>
                            </div>
                            <div class="container">
                                <div class="d-flex justify-content-center row">
                                <div class="d-flex flex-column col-md-12">
                                    <div class="d-flex flex-row justify-content-between align-items-center action-collapse ppost-act2" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" href="#collapse-2">
                                        <span  class="ml-auto maincomments">More comments <i class="fa fa-angle-down"></i></span><i class="fa fa-chevron-down servicedrop"></i>
                                    </div>
                                    <div id="collapse-2" class="collapse " style=" overflow-y: scroll !important;max-height: 400px !important;">
                                        <div class="commented-section mt-2"><hr>
                                            <div class="media maincomment">
                                            <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                            <div class="media-body mdd">
                                                <a href="" class="commenter">Alexandra Gills</a>
                                                <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                <span class='mdaction'>
                                                    <a class="likeaction" href=''>Like</a>
                                                    <!--collapse reply--><a href="" data-toggle="collapse" data-target="#collapseTwo">
                                                    Reply<span class="badge badge-notify">5</span></a>
                                                    <div id="collapseTwo" class="collapse">
                                                        <div class="media maincomment">
                                                        <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                        <div class="media-body mdd">
                                                            <a href="" class="commenter">Alexandra Gills</a>
                                                            <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                            <span class='mdaction'>
                                                                <a class="likeaction" href=''>Like </a>
                                                                <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                            </span>
                                                        </div>
                                                        </div><!--end nested media-->
                                                        <div class="media maincomment">
                                                        <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                        <div class="media-body mdd">
                                                            <a href="" class="commenter">Alexandra Gills</a>
                                                            <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                            <span class='mdaction'>
                                                                <a class="likeaction" href=''>Like</a>
                                                                <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                            </span>
                                                            <div class="media medianested">
                                                                <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                                <div class="media-body mdd">
                                                                    <a href="" class="commenter">Alexandra Gills</a>
                                                                    <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                                    <span class='mdaction'>
                                                                    <a class="likeaction" href=''>Like <</a>
                                                                    <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                                    </span>
                                                                </div>
                                                            </div><!--end nested media-->
                                                        </div>
                                                        </div><!--end media-->
                                                    </div>
                                                </span>

                                            </div>
                                            </div><!--end media-->
                                            <div class="media maincomment">
                                            <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                            <div class="media-body mdd">
                                                <a href="" class="commenter">Alexandra Gills</a>
                                                <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                <span class='mdaction'>
                                                    <a class="likeaction" href=''>Like </a>
                                                    <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                </span>

                                            </div>
                                            </div><!--end media-->
                                            <div class="media maincomment">
                                            <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                            <div class="media-body mdd">
                                                <a href="" class="commenter">Alexandra Gills</a>
                                                <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                <span class='mdaction'>
                                                    <a class="likeaction" href=''>Like</a>
                                                    <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                </span>

                                            </div>
                                            </div><!--end media-->
                                        </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="cardbox-comments p-3">
                                <span class="comment-avatar float-left">
                                <a href=""><img src="/image/place.png" alt="..." class="shadow-sm"></a>
                                </span>
                                <div class="search">
                                <input placeholder="Write a comment" type="text" style="outline: none;">
                                <button><i class="fa fa-camera"></i></button>
                                </div><!--/. Search -->
                            </div><!--/ cardbox-like -->




                        </div>
                        <div class="box rounded bg-white mb-3 side-user shadow-sm">
                            <div class="patobia d-flex align-items-center side-user">

                                <div class="dropdown-list-image mr-3">

                                <img src="/image/place.png" alt=""  class="rounded-circle sides-img shadow-sm">
                                </div>
                                <div class="sideuser2 pt-3">
                                <div class="text-truncate truc">Tobia Crivellari</div>
                                <div class="truc2">Fashion Designer
                                    <span class="ml-2 text-muted bus-span-globe-time">. 2 mins <i class='mdi mdi-earth'> </i></span>
                                </div>
                                </div>

                                <ul class="ml-auto list-unstyled">
                                    <span href="#" class='sponsotred'>
                                        Sponsored
                                    </span>
                                </ul>

                            </div>
                            <div class="border-bottom">
                                <div id="summarys">
                                <p class="p-3 text-muted name-pp">
                                ID Identity & Document Verification To Meet KYC, AML & GDPR Compliance. Fight Fraud & Onboard Customers, Faster With Netverify® AI-powered Identity Verification.
                                </p>
                            </div>
                                <img src="/image/evolution.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="container border-bottom  iconcont">
                                <!--icons-->
                                <div class="mainicons">
                                <span class="cardbox-base">
                                    <ul class="float-right cardbox-ul">
                                        <li class="cardbox-li"><a><i class="fa fa-comments cardbase-i"></i></a></li>
                                        <li class="cardbox-li"><a><em class="mr-5">12</em></a></li>
                                        <li class="cardbox-li"><a><i class="mdi mdi-share cardbase-i"></i></a></li>
                                        <li class="cardbox-li"><a><em class="mr-3">03</em></a></li>
                                    </ul>
                                    <ul class="cardbox-ul" >
                                        <span class='mainp'>
                                            <a href="" data-toggle="tooltip" title="cart" class="cart-likes shadow-sm"><i class='fa fa-cart-plus'></i></a>
                                        </span>

                                        <li class="cardbox-li"><a href="#"><img src="/image/user.jpg" class="img-fluid rounded-circle shadow-sm" alt="User"></a></li>
                                        <li class="cardbox-li"><a href="#"><img src="/image/user2.jpg" class="img-fluid rounded-circle shadow-sm" alt="User"></a></li>
                                        <li class="cardbox-li"><a href="#"><img src="/image/lablady.jpg" class="img-fluid rounded-circle shadow-sm" alt="User"></a></li>
                                        <li class="cardbox-li"><a href="#"><img src="/image/user.jpg" class="img-fluid rounded-circle shadow-sm" alt="User"></a></li>
                                        <li class="cardbox-li"><a><span class="" data-toggle="modal" data-target="">2k</span></a></li>
                                        <!-- Modal -->
                                    </ul>
                                </span><!--/ cardbox-base -->
                                </div>
                            </div>
                            <div class="border-bottom">
                                <div class='sponsor'>
                            <div class='spon'>
                                <a href=''> springday.com </a><br>
                                <span class="sponspost">Create eCommerce Banner for Online Store</span><br>
                                <a href=''>Design your banner, social post, advertisement and product...</a>

                                <button type='button' class='btn btn-light btn-sm d-none d-lg-block'>Learn More</button>
                            </div><!--end spon-->
                        </div><!--end sponsor-->
                            </div>
                            <div class='p-3 post-actions border-bottom'>
                                <div class="row">
                                <div class='col-3 col-md-3 col-lg-3 asidepro-column1' >
                                    <a href='#' class=""><i class='fa fa-comments'></i> Comment
                                    </a>
                                </div>
                                <div class='col-3 col-md-3 col-lg-3 asidebus-column2'>
                                    <a href='#'><i class='mdi mdi-thumb-up'></i> Like
                                    </a>
                                </div>
                                <div class='col-3 col-md-3 col-lg-3 asidebus-column3'>
                                    <a href='#'><i class='mdi mdi-cart-plus'></i>Cart
                                    </a>
                                </div>
                                <div class='col-3 col-md-3 col-lg-3 asidebus-column4'>
                                    <a href='#'><i class='mdi mdi-share'></i> Share
                                    </a>
                                </div>
                                </div>
                            </div>
                            <div class="media ppost-act">
                                <img class="mr-3 commentimag rounded-circle" src="/image/place.png" alt="image" class="shadow-sm">
                                <div class="media-body mdd">
                                <a href="" class="commenter">Alexandra Gills</a>
                                <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                <span class='mdaction'>
                                    <a class="likeaction" href=''>Like
                                    </a>
                                    <a href="" data-toggle="collapse" data-target="#collapseOne">
                                    Reply<span class="badge badge-notify">5</span></a>
                                    <div id="collapseOne" class="collapse">
                                        <div class="media maincomment">
                                            <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                            <div class="media-body mdd">
                                            <a href="" class="commenter">Alexandra Gills</a>
                                            <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                            <span class='mdaction'>
                                                <a class="likeaction" href=''>Like</a>
                                                <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                            </span>
                                            </div>
                                        </div><!--end nested media-->
                                        <div class="media maincomment">
                                            <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                            <div class="media-body mdd">
                                            <a href="" class="commenter">Alexandra Gills</a>
                                            <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                            <span class='mdaction'>
                                                <a class="likeaction" href=''>Like</a>
                                                <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                            </span>
                                            <div class="media medianested">
                                                <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                <div class="media-body mdd">
                                                    <a href="" class="commenter">Alexandra Gills</a>
                                                    <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                    <span class='mdaction'>
                                                        <a class="likeaction" href=''>Like</a>
                                                        <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                    </span>
                                                </div>
                                            </div><!--end nested media-->
                                            </div>
                                        </div><!--end media-->
                                    </div>
                                </span>
                                </div>
                            </div>
                            <div class="container">
                                <div class="d-flex justify-content-center row">
                                <div class="d-flex flex-column col-md-12">
                                    <div class="d-flex flex-row justify-content-between align-items-center action-collapse ppost-act2" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" href="#collapse-2">
                                        <span  class="ml-auto maincomments">More comments <i class="fa fa-angle-down"></i></span><i class="fa fa-chevron-down servicedrop"></i>
                                    </div>
                                    <div id="collapse-2" class="collapse " style=" overflow-y: scroll !important;max-height: 400px !important;">
                                        <div class="commented-section mt-2"><hr>
                                            <div class="media maincomment">
                                            <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                            <div class="media-body mdd">
                                                <a href="" class="commenter">Alexandra Gills</a>
                                                <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                <span class='mdaction'>
                                                    <a class="likeaction" href=''>Like</a>
                                                    <!--collapse reply--><a href="" data-toggle="collapse" data-target="#collapseTwo">
                                                    Reply<span class="badge badge-notify">5</span></a>
                                                    <div id="collapseTwo" class="collapse">
                                                        <div class="media maincomment">
                                                        <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                        <div class="media-body mdd">
                                                            <a href="" class="commenter">Alexandra Gills</a>
                                                            <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                            <span class='mdaction'>
                                                                <a class="likeaction" href=''>Like </a>
                                                                <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                            </span>
                                                        </div>
                                                        </div><!--end nested media-->
                                                        <div class="media maincomment">
                                                        <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                        <div class="media-body mdd">
                                                            <a href="" class="commenter">Alexandra Gills</a>
                                                            <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                            <span class='mdaction'>
                                                                <a class="likeaction" href=''>Like</a>
                                                                <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                            </span>
                                                            <div class="media medianested">
                                                                <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                                                <div class="media-body mdd">
                                                                    <a href="" class="commenter">Alexandra Gills</a>
                                                                    <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                                    <span class='mdaction'>
                                                                    <a class="likeaction" href=''>Like <</a>
                                                                    <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                                    </span>
                                                                </div>
                                                            </div><!--end nested media-->
                                                        </div>
                                                        </div><!--end media-->
                                                    </div>
                                                </span>

                                            </div>
                                            </div><!--end media-->
                                            <div class="media maincomment">
                                            <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                            <div class="media-body mdd">
                                                <a href="" class="commenter">Alexandra Gills</a>
                                                <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                <span class='mdaction'>
                                                    <a class="likeaction" href=''>Like </a>
                                                    <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                </span>

                                            </div>
                                            </div><!--end media-->
                                            <div class="media maincomment">
                                            <img class="mr-3 commentimag rounded-circle shadow-sm" src="/image/place.png" alt="image">
                                            <div class="media-body mdd">
                                                <a href="" class="commenter">Alexandra Gills</a>
                                                <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                <span class='mdaction'>
                                                    <a class="likeaction" href=''>Like</a>
                                                    <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                </span>

                                            </div>
                                            </div><!--end media-->
                                        </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="cardbox-comments p-3">
                                <span class="comment-avatar float-left">
                                <a href=""><img src="/image/place.png" alt="..." class="shadow-sm"></a>
                                </span>
                                <div class="search">
                                <input placeholder="Write a comment" type="text" style="outline: none;">
                                <button><i class="fa fa-camera"></i></button>
                                </div><!--/. Search -->
                            </div><!--/ cardbox-like -->




                        </div>

                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="box shadow-sm border rounded bg-white p-3">
                            <div class="row">
                                <div class="col-md-6 netside-space1">
                                <a class="connectlink" href=".html">
                                    <div class="border mb-3">
                                        <div class="d-flex align-items-center p-3">
                                            <div class="overflow-hidden mr-2">
                                            <h6 class="text-truncate truc">UI/UX designer</h6>
                                            <div class="text-truncate truc2">Tarlor Swift</div>
                                            <div class="trucon-mutual">
                                                <i class="mdi mdi-map-marker-outline text-success pt-1"></i> India, Punjab</div>
                                            </div>
                                            <img src="/image/place.png" alt=""  class="rounded-circle sides-img ml-auto">
                                        </div>
                                        <div class="d-flex align-items-center p-2 border-top border-bottom">
                                            <div class="imgoverlapping">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Sophia Lee">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user2.jpg" alt="" data-original-title="John Doe">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Julia Cox">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Robert Cook">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user2.jpg" alt="" data-original-title="Sophia Lee">
                                            </div>
                                            <span class="mut-span">18 mutual network</span>
                                        </div>
                                            <div class="network-item-footer py-2 d-flex text-center">
                                            <div class="col-6 pl-0 pr-1">
                                                <span class="follow-profile"> Following </span>
                                            </div>
                                            <div class="col-6 pr-4 pl-1">
                                                <button type="button" class="btn btn-secondary btn-sm btn-block view-profile-mbutton"> view profile </button>
                                            </div>
                                            </div>

                                    </div>
                                </a>
                                </div>
                                <div class="col-md-6 netside-space2">
                                <a class="connectlink" href=".html">
                                    <div class="border mb-3">
                                        <div class="d-flex align-items-center p-3">
                                            <div class="overflow-hidden mr-2">
                                            <h6 class="text-truncate truc">Junior UX Designer</h6>
                                            <div class="text-truncate truc2">Sonia Welly</div>
                                            <div class="trucon-mutual">
                                                <i class="mdi mdi-map-marker-outline text-success pt-1 font-weight-bold"></i> Vancouver, BC</div>
                                            </div>
                                            <img src="/image/place.png" alt=""  class="rounded-circle sides-img ml-auto shadow-sm">
                                        </div>
                                        <div class="d-flex align-items-center p-2 border-top border-bottom job-item-body">
                                            <div class="imgoverlapping">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Sophia Lee">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user2.jpg" alt="" data-original-title="John Doe">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Julia Cox">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Robert Cook">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user2.jpg" alt="" data-original-title="Sophia Lee">
                                            </div>
                                            <span class="mut-span">9 mutual network</span>
                                        </div>
                                        <div class="network-item-footer py-2 d-flex text-center">
                                            <div class="col-6 pl-0 pr-1">
                                                <span class="follow-profile"> Following </span>
                                            </div>
                                            <div class="col-6 pr-4 pl-1">
                                                <button type="button" class="btn btn-secondary btn-sm btn-block view-profile-mbutton"> view profile </button>
                                            </div>
                                            </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-md-6 netside-space1">
                                <a class="connectlink" href=".html">
                                    <div class="border mb-3">
                                        <div class="d-flex align-items-center p-3">
                                            <div class="overflow-hidden mr-2">
                                            <h6 class="text-truncate truc">Product Director</h6>
                                            <div class="text-truncate truc2">Sonia Welly</div>
                                            <div class="trucon-mutual">
                                                <i class="mdi mdi-map-marker-outline text-success pt-1"></i> India, Punjab</div>
                                            </div>
                                            <img src="/image/place.png" alt=""  class="rounded-circle sides-img ml-auto shadow-sm">
                                        </div>
                                        <div class="d-flex align-items-center p-2 border-top border-bottom job-item-body">
                                            <div class="imgoverlapping">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Sophia Lee">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user2.jpg" alt="" data-original-title="John Doe">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Julia Cox">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Robert Cook">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user2.jpg" alt="" data-original-title="Sophia Lee">
                                            </div>
                                            <span class="mut-span">16 mutual network</span>
                                        </div>
                                        <div class="network-item-footer py-2 d-flex text-center">
                                            <div class="col-6 pl-0 pr-1">
                                                <span class="follow-profile"> Follower </span>
                                            </div>
                                            <div class="col-6 pr-4 pl-1">
                                                <button type="button" class="btn btn-secondary btn-sm btn-block view-profile-mbutton"> view profile </button>
                                            </div>
                                            </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-md-6 netside-space2">
                                <a class="connectlink" href=".html">
                                    <div class="border mb-3">
                                        <div class="d-flex align-items-center p-3">
                                            <div class="overflow-hidden mr-2">
                                            <h6 class="text-truncate truc">Junior UX Designer</h6>
                                            <div class="text-truncate truc2">Sonia Welly</div>
                                            <div class="trucon-mutual">
                                                <i class="mdi mdi-map-marker-outline text-success pt-1"></i> Vancouver, BC</div>
                                            </div>
                                            <img src="/image/place.png" alt=""  class="rounded-circle sides-img ml-auto shadow-sm">
                                        </div>
                                        <div class="d-flex align-items-center p-2 border-top border-bottom job-item-body">
                                            <div class="imgoverlapping">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Sophia Lee">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user2.jpg" alt="" data-original-title="John Doe">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Julia Cox">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Robert Cook">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user2.jpg" alt="" data-original-title="Sophia Lee">
                                            </div>
                                            <span class="mut-span">9 mutual network</span>
                                        </div>
                                        <div class="network-item-footer py-2 d-flex text-center">
                                            <div class="col-6 pl-0 pr-1">
                                                <span class="follow-profile"> Follower </span>
                                            </div>
                                            <div class="col-6 pr-4 pl-1">
                                                <button type="button" class="btn btn-secondary btn-sm btn-block view-profile-mbutton"> view profile </button>
                                            </div>
                                            </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-md-6 netside-space1">
                                <a class="connectlink" href=".html">
                                    <div class="border mb-3">
                                        <div class="d-flex align-items-center p-3">
                                            <div class="overflow-hidden mr-2">
                                            <h6 class="text-truncate truc">Product Director</h6>
                                            <div class="text-truncate truc2">Sonia Welly</div>
                                            <div class="trucon-mutual">
                                                <i class="mdi mdi-map-marker-outline text-success pt-1"></i> India, Punjab</div>
                                            </div>
                                            <img src="/image/place.png" alt=""  class="rounded-circle sides-img ml-auto shadow-sm">
                                        </div>
                                        <div class="d-flex align-items-center p-2 border-top border-bottom job-item-body">
                                            <div class="imgoverlapping">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Sophia Lee">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user2.jpg" alt="" data-original-title="John Doe">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Julia Cox">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Robert Cook">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user2.jpg" alt="" data-original-title="Sophia Lee">
                                            </div>
                                            <span class="mut-span">16 mutual network</span>
                                        </div>
                                        <div class="network-item-footer py-2 d-flex text-center">
                                            <div class="col-6 pl-0 pr-1">
                                                <span class="follow-profile"> Follower </span>
                                            </div>
                                            <div class="col-6 pr-4 pl-1">
                                                <button type="button" class="btn btn-secondary btn-sm btn-block view-profile-mbutton"> view profile </button>
                                            </div>
                                            </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-md-6 netside-space2">
                                <a class="connectlink" href=".html">
                                    <div class="border mb-3">
                                        <div class="d-flex align-items-center p-3">
                                            <div class="overflow-hidden mr-2">
                                            <h6 class="text-truncate truc">.NET Developer</h6>
                                            <div class="text-truncate truc2">Brit Frem</div>
                                            <div class="trucon-mutual">
                                                <i class="mdi mdi-map-marker-outline text-success pt-1"></i> London, UK</div>
                                            </div>
                                            <img src="/image/place.png" alt=""  class="rounded-circle sides-img ml-auto shadow-sm">
                                        </div>
                                        <div class="d-flex align-items-center p-2 border-top border-bottom job-item-body">
                                            <div class="imgoverlapping">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Sophia Lee">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user2.jpg" alt="" data-original-title="John Doe">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Julia Cox">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Robert Cook">
                                            <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user2.jpg" alt="" data-original-title="Sophia Lee">
                                            </div>
                                            <span class="mut-span">16 mutual network</span>
                                        </div>
                                        <div class="network-item-footer py-2 d-flex text-center">
                                            <div class="col-6 pl-0 pr-1">
                                                <span class="follow-profile"> Follower </span>
                                            </div>
                                            <div class="col-6 pr-4 pl-1">
                                                <button type="button" class="btn btn-secondary btn-sm btn-block view-profile-mbutton"> view profile </button>
                                            </div>
                                            </div>
                                    </div>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="type-tab">
                        <div class="box border rounded bg-white mb-3">
                            <div class="box-title border-bottom p-3">
                                <h6 class="sides-h5-pro">40 Reviews</h6>
                            </div>
                            <div class="box-body p-3">
                                <div id="retro-comments">
                                <div class="reviews-members pt-0">
                                    <div class="media">
                                        <a href="#"><img class="mr-3 shadow-sm" src="/image/place.png" alt=""></a>
                                        <div class="media-body">
                                            <div class="form-members-body">
                                            <textarea rows="2" placeholder="Add a public comment..." class="form-control pro-review-busprofile"></textarea>
                                            </div>
                                            <div class="form-members-footer d-flex align-items-center mt-2 truc">
                                            <b>12,725 Comments</b>
                                            <span class="ml-auto"><button class="btn btn-light btn-sm cancellinbtn d-none d-lg-block" type="button">Cancel</button> <button class="btn btn-secondary btn-sm commentingbtn" type="button">Comment</button>     </span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="reviews-members">
                                    <div class="media">
                                        <a href="#"><img class="mr-3" src="/image/place.png" alt="" class="shadow-sm"></a>
                                        <div class="media-body">
                                            <div class="reviews-members-header">
                                            <h6 class="mb-1">
                                                <a class="truc" href="#">Gurdeep Osahan </a>  <span class="bus-span-globe-time text-muted"> .10 hrs <i class=" mdi mdi-earth"></i></span></h6>
                                            </div>
                                            <div class="reviews-members-body pb-3">
                                            <p class="text-muted name-pp"> reacthe last order. Even though they had Chefs in their open kitchen they weren’t flexible to dish out few more items. Anyway the food was super specially their stone dessert.</p>
                                            </div>
                                            <div class="reviews-members-footer d-flex align-items-center">
                                            <a class="total-like btn btn-outline-secondary btn-sm mr-1" href="#"><i class="mdi mdi-thumb-up-outline"></i> 123</a> <a class="total-like btn btn-outline-secondary btn-sm" href="#"><i class="mdi mdi-thumb-down-outline"></i> 02</a>
                                            <span dir="rtl" class="total-like-user-main ml-2">
                                                <div class="imgoverlapping">
                                                    <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Sophia Lee">
                                                    <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user2.jpg" alt="" data-original-title="John Doe">
                                                    <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Julia Cox">
                                                    <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Robert Cook">
                                                    <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user2.jpg" alt="" data-original-title="Sophia Lee">
                                                </div>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="reviews-members">
                                    <div class="media">
                                        <a href="#"><img class="mr-3 campaig shadow-sm" src="/image/place.png" alt="" ></a>
                                        <div class="media-body">
                                            <div class="reviews-members-header">
                                            <h6 class="mb-1"><a href="#" class="truc">Gurdeep Osahan </a>  <span class="bus-span-globe-time text-muted"> .10 hrs <i class=" mdi mdi-earth"></i></span></h6>
                                            </div>
                                            <div class="reviews-members-body">
                                            <p class="text-muted name-pp pb-3">Was here impromptu in their first week, reacthe last order. Even though they had Chefs in their open kitchen they weren’t flexible to dish out few more items.</p>
                                            </div>
                                            <div class="reviews-members-footer d-flex align-items-center">
                                            <a class="total-like btn btn-outline-secondary btn-sm mr-1" href="#"><i class="mdi mdi-thumb-up-outline"></i> 123</a> <a class="total-like btn btn-outline-secondary btn-sm" href="#"><i class="mdi mdi-thumb-down-outline"></i> 02</a>
                                            <span class="total-like-user-main ml-2" dir="rtl">
                                                <div class="imgoverlapping">
                                                    <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Sophia Lee">
                                                    <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user2.jpg" alt="" data-original-title="John Doe">
                                                    <img class="circlular shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="/image/user.jpg" alt="" data-original-title="Julia Cox">

                                                </div>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </main>
                <aside class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12 d-none d-lg-block">

                    @include('sidebox')
                    <div class="box  rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3 d-flex align-items-center">
                        <h6 class="sides-h5-pro">Photos</h6>
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
                    <div class="box rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3">
                        <h6 class="sides-h5-pro">Citizens you might know</h6>
                    </div>
                    <div class="box-body p-3">
                        <div class="d-flex align-items-center side-user">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle sides-img shadow-sm" src="/image/place.png" alt="">
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
                                <img class="rounded-circle sides-img shadow-sm" src="/image/place.png" alt="">
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
                                <img class="rounded-circle sides-img shadow-sm" src="/image/place.png" alt="">
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
                                <img class="rounded-circle sides-img shadow-sm" src="/image/place.png" alt="">
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
                                <img class="rounded-circle sides-img shadow-sm" src="/image/place.png" alt="">
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
                <aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-6 col-12 d-none d-lg-block">
                    <div class="box rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3">
                        <h6 class="sides-h5-pro">Referees</h6>
                    </div>
                    <div class="box-body p-3">
                        <div class="d-flex align-items-center side-user">
                                <div class="dropdown-list-image mr-3">
                                <img src="/image/place.png" alt=""  class="rounded-circle sides-img shadow-sm">
                                </div>
                                <div class="sideuser2 mr-2">
                                <div class="text-truncate truc pt-2">Tristhon Cole</div>
                                <div class="truc2">Lecturer
                                </div>
                                <div class="truc2">0814574999
                                </div>
                                </div>
                                <span class="ml-auto userbtns"><button type="button" class="btn btn-outline-secondary btn-sm userbtnsss"><i class="mdi mdi-check-bold"></i></button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center side-user pt-3">
                            <div class="dropdown-list-image mr-3">
                                <img src="/image/place.png" alt=""  class="rounded-circle sides-img shadow-sm">
                            </div>
                            <div class="sideuser2 mr-2">
                                <div class="text-truncate truc pt-2">Famil Tolz</div>
                                <div class="truc2">Nurse
                                </div>
                                <div class="truc2">0814574999
                                </div>
                            </div>
                                <span class="ml-auto userbtns"><button type="button" class="btn btn-outline-secondary btn-sm userbtnsss"><i class="mdi mdi-check-bold"></i></button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center side-user pt-3">
                            <div class="dropdown-list-image mr-3">
                                <img src="/image/place.png" alt=""  class="rounded-circle sides-img shadow-sm">
                            </div>
                            <div class="sideuser2 mr-2">
                                <div class="text-truncate truc pt-2">Netflix</div>
                                <div class="truc2">Entertainment
                                </div>
                                <div class="truc2">0814574999
                                </div>
                            </div>
                                <span class="ml-auto userbtns"><button type="button" class="btn btn-outline-secondary btn-sm userbtnsss"><i class="mdi mdi-check-bold"></i></button>
                            </span>
                        </div>
                    </div>
                    </div>
                    <div class="box rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3">
                        <h6 class="sides-h5-pro">Who viewed your profile</h6>
                    </div>
                    <div class="box-body p-3">
                        <div class="d-flex align-items-center side-user">
                            <div class="dropdown-list-image mr-3">
                                <img src="/image/place.png" alt=""  class="rounded-circle sides-img shadow-sm">
                            </div>
                            <div class="sideuser2 mr-2">
                                <div class="text-truncate trucc">Sophia Lee</div>
                                <div class="truc2">Harvard
                                </div>
                            </div>
                            <span class="ml-auto userbtns">
                                <button type="button" class="btn btn-outline-secondary btn-sm userbtnsss">Connect</button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center side-user pt-3">
                            <div class="dropdown-list-image mr-3">
                                <img src="/image/place.png" alt=""  class="rounded-circle sides-img shadow-sm">
                            </div>
                            <div class="sideuser2 mr-2">
                                <div class="text-truncate trucc">John Doe</div>
                                <div class="truc2">Traveler
                                </div>
                            </div>
                            <span class="ml-auto userbtns"><button type="button" class="btn btn-outline-secondary btn-sm userbtnsss">Connect</button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center side-user pt-3">
                            <div class="dropdown-list-image mr-3">
                                <img src="/image/place.png" alt=""  class="rounded-circle sides-img shadow-sm">
                            </div>
                            <div class="sideuser2 mr-2">
                                <div class="text-truncate trucc">Julia Cox</div>
                                <div class="truc2">Art Designer
                                </div>
                            </div>
                            <span class="ml-auto userbtns"><button type="button" class="btn btn-outline-secondary btn-sm userbtnsss">Connect</button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center side-user pt-3">
                            <div class="dropdown-list-image mr-3">
                                <img src="/image/place.png" alt=""  class="rounded-circle sides-img shadow-sm">
                            </div>
                            <div class="sideuser2 mr-2">
                                <div class="text-truncate trucc">Robert Cook</div>
                                <div class="truc2">@Photography
                                </div>
                            </div>
                            <span class="ml-auto userbtns"><button type="button" class="btn btn-outline-secondary btn-sm userbtnss">Connect</button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center side-user pt-3">
                            <div class="dropdown-list-image mr-3">
                                <img src="/image/place.png" alt=""  class="rounded-circle sides-img shadow-sm">
                            </div>
                            <div class="sideuser2 mr-2">
                                <div class="text-truncate trucc">Richard Bell</div>
                                <div class="truc2">@Envato
                                </div>
                            </div>
                            <span class="ml-auto userbtns"><button type="button" class="btn btn-outline-secondary btn-sm userbtnss">Connect</button>
                            </span>
                        </div>

                    </div>
                    <div class="box-title border-top p-3 text-center">
                        <h6 class=""><a class="truc" href="personal-viewers">View More</a></h6>
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
            $('#carouselExample').carousel({
                            interval: 8000
                    });
            </script>
            <script>
            function myFunction() {

            $(".message").text("link copied");
            }
            </script>
            <script>
            $(document).ready(function(){
            $('#collapse-1').on('shown.bs.collapse', function() {

            $(".servicedrop").addClass('fa-chevron-up').removeClass('fa-chevron-down');
            });

            $('#collapse-1').on('hidden.bs.collapse', function() {
            $(".servicedrop").addClass('fa-chevron-down').removeClass('fa-chevron-up');
            });

            });
            </script>
            <script>
            const $dropdown = $(".dropdown");
            const $dropdownToggle = $(".dropdown-toggle");
            const $dropdownMenu = $(".dropdown-menu");
            const showClass = "show";

            $(window).on("load resize", function() {
            if (this.matchMedia("(min-width: 768px)").matches) {
                $dropdown.hover(
                    function() {
                    const $this = $(this);
                    $this.addClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "true");
                    $this.find($dropdownMenu).addClass(showClass);
                    },
                    function() {
                    const $this = $(this);
                    $this.removeClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "false");
                    $this.find($dropdownMenu).removeClass(showClass);
                    }
                );
            } else {
                $dropdown.off("mouseenter mouseleave");
            }
            });
            </script>
            <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(n) {
            showSlides(slideIndex += n);
            }

            // Thumbnail image controls
            function currentSlide(n) {
            showSlides(slideIndex = n);
            }

            function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            captionText.innerHTML = dots[slideIndex-1].alt;
            }

        </script>
    </body>
    </html>
@else
    You are trying to access a restricted page, <a href="/login">login to get access</a>
@endauth
