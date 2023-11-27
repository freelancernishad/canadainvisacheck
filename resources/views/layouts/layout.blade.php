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
<link rel="stylesheet" href="{{ asset('styles/style.css?v=1.0.3') }}">
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
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("{{ asset('images/A.Background.jpeg') }}") top right;
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

        <div class="col-md-4 sm-logo-center sm-bg-color  ooo-1 float-from-right-animation">
            <img src="{{ asset('images/A.logo.jpeg') }}"
                alt="" class="img-fluid logo-nav">
        </div>

        <div class="col-md-5 col-sm-12  navigator-item my-auto sm-bg-color ooo-2">
            <a class="fs-6 fw-bold navv-a  px-3 py-2 text-decoration-none" href="/">HOME</a>
            <a class="fs-6 fw-bold navv-a  px-3 py-2 text-decoration-none" href="{{ url('contact-us') }}">CONTACT US</a>
            <a class="fs-6 fw-bold navv-a  px-3 py-2 text-decoration-none" href="{{ url('about-us') }}">ABOUT US</a>



        </div>



        <div class="col-md-3 col-sm-6 sm-bg-color chek-visa float-from-left-animation"
            style="background-color: #FF0000; display: flex; align-items: center;border-radius: 0px 10px 10px 0px">
            <div style=" position: absolute; ">

                {{-- <img width="50px" style="left: 0" src="{{ asset('images/A.N.logo.jpeg') }}" alt=""> --}}


            </div>
            <h4 style="color: #ffffff;margin-left: 31px;" class="fs-4 mb-0">Check Visa Status</h4>
        </div>
    </div>






</section>


        <main>
            @yield('content')
        </main>



    <footer style="background-color: #BA1210" class=" text-white  py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('images/A.logo.jpeg') }}"
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
                    <div class="d-flex gap-1 mb-2 ">
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                    <ul class="list-unstyled footer-list ">
                        <li>Office Ware Moving</li>
                        <li>Bulk Material Transfer</li>
                        <li>Pianos & Spas Movings</li>
                        <li>Gym Items Moving</li>
                        <li>Kitchen Equipment's Moving</li>
                        <li>Free Loading And Uploading</li>
                    </ul>
                </div>
                <div class="col-md-3 my-mbl position-relative">
                    <h5>Contact Us</h5>
                    <div class="d-flex gap-1 mb-2 ">
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                    <div class="contact-info">
                        <p>550 FA Tower, William S Blvd 2000, IL, USA</p>
                        <p>(+111) 1257654 2123</p>
                        <p>Email: Info@Fxmtgers.Com</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5>Newsletter</h5>
                    <div class="d-flex gap-1 mb-2 ">
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>

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
