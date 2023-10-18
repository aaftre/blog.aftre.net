<!DOCTYPE html>
<html lang="en-US">
<body class="{{ $bodyClasses ?? '' }}">

@include('partials.head')
@include('partials.header')

<div class="md:mx-auto w-[1000px]">
    @include('partials.aside')

    <main class="float-right w-[700px]"> 
    <h1 class="title">
        <a href="/all-posts">All Posts</a>
    </h1>
    @include('partials.posts-section')
    </main>

    <footer class="float-right w-[700px] h-[100px]"></footer>
</div>

@include('partials.footer')

</body>
</html>
