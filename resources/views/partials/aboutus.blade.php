<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="home.css" rel="stylesheet">
    <title>aboutus</title>
    <style>
           body {
        font-family: 'Montserrat', sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      background-color: white;
    }
        .mission {
            display: flex;
            padding-top: 10%;
            width: 100%;
            justify-content: space-around;
            align-items: center;

        }

        .miss2 img {
            height: 30vh;
            width: 30vw;
            object-fit: contain;
            transition: all .4s;
        }

        .miss2>a img:hover {
            background-color: #00ACEE;
            border-radius: 40px;
        }

        .miss2 {
            width: 40%;
        }

        .miss1 h1 {
            padding-left: 26%;
            color: #00ACEE;
        }

        .miss1 p {
            width: 40vw;
            padding-top: 3%;
            padding-left: 27%;
            text-align: justify;
        }

        .latest h1 {
            color: #00ACEE;
            text-align: center;
            padding: 80px 50px 40px 50px;
        }

        .cards {
            width: auto;
            display: grid;
            grid-template-rows: 1fr;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            padding: 20px;
        }

        #card1 {
            border: 1px solid lightgray;
            margin-right: 10px;
            margin-top: 10px;
            padding-top: 8px;
        }

        #card2 {
            border: 1px solid lightgray;
            margin-right: 10px;
            margin-top: 10px;
            padding-top: 14px;

        }

        #card3 {
            border: 1px solid lightgray;
            margin-right: 10px;
            margin-top: 10px;
            padding-top: 8px;

        }

        #card1 img {
            width: 50px;
            display: block;
            margin: 0 auto;
            /* padding: 0px 70px; */
            object-fit: cover;
        }


        #card1 h5 {
            text-align: center;
            padding: 10px 0px;
        }


        #card1 p {
            text-align: justify;
            padding: 2px 40px 10px 40px;
        }

        #card1:hover {
            background-color: #00ACEE;
        }

        #card1:hover h5,
        #card1:hover p {
            color: white;
            font-style: italic;
        }

        #card2 img {
            width: 50px;
            display: block;
            margin: 0 auto;
            /* padding: 0px 70px; */
            object-fit: cover;
        }


        #card2 h5 {
            text-align: center;
            padding: 10px 0px;
        }

        #card2 p {
            text-align: justify;
            padding: 2px 40px 10px 40px;
        }

        #card2:hover {
            background-color: #00ACEE;
        }

        #card2:hover h5,
        #card2:hover p {
            color: white;
            font-style: italic;
        }


        #card3 img {
            width: 50px;
            display: block;
            margin: 0 auto;
            /* padding: 0px 70px; */
            object-fit: cover;
        }


        #card3 h5 {
            text-align: center;
            padding: 10px 0px;
        }


        #card3 p {
            text-align: justify;
            padding: 2px 40px 10px 40px;
        }

        #card3:hover {
            background-color: #00ACEE;
        }

        #card3:hover h5,
        #card3:hover p {
            color: white;
            font-style: italic;
        }

        .homeImage{
            font-family: 'Montserrat', sans-serif;
    height: 60vh;
    width: 100vw;
    background-color:#00ACEE;
    background-blend-mode: darken;
    background-size: cover;
    background-attachment: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    flex-wrap: wrap;
}

.homeImage h1{
    font-family: 'Montserrat', sans-serif;
    color: white;
}

.homeImage p{
    color: white;
    padding-top: 15px;
    width: 60%;
    text-align: justify;
    font-family: 'Montserrat', sans-serif;
    /* text-decoration: underline; */
}
.homeImage button{
    font-family: 'Montserrat', sans-serif;
    color:#00ACEE;
    width: 120%;
    background-color: white;
    font-size: 18px;
    font-weight: bold;
    text-decoration: none;
    padding: 10px 30px;
    border-radius: 10px;
    border: 0px;
    display: block;
    margin: 0 auto;
    
}
.homeImage a{
    text-decoration: none;
}

        @media only screen and (min-width: 990px) and (max-width: 1100px) {
            .mission {
                width: 100%;
                display: flex;
                justify-content: space-evenly;
            }

            .miss2 img {
                width: 40vw;
                object-fit: contain;
            }
        }

        @media only screen and (min-width: 786px) and (max-width: 990px) {

            .mission {
                width: 100%;
                display: flex;
                justify-content: space-evenly;
            }

            .miss2 img {
                width: 40vw;
                object-fit: contain;
            }
        }

        @media only screen and (min-width: 250px) and (max-width: 786px) {
            .mission {
                display: block;
                width: 100%;
            }

            .miss2 img {
                height: auto;
                width: 50vw;
                object-fit: contain;
            }

            .miss2 {
                width: 100%;
                text-align: center;
            }

            .miss1 h1 {
                padding-left: 0%;
                text-align: center;
            }

            .miss1 p {
                width: 100%;
                padding-top: 3%;
                padding-left: 0%;
                padding: 20px 30px;
                text-align: justify;
            }
        }
    </style>

