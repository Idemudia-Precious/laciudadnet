@foreach ($users as $user)
    @auth
        <div class="row">
            <div class="col-8 column-8-postmobile">
            <a href="/edit-personal-profile"><img src="{{ $user->dp }}" class="rounded-circle mobileuser-side-img shadow"></a>
            <span class="ml-2"><a href="#" class="mobile-create-startpost">Create a post</a></span>
            </div>
            <div class="col-4 bus-post-column">
            <div class="row pl-3" style="margin-left: 0px!important;" >
                <a href="/gallery" class="post-photo-span float-left mr-3 post-photo-span1">
                    <span> <img src="{{ URL::asset('image/post-gallery.png') }}" class="ml-1 shadow-sm" style="width: 18px;">
                    <p class="post-photo-p">Gallery</p></span>
                </a>
                <a href="/sm-awards" class="post-photo-span  post-photo-span2">
                <span><img src="{{ URL::asset('image/post-awards.png') }}" class="ml-1" style="width: 18px;">
                <p class="post-photo-p">Awards</p></span>
            </a>

            </div>
            </div>
        </div>
        <div class="referral-mobile-link">
            <p class="">https://laciudad.com/vee</p>
        </div>
    @endauth
@endforeach

