<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('styles/style.css?v=1.0.0') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>canadainvisacheck</title>

<style>
#hero::before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("{{ asset('images/Canada-immigration_378179980-sca.png') }}") top right;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: -1;
}

</style>
</head>
<body>
    <div id="app">

        <section id="sticky-menu" class=" " style="
        border-radius: 10px;
    ">

            <div class="row m-0 mx-auto sm-bg-color " style="  height: 82px ">

                <div class="col-md-4 sm-logo-center sm-bg-color  ooo-1 ">
                    <img src="{{ asset('images/logo.jpeg') }}"
                        alt="" class="img-fluid logo-nav">
                </div>

                <div class="col-md-5 col-sm-12  navigator-item my-auto sm-bg-color ooo-2">
                    <a class="fs-6 fw-bold navv-a  px-3 py-2 text-decoration-none" href="/">HOME</a>
                    <a class="fs-6 fw-bold navv-a  px-3 py-2 text-decoration-none" href="{{ url('contact-us') }}">CONTACT US</a>
                    <a class="fs-6 fw-bold navv-a  px-3 py-2 text-decoration-none" href="{{ url('about-us') }}">ABOUT US</a>



                </div>



                <div class="col-md-3 col-sm-6 sm-bg-color chek-visa"
                    style="background-color: #FF0000; display: flex; align-items: center;border-radius: 0px 10px 10px 0px">

                    <div style="
                        position: absolute;
                    ">
                        <svg class="svg-canda" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            id="Layer_1" x="0px" y="0px" viewBox="0 0 55.2 38.4" style=" " xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #FF0000;
                                }

                                .st1 {
                                    fill: #FFFFFF;
                                }
                            </style>
                            <g>
                                <path class="st0"
                                    d="M3.03,0h49.13c1.67,0,3.03,1.36,3.03,3.03v32.33c0,1.67-1.36,3.03-3.03,3.03H3.03C1.36,38.4,0,37.04,0,35.37 V3.03C0,1.36,1.36,0,3.03,0L3.03,0z">
                                </path>
                                <polygon class="st1" points="8.4,0 46.8,0 46.8,38.4 8.4,38.4 8.4,0"></polygon>
                                <path class="st0"
                                    d="M27.6,3.6l-2.62,4.89c-0.3,0.53-0.83,0.48-1.37,0.18l-1.9-0.98l1.41,7.5c0.3,1.37-0.66,1.37-1.13,0.78 l-3.31-3.7l-0.53,1.88c-0.06,0.25-0.33,0.51-0.74,0.45l-4.18-0.88l1.1,4c0.24,0.89,0.42,1.26-0.24,1.49l-1.49,0.7l7.21,5.85 c0.29,0.22,0.43,0.62,0.32,0.98l-0.63,2.07c2.48-0.29,4.71-0.72,7.19-0.98c0.22-0.02,0.58,0.33,0.58,0.59L26.95,36h1.2l-0.19-7.56 c0-0.26,0.33-0.63,0.55-0.61c2.48,0.27,4.71,0.7,7.19,0.98l-0.64-2.08c-0.11-0.36,0.04-0.75,0.32-0.98l7.21-5.85l-1.49-0.7 c-0.66-0.24-0.48-0.6-0.24-1.49l1.1-4l-4.18,0.88c-0.41,0.06-0.68-0.2-0.74-0.45l-0.53-1.88l-3.31,3.7 c-0.47,0.59-1.42,0.59-1.13-0.78l1.41-7.5l-1.9,0.98c-0.53,0.3-1.07,0.34-1.37-0.18L27.6,3.6L27.6,3.6L27.6,3.6z M27.6,3.6 L27.6,3.6L27.6,3.6L27.6,3.6L27.6,3.6z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h4 style="color: #ffffff;margin-left: 31px;" class="fs-4 mb-0">Check Visa Status</h4>
                </div>
            </div>






        </section>


        <main class="py-4">
            @yield('content')
        </main>


        <footer style="background-color: #BA1210" class=" text-white  py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ asset('images/logo.jpeg') }}"
                            alt="" class="logo-footer" width="200px">

                        <p class="footer-list">Iaculis duis dictum libero consequat nec curae mus luctus, rhoncus vitae quam
                            justo nullam quis
                            tempus rutrum
                        </p>
                        <div>
                            <i class="fa-brands fa-facebook-f social-icon"></i>
                            <i class="fa-brands fa-twitter social-icon"></i>
                            <i class="fa-brands fa-youtube social-icon"></i>
                            <i class="fa-brands fa-digg social-icon"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <h5>Our Services</h5>

                        <ul class="list-unstyled footer-list ">
                            <li>Office Ware Moving</li>
                            <li>Bulk Material Transfer</li>
                            <li>Pianos & Spas Movings</li>
                            <li>Gym Items Moving</li>
                            <li>Kitchen Equipment's Moving</li>
                            <li>Free Loading And Uploading</li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-list">
                        <h5>Contact Us</h5>
                        <p>550 FA Tower, William S Blvd 2000, IL, USA</p>
                        <p>(+111) 1257654 2123</p>
                        <p>Email: Info@Fxmtgers.Com</p>
                    </div>
                    <div class="col-md-3">
                        <h5>Newsletter</h5>
                        <p class="footer-list">Lorem ipsum dolor sit amet consectetur adipiscing elit, vel sociis
                            scelerisque dis euismod
                            accumsan urna</p>
                        <form class="d-flex">
                            <div class="form-group">
                                <input style="border-radius: 26px;" type="email" class="form-control" placeholder="Email">
                            </div>
                            <button style="border-radius: 26px; background-color: #EC3737;" type="submit"
                                class="btn btn-block text-white ">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </footer>



    </div>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var stickyMenu = document.getElementById("sticky-menu");

            window.addEventListener("scroll", function () {
                if (window.scrollY > 50) {
                    stickyMenu.style.top = "0";
                } else {
                    stickyMenu.style.top = "50px";
                }
            });
        });

    </script>

    <script src="https://kit.fontawesome.com/85f9b80b44.js" crossorigin="anonymous"></script>



</body>
</html>
