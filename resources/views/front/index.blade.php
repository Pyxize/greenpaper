@extends('layout.app')
<div class="relative">
@section('sidebar')
@endsection
@section('content')
    <!-- HEADER -->
    @include('flashy::message')
    <div class="row absolute">
        <div class="col l12">
            <div class="col s6">
                <div class="col s7">
                    <h1>A vos marques, <span class="span-vert">jouez</span>, recyclez !</h1>
                    <p class="line-description marg-t30 marg-b40">Découvrez notre application en la téléchargeant,
                        et recevez des nouvelles en vous inscrivant.</p>
                </div>
                <form action="{{route('index.store')}}" method="post" enctype="multipart/form-data">
                <div class="input-field col l6">
                        {!! csrf_field() !!}
                    <input placeholder="E-mail" id="first_name" type="text" class="validate" name="email">
                    <label for="first_name">Enregistre votre e-mail</label>
                </div>
                <div class="input-field col l6 flex">
                    <button role="button" class="btn-green right waves-effect waves-light btn flex flex-c-c flex-a-c">M'enregistrer</button>
                </div>
                </form>
            </div>
            <div class="col s6 responsive-none">
                <svg id="Right-top-header" xmlns="http://www.w3.org/2000/svg" width="688.793" height="833.567"
                     viewBox="0 0 688.793 833.567">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #656464;
                            }

                            .cls-2 {
                                fill: #363535;
                            }

                            .cls-3 {
                                fill: #bfae93;
                            }

                            .cls-4 {
                                fill: #e1c9a9;
                            }

                            .cls-5 {
                                fill: #2f2925;
                            }

                            .cls-6 {
                                fill: none;
                            }

                            .cls-7 {
                                fill: #2e855e;
                            }

                            .cls-8 {
                                fill: #41b883;
                            }

                            .cls-9 {
                                fill: #cde1e9;
                            }

                            .cls-10 {
                                fill: #202020;
                            }

                            .cls-11 {
                                fill: #e1c99d;
                            }

                            .cls-12 {
                                fill: #465c82;
                            }

                            .cls-13 {
                                fill: #6e6360;
                            }
                        </style>
                    </defs>
                    <g id="Group_16" data-name="Group 16">
                        <g id="Group_12" data-name="Group 12" transform="translate(72.841 281.789)">
                            <g id="Group_3" data-name="Group 3" transform="translate(78.721 344.964)">
                                <g id="Group_1" data-name="Group 1" transform="translate(0)">
                                    <path id="Path_8" data-name="Path 8" class="cls-1"
                                          d="M537.332,637.585V803.667h-25.1L496.6,703.414l-14.126-76.8Z"
                                          transform="translate(-482.474 -626.613)"/>
                                </g>
                                <g id="Group_2" data-name="Group 2" transform="translate(34.423 177.054)">
                                    <path id="Path_9" data-name="Path 9" class="cls-2"
                                          d="M488.92,803.667l13.989,14.126-6.172,9.326-28.252-9.326V803.667Z"
                                          transform="translate(-468.486 -803.667)"/>
                                </g>
                            </g>
                            <g id="Group_6" data-name="Group 6" transform="translate(19.2 338.792)">
                                <g id="Group_4" data-name="Group 4" transform="translate(15.909 185.008)">
                                    <path id="Path_10" data-name="Path 10" class="cls-2"
                                          d="M548.99,806.41l5.211,20.709,17.28,6.309,9.463-4.8L566.27,805.45Z"
                                          transform="translate(-548.99 -805.45)"/>
                                </g>
                                <g id="Group_5" data-name="Group 5">
                                    <path id="Path_11" data-name="Path 11" class="cls-1"
                                          d="M596.853,620.442l-9.463,72L574.91,808.33l-25.1-1.509V717.54l-12.48-90.927Z"
                                          transform="translate(-537.332 -620.442)"/>
                                </g>
                            </g>
                            <g id="Group_7" data-name="Group 7" transform="translate(0 110.681)">
                                <path id="Path_12" data-name="Path 12" class="cls-3"
                                      d="M536.509,394.016c25.509,5.9,42.652,26.606,47.315,54.583,5.211,31.406,13.029,62.675,18.652,94.218,6.446,35.383,10.286,71.041,13.577,106.836q-47.726,4.32-95.59,4.937c-24.686.274-49.783-.137-73.51-7.543,4.8-20.435,3.017-41.281,3.292-61.989.274-18.652,1.1-37.3,2.88-55.955,2.469-25.783,4.663-51.7,10.012-77.075,2.606-12.206,5.486-25.372,11.109-36.618,4.251-8.777,17.006-14.537,25.509-19.337,6.72-3.84,14.949-3.84,22.766-3.7A73.8,73.8,0,0,1,536.509,394.016Z"
                                      transform="translate(-446.954 -392.33)"/>
                            </g>
                            <g id="Group_11" data-name="Group 11" transform="translate(30.72)">
                                <g id="Group_9" data-name="Group 9" transform="translate(14.118 24.38)">
                                    <g id="Group_8" data-name="Group 8">
                                        <path id="Path_13" data-name="Path 13" class="cls-4"
                                              d="M570.523,332.575c-4.114-35.932-48.686-33.052-63.5-5.349a53.137,53.137,0,0,0-4.389,35.246c1.234,5.623,3.7,11.109,7.954,15.086,1.92,1.646,5.76,2.606,7.269,4.251,2.469,2.88,1.371,8.64.96,12.206,4.526,3.154,10.423,2.743,15.909,2.194a3.7,3.7,0,0,0,2.057-.686,3.27,3.27,0,0,0,.823-1.509c1.371-4.251.96-5.349,4.8-6.994,3.7-1.509,7.406-1.783,10.972-3.977a37,37,0,0,0,14.4-18.24C571.62,354.519,571.757,343.273,570.523,332.575Z"
                                              transform="translate(-501.394 -306.029)"/>
                                    </g>
                                </g>
                                <g id="Group_10" data-name="Group 10">
                                    <path id="Path_14" data-name="Path 14" class="cls-5"
                                          d="M541.035,315.3s-29.075-4.663-33.738,6.309c-6.994,16.457-12.754,27.017-15.909,37.3l-13.852-18.926,2.057-35.246s12.892-24.275,27.84-23.04,44.161,8.5,44.161,8.5l17.966,15.36,15.772,5.486L560.51,354.793C560.647,354.656,567.916,318.861,541.035,315.3Z"
                                          transform="translate(-477.537 -281.649)"/>
                                </g>
                            </g>
                        </g>
                        <g id="Group_13" data-name="Group 13">
                            <path id="Path_15" data-name="Path 15" class="cls-6"
                                  d="M619.619,204.208a10.85,10.85,0,0,1,1.1-3.154c.549-1.1,2.331-4.251,4.526-8.366Z"
                                  transform="translate(-555.967 0.14)"/>
                            <path id="Path_16" data-name="Path 16" class="cls-7"
                                  d="M618.063,92.573l-21.395,6.309c-7.543,2.194-20.023,5.9-27.566,8.229l-21.395,6.309A13.473,13.473,0,0,1,530.7,103.133l-4.937-22.217c-1.783-7.817-4.526-20.709-6.309-28.663l-4.937-22.217c-1.783-7.817,3.154-10.423,10.972-5.76l13.44,8.092c4.937-8.5,9.874-17.006,11.657-20.16C554.84,5.074,563.206-.274,579.526-.137c12.069,0,44.161.274,64.458.411L617.1,48.686a7.029,7.029,0,0,0-1.646,2.469c-1.234,2.606-6.172,11.794-10.972,20.846l13.166,7.954C625.469,84.618,625.606,90.378,618.063,92.573Z"
                                  transform="translate(-469.244 0.14)"/>
                            <path id="Path_17" data-name="Path 17" class="cls-8"
                                  d="M514.731,16.457c6.857,10.7,24.412,39.36,24.412,39.36a13.444,13.444,0,0,1-4.526,18.652l-43.063,25.783a13.642,13.642,0,0,1-18.652-4.8s-24.275-40.732-26.469-44.572c-2.331-3.977-5.074-4.526-7.406-2.194L466.182.411c6.994,0,12.617.137,15.5.137C492.925.549,505.817,2.469,514.731,16.457Z"
                                  transform="translate(-291.305 0.14)"/>
                            <path id="Path_18" data-name="Path 18" class="cls-7"
                                  d="M481.126,197.351c-4.8,9.6-18.24,34.423-28.115,52.526L422.565,198.86c-3.566-6.309-10.286-17.966-15.772-27.566l-15.634,8.914c-7.954,4.526-12.754,1.783-10.834-6.034l5.486-22.08c1.92-7.817,5.074-20.709,6.994-28.526l5.486-22.08a13.3,13.3,0,0,1,17.143-9.737l21.12,6.857c7.543,2.469,19.886,6.446,27.429,8.914l21.12,6.857c7.543,2.469,7.269,8.092-.686,12.617l-11.52,6.583c5.9,11.657,12.754,25.372,14.537,29.349C490.589,170.059,488.669,182.265,481.126,197.351Z"
                                  transform="translate(-181.585 0.14)"/>
                            <path id="Path_19" data-name="Path 19" class="cls-8"
                                  d="M490.431,198.86l30.446,51.018c-5.486,10.149-9.874,18.1-10.972,20.435-3.154,6.309-7.817,18.514-36.892,18.377s-42.241-.274-42.241-.274a13.527,13.527,0,0,1-13.3-13.852l.274-51.018a13.727,13.727,0,0,1,13.577-13.714s49.509.274,57.738.274c5.211,0,5.9-3.566,3.977-6.72C492.625,202.837,491.8,201.191,490.431,198.86Z"
                                  transform="translate(-249.451 0.14)"/>
                            <path id="Path_20" data-name="Path 20" class="cls-7"
                                  d="M661.266,204.208l-25.235,51.429c-8.777-16.594-23.726-45.532-29.9-58.012-8.229-16.732-10.56-31.132-6.72-38.812s22.492-44.572,22.492-44.572a12.27,12.27,0,0,1,17.692-5.074l42.652,26.88a14.743,14.743,0,0,1,4.937,19.2s-13.029,23.863-20.16,37.3c-2.194,4.114-3.977,7.269-4.526,8.366A11.059,11.059,0,0,0,661.266,204.208Z"
                                  transform="translate(-597.614 0.14)"/>
                            <path id="Path_21" data-name="Path 21" class="cls-8"
                                  d="M533.08,267.295c-.96-1.783-3.292-5.9-6.172-11.52l25.235-51.429c-.549,3.017.96,5.074,4.526,5.074,2.469,0,14.812.137,26.057.137l.137-15.909c.137-9.326,4.8-12.343,10.56-6.72L609.47,202.7c5.76,5.623,15.086,14.674,20.709,20.3l15.909,15.634a13.92,13.92,0,0,1-.137,20.16l-16.32,15.5c-5.76,5.486-15.223,14.4-21.12,19.886l-16.32,15.5c-5.76,5.486-10.423,2.331-10.423-6.857l.137-15.223c-6.446,0-13.44-.137-19.886-.137C543.915,287.318,537.057,274.152,533.08,267.295Z"
                                  transform="translate(-488.354 0.14)"/>
                        </g>
                        <g id="Group_14" data-name="Group 14" transform="translate(156.138 284.239)">
                            <path id="Path_22" data-name="Path 22" class="cls-4"
                                  d="M449.259,312.278l-3.7-11.657-5.76-4.251c-.96-3.017-5.211-10.7-.549-12.069,3.566-1.1,4.114,2.606,7.132,3.291,3.154.686,8.229-1.646,11.246-2.469a5.449,5.449,0,0,1,3.291-.274c3.017,1.1.549,7.406.274,9.463-.137,1.234-.823,3.154-.549,4.389l1.646,12.343Z"
                                  transform="translate(-366.748 -284.099)"/>
                            <path id="Path_23" data-name="Path 23" class="cls-3"
                                  d="M497.64,362.473c7.954-14.4-1.234-42.926-2.469-56.641a38.542,38.542,0,0,1,15.223-3.977c6.72-.274,6.994.274,9.189,6.172,3.566,10.012,5.623,20.846,7.543,31.269,4.8,26.195,12.206,47.452-6.034,71.315-4.937,6.446-11.109,11.932-17.143,17.417-6.857,6.034-13.714,12.206-20.572,18.24-3.017,2.606-8.229,9.326-12.206,9.6-2.057.137-3.977-1.234-5.623-2.469-19.337-14.812-39.909-31.543-45.532-55.269a3.587,3.587,0,0,1,.274-3.154,4.426,4.426,0,0,1,2.88-1.1,144.09,144.09,0,0,0,69.807-26.057A14.674,14.674,0,0,0,497.64,362.473Z"
                                  transform="translate(-419.792 -284.099)"/>
                        </g>
                        <g id="Group_15" data-name="Group 15" transform="translate(25.547 275.937)">
                            <path id="Path_24" data-name="Path 24" class="cls-4"
                                  d="M618.546,285.672c.137,1.234.686,3.154.411,4.389l-2.331,12.206,12.892,1.92,4.251-11.383,5.9-3.977,2.469-6.583c.549-1.646,1.1-2.057.137-3.291-.823-.96-3.977-2.194-5.211-1.646-1.1.411-1.646,1.646-2.194,2.743a6.163,6.163,0,0,1-2.88,3.017,6.546,6.546,0,0,1-4.8-.686,20.039,20.039,0,0,1-7.817-6.034c-.274-.274-.549-.549-.823-.549s-.411.274-.549.411C615.94,279.5,618.272,282.381,618.546,285.672Z"
                                  transform="translate(-596.075 -275.798)"/>
                            <path id="Path_25" data-name="Path 25" class="cls-3"
                                  d="M595.682,353.147a37.557,37.557,0,0,1-3.84-11.657c-2.194-13.714,4.114-29.623,6.034-43.338a35.984,35.984,0,0,0-14.949-4.663c-6.72-.686-6.994-.137-9.463,5.76-4.114,9.737-6.583,20.572-9.052,30.858-6.034,25.92-14.537,46.766,2.606,71.452,4.663,6.72,10.56,12.48,16.32,18.24,14.537,14.126,26.469,28.252,42.515,40.595,2.331,1.783,4.937,3.7,7.817,3.566,4.937-.137,7.68-5.623,9.463-10.149,4.114-10.972,8.366-21.806,12.48-32.778,2.469-6.583,4.937-13.166,7.132-19.749.549-1.646.96-3.429.137-4.937a6.5,6.5,0,0,0-2.88-2.194c-13.3-5.9-28.252-8.092-40.869-15.635A64.593,64.593,0,0,1,595.682,353.147Z"
                                  transform="translate(-556.89 -275.798)"/>
                        </g>
                    </g>
                    <g id="Group_34" data-name="Group 34" transform="translate(309.004 65.695)">
                        <g id="Group_30" data-name="Group 30" transform="translate(184.393 205.557)">
                            <g id="Group_27" data-name="Group 27" transform="translate(29.211 37.6)">
                                <path id="Path_26" data-name="Path 26" class="cls-9"
                                      d="M76.279,406.908c5.211-2.057,9.6-4.114,15.086-3.7,7.406.549,13.44,2.88,18.926,8.091,13.166,12.206,21.806,26.057,27.292,43.475,6.857,21.257,10.149,44.161,12.48,66.515a335.917,335.917,0,0,1-1.371,82.15,9.151,9.151,0,0,1-2.057,5.211,10.159,10.159,0,0,1-5.486,2.88c-8.092,1.783-16.594,2.469-24.823,3.017-30.858,2.057-61.578,2.743-92.3,3.7-1.783,0-3.429.137-4.8-.96-1.92-1.646-2.057-3.84-2.057-6.309A355.489,355.489,0,0,1,22.382,549.4c2.88-16.595,6.857-33.189,10.012-49.646A273.283,273.283,0,0,0,36.645,461.9c.411-8.091-1.234-16.594,1.92-24.275C45.559,419.937,59.822,413.628,76.279,406.908Z"
                                      transform="translate(-2.84 -308.712)"/>
                                <g id="Group_19" data-name="Group 19" transform="translate(0 0)">
                                    <g id="Group_18" data-name="Group 18">
                                        <path id="Path_27" data-name="Path 27" class="cls-10"
                                              d="M76.582,324.21a79.1,79.1,0,0,1,18.24-10.834c5.486-2.331,10.972-4.663,17.006-4.663,9.737,0,18.377,2.057,26.057,8.5,8.914,7.68,13.577,17.692,18.24,28.389a140.062,140.062,0,0,1,8.229,24.96c.96,4.114,2.057,8.5,1.92,12.617-.137,3.7-1.783,5.349-4.663,7.406-14.263,9.737-29.76,16.32-46.492,20.846-5.486,1.509-10.7,2.331-16.183,1.371-6.583-1.1-12.754-2.057-19.2-2.88a8.44,8.44,0,0,1-3.977-1.234,9.181,9.181,0,0,1-2.88-3.84c-5.074-11.932-10.423-22.9-11.794-36.343a56.444,56.444,0,0,1,8.5-36.892A25.837,25.837,0,0,1,76.582,324.21Z"
                                              transform="translate(-60.743 -308.712)"/>
                                        <g id="Group_17" data-name="Group 17" transform="translate(15.306 11.324)">
                                            <path id="Path_28" data-name="Path 28" class="cls-11"
                                                  d="M78.287,376.462a16.907,16.907,0,0,1-2.331-6.994c-.411-3.566,0-8.5,4.8-8.092.274,0,.411.274.686.411v-1.509c-.274-5.211-1.646-10.286-1.1-15.634.411-3.566,2.057-6.857,3.7-10.012,1.1-2.057,2.057-4.389,3.977-5.9,7.543-5.9,14.537-9.189,24.549-8.64,6.446.274,10.56,2.469,16.457,6.994,1.371.96,10.834,8.5,8.64,12.343,4.937-.823,7.543.274,10.149,4.389a14.453,14.453,0,0,1,2.194,6.994,7.037,7.037,0,0,1-2.469,5.76c1.646,4.251,3.566,7.543,3.429,12.343a29.185,29.185,0,0,1-7.68,19.886c-2.606,3.017-5.486,6.034-6.309,10.149-.549,2.194-.137,4.389,0,6.583.137,1.646.549,3.291-.274,4.8-1.234,2.743-3.84,3.977-6.446,4.937-3.154,1.234-6.583,1.92-9.463.137s-2.743-5.074-4.8-7.406c-3.977-4.663-10.012-5.9-15.223-8.229a38.848,38.848,0,0,1-14.949-11.52c-2.331-2.88-2.743-5.76-3.977-9.052C80.481,378.519,79.11,377.97,78.287,376.462Z"
                                                  transform="translate(-75.834 -320.036)"/>
                                        </g>
                                        <path id="Path_29" data-name="Path 29" class="cls-10"
                                              d="M149.851,333.124v.274c-2.743-1.234-4.663-3.291-7.817-3.7a21.455,21.455,0,0,0-9.189,1.1c-10.972,3.154-20.572,6.857-27.7,16.457a68.164,68.164,0,0,1-5.76-11.383,5.782,5.782,0,0,1-.549-3.291,3.418,3.418,0,0,1,1.509-2.057c9.052-6.857,17.966-11.932,29.075-14.674,5.211-1.234,10.834-1.509,14.949,2.331C148.753,322.015,148.479,327.913,149.851,333.124Z"
                                              transform="translate(-82.308 -308.712)"/>
                                        <path id="Path_30" data-name="Path 30" class="cls-10"
                                              d="M139.885,370.976a11.385,11.385,0,0,0,.823,2.88c3.566,9.737,8.5,16.595,17.143,22.492-2.194-.549-4.937,1.783-6.446,2.469a41.1,41.1,0,0,1-10.423,2.469,2.674,2.674,0,0,1-1.783-.137,3.713,3.713,0,0,1-1.371-1.509c-3.977-7.954-8.64-15.223-10.423-24.137-2.057-9.737-1.1-19.475-.274-29.349.274-3.7.96-7.406,3.429-10.423,2.606-3.017,6.309-3.977,9.874-4.8-2.331,1.1-3.017,5.9-3.154,7.68a75.369,75.369,0,0,0,.137,9.737A203.888,203.888,0,0,0,139.885,370.976Z"
                                              transform="translate(-117.737 -308.712)"/>
                                        <path id="Path_31" data-name="Path 31" class="cls-10"
                                              d="M92,346.427a12.8,12.8,0,0,1,1.371,2.743c3.84,9.874,4.663,18.652,1.92,28.938,1.371-1.783,4.937-1.92,6.583-2.469a52.3,52.3,0,0,0,9.6-4.8,2.691,2.691,0,0,0,1.234-1.234,3.5,3.5,0,0,0,0-2.057c-2.057-8.777-3.7-17.966-8.092-25.783-4.937-8.777-11.657-15.223-18.789-22.217-2.606-2.606-5.349-4.8-9.052-5.486s-7.132,1.1-10.286,2.743c2.469-.411,5.486,2.606,6.72,3.977a86.868,86.868,0,0,1,5.9,7.406A141.181,141.181,0,0,1,92,346.427Z"
                                              transform="translate(-13.077 -308.712)"/>
                                    </g>
                                </g>
                                <g id="Group_22" data-name="Group 22" transform="translate(27.511 350.816)">
                                    <g id="Group_20" data-name="Group 20" transform="translate(1.496)">
                                        <path id="Path_32" data-name="Path 32" class="cls-11"
                                              d="M97.782,659.528c.549,22.9-2.057,43.886-.96,67.338s6.171,48.549,7.954,72.275c6.583-.823,13.029-1.371,19.475-2.88,2.057-21.12,3.429-49.372,5.623-68.709,2.331-19.337,5.349-29.075,7.406-46.629C124.114,674.2,111.085,666.66,97.782,659.528Z"
                                              transform="translate(-96.55 -659.528)"/>
                                    </g>
                                    <g id="Group_21" data-name="Group 21" transform="translate(0 132.482)">
                                        <path id="Path_33" data-name="Path 33" class="cls-2"
                                              d="M113.249,796.81c.411,3.017.96,6.171-.96,8.777-1.783,2.606-5.074,3.566-6.583,6.583a8.411,8.411,0,0,0-.274,4.114,4.626,4.626,0,0,0,1.234,3.017,7.985,7.985,0,0,0,4.8,2.057c2.88.411,5.623.96,8.366.411,4.937-.823,8.777-3.154,12.617-6.171,3.291-2.469,5.76-4.8,6.309-9.052.137-1.234-.549-2.606-.823-3.977a54.457,54.457,0,0,1-1.509-10.56c-8.092.411-16.046.823-24.137,1.234A19.839,19.839,0,0,1,113.249,796.81Z"
                                              transform="translate(-105.309 -792.01)"/>
                                    </g>
                                </g>
                                <g id="Group_26" data-name="Group 26" transform="translate(6.787 92.74)">
                                    <g id="Group_25" data-name="Group 25" transform="translate(89.555 259.585)">
                                        <g id="Group_23" data-name="Group 23" transform="translate(0)">
                                            <path id="Path_34" data-name="Path 34" class="cls-11"
                                                  d="M8.5,661.037c4.526,23.589,4.8,45.121,12.069,68.847,7.269,23.863,21.395,47.726,32.366,70.492,5.9-2.88,11.52-5.486,17.006-9.189-6.309-20.709-14.4-48.686-17.143-68.435-2.743-19.612-1.234-29.349-2.057-47.315C36.618,671.322,22.629,666.111,8.5,661.037Z"
                                                  transform="translate(-8.503 -661.037)"/>
                                        </g>
                                        <g id="Group_24" data-name="Group 24" transform="translate(39.909 125.487)">
                                            <path id="Path_35" data-name="Path 35" class="cls-2"
                                                  d="M2.022,798.593c1.509,2.743,3.291,5.623,2.469,8.914C3.8,810.8.925,812.856.513,816.147a8.378,8.378,0,0,0,1.1,4.114,5.659,5.659,0,0,0,2.057,2.606c1.646.96,3.429.686,5.211.274,2.743-.686,5.623-.96,8.092-2.469,4.389-2.469,7.269-6.034,10.012-10.149,2.331-3.566,3.7-6.446,2.743-10.834-.274-1.234-1.371-2.331-2.194-3.566a50.517,50.517,0,0,1-5.349-9.6C14.913,789.678,7.508,792.7.1,795.575A22.551,22.551,0,0,1,2.022,798.593Z"
                                                  transform="translate(-0.102 -786.524)"/>
                                        </g>
                                    </g>
                                    <path id="Path_36" data-name="Path 36" class="cls-12"
                                          d="M5.506,602.476c0-6.172,0-12.48.274-18.652a8.723,8.723,0,0,1,.686-3.84,10.717,10.717,0,0,1,3.977-3.84c9.052-5.9,14.263-10.972,18.652-20.846,3.7-8.777,5.074-13.714,8.229-25.783,1.92-7.68,5.349-29.9,9.189-38.675,1.783-4.114.96.274,2.331-2.057a231.632,231.632,0,0,0-6.172-63.772c-.823-3.429-1.646-2.88-.549-6.309.274-1.1,7.269-4.389,7.406-4.389,8.914,22.492,12.754,45.806,15.223,69.944,10.149-2.332,20.572-4.663,30.72-6.994-.96-25.372-6.446-49.783-10.834-74.744,0-.137,7.817-1.646,8.64-.823,2.88,2.469,1.92,2.469,3.017,6.034a535.1,535.1,0,0,1,14.949,66.378c.411,0,.686-.137,1.1-.137,1.371,0,2.331-.411,3.566.686a9.167,9.167,0,0,1,1.92,4.389c2.606,11.932,4.389,24,6.446,36.069,1.1,5.9,1.783,11.932,3.429,17.829,4.114,14.949,9.326,28.389,19.063,40.595a20.314,20.314,0,0,1,3.429,4.8,18.215,18.215,0,0,1,1.234,6.034c.549,8.366.549,17.28.549,25.646-.411,46.218-3.291,91.613,3.7,137.556.686,4.663,1.509,9.051,2.331,14.126.549,3.429,2.606,9.737.686,13.3-1.1,1.92-4.526,2.331-6.309,3.017-2.469,1.1-4.663,1.783-6.994,2.743-4.663,1.646-9.326,3.154-13.989,5.211A575.246,575.246,0,0,1,76,695.46c-3.017,29.075-7.543,57.738-11.109,86.813-.137.686-24.275,2.194-26.469,1.234-6.309-2.743-5.623-9.6-7.543-16.046-5.9-20.023-11.109-40.183-15.086-60.755A567.677,567.677,0,0,1,5.506,602.476Z"
                                          transform="translate(-5.506 -401.452)"/>
                                </g>
                            </g>
                            <g id="Group_28" data-name="Group 28" transform="translate(64.377)">
                                <path id="Path_37" data-name="Path 37" class="cls-11"
                                      d="M106.261,298.7c-.274,0-.686-.137-1.1-.137-1.234-.137-2.88-1.509-2.606-2.606.96-3.84,7.406-3.566,4.251-8.092-.823-1.234-9.874-3.291-10.012-4.663-.274-7.269,4.663-12.48,11.246-12.069,4.526.274,6.994,3.977,9.874,6.72,4.389,4.389,7.68,9.463,12.206,13.714a3.135,3.135,0,0,1,.96,1.371,2.855,2.855,0,0,1-.411,1.783c-2.194,4.8-4.114,9.052-9.6,10.286-.823.137-1.371-.411-1.92-.823-1.783-1.1-3.429-2.331-5.211-3.291a17.368,17.368,0,0,0-4.251-2.057A29.822,29.822,0,0,0,106.261,298.7Z"
                                      transform="translate(-96.788 -271.112)"/>
                                <path id="Path_38" data-name="Path 38" class="cls-9"
                                      d="M85.432,324.21c-2.469-2.194-5.349-3.7-9.189-6.446-4.663-3.429-33.326-27.977-34.012-28.115-13.714-.686-10.972,12.754-20.983,15.223,9.874,9.874,19.063,16.595,29.212,26.469,17.829,17.28,24.823,29.349,19.2,54.995-1.509,7.269-6.172,12.343-2.194,19.612,1.509,2.743,4.389,4.251,6.446,6.72,13.029,16.457,18.377,36.206,26.88,55.132.686,1.371,1.92,2.331,3.291,1.371.549-.274.686-1.1.96-1.783,1.646-6.309,2.606-13.029,3.977-19.337,1.509-6.309,4.8-11.246,4.937-17.966.411-13.3,1.646-26.469,0-40.046C111.078,364.8,105.044,342.313,85.432,324.21Z"
                                      transform="translate(-4.917 -271.112)"/>
                            </g>
                            <g id="Group_29" data-name="Group 29" transform="translate(0 14.429)">
                                <path id="Path_39" data-name="Path 39" class="cls-11"
                                      d="M180.289,311.455c.274-.274.549-.686.823-.823.823-.96,1.509-3.154.549-3.977-3.291-2.743-8.229,2.743-7.817-3.84.137-1.783,7.68-9.874,6.994-11.383-3.84-7.954-10.834-6.994-16.457-2.194-3.7,3.291-4.389,8.777-5.349,13.166-1.509,6.994-1.371,13.852-2.606,20.709-.137.686-.274,1.234.137,1.783a2.577,2.577,0,0,0,1.509,1.1c4.937,2.331,9.052,4.251,14.126,1.234.686-.411.823-1.371,1.1-2.057.823-2.057,1.509-4.389,2.331-6.446a14.886,14.886,0,0,1,2.331-4.663A10.593,10.593,0,0,1,180.289,311.455Z"
                                      transform="translate(-142.919 -285.541)"/>
                                <path id="Path_40" data-name="Path 40" class="cls-9"
                                      d="M125.3,381.81c.274-3.017,1.646-6.309,2.057-11.246.549-5.9,6.446-46.081,6.994-46.492,10.149-10.012,16.869,2.331,26.332-2.606-1.92,13.989-4.251,26.743-5.212,40.869-1.509,24.686,1.92,36.892,21.943,51.978,4.114,3.017,8.64,3.7,12.343,5.9,4.251,2.469,4.8,2.469,5.349,7.543.823,7.954,0,16.594.274,24.96.411,9.326-.137,18.652-3.429,27.566a3.806,3.806,0,0,1-1.783,2.057,1.471,1.471,0,0,1-1.509-.137c-8.5-5.211-14.812-10.7-22.217-17.417-7.817-7.132-15.772-10.7-22.217-20.709C132.156,425.285,123.653,405.674,125.3,381.81Z"
                                      transform="translate(-125.094 -285.541)"/>
                            </g>
                        </g>
                        <g id="Group_33" data-name="Group 33" transform="translate(0)">
                            <path id="Path_41" data-name="Path 41" class="cls-13"
                                  d="M131.11,187.888C166.493,215.317,192,278.266,206.4,318.175c-8.64,3.429-17.28,6.72-25.92,10.149-13.029-45.669-30.995-94.63-61.578-131.522C123.019,193.922,127,190.905,131.11,187.888Z"
                                  transform="translate(54.584 -65.555)"/>
                            <g id="Group_31" data-name="Group 31" transform="translate(0 18.448)">
                                <path id="Path_42" data-name="Path 42" class="cls-8"
                                      d="M193.1,90.927c42.652-9.189,103.544-12.069,140.985,9.463s44.435,58.424,45.806,96.824c-33.738,18.515-68.984,31.269-106.7,10.012C235.477,186.105,206.951,132.207,193.1,90.927Z"
                                      transform="translate(-193.099 -84.003)"/>
                                <path id="Path_43" data-name="Path 43" class="cls-7"
                                      d="M351.227,196.94c-55.544,10.423-118.9-3.017-157.442-45.943C225.877,217.648,287.592,237.671,351.227,196.94Z"
                                      transform="translate(-165.122 -84.003)"/>
                                <path id="Path_44" data-name="Path 44" class="cls-13"
                                      d="M310.33,197.625c-2.88,1.92-6.034,2.743-9.052,4.389-36.206-24-72.138-47.178-108.207-71.315,39.086,18.789,77.9,38.949,116.984,57.738C310.056,192,310.467,194.2,310.33,197.625Z"
                                      transform="translate(-123.539 -84.003)"/>
                            </g>
                            <g id="Group_32" data-name="Group 32" transform="translate(195.392)">
                                <path id="Path_45" data-name="Path 45" class="cls-8"
                                      d="M178.675,65.555c7.954,38.263,10.149,92.161-9.052,125.624s-52.252,39.5-86.4,40.595c-16.32-30.172-27.7-61.715-8.5-95.178S141.646,78.035,178.675,65.555Z"
                                      transform="translate(-64.669 -65.555)"/>
                                <path id="Path_46" data-name="Path 46" class="cls-13"
                                      d="M111.636,232.734c-1.783-2.606-3.154-5.212-4.663-7.954,21.532-32.229,43.2-64.321,64.732-96.55-16.869,34.835-33.875,69.669-50.743,104.5A70.5,70.5,0,0,1,111.636,232.734Z"
                                      transform="translate(-94.179 -65.555)"/>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
    </div>
    </div>
    <!-- A PROPOS -->
    <div id="apropos" class="marg-t35">
    <div class="bg-about zindex-100 ">
        <div class="section-a">
            <h1 class="flex flex-c-c t-white marg-b100">A Propos</h1>
            <div class="row flex flex-c-c">
                <div class="col l4">
                    <img class="img-resp" src="{{asset('img/smartphone.png')}}">
                </div>
                <div class="col l4 ">
                    <h3 class="t-white">Technologie AR</h3>
                    <p class="t-white">Grâce à la *Réalité Augmentée, nous offrons
                        une expérience utilisateur nouvelle et intuitive.</p>
                    <p class="t-white">Jouer à Paper’Green c’est l’adopter !</p>
                </div>
                <hr class="marg-t40" width="90%" color="white">
            </div>
            <div class="row flex flex-c-c">
                <div class="col l4">
                    <h3 class="t-white">Technologie AR</h3>
                    <p class="t-white">Grâce à la *Réalité Augmentée, nous offrons
                        une expérience utilisateur nouvelle et intuitive.</p>
                    <p class="t-white">Jouer à Paper’Green c’est l’adopter !</p>
                </div>
                <div class="col l4">
                    <img class="img-resp" src="{{asset('img/trophy.png')}}">
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- CHIFFRES CLES -->
<section id="chiffre" class="marg-t100 marg-b150">
    <div class="flex flex-c-c flex-a-c marg-t40">
        <h1>Chiffres clés</h1>
    </div>
    <div class="row">
        <div class="col l12 marg-t60">
            <div class="col l4 flex flex-a-c flex-c-c">
                <div class="marg-r40">
                    <img src="{{asset('img/chiffres.png')}}">
                </div>
                <div class="flex flex-column">
                    <h3 class="marg-0">2700</h3>
                    <p>Téléchargement de l’appli</p>
                </div>
            </div>
            <div class="col l4 flex flex-a-c flex-c-c">
                <div class="marg-r40">
                    <img src="{{asset('img/chiffres.png')}}">
                </div>
                <div class="flex flex-column">
                    <h3 class="marg-0">2700</h3>
                    <p>Téléchargement de l’appli</p>
                </div>
            </div>
            <div class="col l4 flex flex-a-c flex-c-c">
                <div class="marg-r40">
                    <img src="{{asset('img/chiffres.png')}}">
                </div>
                <div class="flex flex-column">
                    <h3 class="marg-0">2700</h3>
                    <p>Téléchargement de l’appli</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- PARTENAIRE-->
