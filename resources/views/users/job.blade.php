@extends('display')
@section('content')

@include('partials.search')

       <h2>{{$job['title']}}</h2>
 
   
       <p class="text-success font-mono 5rem">{{$job['description']}}</p>
       <p> {{$job['tags']}}</p>
       {{-- <img src="{{url('frontend/img/logo.png')}}" alt=""> --}}
       @endsection