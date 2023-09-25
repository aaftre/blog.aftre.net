<!DOCTYPE html>
<html lang="en-US">
<body class="{{ $bodyClasses ?? '' }}">

@include('partials.head')
@include('partials.header')

<div class="md:mx-auto w-[1000px]">
    @include('partials.aside')

    <main class="float-right w-[700px]"> 
    @foreach($post_ids as $post_id)
        @foreach($cleaver as $post)
            @if($post->post_id != $post_id) @continue @endif

            <article>
                <header>
                    <span class="text-sm font-body">
                        <time class="text-[color:rgb(158,171,179)]" datetime="{!! $post->date !!}">{!! date('j M Y', strtotime($post->date)) !!}</time>
                    </span>
                    <h1 class="title">
                        <a href="{!! $post->path !!}">{!! $post->title !!}</a>
                    </h1>
                </header> 

                {!! $post->body !!}
            </article> 
            <hr class="my-16 text-[color:rgb(128,128,128)]">
        @endforeach
    @endforeach
    </main>
</div>

@include('partials.footer')

</body>
</html>
