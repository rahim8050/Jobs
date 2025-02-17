<x-bootstrapcss>
    <x-card>
    @include('partials.search')
    </x-card>
    <x-styling>
    @unless (count($jobs)==0)
        
  
    @foreach ($jobs as $job )
        <h2>{{$job['title']}}</h2>
        <p class="text-success">{{$job['id']}}</p>
        <p class="text-success font-mono 5rem">{{$job['description']}}</p>
    @endforeach
    @else
    <p class="text-info">no job found</p>
    @endunless
    </x-styling>
</x-bootstrapcss>
    
 

