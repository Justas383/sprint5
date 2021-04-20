  
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update project</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('projects.update', $projects->id) }}">
                            @csrf @method("PUT")
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="project_name" class="form-control" value="{{ $projects->project_name }}">
                            </div>
                            <div class="form-group">
                                <label for="">Description:</label>
                                <textarea type="text" name="description" rows=10 cols=100
                                    class="form-control">{{ $projects->description }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection