@extends('layouts.base')
@section('title', '新規作成')

@section('content')
<h1 class="mb-4">タスクを新規作成</h1>

  @error('name')
  <div class="alert alert-danger mb-4" role="alert">{{ $message }}</div>
  @enderror

  <form action="{{ action('TaskController@store') }}" method="POST" class="taskForm">
    @csrf

    <div class="form-group mb-4">
      <label for="taskName">タスク名</label>
      <input id="taskName" type="text" name="name" class="form-control">
    </div>

    <div class="buttonContainer">
      <input type="submit" value="Add" class="btn btn-primary btn-lg">
    </div>
  </form>

@endsection