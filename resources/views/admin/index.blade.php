@extends('layouts.app')

@section('index')
@if(session()->has('message'))
  <div class="alert alert-success">{{session()->get('message')}}</div>
@endif
@include('layouts.header')
@include('layouts.banner')
@include('layouts.services')
@include('layouts.about')

@include('layouts.contact')
@include('layouts.fooder')
@endsection