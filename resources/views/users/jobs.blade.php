

@extends('display')
@section('content')
@include('partials.hero')
@include('partials.search')
    @unless (count($jobs) == 0)
        
            @foreach ($jobs as $job)
            
              <x-listig-card :job="$job" />
                             
            @endforeach
        </div>
        
    @else
        <p class="text-info">no job found</p>
    @endunless
    @endsection
