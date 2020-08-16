<html>

<head>
    <title>Curriculum Vitae</title>
    <style>
        
        body {
            background-color:  darkblue;
        }

        .row {
            display: flex;
            width: 100%;
            flex-wrap: wrap;
            align-items: center;
        }

        .row::after {
            display: table;
            clear: both;
            content: "";
        }

        .col-1 {
            width: 8.33%;
        }

        .col-2 {
            width: 16.66%;
        }

        .col-3 {
            width: 25%;
        }

        .col-4 {
            width: 33.33%;
        }

        .col-5 {
            width: 41.66%;
        }

        .col-6 {
            width: 50%;
        }

        .col-7 {
            width: 58.33%;
        }

        .col-8 {
            width: 66.66%;
        }

        .col-9 {
            width: 75%;
        }

        .col-10 {
            width: 83.33%;
        }

        .col-11 {
            width: 91.66%;
        }

        .col-12 {
            width: 100%;
        }
        
        .h1{
            background-color: purple;
            border-radius: 10px;
        }

        .headerimg {
            height: 300px;
            width: 300px;
            border-radius: 50%;
            margin-left: 40%;
            margin-right: 45%;
            margin-top: 100px;
        }

        .intro {
            font-size: 100px;
            color: white;
            text-transform: uppercase;
            font-family: cursive;
            font-style: italic;
            justify-content: flex-start;
            text-align: center;
        }
        .aboutme{
            color: green;
            font-family: sans-serif;
            font-style: oblique;
            font-size: 50px;
            text-align: center;
            text-transform: capitalize;
        }
        .aboutmepara{
            color: white;
            font-size: 40px;
            font-family: cursive;
            text-align: center;
            font-style: italic;
            word-spacing: 5px;
            
        }
        .tech{ color: green;
            font-family: sans-serif;
            font-style: oblique;
            font-size: 50px;
            text-align: center;
            text-transform: capitalize;}
        .listitems{
            color: white;
            font-size: 30px;
            font-family: cursive;
            text-transform: capitalize;
            word-spacing: 5px;
            font-style: italic;
        }
        .achievements{ color: green;
            font-family: sans-serif;
            font-style: oblique;
            font-size: 50px;
            text-align: center;
            text-transform: capitalize;}
        .a1{ color: white;
            font-size: 30px;
            font-family: cursive;
            text-transform: capitalize;
            word-spacing: 5px;
            font-style: italic;}
        .thankyou{ 
            color: yellow;
            font-family: sans-serif;
            font-style: oblique;
            font-size: 100px;
            text-align: center;
            text-transform: capitalize;}
    </style>
</head>

<body>
    <div class="h1">
        <div class="row">
           <div class="col-12 ">
               <img class="headerimg" src="pic.jpg">
           </div>
           <div class="col-12">
               <h1 class="intro"><u><?php echo "Hi! I am vishal jain" ?></u></h1>
            </div>
        </div>
        </div>
        <hr>
        <div class="h2">
            <div class="row">
                <div class="col-2">
                    <h1 class="aboutme"><?php print "About Me :";  ?></h1>
                </div>
                <div class="col-10">
                    <p class="aboutmepara"><?php echo "My name is <i>VISHAL JAIN</i>. I'm a Btech student at <i>GLA UNIVERSITY Computer Science Department</i>. I was born and raised in Firozabad.I passed<i>12<sup>th</sup></i> class with 84.4 % . I have good problem solving skills.I have decent knowledge about <i>web development</i> both back-end and front-end.I like to travel. I believe travelling gives you a new perspective to everything.Writting"  ?> </p>
                </div>
            </div>
        </div>
        <hr>
        <div class="h3">
            <div class="row">
                <div class="col-2"><h1 class="tech"><?php echo "Technical Skills:"; ?></h1></div>
                <div class="col-10">
                    <ul>
                        <li class="listitems"><?php echo"Programming Languages - JAVA"; ?></li>
                        <li class="listitems"><?php echo"Scripting Language - PHP , Node Js"; ?></li>
                        <li class="listitems"><?php echo"Basic Knowledge - C , Python"; ?></li>
                        <li class="listitems"><?php echo"Tools - Intellij IDEA , Brackets , Visualcode Studio"; ?></li>
                        <li class="listitems"><?php echo"Desingning Tools - Adobe XD"; ?></li>
                        <li class="listitems"><?php echo"Operating System - Windows , Linux"; ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="h4">
            <div class="row">
               <div class="col-2">
                   <h1 class="achievements"><?php print "Achievements:"; ?></h1>
               </div>
                <div class="col-10">
                <ul>
                    <li class="a1"><?php echo"District level Cricket Player. ";?></li>
                    <li class="a1"><?php echo" Successfully Design , Develope and Sold Various Web Pages.";?></li>
                    <li class="a1"><?php echo" participated in department poetry club.";?></li>
                </ul>
            </div>
            </div>
        </div>
        <hr>
        
        <h1 class="thankyou">thank you</h1>
</body>

</html>