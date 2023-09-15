<!DOCTYPE html>
<html lang="en-US">
<body class="{{ $bodyClasses ?? '' }}">

@include('partials.head')
@include('partials.header')

<div class="md:mx-auto w-[1000px]">
    @include('partials.aside')

    <main class="float-right w-[700px]"> 
        <article>
            <header>
                <span class="text-sm font-body">
                    <time class="text-[color:rgb(158,171,179)]" datetime="{!! $date !!}">{!! date('j M Y', strtotime($date)) !!}</time>
                </span>
                <h1 class="title">
                    <a href="{!! $path !!}">{!! $title !!}</a>
                </h1>
            </header> 

            {!! $body !!}
        </article> 
        <hr class="my-16 text-[color:rgb(128,128,128)]">
    </main>
</div>

@include('partials.footer')

</body>
</html>
