@section('title', $title . ' - ' . $siteName)
@section('post')
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
@endsection