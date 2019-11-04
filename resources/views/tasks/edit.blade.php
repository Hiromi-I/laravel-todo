@extends('layouts.base')
@section('title', '編集')

@section('content')
<h1 class="mb-4">タスク編集</h1>

  @error('name')
  <div class="alert alert-danger mb-4" role="alert">{{ $message }}</div>
  @enderror

  <form action="{{ action('TaskController@update', $task) }}" method="POST" class="taskForm">
    @csrf
    @method('PATCH')

    <div class="form-group mb-4">
      <label for="taskName">タスク名</label>
      <input id="taskName" type="text" name="name" class="form-control" value="{{ old('name', $task->name) }}">
    </div>

    <div class="form-group mb-4">
      <label for="status">進行状況</label>
      <select id="status" name="status" class="custom-select custom-select-lg">
        @foreach($status_set as $status_index => $status_label)
        <option value="{{ $status_index }}" {{ ($status_index == old('status', $task->status)) ? 'selected' : '' }}>{{ $status_label }}</option>
        @endforeach
      </select>
    </div>

    <div class="buttonContainer">
      <input type="submit" value="Update" class="btn btn-primary btn-lg">
    </div>
  </form>


@endsection