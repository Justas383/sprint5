  
@extends('layouts.app')
@section('content')
    <div class="card-body">
        <table class="table">
            <tr>
                <th>Projektas</th>
                <th>Aprašymas</th>
                <th>Veiksmai</th>
            </tr>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->project_name }}</td>
                    <td>{{ $project->description }}</td>
                    <td>
                        <form action={{ route('projects.destroy', $project->id) }} method="POST">
                        <a class="btn btn-primary" href={{ route('projects.edit', $project->id) }}>Redaguoti</a>
                        @csrf @method('delete')
                        <input type="submit" class="btn btn-primary"  value="Trinti" style="background-color: red; " />
                        </form>
                        </td>
                </tr>
            @endforeach
        </table>
        <div>
            <a href="{{ route('projects.create') }}" class="btn btn-primary" >Pridėti naują</a>
        </div>
    </div>
@endsection