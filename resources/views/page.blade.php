@extends('layouts.master')
@section('title', 'Title of the Page')

@section('sidebar')
   @parent
      <p>This is appended to the master sidebar.</p>
   @endsection
   
   @section('content')
      <h2>{{$name}}</h2>
      <p>This is my body content.</p>
   @endsection