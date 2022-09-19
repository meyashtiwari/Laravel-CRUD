@extends('layouts.dashboard-layout')
@section('title', 'Dashboard')

@section('dashboard-content')

    <div class="d-flex container">
        <div class="mt-5 pt-5 container">
            <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Record created</th>
                    <th scope="col">Last Updated</th>
                    <th scope="col">Options</th> 
                </tr>
            </thead>
            @if($candidates)
                <tbody>
                    @foreach($candidates as $candidate)
                        <tr>
                            <th scope="row">{{ $candidate->id }}</th>
                            <td>{{ $candidate->fname }}</td>
                            <td>{{ $candidate->lname }}</td>
                            <td>{{ $candidate->status }}</td>
                            <td>{{ $candidate->created_at }}</td>
                            <td>{{ $candidate->updated_at }}</td>
                            <td>
                                <span>
                                    <form id="edit-form-{{ $candidate->id }}" action="{{ route('candidate.edit', $candidate->id) }}" method="GET" class="d-inline">
                                        @csrf
                                        <button class="d-inline" type="submit">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                    </form>
                                </span>
                                <span>
                                    <form id="delete-form-{{ $candidate->id }}" action="{{ route('candidate.delete', $candidate->id) }}" method="POST" class="ms-1 d-inline">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE"/>
                                        <button type="submit">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </span>
                            </td>
                        </tr>
                    @endforeach        
                </tbody>
            </table>
            @endif
        </div>
    </div>

@endsection