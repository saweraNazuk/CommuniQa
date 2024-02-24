<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
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
    /* Custom CSS */
    .blog-image {
      width: 100%;
      /* margin: auto; */
      display: block;
      height: 20%;
     
    }
    .blog-content {
      width: 100%;
      /* margin: auto; */
    }
    .related-blogs {
      width: 32%;
      height: 30%;
      float: right;
      /* padding-left: 20px; */
    }
  </style>
</head>
<body>
    @include('partials.header')
  <div class="container">
    
   
    <div class="row" style="width:100%; margin-left:10px">
      <div style="height:120%; background: white; margin:3px; border-top-left-radius: 8px;border-top-right-radius: 8px; " class="col-md-8">
        <img style="margin-top:10px" src="{{ asset( 'storage/' .$posts->thumbnail) }}" alt="" class="img-fluid blog-image">
        <div class="blog-content">
          <div class="row"> <img src="{{asset($posts->user->profile_photo_url)}}" style="height: 50px; margin-top: -4px; width: 50px; margin-left: 14px; border-radius: 50px;"alt=""> <h2 style="margin-top:10px; margin-left: 10px; font-weight: bold;font-size: 15px;">{{ $posts->title }}</h2>
          
      </div>
     
            
          <p>{!! $posts->content !!}</p>
          <div style="display: flex"> <h4 style="padding:5px; border:1px ; background: rgb(241, 242, 243); margin-top: -15px; margin-left: 10%; font-size: 11px;">{{ $posts->user->name }}</h4>  <h4 style="padding:5px; border:1px ; background: rgb(244, 245, 246); margin-top: -15px; margin-left: 15px; font-size: 10px;">{{ $posts->published_at->diffForHumans() }}</h4></div>
        </div>
        
      </div>
    
    
   

    <div class="col-md-4" style=" margin-left:63%; position:absolute; align-items:center;background:transparent">
      <div class="recent-posts" style="padding: 5px;background:transparent;  ">
        
          <h3 style=" font-size:24px; font-weight:bold">Related Blogs</h3>
        <div style="background: rgb(249, 248, 248); border-radius:5%; margin-left:15px ">
        <div style="padding: 7px" class="blog-item mb-4">
          <img src="{{ asset( 'storage/' .$posts->thumbnail) }}" class="img-fluid" alt="Related Blog 1" style="width: 100%;">
          <p style="font-weight:bold">{{ $posts->title }}</p>
          <p style="margin-top:10px; font-size: 13px;">{{ $posts->getExcerpt()}}</p>
        </div>
      </div>

      </div>
      <div class="recent-posts" style="padding: 12px; background-color:transparent; text-align:center ">
        <h4 class="mt-4" style="font-size: 18px;color: rgb(27, 140, 216);"><strong>Communi<span class="text-primary" style="font-size: 15px">QA</span></strong></h4>
      
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
      <div class="row justify-content-center d-flex" style=" font-size: 9px; margin-top:-5; margin-left:-22%">
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
        
        <p class="mt-2 mb-0" style="font-size: 14px;">@CommuniQA All Copyrights Reserved</p>
      </div>
    </div>
   
       
       
      </div>
      <div class=" p-2 text-center" id="posts" style=";margin-left: 0%; background-color:transparent; width:100%; text-align: center;">
        <h4 class="mt-4" style="font-size: 18px; color: rgb(27, 140, 216);"><strong>Communi<span class="text-primary" style="font-size: 15px">QA</span></strong></h4>
        <div class=" row justify-content-center mt-4 d-flex" style="font-size: 9px;margin-left:10%">
          <div class="foter" class="col-md-2 d-flex">
              <ul class="list-unstyled d-flex">
                  <li>About Us</li>
                  <li>Our Goals</li>
                  <li>Our Services</li>
                  
                
                    <li>Our Goals</li>
                    <li>Our Services</li>
               
              </ul>
          </div>
          
         
          
      </div>
      
        
        <p class="mt-2 mb-0" style="font-size: 14px;">@CommuniQA All Copyrights Reserved</p>
      </div>
      
    </div>
    
    
   
  </div>
</div>

  </div>

  <!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>