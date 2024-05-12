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
    <div class="container  " style="margin-top: 10%; ">
        <div class="row " >
            <div class="main first col-lg-3  ">
                <div class="card" style="width: 16rem; height: 15rem; border-radius: 20px;">
                  
                    <img class="h-8 w-8 rounded-full object-cover"  />
                
                    <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" style="height: 7rem; border-top-right-radius: 20px; border-top-left-radius: 20px;">
                    <div class="profile" style="border-bottom: 1px solid rgb(190, 190, 190);">
                       
                        <div class="block px-4 py-2 text-xs text-gray-400">
                          {{ __('Manage Account') }}
                      </div>

                      <x-dropdown-link href="{{ route('profile.show') }}" style="color: black">
                          {{ __('Profile') }}
                      </x-dropdown-link>

                      @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                          <x-dropdown-link href="{{ route('api-tokens.index') }}">
                              {{ __('API Tokens') }}
                          </x-dropdown-link>
                      @endif

                      <div class="border-t border-gray-200"></div>
                        {{-- <h6 class="card-title">Karim saif</h6>
                        <p class="card-text">Software Engineer</p> --}}
                    </div>
                    <div class="addaccount">
                        <svg class="svg-color" xmlns="http://www.w3.org/2000/svg" height="20"
                            viewBox="0 -960 960 960" width="20" fill="currentColor">
                            <path
                                d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z" />
                        </svg>
                        <span>Add another account</span>
                    </div>
                </div>

                <div class="bg-light pt-4" style="width: 16rem;">
                    <div class="Post bg-white border-gray">
                        <div class="add ">
                            <svg class="svg-color" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 -960 960 960" width="24" fill="currentColor">
                                <path
                                    d="m380-300 280-180-280-180v360ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                            </svg>
                            <a href="/myposts"> <span style="color:rgb(27, 140, 216)">My Posts</span></a>
                        </div>
                        <div class="add">
                            <svg class="svg-color" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 -960 960 960" width="24" fill="currentColor">
                                <path
                                    d="M500-482q29-32 44.5-73t15.5-85q0-44-15.5-85T500-798q60 8 100 53t40 105q0 60-40 105t-100 53Zm220 322v-120q0-36-16-68.5T662-406q51 18 94.5 46.5T800-280v120h-80Zm80-280v-80h-80v-80h80v-80h80v80h80v80h-80v80h-80Zm-480-40q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM0-160v-112q0-34 17.5-62.5T64-378q62-31 126-46.5T320-440q66 0 130 15.5T576-378q29 15 46.5 43.5T640-272v112H0Zm320-400q33 0 56.5-23.5T400-640q0-33-23.5-56.5T320-720q-33 0-56.5 23.5T240-640q0 33 23.5 56.5T320-560ZM80-240h480v-32q0-11-5.5-20T540-306q-54-27-109-40.5T320-360q-56 0-111 13.5T100-306q-9 5-14.5 14T80-272v32Zm240-400Zm0 400Z" />
                            </svg>
                            <span>My Friends</span>
                        </div>
                        {{-- <div class="add">
                            <svg class="svg-color" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 -960 960 960" width="24" fill="currentColor">
                                <path
                                    d="M120-40v-640q0-33 23.5-56.5T200-760h400q33 0 56.5 23.5T680-680v640L400-160 120-40Zm80-122 200-86 200 86v-518H200v518Zm560 2v-680H240v-80h520q33 0 56.5 23.5T840-840v680h-80ZM200-680h400-400Z" />
                            </svg>
                            <span>Bookmarks</span>
                        </div> --}}
                        <div class="add">
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
                        <div class="add">
                           
                            
                        </div>
                    </div>
                </div>

                <div class="bg-light pt-4" style="width: 16rem;">
                    <div class="Post bg-white border-gray">
                        <div class="m-3" style="border-bottom: 1px solid rgb(190, 190, 190);">
                            <h6>RECENTS</h6>

                        </div>
                        <div class="mb-3 ml-4">
                           
                           
                            <?php $columnCount = 0; ?>
                            @foreach ($recentPosts as $recent)
                            <div class="mt-2">
                              
                                <span class="bg-light ms-4">
                                   
                                        
                                    
                                    <a href="/forum" class="text-decoration-none text-reset" style="border: 1px solid rgb(230, 219, 219); font-size:12px">
                                        {{ $recent->title}}
                                    </a>
                                    
                                </span>
                                
                            </div>
                            <?php $columnCount++; ?>
                                @if ($columnCount%8== 0)
                                   <br>
                                @endif
                                @endforeach
                        </div>



                    </div>
                </div>

            </div>




            <div class=" center col-lg-6 ">
                <div class=" bg-white border-gray rounded">
                    <div class="row ">
                        {{-- <div class="col">
                          
                            <img id="profile" class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" style="height: 24px; width:24px">
                            <input class="w-50  border-gray text-gray-dark rounded-pill bg-light ps-2 text-start"
                                type="search" placeholder="Write something....">
                        </div> --}}
                    </div>
                    <div class="row text-gray-darker p-3 m-0 " style="background-color: #f4fcff;">
                        <div class="col  text-center border-end hover-dark">
                            {{-- <img src="images/photo.png" width="18px" height="18px"> --}}
                            <span style="font-size: 13px;">Photo</span>
                            <i class="fa-regular fa-images"></i>
                        </div>
                        <div class="col text-center border-end hover-dark">
                           
                           
                            <a href="\forum\recent" style="color: black">
                              
                              <span style="font-size: 13px;">Recent Threads</span>
                              <i class="fa-regular fa-message"></i>
                            </a>
                        </div>
                        <div class="col text-center hover-dark">
                           
                         <a href="\chatify" style="color: black">
                            <span style="font-size: 13px;">Ask</span>
                            <i class="fa-solid fa-question"></i>
                          </a>
                        </div>
                    </div>
                    
              
                </div>
                <div style="background: white;border:1px solid white;width:100%; border-radius:50px;height:45px" class="row text-gray-darker p-3 mt-3 ml-1 " style="background-color: #ffffff;">
                    <div class="col  text-center border-end hover-dark">
                        {{-- <img src="images/photo.png" width="18px" height="18px"> --}}
                        {{-- <span style="font-size: 13px;">Photo</span>
                        <i class="fa-regular fa-images"></i> --}}
                    </div>
                    <div class="col text-center border-end hover-dark mb-1">
                       
                    
                          
                          <span style="font-size: 15px;font-weight:bold">My Posts</span>
                          {{-- <i class="fa-regular fa-message"></i> --}}
                        
                    </div>
                    <div class="col text-center hover-dark">
                       
                     {{-- <a href="\chatify" style="color: black">
                        <span style="font-size: 13px;">Ask</span>
                        <i class="fa-solid fa-question"></i>
                      </a> --}}
                    </div>
                </div>



                
               
                <div class="posts-section">
                    <!-- Posts will be displayed here -->
                    @foreach ($forumposts as $forumpost)
                    <div class="post bg-white border-gray mt-3">
                      
                        @php
                                        $user = DB::table('users')->where('id', $forumpost->author_id)->first();
                                        
                                    @endphp
                        <div class="post-title pt-2 d-flex justify-content-between">
                            <div class="d-flex">
                                <img class="post-profile rounded-circle" src="{{ Storage::url($user->profile_photo_path) }}" class="card-img-top" alt="Profile Photo">
                                <div class="d-flex flex-column">
                                    <span class="fw-bold fs-6 mt-2">{{ $user->name }}</span>
                                    
                                    <span class=" fs-6">{{ $forumpost->created_at->diffForHumans() }}</span>
                                    
                                </div>
                            </div>
                            <div class="p-2 text-gray-dark">
                                <button class="btn rounded-circle hover-dark p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                        width="24" fill=currentColor>
                                        <path
                                            d="M480-160q-33 0-56.5-23.5T400-240q0-33 23.5-56.5T480-320q33 0 56.5 23.5T560-240q0 33-23.5 56.5T480-160Zm0-240q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm0-240q-33 0-56.5-23.5T400-720q0-33 23.5-56.5T480-800q33 0 56.5 23.5T560-720q0 33-23.5 56.5T480-640Z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
    
                        <div class="col post-body pt-2 ps-3">
                            <div class="post-text pt-1">
                                <p>
                                    {{ $forumpost->content }}
                                </p>
                            </div>
                          
                        </div>
                        <div class="col post-image pt-2">
                            <img class="img-fluid" style="width: 100%;" src="images/karim saif.jpg">
                        </div>
                        <div class="col">
                          <div style="font-size: 11px; display:flex; margin: 5px">
    
                          
                           
                       
                        </div>
                        </div>
                      
                    </div>
                    @endforeach
    
                   
                    <div class="no-posts-message text-center" id="no-posts-message">You have Nothing posted yet! <a href="/forum/"><button id="regiscss" style="width:20%;padding:5px; border:1px solid rgb(27, 140, 216);border-radius:5px">Create Post</button ></a> </div>
                </div>
               
                   
               
                {{-- <div class="my-3 " style="font-size:8px">
                    {{$forum->links('pagination::bootstrap-5') }}
                </div> --}}

            </div>

           



            <div class=" main last col-3 ">

                <div class="card" style="width: 19rem;  border-radius: 20px;">
                    <div class="card-header fw-bold bg-white"
                        style=" border-top-left-radius: 20px; border-top-right-radius: 20px;">
                        People you may know
                    </div>
                    <div class="card-body">
                       @foreach ( $users as $user)
                           
                     
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{asset($user->profile_photo_url)}}" class="img-fluid rounded-circle" alt="Image" style="height: 40px; width:40px">
                            </div>
                            <div class="col-md-4 mt-1">
                                <span class="card-title fw-bold" style="font-size: 13px;">{{ $user->name }} </span>
                                {{-- <p class="card-text" style="font-size: 14px;">Web Developer</p> --}}
                            </div>
                            
                            <div class="col-md-4 mt-0">
                            <a href="{{ url('sendrequest',$user->id) }}">   <button id="regiscss"  style=" width:100%;font-size:11px; color:rgb(255, 255, 255);border:1px solid rgb(27, 140, 216)" type="submit" class="btn  btn-sm fw-bold">+Add</button>
                            </a> 
                             </div>
                             {{-- <div class="col-md-2 mt-0">
                                <a href="{{ url('deleterequest',$user->id) }}">   <button  style="font-size: 11px;color:rgb(27, 140, 216)" type="submit" class="btn  btn-sm fw-bold">Remove</button>
                                </a> 
                                 </div> --}}
                             
                </div>
                        @endforeach
                    </div>
                    <div class="card-footer text-center  bg-white"
                        style=" border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; ">
                        <a href="#" class="text-decoration-none" style="color:rgb(27, 140, 216)" >See All </a>
                    </div>
                </div>

                
                    
                    <div class="card-body">
                        <div class="chat-box" id="chat-box">
                            <!-- Chat box header -->
                            <div class="chat-box-header">
                                <h6>Live Chat
                                    <img src="{{asset('image/speech-35342_1920.png')}}" alt="" srcset="" style="height: 30px; width:30px">
                                </h6>
                                
                            </div>
                            <!-- Chat box content -->
                            <div class="chat-box-content">
                                <p>Need help? Talk to Dev!</p>
                                <!-- Link to your real-time chat app -->
                                <a href="#" id="chat-link">Start Chatting</a>
                            </div>
                        </div>
                    </div>
                    
                </div>

                

                {{-- <div class="recent-posts" style="padding: 12px; background-color:transparent; text-align:center ">
                    <h4 class="mt-4" style="font-size: 18px;color: rgb(27, 140, 216);">Communi<span
                            class="text-primary" style="font-size: 16px"><strong>QA</span></strong></h4> --}}
{{-- 
                    <div class="row justify-content-center mt-4 d-flex" style="font-size: 9px; margin-left:-22%">
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
                    <div class="row justify-content-center d-flex"
                        style=" font-size: 9px; margin-top:-5; margin-left:-22%">
                        <div class="col-md-2 d-flex">
                            <ul class="list-unstyled d-flex">
                                <li>Privacy Policy</li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <ul class="list-unstyled">
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>

                    <p class="mt-2 mb-0" style="font-size: 14px;">@CommuniQA All Copyrights Reserved</p>
                </div> --}}

            </div>



        </div>
    </div>
