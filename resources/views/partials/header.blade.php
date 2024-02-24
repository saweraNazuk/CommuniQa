<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom p-0 ps-5" style="width:100% !important;" style="  height:88px;margin-left:5px; padding-top:5px;">
   <button style="padding: 5px; margin-left: 5px; height:35px; border:none" class="navbar-toggler mt-2" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span style="height: 25px; margin-left:0px" class="navbar-toggler-icon"></span>
    </button>
  <a class="navbar-brand mt-2 " href="#">
    <img src="{{asset('image/Logo.png')}}" alt="Logo" height="22px" width="148px" style="margin-left: 25px; margin-top:-5px" >
  </a>

  <div class="navbar-nav d-lg-none ml-auto d-flex"  style="display: flex; flex-direction: row;">
   <a class="nav-item nav-link" href="#" style="margin-right: 5px;"><i class="fa fa-search" aria-hidden="true"></i></a>
 
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 " class="nav-item" style="display: flex">
                                    
                                    <li class="nav-item" >
                                       <a class="btn btn-primary" id="logincss" style="width: 48px; font-size:8px;font-weight:bold" href="{{ route('login') }}">Login</a>
                                    </li>
                                       
                                        <li class="nav-item" style="text-decoration: none">
                                          <a class="btn btn-success" id="regiscss" style="width: 52px; font-size:8px;font-weight:bold"  href="{{ route('register') }}">SignUp</a>
                                       </li>
                                      
                                </div>

  </div>
  <div class="collapse navbar-collapse justify-content-between mt-2" id="navbarNav" style="justify-content: space-between;">
    <ul class="navbar-nav" style="margin-left:px; padding-left: px; ">
      
         <li class="nav-item active" style="border: ;height:80px; ">
            <a class="nav-link" href="{{ url('/') }}"><i class="fa-solid fa-house" aria-hidden="true" ></i><span class="sr-only">(current)</span></a>
         </li>
        <li class="nav-item dropdown" style="height:80px; ">
            <a class="nav-link" href="#"  role="button" aria-haspopup="true" aria-expanded="true"> <i class="fa-solid fa-users-line"></i></i><span class="nav-label"> <span class="caret"></span></a>
          
         </li>
      <li class="nav-item" style=";height:80px;;">
         <a class="nav-link" href="{{ url('/view_blog') }}"><i class="fa-solid fa-newspaper"></i></i></a>
      </li>
      <li class="nav-item" style=";height:80px;">
         <a class="nav-link" href="blog_list.html"><i class="fa-regular fa-bell" ></i></a>
      </li>
      <li class="nav-item" style=";height:80px;">
         <a class="nav-link" href="contact.html"><i class="fa-regular fa-comment-dots" ></i></a>
      </li>
      <li class="nav-item" style="height:80px;">
         <a class="nav-link" href="#">
            <i class="fa-regular fa-user"></i>
         </a>
      </li>
      <li class="nav-item" style="height:80px;">
         <a class="nav-link" href="product.html"><i class="fa-solid fa-newspaper" ></i></i></a>
      </li>
      <li class="nav-item" style="height:80px;">
         <a class="nav-link" href="product.html"><i class="fa-solid fa-newspaper" ></i></i></a>
      </li>
      <!-- Add more nav items as needed -->
    </ul>
  </div> 

    <div class="navbar-nav ml-auto d-none d-lg-flex mt-3 ">
      <form class="form-inline ml-2" style="border-left: 1px solid rgb(224, 221, 221);">
         <input class="form-control  mt-2" type="search" placeholder="Find Friends..." aria-label="Search" style="width: 76%">
         <button  class="nav_search-btn" type="submit" style="height: 37px; margin-top:-12px"> <i class="fa fa-search" aria-hidden="true" style="color: white"></i></button>
      </form>
     
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 " class="nav-item" style="display: flex">
                                  
                                    <li class="nav-item" >
                                       <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Log in</a>
                                    </li>
                                        
                                        <li class="nav-item" style="text-decoration: none">
                                          <a class="btn btn-success" id="regiscss"  href="{{ route('register') }}">Sign Up</a>
                                       </li>
                                     
                                </div>
    </div>

</nav>

<script>
  $(document).ready(function () {
     $(document).on('click','.nav-link',function () {
       // Prevent default link behavior
       console.log('clicked');
      $('.nav-item').removeClass('active'); // Remove active class from all list items
      $(this).closest('.nav-item').addClass('active'); // Add active class to the clicked list item
    });
  });
</script> 

{{-- <script>
   const navLinkEls= document.querySelectorAll('.nav-link');
   const windowPathname = window.location.pathname;

   navLinkEls.forEach(navLinkEL => {
      
   const navLinkPathname = new URL(navLinkEl.href).pathname;

      if((windowPathname === navLinkPathname) || (windowPathname === '/view_blogs' && navLinkPathname === '/'))
      {
         navLinkEl.classList.add('active');
      }
   });
</script> --}}
{{-- <script type="text/javascript">
 const currentLocation = location.href;
  const menuItem = document.querySelectorAll('li'); 
const menuLength = menuItem.length 
for (Let i=0; i <menuLength; i++ )
{ 
   if(menuItem[i].href === currentLocation) 
   { 
      menuItem[i].className = "active";
   } 
} 
   </script> --}}

   {{-- <script>
      jQuery(document).ready(function($){
       var path = window.location.pathname.split("/view_blog").pop();
         // Account for home page with empty path 
        if (path == ''){
          path = '/'; 
        }
          var target = $('navbar a[href="'+path+'"]'); // Add active class to target link 
           target.addClass('active') ;
         });
   </script> --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>