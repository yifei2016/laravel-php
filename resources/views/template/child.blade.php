@extends('template.master')

@section('top')
  @parent
  <p>this is child top</p>
@endsection

@section('content')
  @include('template.inc')
@endsection
