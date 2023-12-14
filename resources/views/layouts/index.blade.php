@extends('layouts.app')
{{-- message --}}
@section('index')
@if(session()->has('message'))
  <div class="alert alert-success">{{session()->get('message')}}</div>

@endif
@if(session()->has('error'))
  <div class="alert alert-danger">{{session()->get('error')}}</div>

@endif
{{-- impoting pages --}}
@include('layouts.header')
@include('layouts.banner')
@include('layouts.services')
@include('layouts.about')
@include('layouts.gallery')
@endsection