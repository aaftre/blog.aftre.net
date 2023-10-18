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

        // document.querySelectorAll('code').forEach(el => {
        //     if (el.scrollWidth > el.clientWidth)
        //         el.style.width = '120%';
        // });

        // logos = [1, 2, 3, 4, 5, 6];

        // logo = logos[Math.floor(Math.random() * logos.length)];

        // document.querySelectorAll('img#logo').forEach(el => {
        //     el.src = "/assets/images/root/s" + logo + ".jpg";
        // });

        // document.querySelectorAll('img#logo').forEach(el => {
        //     el.style.display = 'block';
        //     el.style.visibility = 'visible';
        //     el.style.opacity = 1;
        // });
    });
</script>

@yield('bottom-scripts')