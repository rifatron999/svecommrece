<!DOCTYPE html>
<html lang="en">
@include('website.includes.header_link')
<body>
@include('website.includes.navbar')
<section class="content">
    @yield('content')
</section>
@include('includes.footer')



<script>

    $(document).ready(function(){
        $(window).bind('scroll', function() {
            var navHeight = $('.top_bar').height();
            if ($(window).scrollTop() > navHeight) {
                $('.nav-bar').addClass('fixed');
                $('.nav-space').addClass('mar-top-fixed-nav').removeClass('');
            }
            else {
                $('.nav-bar').removeClass('fixed');
                $('.nav-space').removeClass('mar-top-fixed-nav').addClass('');
            }
        });
    });

</script>

</body>
</html>
