<?php
    require('dbh.php');
    if(isset($_GET['userOnline'])){
        $online = $_GET['userOnline'];
    }
    $online = "";

    $checkPost = mysqli_query($conn, "SELECT * FROM posts");
    if(mysqli_num_rows($checkPost) == 0){
        ?>

        <?php
        echo rand();
    } else {
        ?>
            <div class="card-body cbody">
                    <ul class="list-unstyled">
                            <li class="dropdown pull-right dpp">
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
                        <div class="media">
                            <img class="mr-3 medimag rounded-circle shadow-sm" src="image/place.png" alt="image">
                            <div class="media-body mediabody1">
                            <a href='profile'>Edwin Kenneth</a>
                            <div class="truc2 pb-3">Fashion Designer
                                <span class="ml-2 text-muted bus-span-globe-time">. 18 hrs <i class='mdi mdi-earth'> </i></span>
                            </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="tag">
                            <img src="image/burger.jpg" class="img-responsive" style="width: 100%;">
                            <span class="product-discount-label3">$3.00</span>
                            </div>


                            <div class="container iconcont">
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
                                    <span class='mainp shadow-sm'>
                                        <a href="" title="like" class="mainpp"><i class='mdi mdi-thumb-up'></i></a>
                                        <a href="" title="cart" class="cart-likes"><i class='fa fa-cart-plus'></i></a>
                                    </span>

                                    <li class="cardbox-li"><a href="#"><img src="image/user.jpg" class="img-fluid rounded-circle shadow-sm" alt="User"></a></li>
                                    <li class="cardbox-li"><a href="#"><img src="image/user2.jpg" class="img-fluid rounded-circle shadow-sm" alt="User"></a></li>
                                    <li class="cardbox-li"><a href="#"><img src="image/lablady.jpg" class="img-fluid rounded-circle shadow-sm" alt="User"></a></li>
                                    <li class="cardbox-li"><a href="#"><img src="image/user.jpg" class="img-fluid rounded-circle shadow-sm" alt="User"></a></li>
                                    <li class="cardbox-li"><a><span class="" data-toggle="modal" data-target="#exampleModalCenter">2k likes</span></a></li>
                                    <!-- Modal-->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
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
                                                    <img class="mr-3 medimag rounded-circle shadow-sm" src="image/place.png" alt="image">
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
                                                    <img class="mr-3 medimag rounded-circle shadow-sm" src="image/place.png" alt="image">
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
                                                    <img class="mr-3 medimag rounded-circle shadow-sm" src="image/place.png" alt="image">
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
                                                    <img class="mr-3 medimag rounded-circle shadow-sm" src="image/place.png" alt="image">
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
                                                    <img class="mr-3 medimag rounded-circle shadow-sm" src="image/place.png" alt="image">
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
                                                    <img class="mr-3 medimag rounded-circle shadow-sm" src="image/place.png" alt="image">
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
                                                    <img class="mr-3 medimag rounded-circle shadow-sm" src="image/place.png" alt="image">
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
                                                    <img class="mr-3 medimag rounded-circle shadow-sm" src="image/place.png" alt="image">
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
                                                    <img class="mr-3 medimag rounded-circle shadow-sm" src="image/place.png" alt="image">
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
                                                    <img class="mr-3 medimag rounded-circle shadow-sm" src="image/place.png" alt="image">
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
                                </span><!--/ cardbox-base-->
                                </div>
                            </div>
                        </div><!--end row-->

                        <!-- actions-->
                        <div class='post-actions post-actions1'>
                            <div class="row">
                            <div class='col-md-3' >
                                <a href='#'><i class='fa fa-comments'></i> Comment
                                </a>
                            </div>
                            <div class='col-md-3'>
                                <a href='#'><i class='mdi mdi-thumb-up'></i> Like
                                </a>
                            </div>
                            <div class='col-md-3'>
                                <a href='#' style='font-size: 15px;'><i class='mdi mdi-cart-plus'></i> Cart
                                </a>
                            </div>
                            <div class='col-md-3'>
                                <a href='#'><i class='mdi mdi-share'></i> Share
                                </a>
                            </div>
                            </div>

                        </div><!--end action-->

                        <div class="media">
                            <img class="mr-3 commentimag rounded-circle shadow-sm" src="image/place.png" alt="image">
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
                                    <img class="mr-3 commentimag rounded-circle shadow-sm" src="image/place.png" alt="image">
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
                                        <img class="mr-3 commentimag rounded-circle shadow-sm" src="image/place.png" alt="image">
                                        <div class="media-body mdd">
                                            <a href="" class="commenter">Alexandra Gills</a>
                                            <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                            <span class='mdaction'>
                                                <a class="likeaction" href=''>Like</a>
                                                <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                            </span>
                                            <div class="media medianested">
                                                <img class="mr-3 commentimag rounded-circle shadow-sm" src="image/place.png" alt="image">
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
                        <div class="cardbox-comments">
                            <span class="comment-avatar float-left">
                            <a href=""><img src="image/place.png" alt="..." class="shadow-sm"></a>
                            </span>
                            <div class="search">
                            <input placeholder="Write a comment" type="text" style="outline: none;">
                            <button><i class="fa fa-camera"></i></button>
                            </div><!--/. Search-->
                        </div><!--/ cardbox-like-->


                        <div class="container">
                            <div class="d-flex justify-content-center row">
                            <div class="d-flex flex-column col-md-12">
                                <div class="collapsable-comment">
                                <div class="d-flex flex-row justify-content-between align-items-center action-collapse p-2" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" href="#collapse-2">
                                    <span  class="maincomment">More comments <i class="fa fa-angle-down"></i></span><i class="fa fa-chevron-down servicedrop"></i>
                                </div>
                                <div id="collapse-2" class="collapse " style=" overflow-y: scroll !important;max-height: 400px !important;">
                                    <div class="commented-section mt-2"><hr>
                                    <div class="media maincomment">
                                        <img class="mr-3 commentimag rounded-circle shadow-sm" src="image/place.png" alt="image">
                                        <div class="media-body mdd">
                                            <a href="" class="commenter">Alexandra Gills</a>
                                            <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                            <span class='mdaction'>
                                            <a class="likeaction" href=''>Like</a>
                                            <!--collapse reply<a href="" data-toggle="collapse" data-target="#collapseTwo">-->
                                            Reply<span class="badge badge-notify">5</span></a>
                                            <div id="collapseTwo" class="collapse">
                                                <div class="media maincomment">
                                                <img class="mr-3 commentimag rounded-circle shadow-sm" src="image/place.png" alt="image">
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
                                                <img class="mr-3 commentimag rounded-circle shadow-sm" src="image/place.png" alt="image">
                                                    <div class="media-body mdd">
                                                    <a href="" class="commenter">Alexandra Gills</a>
                                                    <p class="paction">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                    <span class='mdaction'>
                                                        <a class="likeaction" href=''>Like</a>
                                                        <a href=''>Reply <span class="badge badge-notify">5</span></a>
                                                    </span>
                                                    <div class="media medianested">
                                                        <img class="mr-3 commentimag rounded-circle shadow-sm" src="image/place.png" alt="image">
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
                                        <img class="mr-3 commentimag rounded-circle shadow-sm" src="image/place.png" alt="image">
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
                                        <img class="mr-3 commentimag rounded-circle shadow-sm" src="image/place.png" alt="image">
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
                        </div>

                    </div>
        <?php
    }

?>


