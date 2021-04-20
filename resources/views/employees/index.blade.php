@extends('layouts.app')
@section('content')
    <div class="card-body">
        @if ($errors->any())
            <h4 style="color: red">{{ $errors->first() }}</h4>
        @endif
        <table class="table">
            <tr>
                <th>Vardas</th>
                <th>Pavardė</th>
                <th>Projektas</th>
                <th>Veiksmai</th>
            </tr>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->employee_name }}</td>
                    <td>{{ $employee->employee_surname }}</td>
                    <td>{{ $employee->project->project_name }}</td>
                    <td>
                        <form action={{ route('employees.destroy', $employee->id) }} method="POST">
                            <a class="btn btn-primary" 
                                href={{ route('employees.edit', $employee->id) }}>Redaguoti</a>
                                @csrf @method('delete')
                                <input type="submit" class="btn btn-primary" value="Trinti"  style="background-color: red "/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div>
            <a href="{{ route('employees.create') }}" class="btn btn-primary"
                >Pridėti naują</a>
        </div>
    </div>
@endsection