
<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
    <div class="flex-w p-b-90">
        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                Contactează-ne
            </h4>

            <div>
                <p class="s-text7 w-size27">
                    Te interesează ceva? Ne poți găsi la adresa Iani Buzoiani 17, Sector 1, Bucuresti sau la numărul de telefon 072 66 88 087
                </p>

                <div class="flex-m p-t-30">
                    <a href="https://www.facebook.com/buchetto.ro/" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                    <a href="https://www.google.com/search?q=buchetto.romania+instagram&rlz=1C1CHBF_enRO822RO822&oq=buchetto.romania+instagram&aqs=chrome..69i57j69i60l3.10499j0j7&sourceid=chrome&ie=UTF-8" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                    <a href="https://ro.pinterest.com/buchetto_ro/" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                    <a href="http://g.page/buchetto" class="fs-18 color1 p-r-20 fa fa-google"></a>
                    <a href="https://twitter.com/bouquetto1" class="fs-18 color1 p-r-20 fa fa-twitter"></a>

                </div>
            </div>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Categorii
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="/buchete-de-flori" class="s-text7">
                        Buchete de flori
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="/flori-in-cutie" class="s-text7">
                        Flori în cutie
                    </a>
                </li>
                <li class="p-b-9">
                    <a href="/flori/flori-si-dulciuri" class="s-text7">
                        Flori și dulciuri
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="/funerara" class="s-text7">
                        Coroane Funerare
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Linkuri
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="/all-products" class="s-text7">
                        Caută
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="/about" class="s-text7">
                        Despre noi
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="/contact" class="s-text7">
                        Contact
                    </a>
                </li>

            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Politici
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="/terms" class="s-text7">
                       Termeni si condiții
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="/cookies" class="s-text7">
                        Cookies Policy
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="/refund" class="s-text7">
                        Politica de returnare
                    </a>
                </li>

            </ul>
        </div>

        <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                Newsletter
            </h4>

            <form>
                <div class="effect1 w-size9">
                    <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
                    <span class="effect1-line"></span>
                </div>

                <div class="w-size2 p-t-20">
                    <!-- Button -->
                    <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                        Abonează-te
                    </button>
                </div>

            </form>
        </div>
    </div>

    {{--<div class="t-center p-l-15 p-r-15">--}}

            {{--<img class="h-size2" src="{{ asset('fache/images/icons/paypal.png')}}" alt="IMG-PAYPAL">--}}

            {{--<img class="h-size2" src="{{ asset('fache/images/icons/visa.png')}}" alt="IMG-VISA">--}}

            {{--<img class="h-size2" src="{{ asset('fache/images/icons/mastercard.png')}}" alt="IMG-MASTERCARD">--}}

            {{--<img class="h-size2" src="{{ asset('fache/images/icons/express.png')}}" alt="IMG-EXPRESS">--}}

            {{--<img class="h-size2" src="{{ asset('fache/images/icons/discover.png')}}" alt="IMG-DISCOVER">--}}


        {{--<div class="t-center s-text8 p-t-20">--}}
            {{--<p class="inviz"> Copyright © 2019 All rights reserved. <a href="https://colorlib.com" target="_blank" ><span class="inviz">Colorlib</span></a> </p>--}}
        {{--</div>--}}
    {{--</div>--}}
</footer>
<script>
    function convert(){
        call();
        tag();
    }

    function tag(){
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-819790434');
    }
</script>
<!-- @if(App::environment() !== 'local')
    <script type='text/javascript'>
        window.smartlook||(function(d) {
            var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
            var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
            c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
        })(document);
        smartlook('init', 'd12a9a75f636ad205f2eff0c47a669e1bf5584fe');
    </script>
@endif -->
<!-- WhatsHelp.io widget -->
{{--<a href="/whatsapp-message" class="float" target="_blank">--}}
    {{--<i class="fa fa-comment my-float"></i><p style="font-size: 0.5em"></p>--}}
{{--</a>--}}
<style>
    .float{
        position:fixed;
        width:52px;
        height:52px;
        bottom:40px;
        left:40px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size:30px;
        box-shadow: 2px 2px 3px #999;
        z-index:10;
        float: left;
    }

    .my-float{
        margin-top:12px;
    }
</style>
<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}

    /* The popup chat - hidden by default */
    .chat-popup {
        display: none;
        position: fixed;
        bottom: 0;
        left: 15px;
        border: 3px solid #f1f1f1;
        z-index: 1;
    }

    /* Add styles to the form container */
    .form-container {
        max-width: 300px;
        padding: 10px;
        background-color: white;
    }

    /* Full-width textarea */
    .form-container textarea {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
        resize: none;
        min-height: 200px;
    }

    /* When the textarea gets focus, do something */
    .form-container textarea:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Set a style for the submit/send button */
    .form-container .btn {
        background-color: #4CAF50;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom:10px;
        opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
        background-color: red;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover, .open-button:hover {
        opacity: 1;
    }
</style>

<div class="float" id="messanger" onclick="openForm()">
    <i class="fa fa-comment my-float"></i><p style="font-size: 0.5em"></p>
</div>

<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
        document.getElementById("messanger").style.display = "none";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
        document.getElementById("messanger").style.display = "block";
    }
</script>

<!-- /WhatsHelp.io widget -->