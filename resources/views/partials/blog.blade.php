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
</style>
</head>

<body style="">
  @include('partials.header')
  
<div class="container w-full">
  <div class="row" style="margin-top: 8%">
   
       @livewire('post-list')

    <div class="col-md-4" style=" margin-left:63%; position:absolute; align-items:center">
      <div class="recent-posts" style="padding: 10px; ">
        <h3 style="height: 50px; margin-top: -40px; width: 50px; margin-left: 14px; border-radius: 50px;"alt=""> <h2 style="margin-top: -20px; margin-left: 4px; font-weight: bold;font-size: 16px;">Featured Posts</h3>
          <?php $columnCount = 0; ?>
          @foreach ($featuredpost as $post )
         <div style="display:inline-block; flex-direction:row"><p style="background-color:rgb(229, 242, 251); color:black; font-size:9px; text-align:center; width:90px; height:30px; border:2px solid rgb(230, 226, 226);border-radius:5px;"> 
          <a style="text-decoration: none;color:black;" href="{{ url('blog_details',$post->id) }}"> {{ $post->title }}</a></p>
        </div>
         <?php $columnCount++; ?>
        @if ($columnCount%3 == 0)
           <br>
        @endif
       @endforeach
         

      </div>
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
   

    <div class="col-md-4" id="recent-posts" style=" align-items:center">
      <div class="" id="posts" style="padding: 10px;">
        <h3 style="height: 50px; margin-top: -40px; width: 50px; margin-left: 14px; border-radius: 50px;"alt=""> <h2 style="margin-top: -20px; margin-left: 4px; font-weight: bold;font-size: 16px;">Featured Posts</h3>

          <?php $columnCount = 0; ?>
          @foreach ($featuredpost as $post )
          <div style="display:inline-block; flex-direction:row"><p style="background-color:rgb(229, 242, 251); color:black; font-size:8px; text-align:center; width:90px; height:30px; border:2px solid rgb(230, 226, 226);border-radius:5px;"> 
            <a style="text-decoration: none;color:black;" href="#{{($post->id) }}"> {{ $post->title }}</a></p>
          </div>
         <?php $columnCount++; ?>
        @if ($columnCount%3 == 0)
           <br>
        @endif
       @endforeach
       
      </div>


      {{-- responsive --}}
      <div class=" p-2 text-center" id="posts" style=";margin-left: 0%; background-color:transparent; width:100%; text-align: center;">
        <h4 class="mt-4" style="font-size: 18px; color: rgb(27, 140, 216);"><strong>Communi<span class="text-primary" style="font-size: 15px">QA</span></strong></h4>
        <div class=" row justify-content-center mt-4 d-flex" style="font-size: 7px;margin-left:1%">
          <div class="foter" class="col-md-2 d-flex">
              <ul class="list-unstyled d-flex">
                  <li>About Us</li>
                  <li>Our Goals</li>
                  <li>Our Services</li>
                
              </ul>
          </div>
          
         
          
      </div>
      <div class=" row justify-content-center mt-2 d-flex" style="font-size: 7px;margin-left:1%">
        <div class="foter" class="col-md-2 d-flex">
            <ul class="list-unstyled d-flex">
                <li>Contact Us</li>
                <li>Our Goals</li>
            </ul>
        </div>
        
       
        
    </div>
      
        
        <p class="mt-2 mb-0" style="font-size: 12px;">@CommuniQA All Copyrights Reserved</p>
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