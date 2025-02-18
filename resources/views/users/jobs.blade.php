@include('partials.hero')
@include('partials.search')

<x-card>
    @unless (count($jobs) == 0)
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($jobs as $job)
                <a href="/jobs/{{$job['id']}}">
                    <h2>{{$job['title']}}</h2>
                </a>
                <p>{{$job['tags']}}</p>
                <p class="text-success font-mono 5rem">{{$job['description']}}</p>
            @endforeach
        </div>
    @else
        <p class="text-info">no job found</p>
    @endunless
</x-card>









