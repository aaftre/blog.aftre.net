<!DOCTYPE html>
<html lang="en-US">
<body class="{{ $bodyClasses ?? '' }}">

@include('partials.head')
@include('partials.header')

<div class="md:mx-auto w-[1000px]">
    @include('partials.aside')

    <main class="float-right w-[700px]"> 
        @foreach(json_decode("$post_ids") as $post_id)
            @foreach($cleaver as $post)
                @if($post->post_id != $post_id) @continue @endif

                <article>
                    <header>
                        <span class="text-sm font-body">
                            <time datetime="{!! $post->date !!}">{!! date('j M Y', strtotime($post->date)) !!}</time>
                        </span>
                        <h1 class="title">
                            <a href="{!! $post->path !!}">{!! $post->title !!}</a>
                        </h1>
                    </header> 

                    {!! $post->body !!}
                </article> 
                <hr class="my-16">
            @endforeach
        @endforeach

        <h2 class='title'>More Posts</h2>
        @include('partials.posts-section')
    </main>

    <footer class="float-right w-[700px] h-[100px]"></footer>
</div>

@include('partials.footer')

</body>
</html>
