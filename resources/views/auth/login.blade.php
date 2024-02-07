<x-guest-layout  style="width: 100%">
    <x-authentication-card>
        <x-slot name="logo" class="ms-5">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
       
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <img src="{{asset('image/Logo.png') }}" style="width:45%" class="max-auto mt-2 ms-8">
            </div>
            <div class="ms-8 mt-12">
                <h1 class="block mt-1" style="font-weight:bold; width:90%; font-size:15px; font-family:verdana" >Login</h1>
                <h6 class=" text-sm text-black-500  width:80%" style="font-size: 12px">Provide required details to login!</h6>
            </div>
             
            <div  class="flex items-center ms-8 mt-5">
                {{-- <x-label for="email" value="{{ __('Email') }}" /> --}}
                <x-input style="border-radius: 20px; font-size:14px; width:90%" id="email" class="block mt-1" type="email" name="email" placeholder="Email" :value="old('email')"  autofocus autocomplete="username" />
            </div>

            <div class="flex items-center ms-8 mt-4">
                {{-- <x-label for="password" value="{{ __('Password') }}" /> --}}
                <x-input style="border-radius: 20px; font-size:14px; width:90%" id="password" class="block mt-1 " type="password"  name="password" placeholder="Password"  autocomplete="current-password" />
            </div>

            
            {{-- <div class="flex items-center justify-end mt-4" style="width: 90%"> 
                <div class="block  justify-start" style="font-size: 10px; margin-right:90px;">
                    <label for="remember_me" class="flex items-center justify-start ms-8">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ms-1 text-sm text-black-600" style="font-size: 10px">{{ __('Remember me') }}</span>
                    </label>
                </div>
                @if (Route::has('password.request'))
               <a style="font-size: 10px; " class="underline text-sm text-gray-600 hover:text-blue-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                   {{ __('Forgot your password?') }}
               </a>
           @endif
        </div> --}}
       <div class=" flex items-center ms-11 mt-2" style="width: 90%"> 
        @if (Route::has('password.request'))
        <a style="font-size: 10px; " class="underline text-sm text-gray-600 hover:text-blue-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
         @endif
         <label for="remember_me" class="ms-1">
            <x-checkbox class="ms-11" id="remember_me" name="remember" />
            <span class=" text-sm text-black-600 ms-2" style="font-size:10px; ">{{ __('Remember me') }}</span>
        </label>
        </div>

            <div class="flex items-center ms-8 mt-6">
               

                <x-button  class="ms-4"  class="text-center mt-1 " style="border-radius: 20px; width:90%; ">
                
                    <h1 class="mx-auto">{{ __('Login') }}</h1>
                 
                </x-button>
                
            </div>
           
            
            <div class="flex items-center ms-9   mt-6" style="width: 80%">
               
                   <span class="flex items-center  " style="border-top: 1px solid rgb(122, 114, 114); width:35%"></span> <h1 class="mx-auto " style="font-size: 8px">or continue with</h1> <span class="flex items-center " style="border-top: 1px solid rgb(97, 94, 94); width:35%"></span>
            </div>
            <div class="mx-auto flex items-center mt-5" style="width: 90%">
                <a href="{{ URL::to('googlelogin')}}" style="width: 90px; height:38px; border:1px solid rgb(171, 167, 167); border-radius:8px" class="mx-auto flex items-center">
               
                   
                    <img src="{{asset('image/google-1088004_1920.png') }}" style="width:25px" class="max-auto ms-7">

               
                 </a>
                <button style="width: 90px; height:38px; border:1px solid rgb(171, 167, 167); border-radius:8px" class="mx-auto flex items-center">
                   
                    <img src="{{asset('image/facebook-2815970_1920.jpg') }}" style="width:25px" class="max-auto ms-8">

                <button>
                <button style="width: 90px; height:38px; border:1px solid rgb(171, 167, 167); border-radius:8px" class="mx-auto flex items-center ">
                   
                    <img src="{{asset('image/apple-7408883_1920.png') }}" style="width:25px" class="max-auto ms-8">

                </button>
                
            </div>
           
           <div class="flex items-center ms-8 mt-12" style="width: 80%; font-size:12px">
            Dont have an account?
            <a class="underline text-sm text-blue-600 hover:text-green-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                {{ __('SignUp') }}
            </a>
        </div>
        
        </form>
        
    </x-authentication-card>
</x-guest-layout>

