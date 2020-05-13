<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('fache/images/icons/favicon.png')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fache/vendor/bootstrap/css/bootstrap.min.css')}}" />
   <link rel="stylesheet" type="text/css" href="{{ asset('fache/css/main.css')}}" />
    <link href="{{url()->current()}}" rel="canonical">
    <style>
        .inviz{
            font-size: 0.01em; color: white;
        }
        .logo img{
            min-height: 55px;
        }

        /*//brdcrumbs*/
         #br_crumb_ul{
             list-style-type:none
         }
        .br_crumb_li{
            display:inline
        }
        /*parallax*/
        #part1, #part2 {
            background: url({{ asset('images/bgd/bgd_main2.jpg')}}) center 0 no-repeat fixed;
        }

        .inside {
            width: 200px;
            height: 120px;
        }
        .paginat_li{
            float: left;
        }
        .em15{
            font-size: 1.4em;
            margin-left: 3px;
        }
        @media only screen and (max-width: 1600px) {
            .call{
                display: block;
            }
        }
        @media only screen and (min-width: 1600px) {
            .call{
                display: none;
            }
        }

        .sticky-divi-button {
            color: #ffffff; /* You can change font color */
            font-family: "Raleway";
            font-size: 16px;  /* You can change font size */
            background-color: #2ea59c; /* You can change color button */
            border-radius: 20px;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            text-decoration: none;
            box-shadow: 0px 25px 28px -21px rgba(194,180,190,1);
            padding: 3px 4%;
            z-index: 2;
            position: fixed;
            bottom: 40px;
            right: 20px;
        }
        .sticky-divi-button:hover {
            background-color: #178dd0; /* You can change color button on hover */
            box-shadow: none;
        }
    </style>
    <!--===============================================================================================-->
</head>
