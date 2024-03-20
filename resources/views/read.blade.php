<!DOCTYPE html>
<html lang="en">
<x-head title="Dashboard"/>
<body>
    <x-header-logged-in home="/dashboard" read="#read" profile=""  logout="/logout" userName="{{Auth::user()->name}}"/>
    <main class="center">
        <div id="top" >
            <h2 class="blogg-title">{{$post->title}}</h2>
            <div>
                <img id="read-blogg-img" src="/images/thar.jpg" alt="">
            </div>
        <pre>
            <p class="blogg-content">
                {{$post->content}}
            </p>
        </pre>
        </div>
    </main>
    <x-footer/>    
</body>
</html>