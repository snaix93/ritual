<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WK5ZPJ3');</script>
<!-- End Google Tag Manager -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WK5ZPJ3"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('fache/vendor/jquery/jquery-3.2.1.min.js')}}" ></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('fache/vendor/animsition/js/animsition.min.js')}}" ></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('fache/vendor/bootstrap/js/popper.js')}}" ></script>
<script type="text/javascript" src="{{ asset('fache/vendor/bootstrap/js/bootstrap.min.js')}}" ></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('fache/vendor/select2/select2.min.js')}}" ></script>
{{--<script type="text/javascript">--}}
    {{--$(".selection-1").select2({--}}
        {{--minimumResultsForSearch: 20,--}}
        {{--dropdownParent: $('#dropDownSelect1')--}}
    {{--});--}}
    {{--$(".selection-2").select2({--}}
        {{--minimumResultsForSearch: 20,--}}
        {{--dropdownParent: $('#dropDownSelect2')--}}
    {{--});--}}
{{--</script>--}}

{{--<script type="text/javascript" src="{{ asset('fache/vendor/daterangepicker/moment.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('fache/vendor/daterangepicker/daterangepicker.js')}}"></script>--}}
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('fache/vendor/slick/slick.min.js')}}" ></script>
<script type="text/javascript" src="{{ asset('fache/js/slick-custom.js')}}" ></script>
<!--===============================================================================================-->
{{--<script type="text/javascript" src="{{ asset('fache/vendor/countdowntime/countdowntime.js')}}" ></script>--}}
<script type="text/javascript" src="{{ asset('fache/vendor/sweetalert/sweetalert.min.js')}}" ></script>
<!--===============================================================================================-->
{{--<script type="text/javascript" src="{{ asset('fache/vendor/lightbox2/js/lightbox.min.js')}}" ></script>--}}
<!--===============================================================================================-->

<script type="text/javascript">
    $('.block2-btn-addcart').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to cart !", "success");
        });
    });

    $('.block2-btn-addwishlist').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");
        });
    });
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135381263-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-135381263-1');
</script>
<script>
    function call(){
        $.ajax({
            url: '/phone-call',
            type: "get",
            success: function(result){
            },
            error: function(result){

            }
        })
    }
</script>

<script type="text/javascript" src="{{ asset('fache/vendor/noui/nouislider.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ asset('fache/js/main.js')}}" ></script>

@include('layouts.smartlook')
