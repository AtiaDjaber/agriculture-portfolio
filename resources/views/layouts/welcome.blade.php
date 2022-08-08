<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('head')

<body dir="rtl">
    @yield('content')

    @include('footer')

    <script type="text/javascript">
        function isCounterElementVisible($element) {
            var topView = $(window).scrollTop();
            var botView = topView + $(window).height();
            var topElement = $element.offset().top;
            var botElement = topElement + $element.height();
            return ((botElement <= botView) && (topElement >= topView));
        }
        var visibled = false;
        $(window).scroll(function() {
            $(".counter").each(function() {
                isOnView = isCounterElementVisible($(this));
                if (isOnView && !$(this).hasClass('visibled') && !visibled) {
                    $(this).addClass('visibled');

                    visibled = true;
                    $('.counter').each(function() {
                        $(this).prop('Counter', 0).animate({
                            Counter: $(this).text()
                        }, {
                            duration: 4000,
                            easing: 'swing',
                            step: function(now) {
                                $(this).text(Math.ceil(now));
                            }
                        });
                    });
                }
            });
        });
    </script>
</body>

</html>
