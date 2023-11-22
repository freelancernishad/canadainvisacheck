<!-- resources/views/visa_checks/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4">Add Visa Check</h2>

        <form action="{{ route('visa_checks.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

  



            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" name="status" required>
            </div>

            <div class="mb-3">
                <label for="father_name" class="form-label">Father's Name</label>
                <input type="text" class="form-control" id="father_name" name="father_name" required>
            </div>

            <div class="mb-3">
                <label for="mother_name" class="form-label">Mother's Name</label>
                <input type="text" class="form-control" id="mother_name" name="mother_name" required>
            </div>

            <div class="mb-3">
                <label for="d_o_b" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="d_o_b" name="d_o_b" required>
            </div>

            <div class="mb-3">
                <label for="passport_no" class="form-label">Passport Number</label>
                <input type="text" class="form-control" id="passport_no" name="passport_no" required>
            </div>

            <div class="mb-3">
                <label for="gmail" class="form-label">Gmail</label>
                <input type="email" class="form-control" id="gmail" name="gmail" required>
            </div>

            <div class="mb-3">
                <label for="national_id_no" class="form-label">National ID Number</label>
                <input type="text" class="form-control" id="national_id_no" name="national_id_no" required>
            </div>

            <div class="mb-3">
                <label for="present_address" class="form-label">Present Address</label>
                <textarea class="form-control" id="present_address" name="present_address" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="permanent_address" class="form-label">Permanent Address</label>
                <textarea class="form-control" id="permanent_address" name="permanent_address" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="contact_no" class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="contact_no" name="contact_no" required>
            </div>

            <div class="mb-3">
                <label for="job" class="form-label">Job</label>
                <input type="text" class="form-control" id="job" name="job" required>
            </div>

            <div class="mb-3">
                <label for="job_category" class="form-label">Job Category</label>
                <input type="text" class="form-control" id="job_category" name="job_category" required>
            </div>

            <div class="mb-3">
                <label for="date_of_issue" class="form-label">Date of Issue</label>
                <input type="date" class="form-control" id="date_of_issue" name="date_of_issue" required>
            </div>


            <div class="mb-3">
                <label for="files" class="form-label">Upload Documents</label>
                <input type="file" class="form-control" id="files" name="files[]" multiple accept=".jpeg, .jpg, .png, .pdf">
            </div>





            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('visa_checks.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
