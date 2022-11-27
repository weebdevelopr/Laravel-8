@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Show task</h2>
        <div class="lead">

        </div>

        <div class="container mt-4">
            <div>
                Title: {{ $task->title }}
            </div>
            <div>
                Subject: {{ $task->subject }}
            </div>
            <div>
                Description: {{ $task->description }}
            </div>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('tasks.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection