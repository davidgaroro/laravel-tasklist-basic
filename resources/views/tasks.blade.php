<!-- Stored in resources/views/tasks.blade.php -->

@extends('layouts.app')

@section('title', 'Laravel Quickstart - Basic')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-md-8 col-lg-6 mx-auto">
        
        <div class="card mt-5">
          <div class="card-header">
            New Task
          </div>
          <div class="card-body">
            <!-- TODO: Display Validation Errors -->

            <!-- New Task Form -->
            <form method="POST" action="{{ url('task')}}">
              @csrf

              <!-- Task Name -->
              <div class="form-group row">
                <label for="task-name" class="col-sm-2 col-form-label">Task</label>
                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" id="task-name" value="{{ old('task') }}">
                </div>
              </div>

              <!-- Add Task Button -->
              <button type="submit" class="btn btn-primary">Add Task</button>
            </form>
          </div>
        </div>

        <!-- TODO: Current Tasks -->
      </div>
    </div>
  </div>
@endsection
