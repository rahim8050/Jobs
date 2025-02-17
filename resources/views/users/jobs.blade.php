<x-bootstrapcss>
    <x-card>
    @include('partials.search')
    <div
                class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
            >
            
                
             
 
    @unless (count($jobs)==0)

    @foreach ($jobs as $job )
        <h2>{{$job['title']}}</h2>
        <p class="text-success">{{$job['id']}}</p>
        <p class="text-success font-mono 5rem">{{$job['description']}}</p>
        
    @endforeach
  
    @else
    <p class="text-info">no job found</p>
    @endunless

    </div>
</x-card>
</x-bootstrapcss>
    
 