</head>

<body>


    <!-- Who We Are  -->

    <div class="mission">
        <div class="miss1">
            <h1>Who we are </h1>
            <p>CommuniQa is more than just a platform – it's a vibrant community of web developers, designers,
                students,
                and industry professionals united by a passion for innovation and collaboration.</p>
        </div>
        <div class="miss2">
            <a href="images/93.jpg" target="_blank">
                
                <img src="{{asset('image/who we are.png')}}" alt="" srcset="">
            
            </a>
        </div>
    </div>



    <!-- What We Offer -->

    <div class="latest">
        <h1>What We Offer</h1>
    </div>

    <div class="cards">
        <div id="card1">
           
            <img src="{{asset('image/Engaging Discussions.png')}}" alt="" srcset="">
            
            <h5>
                Engaging Discussions
            </h5>
            <p>
                Dive into thought-provoking discussions on a wide range of web development topics. Ask questions,
                share insights, and learn from fellow community members.
            </p>
        </div>
        <div id="card2">
          
            <img src="{{asset('image/real-time-chat.png')}}" alt="" srcset="">
            
            <h5>
                Real-Time Chat
            </h5>
            <p>
                Connect with like-minded individuals in our real-time chat rooms. Whether you're seeking advice or
                sharing your expertise, our chat feature brings the community together.
            </p>
        </div>
        <div id="card3">
         
            <img src="{{asset('image/Expert-Authored Content.png')}}" alt="" srcset="">
            
            <h5>
                Expert-Authored Content
            </h5>
            <p>
                Stay updated with the latest trends and insights in web development through our dedicated blog
                section. From tutorials to tech reviews, our expert-authored content offers valuable resources for
                every stage of your journey.
            </p>

        </div>
    </div>

    
    <!-- Our Mission  -->

    <div class="mission">
        <div class="miss1">
            <h1>Our Mission</h1>
            <p>At CommuniQa, our mission is simple: to empower individuals to thrive in the dynamic world of web
                development. We believe in the power of community-driven learning and support, where every voice is
                valued, and every question is an opportunity for growth</p>
        </div>
        <div class="miss2">
            <a href="images/93.jpg" target="_blank">
          
                <img src="{{asset('image/our mission.png')}}" alt="" srcset="">
            
            </a>
        </div>
    </div>


    <!-- Why Choose CommuniQa -->
    <div class="latest">
        <h1>Why Choose CommuniQA?</h1>
    </div>

    <div class="cards">
        <div id="card1">
           
            <img src="{{asset('image/Inclusivity heading.png')}}" alt="" srcset="">
            
        
            <h5>
                Inclusivity
            </h5>
            <p>
                No matter your skill level or background, you'll find a warm welcome at
                CommuniQa. Our diverse community celebrates individuality and fosters an inclusive environment
                for all.
        </div>
        <div id="card2">
            
            <img src="{{asset('image/knowledge sharing.png')}}" alt="" srcset="">
            
            <h5>
                Knowledge Sharing
            </h5>
            <p>
                We believe in the power of collective wisdom. By sharing our knowledge and
                experiences, we can elevate the entire community and propel each other forward.
        </div>
        <div id="card3">
          
            <img src="{{asset('image/supportive community.png')}}" alt="" srcset="">
            <h5>
                Supportive Community
            </h5>
            <p>
                At CommuniQa, you're never alone on your web development journey. Our
                supportive community is here to cheer you on, answer your questions, and celebrate your
                successes.
            </p>

        </div>
    </div>




    <!-- Join Us Today -->

    <div class="homeImage" style="display: flex; flex-direction:column">

        <h1>
            Join Us Today
        </h1>
        <p>
            Ready to take your web development skills to the next level? Join us at CommuniQa and become part of a
            dynamic community passionate about innovation, collaboration, and growth. Together, let's build a brighter
            future for web development!
        </p>
        <a href="#" target="_blank">
            <button id = "join us">Join Us</button>
        </a>

    </div>






</body>

</html>