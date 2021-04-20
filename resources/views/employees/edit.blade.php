  
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" >Update employee information</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('employees.update', $employee->id) }}">
                            @csrf @method("PUT")
                            <div class="form-group">
                                <label>Name: </label>
                                <input type="text" name="employee_name" class="form-control" value="{{ $employee->employee_name }}">
                            </div>
                            <div class="form-group">
                                <label>Surname: </label>
                                <input type="text" name="employee_surname" class="form-control" value="{{ $employee->employee_surname }}">
                            </div>
                            <div class="form-group">
                                <label>Project: </label>
                                <select name="project_id" id="" class="form-control">
                                    <option value="" selected disabled>Choose project</option>
                                    @foreach ($projects as $project)
                                        <option value="{{ $project->id }}" @if ($project->id == $project->project_id) selected="selected" @endif>
                                            {{ $project->project_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" >Patvirtint</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection