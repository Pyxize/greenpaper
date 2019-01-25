<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.css')}}"  media="screen,projection"/>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Icone onglet-->
    <link rel="icon" type="image/png" href="{{ asset('img/paper_logo.png') }}">
    <!--JQUERY-->
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>

    <script src="{{url('js/modal.js')}}"></script>
    <script src="{{url('js/js.js')}}"></script>
    <title>Green'Paper</title>
</head>
<body>
@yield('sidebar')
    <div class="relative">
        <nav class="h23vh">
            <div class="nav-wrapper w70 marg-a pad-20">
                <a href="/" class="left marg-r30">
                    <img class="logo" src="{{asset('img/paper_logo.png')}}" alt="papergreen">
                </a>
                <div class="pad-20">
                    <ul id="nav-mobile" class="left hide-on-med-and-down">
                        <li><a href="#apropos">A propos</a></li>
                        <li><a href="#chiffre">Chiffres clés</a></li>
                        <li><a href="#partenaire">Partenaires</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <a href="#modal1" class="btn-green right waves-effect waves-light btn modal-trigger flex flex-c-c flex-a-c">Télécharger</a>
                    <!-- Modal Structure -->
                    <div id="modal1" class="modal">
                        <div class="modal-content flex flex-c-c">
                            <h4>Sur quelles plateformes voulez-vous télécharger PaperGreen ?</h4>
                            <div class="flex flex-a-c flex-c-c marg-t30">
                                <a href="https://itunes.apple.com/fr/genre/ios-jeux/id6014?mt=8"><img src="{{asset('img/app-store.png')}}" alt="app-store">App store</a>
                                <a href="https://play.google.com/store/apps?hl=fr"><img src="{{asset('img/play-store.png')}}" alt="app-store">Play store</a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Retour</a>
                        </div>
                    </div>

                </div>
            </div>
            <ul class="sidenav" id="mobile-demo">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">Javascript</a></li>
                <li><a href="mobile.html">Mobile</a></li>
            </ul>
        </nav>
    </div>

<div>
    @yield('content')
</div>

@yield('footer')
<footer class="footer flex  flex-a-c flex-c-c">
    <div class="row marg-t40">
        <div class="flex flex-column flex-a-c flex-c-c col s6">
            <svg id="paper_logo_white" xmlns="http://www.w3.org/2000/svg" width="120.767" height="136.692" viewBox="0 0 120.767 136.692">
                <path id="Path_261" data-name="Path 261" d="M445.373,141.7,428,151.593v18.1l17.373-10.134Z" transform="translate(-324.727 -107.509)" fill="#fff"/>
                <path id="Path_262" data-name="Path 262" d="M60.2,20.269l43.071,23.816L119.56,34.5,60.2,0,0,35.084l.121,66.983,60.323,34.5,60.323-34.746V83L77.817,57.91,60.444,67.562V87.83L76.61,77.937,102.67,92.9,60.444,115.82,19.907,92.656V44.4Z" fill="#fff"/>
                <path id="Path_263" data-name="Path 263" d="M250,398.067V377.316L310.323,344.5v18.821Z" transform="translate(-189.677 -261.375)" fill="#fff"/>
                <path id="Path_264" data-name="Path 264" d="M500,344.5" transform="translate(-379.354 -261.375)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="1"/>
                <path id="Path_265" data-name="Path 265" d="M250,300.769V280.5l16.167,10.376Z" transform="translate(-189.677 -212.818)" fill="#fff"/>
                <path id="Path_266" data-name="Path 266" d="M0,35.084,60.2,0l60.444,34.191-17.373,9.893L60.444,20.51,19.907,44.4Z" fill="#fff"/>
            </svg>
            <div class="flex flex-a-c marg-t60">
                <a class="marg-r30" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16.24" height="35" viewBox="0 0 16.24 35">
                        <g id="Group_50" data-name="Group 50" transform="translate(-960.13 -345.407)">
                            <path id="Path_237" data-name="Path 237" d="M975.73,362.927h-4.88v17.48h-7.28v-17.48h-3.44v-6.16h3.44v-4a8.657,8.657,0,0,1,.56-3.16,6.14,6.14,0,0,1,2.2-2.92,7.68,7.68,0,0,1,4.56-1.28l5.4.04v6h-3.92a1.551,1.551,0,0,0-1,.32,1.684,1.684,0,0,0-.52,1.36v3.64h5.52Z" fill="#fff"/>
                        </g>
                    </svg></a>
                <a class="marg-r30" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="39.024" height="39.249" viewBox="0 0 39.024 39.249">
                        <g id="Group_48" data-name="Group 48" transform="translate(-807.349 -633.073)">
                            <path id="Path_259" data-name="Path 259" d="M843.458,633.073a2.85,2.85,0,0,1,2.063.829,2.691,2.691,0,0,1,.852,2V669.54a2.614,2.614,0,0,1-.852,1.974,2.839,2.839,0,0,1-2.018.809H810.22a2.83,2.83,0,0,1-2.018-.809,2.61,2.61,0,0,1-.852-1.974V635.9a2.687,2.687,0,0,1,.852-2,2.849,2.849,0,0,1,2.063-.829h33.193Zm-24.805,11.863a3.141,3.141,0,0,0,0-4.4,3.26,3.26,0,0,0-2.377-.874,3.341,3.341,0,0,0-2.4.874,2.908,2.908,0,0,0-.92,2.2,2.939,2.939,0,0,0,.9,2.2,3.2,3.2,0,0,0,2.333.875h.045A3.312,3.312,0,0,0,818.653,644.936Zm.538,3.3h-5.876v17.718h5.876Zm21.217,7.536a8.594,8.594,0,0,0-1.929-6.01,6.967,6.967,0,0,0-8.388-.943,6.947,6.947,0,0,0-1.749,1.93v-2.512h-5.876q.044,1.031,0,9.465v8.252h5.876v-9.913a4.405,4.405,0,0,1,.179-1.435,3.573,3.573,0,0,1,1.077-1.479,2.979,2.979,0,0,1,1.974-.674,2.585,2.585,0,0,1,2.288,1.121,5.23,5.23,0,0,1,.673,2.872v9.508h5.876Z" transform="translate(0 0)" fill="#fff"/>
                        </g>
                    </svg>
                </a>
                <a class="marg-r30" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="35.04" height="28.442" viewBox="0 0 35.04 28.442">
                        <path id="Path_260" data-name="Path 260" d="M982.67,1147.97v.92a20.791,20.791,0,0,1-1.32,7.2,21.463,21.463,0,0,1-3.92,6.56,19.448,19.448,0,0,1-6.4,4.8,20.878,20.878,0,0,1-8.76,1.84,20.483,20.483,0,0,1-5.84-.84,19.86,19.86,0,0,1-5.2-2.36q.84.081,1.72.08a14.28,14.28,0,0,0,4.76-.8,14.917,14.917,0,0,0,4.16-2.24,7.183,7.183,0,0,1-4.16-1.46,6.927,6.927,0,0,1-2.52-3.54,7.142,7.142,0,0,0,1.32.12,7.414,7.414,0,0,0,1.88-.24,6.943,6.943,0,0,1-2.92-1.34,7.13,7.13,0,0,1-2.06-2.521,7.488,7.488,0,0,1-.78-3.18v-.12a6.737,6.737,0,0,0,3.28.92,7.235,7.235,0,0,1-2.34-2.58,7.029,7.029,0,0,1-.86-3.42,7.144,7.144,0,0,1,.96-3.6,20.512,20.512,0,0,0,14.8,7.519,8.314,8.314,0,0,1-.16-1.64,7,7,0,0,1,.96-3.6,7.248,7.248,0,0,1,2.62-2.62,6.923,6.923,0,0,1,3.58-.98,7.12,7.12,0,0,1,5.24,2.281,13.968,13.968,0,0,0,4.56-1.76,6.952,6.952,0,0,1-1.22,2.3,7.386,7.386,0,0,1-1.94,1.7,14.6,14.6,0,0,0,4.16-1.16A15.04,15.04,0,0,1,982.67,1147.97Z" transform="translate(-951.23 -1140.849)" fill="#fff"/>
                    </svg>
                </a>
                <a class="marg-r30" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="34.88" height="35" viewBox="0 0 34.88 35">
                        <g id="Group_49" data-name="Group 49" transform="translate(-807.103 -562.572)">
                            <path id="Path_253" data-name="Path 253" d="M811.423,571.213v-7.561a1.066,1.066,0,0,1,.08-.54,1.574,1.574,0,0,1,.56-.26l.36-.08v8.44h1.44v-8.6h.92v8.6h1.44v-8.64h18.92a6.514,6.514,0,0,1,3.34.9,7.085,7.085,0,0,1,2.48,2.42,6.422,6.422,0,0,1,.98,3.28q.039,1,.04,2.4-.04,2.961-.04,2.439h-10.72a.688.688,0,0,1-.56-.24,9.214,9.214,0,0,0-3.96-2.16,8.634,8.634,0,0,0-4.4.021,9.373,9.373,0,0,0-3.96,2.18.575.575,0,0,1-.4.2h-10.6l-.2-.04v-1.52q-.04.478-.04-1.841a17.767,17.767,0,0,1,.08-1.84,6.479,6.479,0,0,1,2.68-4.84l.16-.04v7.32h1.4Zm20.4,3.879h10.12v15.719a6.574,6.574,0,0,1-.92,3.4,6.757,6.757,0,0,1-2.48,2.46,6.687,6.687,0,0,1-3.4.9h-21.2a6.313,6.313,0,0,1-3.4-.881,7.059,7.059,0,0,1-2.5-2.479,6.463,6.463,0,0,1-.94-3.4v-15.68h10.12a8.8,8.8,0,0,0-1.12,8.08,9.092,9.092,0,0,0,7.18,5.86,9.028,9.028,0,0,0,3.82-.3,8.741,8.741,0,0,0,3.36-1.88,8.494,8.494,0,0,0,2.24-3.2,9.013,9.013,0,0,0,.68-4.159A9.69,9.69,0,0,0,831.823,575.092Zm-7.28,12a6.975,6.975,0,0,1-3.48-.9,6.615,6.615,0,0,1-2.52-2.479,6.89,6.89,0,0,1,0-6.879,6.915,6.915,0,0,1,2.52-2.521,6.716,6.716,0,0,1,3.46-.939,6.614,6.614,0,0,1,3.44.939,6.976,6.976,0,0,1,2.5,2.521,6.818,6.818,0,0,1-5.92,10.258Zm5.04-6.839a5.116,5.116,0,0,0-2.52-4.4,5.084,5.084,0,0,0-5.08,0,5.08,5.08,0,0,0-1.84,1.84,5.084,5.084,0,0,0,0,5.08,5.2,5.2,0,0,0,1.84,1.86,4.821,4.821,0,0,0,2.54.7,4.928,4.928,0,0,0,2.54-.681,5.065,5.065,0,0,0,1.84-1.84A4.966,4.966,0,0,0,829.583,580.253Zm9.2-11.8v-1.841a1.106,1.106,0,0,0-.3-.819,1.055,1.055,0,0,0-.78-.3q-1.84-.039-3.72,0a1,1,0,0,0-.8.319,1.23,1.23,0,0,0-.28.84v3.681a1.1,1.1,0,0,0,.3.819,1.056,1.056,0,0,0,.78.3h3.68a1.038,1.038,0,0,0,1.12-1.12Z" fill="#fff"/>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="flex flex-j-sb w70">
        <div class="flex">
            <div class="marg-r60">
                <a href="{{url('/conditions-générales')}}"><p class="t-white">Conditions générales</p></a>
            </div>
            <div class="marg-r60">
                <a href="{{url('/politique-de-confidentialités')}}"><p class="t-white">Politique de confidentialités</p></a>
            </div>
            <div class="marg-r60">
                <a href="{{url('/mentions-légales')}}"><p class="t-white">Mentions Légales</p></a>
            </div>
        </div>
        <div class="flex">
            <p class="t-white">2019 Green’Paper. Tout droits réservés</p>
        </div>
    </div>
</footer>
<!--JavaScript -->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
