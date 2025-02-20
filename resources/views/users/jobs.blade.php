{{-- @include('partials.hero')
@include('partials.search') --}}
@extends('display')
@section('content')
    @unless (count($jobs) == 0)
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($jobs as $job)
          
                <!-- Item 4 -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="images/skynet.png"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="show.html">Backend Laravel Dev</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">
                                Skynet Systems
                            </div>
                            <ul class="flex">
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    Laravel
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    API
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    Backend
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    Vue
                                </li>
                            </ul>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i>
                                Daytona, FL
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="images/wonka.png"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="show.html">Junior Developer</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">
                                Wonka Industries
                            </div>
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
                                <i class="fa-solid fa-location-dot"></i> San
                                Francisco, CA
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    @else
        <p class="text-info">no job found</p>
    @endunless
    @endsection
