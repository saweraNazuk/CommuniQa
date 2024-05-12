
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom styles for the transparent navbar */
    .navbar {
      background-color: transparent !important; /* Make the navbar background transparent */
      border-bottom: 1px solid rgba(255, 255, 255, 0.2); /* Add a border to separate navbar from content */
    }

    .navbar-brand img {
      height: 20px; /* Adjust the height of the logo as needed */
      margin-top: 5px;
    }

    .navbar-nav {
      margin-left: 28%; /* Push the navbar items to the right */
      padding: 0px;
      margin-top: 5px
    }

    .navbar-nav li {
      padding: 0 10px; /* Add padding to navbar items */
      white-space: nowrap; /* Prevent text from wrapping */
    }
    .navbar-nav li {
      padding:2px ; /* Add padding to navbar items */
      color: #000000 !important;
      
      font-size: 16px;
      font-weight: bold;
      /* border: 1px solid red; */
      width: 50%;
      text-decoration: none;
    }

    .navbar-nav li a {
   
    
      font-family: 'Montserrat', sans-serif;
           
  color: #000000 !important; /* Set the text color for navbar items */
    }
   
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <a class="navbar-brand" href="{{ route('login') }}">
        <img src="{{asset('image/Logo.png')}}" alt="Logo"  width="152px" style="margin-left: 30px; margin-top:10px" >
    </a>
    <button style="" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span style="height: 25px; margin-left:0px" class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav" style="margin: ">
        <li class="nav-item">
          <a class="nav-link" href="#">Latest Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/view_about') }}">About us</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="/view_contact">Contact us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link"  style="color:rgb(10, 131, 212) !important; font-weight:bold" href="{{ route('login') }}">Join Communiqa</a>
          </li>
      </ul>
    </div>
  </nav>

 


  <!-- Your content goes here -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
