{{-- Header Section for Welcome --}}
<nav>
    <div class="nav">
        <img class="logo" src="/images/logo.png" alt="logo of Website">
        <a class="heading" href="{{$home}}">J<span>Bloggs</span></a>
        
        <div class="navlinks">
            <a class="dim" href="{{$home}}">Home</a>
            <a class="dim" href="{{$read}}">Read</a>
            <a class="dim" href="{{$profile}}">Profile</a>
            <a class="dim" href="{{$logout}}">Logout</a>
            <a class="dim" href="">
                {{$userName}}
            </a>
            <a class="dim" id="reg" href="/post_blog">Publish</a>
        </div>
    </div>
    <hr>
</nav>