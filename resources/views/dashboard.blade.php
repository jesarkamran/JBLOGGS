<!DOCTYPE html>
<html lang="en">
<x-head title="Dashboard"/>
<body>
    <x-header-logged-in home="/dashboard" read="#read" profile=""  logout="/logout" userName="{{Auth::user()->name}}"/>
    <main class="center">
        <div class="container welcome">
            <pre>
            <h1 class="flex text-black" >Welcome To <a class="heading" href="/">J<span>Bloggs</span></a></h1>
            </pre>
        </div>

        <div id="read" >
            <h2>Read Bloggs</h2>
            @php
                $title = "Tharparkar: The Green Desert";
                $subtitle = 'The name Tharparkar originates from a portmanteau of the words Thar
                (referring to the Thar Desert), and parkar (meaning "to cross over") 
                The Thar reg';
            @endphp

            @foreach ($posts as $post)
                <x-blogg-list-item title="{{$post->title}}" subtitle="{{$post->sub_title}}"/>
            @endforeach

            {{-- <x-blogg-list-item title="{{$title}}" subtitle="{{$subtitle}}" />
            <x-blogg-list-item title="{{$title}}" subtitle="{{$subtitle}}" />
            <x-blogg-list-item title="{{$title}}" subtitle="{{$subtitle}}" /> --}}

            
        </div>
    </main>
    <x-footer/>    
</body>
</html>