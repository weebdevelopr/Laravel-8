@extends('layouts.app-master')

@section('content')

    <div class="bg-light p-4 rounded">
        <h2>Tasks</h2>
        <div class="lead">
            Manage your tasks here.
            <a href="{{ route('tasks.create') }}" class="btn btn-primary btn-sm float-right">Add task</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">No</th>
             <th>Name</th>
             <th width="3%" colspan="3">Action</th>
          </tr>
            @foreach ($tasks as $key => $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->title }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('tasks.show', $task->id) }}">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['tasks.destroy', $task->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>

        <div class="d-flex">
            {!! $tasks->links() !!}
        </div>

    </div>
@endsection