<script type="text/javascript" src="{{ $mix['/assets/js/app.js'] }}"></script>

<script>
    $(document).ready(function () {
        document.querySelectorAll('code').forEach(el => {
            hljs.highlightElement(el);
        });

        hljs.highlightAll();

        document.querySelectorAll('img[alt="xlvideo"]').forEach(el => {
            var video = document.createElement('video');
            video.setAttribute('controls', '');
            video.setAttribute('width', '100%');
            video.setAttribute('height', 'auto');
            video.setAttribute('src', el.src);
            el.parentNode.replaceChild(video, el);
        });
    });
</script>

@yield('bottom-scripts')