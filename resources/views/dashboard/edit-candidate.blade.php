@extends('layouts.dashboard-layout')
@section('title', 'Update candidate')

@section('dashboard-content')

    <div class="container min-vh-100 d-flex flex-column justify-content-evenly justify-content-center align-items-center">
        <div class="d-flex">
            <form id="edit-form-{{ $candidate[0]->id }}" class="flex-fill" action="{{ route('candidate.update', $candidate[0]->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group row"> 
                <div class="input-group">
                    <input id="fname" name="first_name" placeholder="Enter candidate's first name to update" value="{{ $candidate[0]->fname }}" type="text" class="form-control" required="required"> 
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
                    <input id="lname" name="last_name" placeholder="Enter candidate's last name to update" value="{{ $candidate[0]->lname }}" type="text" class="form-control"> 
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
                <button name="submit" type="submit" class="btn btn-success">Update Record</button>
            </div>
            </form>
        </div>
    </div>

@endsection