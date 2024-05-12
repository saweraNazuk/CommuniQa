<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Blog Page</title>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js/dist/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <!-- font awesome style -->
  <link href="/home/css/font-awesome.min.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/4e74520ec4.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/7539c812e5.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/4e74520ec4.js" crossorigin="anonymous"></script>
  <!-- Custom styles for this template -->
  <link href="/home/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="/home/css/responsive.css" rel="stylesheet" />


  <style>
  

  body {
  font-family: 'Montserrat', sans-serif;
  /* font-family: Roboto; */
  color: #0c0c0c;
  background-color: rgb(248,249,250);
  overflow-x: hidden;
}

   div#social-links{
/*   
display: inline-block; */
   }
   div#social-links ul li {
    /* display: inline-block; */
    margin-left: -20%;
    list-style: none;
    display: inline-block;

   }
   div#social-links ul li a{
    /* display: inline-block; */
   /* width: 10px
    
    color: rgb(68, 163, 252);
    margin-left: -60%; */
    /* margin-right: -50px; */
   }
  </style>
  

</head>


<body>
  @include('partials.header')
  
  <div class="bg-light pt-4" >
    <div class="container-fluid" style="margin-top: 10%">
        <div class="row friend-page-top-row">
            <div class="text-center">
                <!-- Profile picture -->
                <div class="add">
                    <span>
                <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="profile-picture img-responsive" style="width: 90px;height:70px">
                    </span>
                </div>

            </div>
            <div class=" text-center">
                <!-- Edit profile button -->
                <div class="add mt-4">
                 
                    <span>
                        <svg class="svg-color" xmlns="http://www.w3.org/2000/svg" height="24"
                        viewBox="0 -960 960 960" width="24" fill="currentColor">
                        <path
                            d="M500-482q29-32 44.5-73t15.5-85q0-44-15.5-85T500-798q60 8 100 53t40 105q0 60-40 105t-100 53Zm220 322v-120q0-36-16-68.5T662-406q51 18 94.5 46.5T800-280v120h-80Zm80-280v-80h-80v-80h80v-80h80v80h80v80h-80v80h-80Zm-480-40q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM0-160v-112q0-34 17.5-62.5T64-378q62-31 126-46.5T320-440q66 0 130 15.5T576-378q29 15 46.5 43.5T640-272v112H0Zm320-400q33 0 56.5-23.5T400-640q0-33-23.5-56.5T320-720q-33 0-56.5 23.5T240-640q0 33 23.5 56.5T320-560ZM80-240h480v-32q0-11-5.5-20T540-306q-54-27-109-40.5T320-360q-56 0-111 13.5T100-306q-9 5-14.5 14T80-272v32Zm240-400Zm0 400Z" />
                    </svg>
                        {{-- <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div> --}}
  
                        <x-dropdown-link href="{{ route('profile.show') }}" style="color: black">
                            {{ __('Manage Profile') }}
                        </x-dropdown-link>
  
                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-dropdown-link>
                        @endif
                </span>
                </div>
            </div>
            <div class=" text-center">
                <!-- My friends button -->
              
                <div class="add mt-4">
                    <svg class="svg-color" xmlns="http://www.w3.org/2000/svg" height="24"
                        viewBox="0 -960 960 960" width="24" fill="currentColor">
                        <path
                            d="M500-482q29-32 44.5-73t15.5-85q0-44-15.5-85T500-798q60 8 100 53t40 105q0 60-40 105t-100 53Zm220 322v-120q0-36-16-68.5T662-406q51 18 94.5 46.5T800-280v120h-80Zm80-280v-80h-80v-80h80v-80h80v80h80v80h-80v80h-80Zm-480-40q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM0-160v-112q0-34 17.5-62.5T64-378q62-31 126-46.5T320-440q66 0 130 15.5T576-378q29 15 46.5 43.5T640-272v112H0Zm320-400q33 0 56.5-23.5T400-640q0-33-23.5-56.5T320-720q-33 0-56.5 23.5T240-640q0 33 23.5 56.5T320-560ZM80-240h480v-32q0-11-5.5-20T540-306q-54-27-109-40.5T320-360q-56 0-111 13.5T100-306q-9 5-14.5 14T80-272v32Zm240-400Zm0 400Z" />
                    </svg>
                   <a href="/myfriends"> <span>My Friends</span></a>
                </div>
            </div>

            <div class=" text-center">
                <!-- My friends button -->
              
                <div class="add mt-4">
                    <svg class="svg-color" xmlns="http://www.w3.org/2000/svg" height="24"
                        viewBox="0 -960 960 960" width="24" fill="currentColor">
                        <path
                            d="M500-482q29-32 44.5-73t15.5-85q0-44-15.5-85T500-798q60 8 100 53t40 105q0 60-40 105t-100 53Zm220 322v-120q0-36-16-68.5T662-406q51 18 94.5 46.5T800-280v120h-80Zm80-280v-80h-80v-80h80v-80h80v80h80v80h-80v80h-80Zm-480-40q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM0-160v-112q0-34 17.5-62.5T64-378q62-31 126-46.5T320-440q66 0 130 15.5T576-378q29 15 46.5 43.5T640-272v112H0Zm320-400q33 0 56.5-23.5T400-640q0-33-23.5-56.5T320-720q-33 0-56.5 23.5T240-640q0 33 23.5 56.5T320-560ZM80-240h480v-32q0-11-5.5-20T540-306q-54-27-109-40.5T320-360q-56 0-111 13.5T100-306q-9 5-14.5 14T80-272v32Zm240-400Zm0 400Z" />
                    </svg>
                   <a href="/myfriends"> <span>Friends Requests</span></a>
                </div>
            </div>
            <div class="text-center">
                <!-- Friend requests button -->
                <div class="add mt-4">
                    <svg class="svg-color" xmlns="http://www.w3.org/2000/svg" class="ionicon"
                        viewBox="0 0 512 512" width="24px" height="24px" fill="currentColor">
                        <path
                            d="M368 415.86V72a24.07 24.07 0 00-24-24H72a24.07 24.07 0 00-24 24v352a40.12 40.12 0 0040 40h328"
                            fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                        <path d="M416 464h0a48 48 0 01-48-48V128h72a24 24 0 0124 24v264a48 48 0 01-48 48z"
                            fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="32"
                            d="M240 128h64M240 192h64M112 256h192M112 320h192M112 384h192" />
                        <path
                            d="M176 208h-64a16 16 0 01-16-16v-64a16 16 0 0116-16h64a16 16 0 0116 16v64a16 16 0 01-16 16z" />
                    </svg>
                 <a href="\view_blog" style="color: black">   <span>CommuniQA Blogs</span></a>
                </div>
            </div>
            <div class=" text-center">
                
                <div class="add mt-2">
                    <form  action="search_data" method="GET"  class="form-inline ml-0"  style="margin-left:-5px; border-left: 1px solid rgb(224, 221, 221);" >
                        <input  class="form-control  mt-2" name="query" type="search" placeholder="Find Friends" aria-label="Search" style="width: 78%">
                        <button  class="nav_search-btn" type="submit" style="height: 37px; margin-top:-12px"> <i class="fa fa-search" aria-hidden="true" style="color: white"></i></button>
                     </form>
                    
                </div>
            </div>
        </div>
        <div class="row friend-page-bottom-row">
            <div class="col-md-8 col-sm-12 col-xs-12 my-friends-section">
                <!-- My friends list will go here -->
               <div style="border-bottom: 1px solid rgb(231, 227, 227)"> <h5>My Friends</h5></div>
                @if(session()->has('message'))
                <p class="alert alert-success" style="font-size: 10px; color:white; background:rgb(25, 157, 239)">
                    {{ session()->get('message') }}
                    <button type="button" class="margin-top-5px;padding:5px" data-dismiss="alert">&times</button>
                </p>
                
                @endif

                @if(session()->has('delmessage'))
                <p class="alert alert-danger" style="font-size: 10px; color:white; background:rgb(211, 3, 3)">
                    {{ session()->get('delmessage') }}
                    <button type="button" class="margin-top-5px;padding:5px" data-dismiss="alert">&times</button>
                </p>
                
                @endif
              
                    <div class="card-body">
                       @foreach ( $users as $user)
                           
                     
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{asset($user->profile_photo_url)}}" class="img-fluid rounded-circle" alt="Image" style="height: 50px; width:50px">
                            </div>
                            <div class="col-md-3 mt-1">
                                <span class="card-title fw-bold" style="font-size: 13px;">{{ $user->name }} </span>
                                {{-- <p class="card-text" style="font-size: 14px;">Web Developer</p> --}}
                            </div>
                            
                           
                             <div class="col-md-2 mt-0">
                                <a href="{{ url('deleterequest',$user->id) }}">   <button  id="regiscss"  style=" width:100%;font-size:11px; color:rgb(255, 255, 255);border:1px solid rgb(27, 140, 216)" type="submit" class="btn  btn-sm fw-bold">Remove</button>
                                </a> 
                                 </div>
                             
                </div>
                        @endforeach
            </div>
           
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 footer-section">
            <!-- Footer content will go here -->
            
            <div class="recent-posts" style="padding: 12px; background-color:transparent; text-align:center ">
                <h4 class="mt-4" style="font-size: 18px;color: rgb(27, 140, 216);margin-left:8%"><strong>Communi<span class="text-primary" style="font-size: 15px">QA</span></strong></h4>
              
                <div class="row justify-content-center mt-4 d-flex" style="font-size: 9px; margin-left:-38%">
                  <div class="col-md-2 d-flex">
                      <ul class="list-unstyled d-flex">
                          <li>About Us</li>
                      </ul>
                  </div>
                  <div class="col-md-2">
                      <ul class="list-unstyled">
                          <li>Our Goals</li>
                      </ul>
                  </div>
                  <div class="col-md-2">
                      <ul class="list-unstyled">
                          <li>Our Services</li>
                      </ul>
                  </div>
              </div>
              <div class="row justify-content-center d-flex" style=" font-size: 9px; margin-top:-5; margin-left:-34%">
                  <div class="col-md-2 d-flex">
                      <ul class="list-unstyled d-flex" >
                          <li>Privacy Policy</li>
                      </ul>
                  </div>
                  <div class="col-md-2">
                      <ul class="list-unstyled">
                          <li>Contact Us</li>
                      </ul>
                  </div>
              </div>
                
                <p class="mt-2 mb-0" style="font-size: 12px; margin-left:8%">@CommuniQA All Copyrights Reserved</p>
              </div>
            </div>
           
               
               
              </div>
        
        
        </div> 

    </div>
        </div>
    </div>
    
  </div>
  
   {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
      
      <script>
        // Get the chat box container
const chatBox = document.getElementById('chat-box');

// Get the chat link
const chatLink = document.getElementById('chat-link');

// Add event listener to chat link
chatLink.addEventListener('click', () => {
	// Redirect to your real-time chat app URL
	window.location.href = '/chatify';
});
      </script>
      
      <script>
       setTimeout(function() => {
        $("#friend-request-alert").alert('close');
        
       }, 60000);


        $(document).ready(function () {
            // Function to hide elements based on screen sizes
            function hideElements() {
                if ($(window).width() <= 991) {
                    // Hide elements inside main row
                    $(".main").hide();
                } else if ($(window).width() <= 1024) {
                    // Check if screen size is medium
                    // Hide elements inside last column of main row
                    $(".first").hide();
                } else {
                    // Show all elements if screen size is larger than medium
                    $(".main").show();
                }
            }

            // Call the function initially to hide elements based on screen size
            hideElements();

            // Call the function whenever the window is resized
            $(window).resize(function () {
                hideElements();
            });
        });
    </script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="{{ asset('js/share.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>