</div>
</div>
</div>      
    {{-- <p class="mt-2 mb-0" style="font-size: 12px; margin-left:6%">@CommuniQA All Copyrights Reserved</p> --}}

  <div class=" p-2 text-center" id="posts" style=";margin-left: 0%; background-color:transparent; width:100%; text-align: center;">
    <h4 class="mt-4" style="font-size: 18px; color: rgb(27, 140, 216);"><strong>Communi<span class="text-primary" style="font-size: 15px">QA</span></strong></h4>
    <div class=" row justify-content-center mt-4 d-flex" style="font-size: 9px;margin-left:10%">
      <div class="foter" class="col-md-2 d-flex">
          <ul class="list-unstyled d-flex" style="margin-left: -5%;">
            
              <li>Our Goals</li>
              <li>Privacy Policy</li>
              <li>Help Center</li>
            
           
          </ul>
      </div>
      
     
      
  </div>
  
    
    <p class="mt-2 mb-0" style="font-size: 14px;">@CommuniQA All Copyrights Reserved</p>
  </div>
  
</div>
 
    </div>
  </div>
  
   {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

   <script>
    const postsSection = document.querySelector('.posts-section');
const noPostsMessage = document.querySelector('#no-posts-message');

// Assume posts is an array of post objects
if (forumposts.length === 0) {
	noPostsMessage.style.display = 'block';
} else {
	noPostsMessage.style.display = 'none';
}
   </script>
      {{-- <script>
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
    </script> --}}

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="{{ asset('js/share.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>



