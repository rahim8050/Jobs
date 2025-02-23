@props(['job'])
<div class="border border-gray-200 w-full mb-6">
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{('frontend/img/rahim.jpeg')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/jobs/{{$job->id}}">{{$job->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$job->company}}</div>
            <ul class="flex">
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">Laravel</a>
                </li>
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">API</a>
                </li>
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">Backend</a>
                </li>
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">Vue</a>
                </li>
            </ul>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$job->location}}
                
            </div>
        </div>
    </div>
</div>