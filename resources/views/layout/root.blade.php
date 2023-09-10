<!DOCTYPE html>
<html lang="en-US">
<body class="{{ $bodyClasses ?? '' }}">

@include('partials.header')

<div class="md:flex-row md:flex-wrap md:flex-border-2 border-green-500 md:mx-auto max-w-3xl object-top flex">
    <div class="border-2 border-yellow-500 w-full h-28">
        asdas
    </div>
</div>

<div class="md:flex-row md:flex-wrap md:flex-border-2 border-green-500 md:mx-auto max-w-3xl object-top flex">

    <div class="flex-initial border-2 border-violet-500 w-1/4">
        <span>Resources</span>
    </div>

    <div class="border-2 border-pink-500 bg-lime-500 w-3/4"> 
    @foreach($cleaver as $post)
        @if($post->path == '/') @continue @endif

        <p class="text-3xs md:text-base">{!! $post->date !!}</p> 
        <a class="text-xl" href="{!! $post->path !!}">{!! $post->title !!}</a>
        <div>
        {!! $post->description !!}
        </div>
    @endforeach
    </div>
</div>

@include('partials.footer')

</body>
</html>
