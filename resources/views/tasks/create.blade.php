@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Add new task</h2>
        <div class="lead">
            Add new task.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('tasks.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input value="{{ old('title') }}" 
                        type="text" 
                        class="form-control" 
                        name="title" 
                        placeholder="Title" required>

                    @if ($errors->has('title'))
                        <span class="text-danger text-left">{{ $errors->first('title') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <textarea class="form-control" 
                        name="subject" 
                        placeholder="Subject" required>{{ old('subject') }}</textarea>

                    @if ($errors->has('subject'))
                        <span class="text-danger text-left">{{ $errors->first('subject') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input value="{{ old('description') }}" 
                        type="text" 
                        class="form-control" 
                        name="description" 
                        placeholder="Description" required>

                    @if ($errors->has('description'))
                        <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                

                <button type="submit" class="btn btn-primary">Save task</button>
                <a href="{{ route('tasks.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection