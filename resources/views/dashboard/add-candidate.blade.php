@extends('layouts.dashboard-layout')
@section('title', 'Add candidate')

@section('dashboard-content')

    <div class="container min-vh-100 d-flex flex-column justify-content-evenly justify-content-center align-items-center">
        <div class="d-flex">
            <form class="flex-fill" action="{{ route('candidate.add') }}" method="POST">
            @csrf
            <div class="form-group row"> 
                <div class="input-group">
                    <input id="fname" name="first_name" placeholder="Enter candidate's first name" type="text" class="form-control" required="required"> 
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="bi bi-person-circle"></i>
                        </div>
                    </div>
                </div>
                @error('first_name')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mt-2 form-group row"> 
                <div class="input-group">
                    <input id="lname" name="last_name" placeholder="Enter candidate's last name" type="text" class="form-control"> 
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="bi bi-person-circle"></i>
                        </div>
                    </div>
                </div>
                @error('last_name')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group row">
                <span id="statusHelpBlock" class="mt-2 form-text text-white">Select candidate status</span>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="status" id="status_0" type="radio" aria-describedby="statusHelpBlock" required="required" class="custom-control-input" value="employee"> 
                    <label for="status_0" class="custom-control-label text-white">Employee</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="status" id="status_1" type="radio" aria-describedby="statusHelpBlock" required="required" class="custom-control-input" value="inactive"> 
                    <label for="status_1" class="custom-control-label text-white">Inactive</label>
                </div>
                @error('status')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
            </div> 
            <div class="mt-4 form-group row">
                <button name="submit" type="submit" class="btn btn-success">Add Candidate</button>
            </div>
            </form>
        </div>
        @if($response ?? '' != '')
            <div class="d-flex text-white badge bg-success">
                {{ $response ?? '' }}
            </div>
        @endif
    </div>

@endsection