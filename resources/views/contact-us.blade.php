@extends('layouts.layout')

@section('content')
<section style="background-color: #860F0F;" class="hero w-100 mx-auto">
    <div style="padding: 100px 0px; margin-top: 20px;">
        <h1 style="
        font-size: 73px;margin-top: 52px;
        color: white;
        font-weight: bold;
        " class="text-center">Contact US</h1>
        <p class="fs-5 text-center text-white">Home /Contact US</p>
    </div>
</section>


<section class="d-flex flex-wrap gap-5 justify-content-around my-5">
    <div class="px-5 py-3 shadow">
        <div class="align-items-center d-flex gap-3"><i class="fs-1 fa-regular fa-comment-dots"></i>
            <div class="text-start">
                <h3>999-123-1234 </h3>
                <p>Call Anytime</p>
            </div>
        </div>
    </div>
    <div class="px-5 py-3 shadow">
        <div class="align-items-center d-flex gap-3"><i class="fs-1 fa-regular fa-comment-dots"></i>
            <div class="text-start">
                <h3>999-123-1234 </h3>
                <p>Call Anytime</p>
            </div>
        </div>
    </div>
    <div class="px-5 py-3 shadow">
        <div class="align-items-center d-flex gap-3"><i class="fs-1 fa-regular fa-comment-dots"></i>
            <div class="text-start">
                <h3>999-123-1234 </h3>
                <p>Call Anytime</p>
            </div>
        </div>
    </div>
</section>



<section class="row mx-bog-scn my-5">

    <div class="col-md-6">
        <span class="fs-4 fw-bolder text-warning">........</span>
        <h1 class="fw-bold mb-4" style="color: #0f3186;">Have Any Questions? <br />
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


@endsection
