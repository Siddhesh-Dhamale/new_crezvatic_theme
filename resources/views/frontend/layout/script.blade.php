<!-- resources/views/layout/script.blade.php -->

<script>
    const siteLogo = "{{ asset('assets/image/marko-logo.png') }}";
    const siteLogoDark = "{{ asset('assets/image/marko-logo-dark.png') }}";
</script>

<!-- jQuery (optional) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>

<!-- Vendor JS -->
<script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/isotope.pkgd.min.js') }}"></script>

<!-- Custom Scripts -->
<!-- <script src="{{ asset('assets/js/main.js') }}"></script> -->
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/js/swiper-script.js') }}"></script>
<script src="{{ asset('assets/js/submit-form.js') }}"></script>
<script src="{{ asset('assets/js/video_embedded.js') }}"></script>

@stack('scripts') <!-- For pushing page-specific scripts from child views -->