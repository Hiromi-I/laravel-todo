@extends('layouts.base')
@section('title', '編集')

@section('content')
  <form action="{{ action('TaskController@update', $task) }}" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" name="name" value="{{ old('name', $task->name) }}">
    <select name="status" id="status">
      @foreach($status_set as $status_index => $status_label)
      <option value="{{ $status_index }}" {{ ($status_index == old('status', $task->status)) ? 'selected' : '' }}>{{ $status_label }}</option>
      @endforeach
    </select>
    <input type="submit" value="Update">
  </form>

  @error('name')
    <p>{{ $message }}</p>
  @enderror
@endsection