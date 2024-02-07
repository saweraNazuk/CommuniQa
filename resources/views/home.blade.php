<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
  
  <title>Responsive Navbar</title>
  <style>
   /* ::-webkit-input-placeholder{
      color: #000;
   } */
   /* :-moz-placeholder{
      color: #000;
      opacity: 1;
   } */
   /* ::-moz-placeholder{
      color: #000;
      opacity: 1;
   } */
   /* :-ms-input-placeholder{
      color: #000;
   } */
 

    .nav-item.active .li ::after {
      content: '';
      display: block;
      width: 100%;
      height: 2px;
      background-color: rgb(63, 123, 214);
    }
    /* .nav-item  :hover::after{
        content: '';
      display: block;
      width: 100%;
      text-decoration: none;
      height: 2px;
      background-color: rgb(63, 123, 214);
    } */


    /* .navbar-toggler {
      border-color: rgb(37, 95, 170);
    } */
   input::placeholder {
    color: rgb(8, 0, 0) !important;
    font-size: 14px;
    font-family:serif;
}
input[type="text"]{
    padding-inline: 45px;
    font-size: 15px;
}
ul li{
    border-bottom:2px solid rgb(80, 165, 213);
    width: 64px;
    margin-left: 6px;
    /* margin: 15px;
    padding-left:5px; */
    /* align-items:center;
    justify-items: center;
    display: flex;
    justify-content: center; */
}


ul li a{
    margin-top:16px;
    margin-left: 8px;
   
}
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom p-0 ps-5" style=" height:88px;margin-left:5px; padding-top:5px;">
   <button style="padding: 5px; margin-left: 3px; height:35px; border:none" class="navbar-toggler mt-2" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span style="height: 25px; margin-left:0px" class="navbar-toggler-icon"></span>
    </button>
  <a class="navbar-brand mt-2 " href="#">
    <img src="{{asset('image/Logo.png')}}" alt="Logo" height="25px" width="150px" style="margin-left: 25px; margin-top:-5px" >
  </a>

  <div class="navbar-nav d-lg-none ml-auto d-flex"  style="display: flex; flex-direction: row;">
   <a class="nav-item nav-link" href="#" style="margin-right: 5px;"><i class="fa fa-search" aria-hidden="true"></i></a>
   @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 " class="nav-item" style="display: flex">
                                    @auth
                                       
                                       <li class="nav-item" >
                                          <a class="btn btn-success" id="dashboard" style="text-decoration: none" href="{{ url('/dashboard') }}" class="">Profile
                                             {{-- <img src="{{ asset('image/apple-7408883_1920.png') }}" alt=""> --}}
                                             
                                          </a>
                                       </li>
                                    @else
                                    <li class="nav-item" >
                                       <a class="btn btn-primary" id="logincss" style="width: 48px; font-size:8px;font-weight:bold" href="{{ route('login') }}">Login</a>
                                    </li>
                                        @if (Route::has('register'))
                                        <li class="nav-item" style="text-decoration: none">
                                          <a class="btn btn-success" id="regiscss" style="width: 52px; font-size:8px;font-weight:bold"  href="{{ route('register') }}">SignUp</a>
                                       </li>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                       
   
  </div>



  <div class="collapse navbar-collapse justify-content-between mt-2" id="navbarNav" style="justify-content: space-between;">
    <ul class="navbar-nav" style="margin-left:px; padding-left: px; ">
      
         <li class="nav-item active" style="border: ;height:80px; ">
            <a class="nav-link" href="index.html"><i class="fa-solid fa-house" aria-hidden="true" ></i><span class="sr-only">(current)</span></a>
         </li>
        <li class="nav-item dropdown" style="height:80px;border:none; ">
            <a class="nav-link" href="#"  role="button" aria-haspopup="true" aria-expanded="true"> <i class="fa-solid fa-users-line"></i></i><span class="nav-label"> <span class="caret"></span></a>
          
         </li>
      <li class="nav-item" style=";height:80px;border:none;">
         <a class="nav-link" href="product.html"><i class="fa-solid fa-newspaper"></i></i></a>
      </li>
      <li class="nav-item" style=";height:80px;border:none;">
         <a class="nav-link" href="blog_list.html"><i class="fa-regular fa-bell" ></i></a>
      </li>
      <li class="nav-item" style=";height:80px;border:none;">
         <a class="nav-link" href="contact.html"><i class="fa-regular fa-comment-dots" ></i></a>
      </li>
      <li class="nav-item" style="height:80px;border:none;">
         <a class="nav-link" href="#">
            <i class="fa-regular fa-user"></i>
         </a>
      </li>
      <li class="nav-item" style="height:80px; border:none;">
         <a class="nav-link" href="product.html"><i class="fa-solid fa-newspaper" ></i></i></a>
      </li>
     
      
         
      <li class="nav-item" style="height:80px;border:none;">
         <a class="nav-link" href="product.html"><i class="fa-solid fa-newspaper" ></i></i></a>
      </li>
      <!-- Add more nav items as needed -->
    </ul>
  </div> 

    <div class="navbar-nav ml-auto d-none d-lg-flex mt-3 ">
      <form class="form-inline ml-2" style="border-left: 1px solid rgb(224, 221, 221);">
         <input class="form-control  mt-2" type="search" placeholder="Find Friends..." aria-label="Search" style="width: 78%">
         <button  class="nav_search-btn" type="submit" style="height: 37px; margin-top:-12px"> <i class="fa fa-search" aria-hidden="true" style="color: white"></i></button>
      </form>
      @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 " class="nav-item" style="display: flex">
                                    @auth
                                       
                                       <li class="nav-item" >
                                          <a class="btn btn-success" id="dashboard" style="text-decoration: none" href="{{ url('/dashboard') }}" class="">Profile
                                             {{-- <img src="{{ asset('image/apple-7408883_1920.png') }}" alt=""> --}}
                                             
                                          </a>
                                       </li>
                                    @else
                                    <li class="nav-item" >
                                       <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Log in</a>
                                    </li>
                                        @if (Route::has('register'))
                                        <li class="nav-item" style="text-decoration: none">
                                          <a class="btn btn-success" id="regiscss"  href="{{ route('register') }}">Sign Up</a>
                                       </li>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                       
      
    </div>

</nav>

<!-- Include jQuery, Popper.js, and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>