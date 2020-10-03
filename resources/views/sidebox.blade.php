@foreach ($users as $user)
    <div class="box mb-3 rounded profile-top1">
        <div class="py-4 px-3 border-bottom">
        <img src="{{ $user->dp }}" class="rounded-circle mt-2 sideprofileimg shadow" alt="Responsive image">
        <h6 class="sides-h5-pro mb-1 mt-4">{{ strtoupper($user->name) }}</h6>
            @auth
                @if ($user->username == Auth::user()->username)
                    <a href="edit-personal-profile" class="btn btn-outline-secondary btn-sm main-edit-btn"><i class="mdi mdi-pencil"></i> Edit Profile</a>
                @endif
            @endauth
        <div class="social-buttons mt-5 mb-1">
            <a href="{{ $user->facebook }}" class="neo-button"><i class="fa fa-facebook fa-1x"></i></a>
            <a href="{{ $user->linkedIn }}" class="neo-button"><i class="fa fa-linkedin fa-1x"></i></a>
            <a href="{{ $user->twitter }}" class="neo-button"><i class="fa fa-twitter fa-1x"></i> </a>
        </div>
        </div>

        <div class="p-3 text-left">
        <label class="copylink">Copy Link <span class="message"></span></label><br />
            <div class="row pl-2 pb-2">
                <input class="col-10 ur" type="url" value="https://laciudadonline.com/register/{{ $user->username }}" id="myInput" aria-describedby="inputGroup-sizing-default" readonly="" style="height: 40px;">
                <button class="cpy" onclick="myFunction()"><i class="fa mdi mdi-dock-window"></i></button> </div>

        <div class="d-flex align-items-top">

        </div>

        </div>
    </div>
@endforeach
