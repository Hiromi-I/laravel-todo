@extends('layouts.base')
@section('title', '新規作成')

@section('content')
  <form action="{{ action('TaskController@store') }}" method="POST">
    @csrf
    <input type="text" name="name">
    <input type="submit" value="Add">
  </form>

  @error('name')
    <p>{{ $message }}</p>
  @enderror
@endsection