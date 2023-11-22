@extends('layouts.layout')

@section('content')

<section style="background-color: #860F0F;" class="hero w-100 mx-auto">
    <div style="padding: 100px 0px; margin-top: 18px;">
        <h1 style="
    font-size: 73px;margin-top: 52px;
    color: white;
    font-weight: bold;
    " class="text-center">ABOUT US</h1>
        <p class="fs-5 text-center text-white">Home /About US</p>
    </div>
</section>

<section class="mx-auto ">
    <div class="row mx-bog-scn my-5">
        <div class="col-md-6 row mx-auto">
            <div class="d-flex flex-column col-md-6 new-class" style=" ">
                <img class="floating-img img-ad"
                    src="{{ asset('images/MexicansinCanada-1.png') }}" alt=""
                    style="">

                <img class="floating-img img-ad"
                    src="{{ asset('images/Team-1-1.png') }}" alt="" style="">

            </div>
            <div class="d-flex flex-column col-md-6 new-class">
                <img class="floating-img img-ad"
                    src="{{ asset('images/MexicansinCanada-1.png') }}" alt="">

                <img class="floating-img img-ad"
                    src="{{ asset('images/Team-1-1.png') }}" alt="">

            </div>


        </div>



        <div class="col-md-6 sm-logo-center">
            <span class="fs-4 fw-bolder text-warning">........</span>
            <h1 class="fw-bold mb-4" style="color: #0f3186;">We Are Dedicated To <br> Shaping The Dreams Of <br>
                Individuals
            </h1>

            <p>With our unwavering commitment to excellence and a team of experienced immigration experts, we have
                established ourselves as a reliable and trusted partner in the field of immigration.

            </p>
            <p>Founded [Year], [Company Name] was born out of a passion for helping people achieve their dreams of
                living and working in their dream destinations. Over the years, we have grown into a dynamic and
                forward-thinking immigration consultancy, serving clients from all corners of the globe.

            </p>
        </div>

    </div>




</section>


<section style="background-color: #20408F;" class="fs-3 fw-bold mx-auto my-5 row text-white w-100">
    <div class="text-center about-work py-2 col-md-3 col-sm-6 col-6">
        <span class="number">25</span> + <br>
        Years of Experience
    </div>
    <div class="text-center about-work py-2 col-md-3 col-sm-6 col-6">
        <span class="number">499</span> <br>
        No of Movements
    </div>

    <div class="text-center about-work py-2 col-md-3 col-sm-6 col-6">
        <span class="number">146</span> <br>
        Our Clients
    </div>
    <div class="text-center about-work py-2 col-md-3 col-sm-6 col-6">
        <span class="number">100%</span> <br>
        Customer Satisfaction
    </div>
</section>




@endsection
