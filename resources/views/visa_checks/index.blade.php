<!-- resources/views/visa_checks/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4">Visa Checks</h2>
        <a href="{{ route('visa_checks.create') }}" class="btn btn-primary mb-3">Add Visa Check</a>

        @if(count($visaChecks) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($visaChecks as $visaCheck)
                        <tr>
                            <th scope="row">{{ $visaCheck->id }}</th>
                            <td>{{ $visaCheck->name }}</td>

                            <td>
                                <img width="50px" src="{{ asset('storage/images/'.$visaCheck->image) }}" alt=""></td>

                            <td>{{ $visaCheck->status }}</td>
                            <td>
                                <a href="{{ route('visa_checks.show', $visaCheck->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('visa_checks.edit', $visaCheck->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('visa_checks.destroy', $visaCheck->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No Visa Checks found.</p>
        @endif
    </div>
@endsection
