{{-- @props('title'->['tile']) --}}
<x-tailwindcss>
    
    <body class="bg-gradient-primary">
    
        <div class="container">
    
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                               
                               
                                    <x-card class="p-10  max-w-lg mx-auto mt-24 ">
                                
                                    <header class="text-center">
                                        <h2 class="text-2xl font-bold uppercase mb-1">
                                            Register
                                        </h2>
                                        <p class="mb-4">Create an account to post gigs</p>
                                    </header>
                                
                                    <form method="POST" action="/users">
                                        @csrf
                                        <div class="mb-6">
                                            <label for="name" class="inline-block text-lg mb-2">
                                                Name
                                            </label>
                                            <input
                                                type="text"
                                                class="border border-gray-200 rounded p-2 w-full"
                                                name="name" value="{{old('name')}}"
                                            />
                                            @error('name')
                                               <p class="text-red-500 text xs mt-1">{{$message}}</p> 
                                            @enderror
                                        </div>
                                
                                        <div class="mb-6">
                                            <label for="email" class="inline-block text-lg mb-2"
                                                >Email</label
                                            >
                                            <input
                                                type="email"
                                                class="border border-gray-200 rounded p-2 w-full"
                                                name="email" value="{{old('email')}}"
                                            />
                                            @error('email')
                                            <p class="text-red-500 text-xs mt-1">
                                                Please enter a valid email
                                            </p> 
                                            @enderror
                                           
                                        </div>
                                
                                        <div class="mb-6">
                                            <label
                                                for="password"
                                                class="inline-block text-lg mb-2"
                                            >
                                                Password
                                            </label>
                                            <input
                                                type="password"
                                                class="border border-gray-200 rounded p-2 w-full"
                                                name="password" value="{{old('password')}}"
                                            />
                                            @error('password')
                                            <p class="text-red-500 text-xs mt-1">
                                                Please enter a valid password
                                            </p> 
                                            @enderror
                                        </div>
                                
                                        <div class="mb-6">
                                            <label
                                                for="password2"
                                                class="inline-block text-lg mb-2"
                                            >
                                                Confirm Password
                                            </label>
                                            <input
                                                type="password"
                                                class="border border-gray-200 rounded p-2 w-full"
                                                name="password_confirmation" value="{{old('password_confirmation')}}"
                                            />
                                            @error('password_confirmation')
                                            <p class="text-red-500 text-xs mt-1">
                                                Please enter a valid email
                                            </p> 
                                            @enderror
                                        </div>
                                
                                        <div class="mb-6">
                                            <button
                                                type="submit"
                                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                                            >
                                                Sign Up
                                            </button>
                                        </div>
                                
                                        <div class="mt-8">
                                            {{-- <p>
                                                Already have an account?
                                                <a href="login.html" class="text-laravel"
                                                    >Login</a
                                                >
                                            </p> --}}
                                        </div>
                                    </form>
                                    </x-card>
                                
                               
                                     
                                    
                                <hr>
                                {{-- <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div> --}}
                                <div class="text-center">
                                    <a class="small" href="{{url ('login')}}">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    
       
   






</x-tailwindcss>