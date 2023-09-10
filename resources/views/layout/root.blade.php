<!DOCTYPE html>
<html lang="en-US">
<body class="{{ $bodyClasses ?? '' }}">

@include('partials.header')

<div class="md:mx-auto max-w-5xl h-6 justify-center items-left"></div>
<div class="md:mx-auto max-w-5xl h-28 justify-center items-left">
    <img class="float-left" style="height:100px; width:100px" src="https://blog.codinghorror.com/assets/images/codinghorror-app-icon.png?v=d8ba6fbd34">
    <h1 class="relative left-10 top-6 text-2xl font-body text-[color:rgb(34,34,34)]">Coding Horror</h1>
    <h2 class="relative left-10 top-6 -my-1 font-body text-[color:rgb(34,34,34)]">programming and human factors</h2>
</div>

<div class="md:mx-auto max-w-5xl flex">
    <aside class="w-1/4">
        <span>Resources</span>
    </aside>

    <main class="w-3/4 space-y-60"> 
    @foreach($post_ids as $post_id)
        @foreach($cleaver as $post)
            @if($post->post_id != $post_id) @continue @endif

            {!! $post->body !!}
            <article>
                <header>
                    <span class="text-3xs font-body">
                        <time class="text-[color:rgb(158,171,179)]" datetime="{!! $post->date !!}">{!! date('j M Y', strtotime($post->date)) !!}</time>
                    </span>
                    <h2 class="text-2xl font-body text-[color:rgb(34,34,34)]">
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
                            <p class="my-6 text-[color:rgb(58,65,69)]">{!! $content->text !!}</p>
                        @endif
                        </section>
                    @endforeach
                @endforeach
            </article>
        @endforeach
    @endforeach
    </main>
</div>

@include('partials.footer')

</body>
</html>
