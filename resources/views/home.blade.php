<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

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
    /* Custom styles for the background image and content */
    .bg-image {
      background-image: url('image/Untitled design (9).png'); /* Replace 'your-background-image.jpg' with your actual image URL */
      background-size: cover;
      background-position: center;
      height: 100vh; /* Adjust the height as needed */
    }

    .content {
   
      padding: 20px;
      /* margin-top: 10%;
      margin-left: 10px; */
    }
    ul li a {
      padding:2px ; /* Add padding to navbar items */
      color: #000000 !important;
      font-size: 12px;
    }
  </style>
</head>


<body>
 
  
  <div class="container-fluid bg-image" style="height: 580px" >
    @include('partials.hedr')

    <div class="row" >
      <div class="col-md-6 content"  style="margin-left:40px">
        <h3>Connect with like-minded <br>professionals share best practices.. </h3>
        <p>Ready to take your team's collaboration to the next level?<br> Sign up for Communiqa..</p>
        <a  style=" font-size:14px; width: 33%; background-color:rgb(27, 140, 216);" class="btn btn-primary" href="{{ route('login') }}">Get Started</a>
        {{-- <a  style=" font-size:14px; width: 33%; background-color:rgb(27, 140, 216);" class="btn btn-primary" href="{{ route('register') }}">Sign Up</a> --}}
      </div>
    </div>
        
    {{-- <p class="mt-2 mb-0" style="font-size: 12px; margin-left:6%">@CommuniQA All Copyrights Reserved</p> --}}
    <footer  class="footer"  style="margin-top:13%; ">
      <div class="container" style="height: 10px">
        <div class="row">
          <div class="col-md-9">
            <ul style=" white-space: nowrap; margin-left:-%;">
              <li><a href="#">Our Goal</a></li>
              <li><a href="{{ url('/view_privacy') }}">Privacy Policy</a></li>
              <li><a href="#">Help Center</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <p style="color:black; white-space: nowrap; font-size:12px ">Copyright &copy; 2024 Your Company. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
  </div>
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

  

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