<section id="partenaire" class="bg-grey partner-resp  flex flex-column flex-a-c flex-c-c flex-column row">
    <div class="flex flex-a-c flex-c-c flex-column col s6">
        <h2 class="center-align">‘Grâce à nos partenaires,
            nous améliorons le monde’</h2>
        <h3>M. HACHET jessy</h3>
        <p>Chef de projet</p>
    </div>
    <div class="row marg-t40">
        <div class="flex col s12">
            <div class="col l3 flex flex-c-c flex-a-c">
                <img class="partner-img-resp" src="{{asset('img/greenpeace.png')}}">
            </div>
            <div class="col l3 flex flex-c-c flex-a-c">
                <img class="partner-img-resp" src="{{asset('img/europe-ecologie.png')}}">
            </div>
            <div class="col l3 flex flex-c-c flex-a-c">
                <img class="partner-img-resp" src="{{asset('img/greenpeace.png')}}">
            </div>
            <div class="col l3 flex flex-c-c flex-a-c">
                <img class="partner-img-resp" src="{{asset('img/europe-ecologie.png')}}">
            </div>
        </div>
    </div>
</section>

    <!-- CONTACT -->
<section id="contact" class="contact flex  flex-a-c flex-c-c  row">
    <div class="flex flex-a-c flex-c-c  col s6">
        <h2 class="center-align">Télécharger notre prototype
            dès maintenant</h2>
        <div class="flex row marg-t60">
            <div class="col s12 flex">
                <form class="col s12" action="{{route('index.store')}}" method="post" enctype="multipart/form-data">
                <div class="input-field col l8 s12 m8">
                    {!! csrf_field() !!}
                    <input placeholder="E-mail" id="first_name" type="text" class="validate" name="email">
                    <label for="first_name">Enregistre votre e-mail</label>
                </div>
                <div class="input-field col l4 s12 m8 flex flex-a-e">
                    <button role="button" class="btn-green right waves-effect waves-light btn flex flex-c-c flex-a-c">M'enregistrer</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
