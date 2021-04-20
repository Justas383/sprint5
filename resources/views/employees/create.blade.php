@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create employee</div>
                    <div class="card-body">
                        <form action="{{ route('employees.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Name: </label>
                                <input type="text" name="employee_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Surname: </label>
                                <input type="text" name="employee_surname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Project: </label>
                                <select name="project_id" id="" class="form-control">
                                    <option value="" selected disabled>Choose project</option>
                                    @foreach ($projects as $project)
                                        <option value="{{ $project->id }}">{{ $project->project_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Patvirtint</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection