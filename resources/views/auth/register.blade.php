<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <div>
                <img src="{{asset('image/Logo.png') }}" style="width:45%" class="max-auto mt-2 ms-8">
            </div>
            <div class="ms-8 mt-12">
                <h1 class="block mt-1" style="font-weight:bold; width:80%; font-size:15px; font-family:verdana" >SignUp</h1>
                <h6 class=" text-sm text-black-500  width:80%" style="font-size: 12px">Provide required details to SignUp!</h6>
            </div>


            <div class="mt-8 ms-8">
                {{-- <x-label for="name" value="{{ __('Name') }}" /> --}}
                <x-input style="border-radius: 20px; font-size:14px; width:90%" id="name" placeholder="Name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4 ms-8">
                {{-- <x-label for="email" value="{{ __('Email') }}" /> --}}
                <x-input style="border-radius: 20px; font-size:14px; width:90%" id="email" placeholder="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4 ms-8">
                {{-- <x-label for="password" value="{{ __('Password') }}" /> --}}
                <x-input style="border-radius: 20px; font-size:14px; width:90%" id="password" placeholder="Password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4 ms-8">
                {{-- <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" /> --}}
                <x-input  style="border-radius: 20px; font-size:14px; width:90%" id="password_confirmation" placeholder=" Confirm Password" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4 ms-8">
                    <x-label for="terms">
                        <div class="flex items-center" style="width: 105%; font-size:12px">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2 " style="width: 80%; font-size:10px">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif
            <div class="flex items-center ms-8 mt-6">
               

                <x-button  class="ms-4"  class="text-center mt-1 " style="border-radius: 20px; width:90%">
                
                    <h1 class="mx-auto">{{ __('SignUp') }}</h1>
                 
                </x-button>
                
            </div>
            <div class="flex items-center ms-9   mt-6" style="width: 80%">
               
                <span class="flex items-center  " style="border-top: 1px solid rgb(122, 114, 114); width:35%"></span> <h1 class="mx-auto " style="font-size: 8px">or continue with</h1> <span class="flex items-center " style="border-top: 1px solid rgb(97, 94, 94); width:35%"></span>
         </div>
         <div class="mx-auto flex items-center mt-5" style="width: 90%">
             <button style="width: 90px; height:38px; border:1px solid rgb(171, 167, 167); border-radius:8px" class="mx-auto flex items-center">
                
                 <img src="{{asset('image/google-1088004_1920.png') }}" style="width:25px" class="max-auto ms-8">

             </button>
             <button style="width: 90px; height:38px; border:1px solid rgb(171, 167, 167); border-radius:8px" class="mx-auto flex items-center">
                
                 <img src="{{asset('image/facebook-2815970_1920.jpg') }}" style="width:25px" class="max-auto ms-8">

             <button>
             <button style="width: 90px; height:38px; border:1px solid rgb(171, 167, 167); border-radius:8px" class="mx-auto flex items-center ">
                
                 <img src="{{asset('image/apple-7408883_1920.png') }}" style="width:25px" class="max-auto ms-8">

             </button>
             
         </div>

            
            <div class="flex items-center ms-8 mt-12" style="width: 80%; font-size:12px">
                Already have an account?
                <a class="underline text-sm text-blue-600 hover:text-green-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
