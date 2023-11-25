@extends('layouts.layout')

@section('content')
<section style="background-color: #f8f8f8;padding: 100px 0px;" class="hero w-100 mx-auto">
</section>
<div class="container">

    <h3 class="mb-5">Search Results for: {{ $passportNo }}</h3>
    <hr>
</div>



<div class="container">

    @foreach($visaCheck as $value)
        <div class="listItem">
            <a class="text-center" href="{{ url('visa-status/'.$value->passport_no) }}">
                <div>
                    <img style="width: 300px;" src="{{ asset('storage/images/'.$value->image) }}" alt="">
                </div>
                <h1 class="text-dark text-decoration-none text-uppercase">{{ $value->passport_no }}</h1>
            </a>
            <p class="text-uppercase">Welcome In Canada visa service NAME {{ $value->name }} FATHER NAME {{ $value->father_name }} MOTHER NAME {{ $value->mother_name }} DATE OF BIRTH {{ $value->d_o_b }} PASSPORT NO {{ $value->passport_no }} GMAIL {{ $value->gmail }} NATIONAL ID NO {{ $value->national_id_no }} PRESENT ADDRESS {{ $value->present_address }} PERMANENT ADDRESS {{ $value->permanent_address }} CONTACT NO {{ $value->contact_no }} JOB {{ $value->job }} JOB CATEGORY {{ $value->job_category }} DATE OF ISSUE {{ $value->date_of_issue }}
    </p>
            <hr>
        </div>
    @endforeach



</div>






@endsection
