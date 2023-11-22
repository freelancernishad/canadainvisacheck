@extends('layouts.layout')

@section('content')
<style>

.clientImage {
    width: 150px;
    margin: 0 auto;
}
img.statusImage {
    position: absolute;
    left: -25px;
    bottom: -43%;
    width: 192px;
}

h4.informationTitle {
    color: white;
    background: #FF0000;
    width: 250px;
    text-align: center;
    font-size: 17px;
    padding: 6px 4px;
    margin: 0 auto;
}


p.borderBeforeTable {
    background: #7BDCB5;
    padding: 7px 0px;
    border-bottom: 2px solid black;
    margin-bottom: 0px;
}

p.borderAfterTable {
    background: #7BDCB5;
    padding: 7px 0px;
    border-top: 2px solid black;
    margin-top: 0px;
}


table.informaionTable tr.event {
    background: #7bdcb5;
}

table.informaionTable tr td {
    padding: 5px 11px;
    text-transform: uppercase;
    }
</style>
<section style="background-color: #f8f8f8;padding: 100px 0px;" class="hero w-100 mx-auto">
</section>
<div class="container">




</div>


<div class="container">

    <div class="clientDetails text-center my-5 py-5">

        <h5 class="text-uppercase">{{ $visaCheck->name }}</h5>
        <div class="clientImage position-relative">
            <img style="width: 150px; border-radius: 10px;" src="{{ asset('storage/images/'.$visaCheck->image) }}" alt="">
            <img class="statusImage" src="{{ asset('images/VERIFY_APP-removebg-preview-5.png') }}" alt="">
        </div>

    </div>

    <h4 class="informationTitle mb-3">Your Information</h4>


    <div class="text-center">
        @foreach ($visaCheck->visaCheckDocuments as $file)
        <img width="100%" class="mb-3" src="{{ asset('storage/'.$file->file_path) }}" alt="">
        @endforeach
    </div>







<p class="borderBeforeTable"></p>
    <table width="100%" class="informaionTable" >





        <tr class="odd">
            <td width="50%">NAME</td>
            <td width="50%">{{ $visaCheck->name }}</td>
        </tr>

        <tr class="event">
            <td width="50%">FATHER NAME</td>
            <td width="50%">{{ $visaCheck->father_name }}</td>
        </tr>



        <tr class="odd">
            <td width="50%">MOTHER NAME</td>
            <td width="50%">{{ $visaCheck->mother_name }}</td>
        </tr>

        <tr class="event">
            <td width="50%">DATE OF BIRTH</td>
            <td width="50%">{{ $visaCheck->d_o_b }}</td>
        </tr>




        <tr class="odd">
            <td width="50%">PASSPORT NO</td>
            <td width="50%">{{ $visaCheck->passport_no }}</td>
        </tr>

        <tr class="event">
            <td width="50%">GMAIL</td>
            <td width="50%">{{ $visaCheck->gmail }}</td>
        </tr>



        <tr class="odd">
            <td width="50%">NATIONAL ID NO</td>
            <td width="50%">{{ $visaCheck->national_id_no }}</td>
        </tr>

        <tr class="event">
            <td width="50%">PRESENT ADDRESS</td>
            <td width="50%">{{ $visaCheck->present_address }}</td>
        </tr>



        <tr class="odd">
            <td width="50%">PERMANENT ADDRESS</td>
            <td width="50%">{{ $visaCheck->permanent_address }}</td>
        </tr>

        <tr class="event">
            <td width="50%">CONTACT NO</td>
            <td width="50%">{{ $visaCheck->contact_no }}</td>
        </tr>




        <tr class="odd">
            <td width="50%">JOB</td>
            <td width="50%">{{ $visaCheck->job }}</td>
        </tr>

        <tr class="event">
            <td width="50%">JOB CATEGORY</td>
            <td width="50%">{{ $visaCheck->job_category }}</td>
        </tr>


        <tr class="odd">
            <td width="50%">DATE OF ISSUE</td>
            <td width="50%">{{ $visaCheck->date_of_issue }}</td>
        </tr>




    </table>
    <p class="borderAfterTable"></p>

    <a href="{{ url()->previous() }}">
        <h4 class="informationTitle mb-3"> Go Back</h4>
    </a>

</div>



@endsection
