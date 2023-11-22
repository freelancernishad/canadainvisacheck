<!-- resources/views/visa_checks/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4">Visa Check Details</h2>

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Name: {{ $visaCheck->name }}</h5>
                <p class="card-text"><strong>Image:</strong> {{ $visaCheck->image }}</p>
                <p class="card-text"><strong>Status:</strong> {{ $visaCheck->status }}</p>
                <p class="card-text"><strong>Father's Name:</strong> {{ $visaCheck->father_name }}</p>
                <p class="card-text"><strong>Mother's Name:</strong> {{ $visaCheck->mother_name }}</p>
                <p class="card-text"><strong>Date of Birth:</strong> {{ $visaCheck->d_o_b }}</p>
                <p class="card-text"><strong>Passport Number:</strong> {{ $visaCheck->passport_no }}</p>
                <p class="card-text"><strong>Gmail:</strong> {{ $visaCheck->gmail }}</p>
                <p class="card-text"><strong>National ID Number:</strong> {{ $visaCheck->national_id_no }}</p>
                <p class="card-text"><strong>Present Address:</strong> {{ $visaCheck->present_address }}</p>
                <p class="card-text"><strong>Permanent Address:</strong> {{ $visaCheck->permanent_address }}</p>
                <p class="card-text"><strong>Contact Number:</strong> {{ $visaCheck->contact_no }}</p>
                <p class="card-text"><strong>Job:</strong> {{ $visaCheck->job }}</p>
                <p class="card-text"><strong>Job Category:</strong> {{ $visaCheck->job_category }}</p>
                <p class="card-text"><strong>Date of Issue:</strong> {{ $visaCheck->date_of_issue }}</p>

                <a href="{{ route('visa_checks.index') }}" class="btn btn-primary mt-3">Back</a>
            </div>
        </div>
    </div>
@endsection
