<section class="posts-section float-right w-[700px]"> 
    @foreach(json_decode("$posts_section") as $post_id)
        @foreach($cleaver as $post)
            @if($post->post_id != $post_id) @continue @endif

            <span class="text-sm font-body">
                <time datetime="{!! $post->date !!}">{!! date('j M Y', strtotime($post->date)) !!}</time>
            </span>
            <h2 class="post-title">
                <a href="{!! $post->path !!}">{!! $post->title !!}</a>
            </h2>
        @endforeach
    @endforeach
</section>