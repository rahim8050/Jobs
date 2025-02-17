<x-bootstrapcss>
    @foreach ($jobs as $job )
        <h2>{{$job['title']}}</h2>
        <p class="text-success">{{$job['id']}}</p>
        <p class="text-success font-mono 5rem">{{$job['description']}}</p>
    @endforeach
</x-bootstrapcss>
    
 

