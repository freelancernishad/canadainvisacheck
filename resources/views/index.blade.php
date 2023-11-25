@extends('layouts.layout')

@section('content')
<section id="hero">
    <div class="hero-container">
        <div class=" w-100 mx-auto aaaaaaaaaaa">
            <div class=" row mx-bog-scn">
                <div class="col-md-6 col-sm-12 btn-text-dream float-from-right-animation">
                    <h1 class="text-white">Fulfill Your Dream</h1>
                    <p class="text-white">We help people to apply for a visa in Canada. We handle all the hassles of
                        submitting
                        documents.
                    </p>
                    <button class="contact-btn">CONTACT US</button>
                </div>
                <div class="col-md-6 search-box-conatain">
                    <div class="search-box">
                        <h3 class="text-center">Check Your Visa Stutas </h3>
                        <div style="
                        background-color: #fff;
                        border: 2px solid #4a89bf;border-radius: 22px;" class=" input-group p-1">
                            <input type="text" class="border-0 form-control" id="passportNo"
                                placeholder="Enter Your Passport Number..">
                            <div class="border-0 input-group-append">
                                <button class="btn" type="button" onclick="SearchVisa()">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>


<section class="mx-auto">
    <div class="row mx-bog-scn my-5">
        <div class="col-md-6 row mx-auto">
            <div class="d-flex flex-column col-md-6 new-class" style=" ">
                <img class="floating-img img-ad"
                    src="{{ asset('images/MexicansinCanada-1.png') }}" alt=""
                    style="">

                <img class="floating-img img-ad"
                    src="{{ asset('images/about1.jpg') }}" alt="" style="">

            </div>
            <div class="d-flex flex-column col-md-6 new-class">
                <img class="floating-img img-ad"
                    src="{{ asset('images/about2.jpg') }}" alt="">

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

            <button onmouseover="this.style.border='2px solid red'" onmouseout="this.style.border='2px solid '"
                class="contact-btn">MORE ABOUT></button>

        </div>

    </div>




</section>


<section class="row mx-bog-scn my-5">

    <div class="col-md-6">
        <div class="textalign">
            <span class="fs-4 fw-bolder text-warning">........</span>
        </div>
        <h1 class="fw-bold mb-4 textalign" style="color: #0f3186;">Have Any Questions? <br />
            Let’s Start To Talk
        </h1>

        <p>Nascetur sed cursus habitasse eleifend montes torquent porta natoque, dis sollicitudin lobortis ad
            dignissim mauris netus, fermentum
        </p>
        <div class="my-4">
            <i class="fa-brands fa-facebook-f social-icon"></i>
            <i class="fa-brands fa-twitter social-icon"></i>
            <i class="fa-brands fa-youtube social-icon"></i>
            <i class="fa-brands fa-digg social-icon"></i>
        </div>
    </div>

    <div class="custom-container col-md-6">
        <form class="custom-contact-form">
            <div>
                <input type="tel" id="custom-phone" class="custom-input-field" placeholder="Your Name">


                <input type="text" id="custom-subject" class="custom-input-field" placeholder="Your Email">
            </div>


            <div>
                <input type="tel" id="custom-phone" class="custom-input-field" placeholder="Phone Number">


                <input type="text" id="custom-subject" class="custom-input-field" placeholder="Subject">
            </div>

            <div>

                <textarea id="custom-message" class="custom-input-field w-100"
                    placeholder="Write your message"></textarea>
            </div>

            <button style="background: #EC3737;
            border: 0;
            color: white;
            width: 188px;
            height: 62px;
            font-size: 21px;
            font-weight: 400;
            border-radius: 5px;" type="button" class="custom-submit-button">Send A Message</button>
        </form>
    </div>

</section>


<script>


    function SearchVisa() {
        var passportNo = document.getElementById('passportNo');
        if(passportNo.value==''){
            alert('Passport No is required!');
            // window.location.href = '/visa-status'
        }else{
            window.location.href = '/visa-status?s='+passportNo.value;
        }
    }


</script>


@endsection
