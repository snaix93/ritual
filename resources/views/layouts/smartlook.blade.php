@if(App::environment() !== 'local')
    <!-- Hotjar Tracking Code for https://www.buchetto.ro/all-products -->
    {{--<script>--}}
        {{--(function(h,o,t,j,a,r){--}}
            {{--h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};--}}
            {{--h._hjSettings={hjid:1697103,hjsv:6};--}}
            {{--a=o.getElementsByTagName('head')[0];--}}
            {{--r=o.createElement('script');r.async=1;--}}
            {{--r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;--}}
            {{--a.appendChild(r);--}}
        {{--})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');--}}
    {{--</script>--}}
    <script type='text/javascript'>
        window.smartlook||(function(d) {
            var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
            var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
            c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
        })(document);
        smartlook('init', 'd12a9a75f636ad205f2eff0c47a669e1bf5584fe');
    </script>
@endif
