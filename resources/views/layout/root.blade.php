<!DOCTYPE html>
<html lang="en-US">
<body class="{{ $bodyClasses ?? '' }}">
<pre>

@foreach($cleaver as $post)
    {{!! 
    print("ADriaaan");
    print_r($post); 
    print("ADriaaan2");
    !!}}
@endforeach

</pre>

<div class="container mx-auto py-6 md:py-12 flex">
    <div style="flex: 4">
        <main class="px-6 md:px-0">
            <header class="width-100 border-b-2 mb-8 pb-4">
                <h1 class="text-3xl md:text-4xl font-thin text-gray-900 leading-snug">UnWelcome <span class="text-pink-600 text-sm font-semibold">V1.5.7</span></h1>
                <h3 class="text-base md:text-lg text-gray-700">A quick start guide for installing and using Cleaver.</h3>
            </header>
                <section class="text-gray-700 leading-relaxed mb-12" id="{{ $section->slug }}">
                    <h2 class="block text-2xl font-semibold mb-2 text-gray-900">{{ $title }}</h2>
                            <p class="my-6">{!! $body !!}</p>
                </section>
        </main>
    </div>
</div>
@include('partials.footer')
</body>
</html>
