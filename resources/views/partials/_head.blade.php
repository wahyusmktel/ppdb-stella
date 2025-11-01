<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
<link href="{{ asset('vendors/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/glightbox/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<script>
    // Apply the theme as early as possible to avoid flicker
    (function() {
        const storedTheme = localStorage.getItem('theme') || 'light';
        document.documentElement.setAttribute('data-bs-theme', storedTheme);
    })();
</script>
