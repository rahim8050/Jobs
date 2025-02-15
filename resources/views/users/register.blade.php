<x-layout>
    
    <body class="bg-gradient-primary">
    
        <div class="container">
    
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <form method="POST" action="/users" class="user">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName"
                                                placeholder="First Name">
                                                @error('name')
                                                <p class="text-red-500 text xs mt-1">{{$message}}</p> 
                                                @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="lastname" class="form-control form-control-user" id="exampleLastName"
                                                placeholder="Last Name">
                                                @error('lastname')
                                                <p class="text-red-500 text xs mt-1">{{$message}}</p>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                            placeholder="Email Address">
                                            @error('email')
                                            <p class="text-red-500 text xs mt-1">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                                @error('password')
                                                <p class="text-red-500 text xs mt-1">{{$message}}</p>
                                                @enderror
                                        </div>

                                        <div class="col-sm-6">
                                            <input type="password" name="password_confirmation" class="form-control form-control-user"
                                                id="exampleRepeatPassword" placeholder="Password_confirmation">
                                                @error('password_confirmation')
                                                <p class="text-red-500 text xs mt-1">{{$message}}</p>
                                                @enderror
                                        </div>
                                    </div>
                                    <a href="/users" class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </a>
                                    <hr>
                                    <a href="/users" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Register with Google
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{url ('login')}}">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    
       
   






</x-layout>