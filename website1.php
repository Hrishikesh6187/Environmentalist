<!DOCTYPE HTML>
<html>
    <head>
        <title> ENVIRONMENTALIST</title>
        <link type ="text/css" rel="stylesheet" href="css.css">
    </head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <body>
      <div class = "bgi"></div>
        <div class = "bgc">

          

          <div class = "mnctr">
            <div class = "menu">
              <div class = "logo">
                <img src ="logo purple.png">
              </div>
              <div class="header">
                <div class = "menubar">
                    <img class = "img" src="logo purple.png">
                    <a href="aboutus.html">Contact</a>
                    <a href="event.html">Events</a>
                    <a href="articlemain.html">Articles</a>                   
                    <a class="active" href="website1.php">HOME</a>                  
                </div>  
              </div>
            </div>
          
              <img src = "purple2.jpg" style = "width:100%">
        </div>
          <br>
          <hr><br>

          <h1 class = "h"><u>SERVICES WE PROVIDE</u></h1>

          <div class="row">
            <div class="column">
              <img class = "img1" src="EVENT.jpg" alt="Snow" style="width:100%" >
            </div>
            <div class="column">
              <img class = "img1" src="tp.png" alt="Forest" style="width:100%" >
            </div>
            <div class="column">
              <img  class = "img1" src="nl.jpg" alt="Mountains" style="width:100%" >
            </div>
          </div>

          <div class="row">
              <div class="column1">
                  <img  class = "imgbig" src="wih.jpg" style= "width:100%">
              </div>
              <div class="column1">
              
                
              <h3 class= hh>
              1. E-WASTE MANAGEMENT
We provide advice on E-waste management, any doubts you might have with respect to E-waste management, you can contact one of us and clarify your doubts. We also provide free articles educating people on E-waste and the right steps we have to take as humans to take care of our homes.</h3>
<h3 class= hh>
2. WEEKLY MEETINGS
There will be weekly meetings where we discuss the effects of pollution and plan out a roadmap for the week. We will follow this roadmap throughout the week This would include picking out the trash from public places and recycle it, going on protests to spread the word about the growing pollution in the cities.</h3>
<h3 class= hh>
3. TREE PLANTATIONS
Every Sunday, as a collective group, we will go on a tree plantation spree for a few hours. During this time we will plant different types of trees on government-approved lands. The location each time would be different and would be a memorable and satisfying experience for everyone involved. All this while improving our environment and building ourselves a better future.</h3>
<h3 class= hh>
4. WEEKLY NEWSLETTER 
We send out weekly newsletter containing the latest topic relating to the environment. We keep you up to date on the latest environmental topics all around the world.</h3>
            </div>
          </div>
          <br>
          <hr><br>

          <div class="row">

            <div class="column1">
              <h1 class = "h"><u>OUR CONTRIBUTION TO THE ENVIRONMENT</u></h1>
              <p class = "chart">Over the past few months the founders of environmentalist have gone to various locations around bangalore and helped plant trees. We have planted:
              </p>
              <p class = "chart">
                <ul class = "chart">
                  <li>NR Colony: 40</li>
                  <li>Jayanager: 30</li>
                  <li>Chikkalasandra: 35</li>
                  <li>Bangalore University: 50</li>
                  <li>Chamarajpet: 25</li>
                </ul>
              </p>
            </div>
            <div class="column1">
              <div>               
                <canvas id="pieChart" style = "max-width: 700px;"></canvas>
                <script>
                var ctxP = document.getElementById("pieChart").getContext('2d');
                var myPieChart = new Chart(ctxP, {
                type: 'pie',
                data: {
                labels: ["NR Colony", "Jayanagar", "Chikkalasandra", "Bangalore University", "Chamarajpet"],
                datasets: [{
                data: [40, 30, 35, 50, 25],
                backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
                hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
                }]
  },
  options: {
    responsive: true
  }
});
                </script>

              </div>
            </div>
        </div>
        <br>
        <hr><br>

        <div>
          <div class = "formbg">
            <div class = "formcont">
              <div class="row">
                <div class="column1">
                    <h2>Hello please read the following carefully</h2>
                </div>
                <div class= "column1">
                  <div class="form">
                   <h2>Please enter the following details:-</h2>
                   <form action="website.php" method="post">
                   <label>First name</label><br>
                   <input type="text" id="fname" name="fname"><br><br>
                   <label>Last name</label><br>
                   <input type="text" id="lname" name="lname"><br><br>
                   <label>Phone number</label><br>
                   <input type="text" id="pn" name="pn" value=""><br><br>
                   <label>Gender</label><br>
                   <label>Male</label>
                   <input type="radio" id="male" name="gender" value="Male">
                   <label>Female</label>
                   <input type="radio" id="female" name="gender" value="Female"><br><br>
                   <label>Age</label><br>
                   <label>Below 7</label>
                   <input type="radio" id="bs" name="age" value="Below 7">
                   <label> 7-13</label>
                   <input type="radio" id="bsth" name="age" value="7-13">
                   <label> 13-18</label>
                   <input type="radio" id="bthet" name="age" value="13-18">
                   <label> Above 18</label>
                   <input type="radio" id="aet" name="age" value="Above 18"><br><br>
                   <label>Email</label><br>
                   <input type="text" id="email" name="email"><br><br>
                   <label>I have read and understood the terms and conditions </label>
                   <input type="checkbox" id="tac" name="tac" value="tac"><br><br>
                   <input type = "submit"  name = "save" value="submit">
                  </form>
                  </div>


                </div>
            </div>
          </div>
        </div>
        </div>
   
    
    <hr>
    <div class="footer">
        <p class= "text1">Copyright © 2021 environmentalist inc. All rights reserved. </p>
    </div>
  
  
    </body>
  </div>
 


</html>