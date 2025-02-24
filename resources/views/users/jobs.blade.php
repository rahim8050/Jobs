

@extends('display')
@section('content')
@include('partials.hero')
@include('partials.search')
<x-card>
    @unless (count($jobs) == 0)
        
            @foreach ($jobs as $job)
            
              <x-listig-card :job="$job" />
                             
            @endforeach

</x-card>
        
    @else
        <p class="text-info">no job found</p>
    @endunless
    @endsection
