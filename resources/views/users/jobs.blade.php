
    {{-- @include('partials.search') --}}
 
     <x-card>   
        <div
        class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
    >
    
            <img
                class="hidden w-48 mr-6 md:block"
                src="{{ url ('frontend/images/rahim.jpeg')}}"
                alt=""
            
    @unless (count($jobs)==0)

    @foreach ($jobs as $job )
    <a href="/jobs/{{$job['id']}}">
        <h2>{{$job['title']}}</h2>
    </a>
    
        <p class="text-success font-mono 5rem">{{$job['description']}}</p>
        <p> {{$job['tags']}}</p>
        
    @endforeach
  
    @else
    <p class="text-info">no job found</p>
    @endunless
        </div>
     </x-card>






    
 

