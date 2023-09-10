<!DOCTYPE html>
<html lang="en-US">
<body class="{{ $bodyClasses ?? '' }}">

@include('partials.header')

<div class="md:flex-row md:flex-wrap md:flex-border-2 border-green-500 md:mx-auto max-w-5xl object-top flex">
    <div class="border-2 border-yellow-500 w-full h-28">
    </div>
</div>

<div class="md:flex-row md:flex-wrap md:flex-border-2 border-green-500 md:mx-auto max-w-5xl object-top flex">

    <div class="flex-initial border-2 border-violet-500 w-1/4">
        <span>Resources</span>
    </div>

    <div class="border-2 border-pink-500 w-3/4"> 
    @foreach($cleaver as $post)
        @if($post->path == '/') @continue @endif

        <header>
            <span class="text-3xs font-body">
                <time datetime="{!! $post->date !!}">{!! date('j M Y', strtotime($post->date)) !!}</time>
            </span>
            <h2 class="text-2xl font-body">
                <a href="{!! $post->path !!}">{!! $post->title !!}</a>
            </h2>
        </header>

        @foreach($post->sections as $section)
            @foreach($section->contents as $content)
                <section>
                @if($content->type === 'code')
                    <div class="container bg-gray-800 rounded-none md:rounded-lg mx-auto my-6 py-6 px-6 md:px-12 shadow-xl">
                        <pre class="text-white whitespace-pre-wrap">{!! $content->text !!}</pre>
                    </div>
                @else
                    <p class="my-6">{!! $content->text !!}</p>
                @endif
                </section>
            @endforeach
        @endforeach
    @endforeach
    </div>
</div>

@include('partials.footer')

</body>
</html>
