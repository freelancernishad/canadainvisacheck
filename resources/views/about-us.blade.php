@extends('layouts.layout')

@section('content')
<section style="background-color: #860F0F;" class="hero w-100 mx-auto">
    <div style="padding: 190px 0px; margin-top: 20px;">
        <h1 style="
        font-size: 73px;margin-top: 52px;
        color: white;
        font-weight: bold;
        " class="text-center">ABOUT US</h1>
        <p class="fs-5 text-center text-white">Home /About US</p>
        <div class="text-center">
            <div class=" d-flex justify-content-center gap-1 mb-2">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>

    </div>
</section>

<section class="mx-auto ">
    <div class="row mx-bog-scn my-5">
        <div class="col-md-6 row mx-auto">
            <div class="d-flex flex-column col-md-6 new-class" style=" ">
                <img class="floating-img img-ad"
                    src="{{ asset('images/about1.jpg') }}" alt=""
                    style="">

                <img class="floating-img img-ad"
                    src="{{ asset('images/Team-1-1.png') }}" alt="" style="">

            </div>
            <div class="d-flex flex-column col-md-6 new-class">
                <img class="floating-img img-ad"
                    src="{{ asset('images/MexicansinCanada-1.png') }}" alt="">

                <img class="floating-img img-ad"
                    src="{{ asset('images/about2.jpg') }}" alt="">

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

<section style="background-color: #20408F;" class="fw-bold mx-auto my-5 row text-white w-100">
    <div class="about-work py-4 col-6 col-md-3 col-sm-6 p-3 text-center"
        style="font-size: 55px; line-height: 55px;">
        <span id="experienceId" class="number ">0</span> + <br>
        <span style="font-size: 16px;"> Years of Experience</span>
    </div>
    <div class="about-work py-4 col-6 col-md-3 col-sm-6 p-3 text-center"
        style="font-size: 55px; line-height: 55px;">
        <span id="movementsId" class="number ">0</span> <br>
        <span style="font-size: 16px;"> No of Movements </span>
    </div>

    <div class="about-work py-4 col-6 col-md-3 col-sm-6 p-3 text-center"
        style="font-size: 55px; line-height: 55px;">
        <span id="clientsId" class="number ">0</span> <br>
        <span style="font-size: 16px;"> Our Clients </span>
    </div>
    <div class="about-work py-4 col-6 col-md-3 col-sm-6 p-3 text-center"
        style="font-size: 55px; line-height: 55px;">
        <span id="satisfactionId" class="number ">0</span>% <br>
        <span style="font-size: 16px;"> Customer Satisfaction </span>
    </div>
</section>


<script>


    document.addEventListener('DOMContentLoaded', function () {
        function startCounter(elementId, targetValue, step, interval) {
            let currentCount = 0;
            const element = document.getElementById(elementId);
            const updateCounter = function () {
                if (currentCount <= targetValue) {
                    element.innerText = currentCount;
                    currentCount += step;
                }
            };
            setInterval(updateCounter, interval);
            // console.log(interval);
        }

        startCounter('experienceId', 25, 1, 100);
        startCounter('movementsId', 499, 1, 0);
        startCounter('clientsId', 146, 1, 10);
        startCounter('satisfactionId', 100, 1, 20);
    });





</script>

@endsection
