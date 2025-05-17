<!doctype html>
 <html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Review_Page-FANGS</title>
    <style>
/*#66fcf1;
           #1f2833;
           #0b0c10;
           #c5c6c7;
           #45a29e;  */
 @import url("https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600;700;800;900&display=swap");
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins' , sans-serif;
}
body{
    background: #2f363e;
    padding: 25px;
    padding-left: 40px;
    width: 100%;
    overflow-y: scroll;
    overflow-x: hidden;
    display: flex;
    flex-direction: column;
    gap:30px;
}
body::-webkit-scrollbar {
  width: 10px;
  background-color: #1f2833;
}

/* Styling the scrollbar thumb */
body::-webkit-scrollbar-thumb {
  background-color: #c5c6c7;
  border-radius: 10px;
}

/* Styling the scrollbar thumb on hover */
body::-webkit-scrollbar-thumb:hover {
  background-color: #f5f5f5;
}

/* Styling the scrollbar track in Firefox */
body {
  scrollbar-width: thin;
  scrollbar-color: #c5c6c7 #f5f5f5;
}

/* Styling the scrollbar thumb in Firefox */
body::-webkit-scrollbar-thumb {
  background-color: #c5c6c7;
  border-radius: 10px;
}
.sticky-nav.hidden {
  top: -90px;
}
.sticky-nav{
    background: #1f2833;
    display: flex;
    position: fixed; 
    z-index: 100; 
    transition: top 0.3s; 
    height: 90px;
    width: 100%;
    top: 0;
    left: 0;
    align-items: center;
    justify-content: center;
    box-shadow: 5px 5px 70px rgba(0,0,0,0.25),
    10px 10px 70px rgba(0,0,0,0.25),
    inset 0px 0px 10px rgba(0,0,0,0.5),
    inset 0px 0px 20px rgba(255,255,255,0.2),
    inset -5px -5px 15px rgba(0,0,0,0.75);
    padding: 15px 30px;
}
.sticky-nav img{
    position: relative;
    width: 50px;
    margin-inline: 10px;
}
.sticky-nav p{
    color: #66fcf1;
    font-size: 32px;
    font-weight: 1000;
}
.page-name{
    margin-top: 80px;
    color: #d1e8e2;
    text-align: center;
    font-size: 26px;
    position: relative;
}
.profile{
    position: relative;
    width: 100%;
    display:flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    border: 3px solid white;
    border-radius: 15px;
    padding: 40px 40px;
    margin-block: 0px;
}
.profile div h2{
    position: absolute;
    color: #ffcb9a;
    background: #2f363e;
    left: 60px;
    top: -16px;
    padding: 0 20px;
    font-size: 24px;
}
.profile p{
    font-size: 22px;
    color:white;
    text-align: justify;
}
.i{
    color: #66fcf1;
    margin-top: 20px;
}
.link{
  color: white;
  margin-top : 10px;
}
.feedback {
  --normal: #eceaf3;
  --normal-shadow: #d9d8e3;
  --normal-mouth: #9795a4;
  --normal-eye: #595861;
  --active: #f8da69;
  --active-shadow: #f4b555;
  --active-mouth: #f05136;
  --active-eye: #313036;
  --active-tear: #76b5e7;
  --active-shadow-angry: #e94f1d;
  margin: 10px;
  padding: 0;
  list-style: none;
  display: flex;
}
.feedback li {
  position: relative;
  border-radius: 50%;
  background: var(--sb, var(--normal));
  box-shadow: inset 3px -3px 4px var(--sh, var(--normal-shadow));
  transition: background 0.4s, box-shadow 0.4s, transform 0.3s;
  -webkit-tap-highlight-color: transparent;
}
.feedback li:not(:last-child) {
  margin-right: 20px;
}
.feedback li div {
  width: 40px;
  height: 40px;
  position: relative;
  transform: perspective(240px) translateZ(4px);
}
.feedback li div svg, .feedback li div:before, .feedback li div:after {
  display: block;
  position: absolute;
  left: var(--l, 9px);
  top: var(--t, 13px);
  width: var(--w, 8px);
  height: var(--h, 2px);
  transform: rotate(var(--r, 0deg)) scale(var(--sc, 1)) translateZ(0);
}
.feedback li div svg {
  fill: none;
  stroke: var(--s);
  stroke-width: 2px;
  stroke-linecap: round;
  stroke-linejoin: round;
  transition: stroke 0.4s;
}
.feedback li div svg.eye {
  --s: var(--e, var(--normal-eye));
  --t: 17px;
  --w: 7px;
  --h: 4px;
}
.feedback li div svg.eye.right {
  --l: 23px;
}
.feedback li div svg.mouth {
  --s: var(--m, var(--normal-mouth));
  --l: 11px;
  --t: 23px;
  --w: 18px;
  --h: 7px;
}
.feedback li div:before, .feedback li div:after {
  content: '';
  z-index: var(--zi, 1);
  border-radius: var(--br, 1px);
  background: var(--b, var(--e, var(--normal-eye)));
  transition: background 0.4s;
}
.feedback li.angry {
  --step-1-rx: -24deg;
  --step-1-ry: 20deg;
  --step-2-rx: -24deg;
  --step-2-ry: -20deg;
}
.feedback li.angry div:before {
  --r: 20deg;
}
.feedback li.angry div:after {
  --l: 23px;
  --r: -20deg;
}
.feedback li.angry div svg.eye {
  stroke-dasharray: 4.55;
  stroke-dashoffset: 8.15;
}
.feedback li.angry.active {
  animation: angry 1s linear;
}
.feedback li.angry.active div:before {
  --middle-y: -2px;
  --middle-r: 22deg;
  animation: toggle 0.8s linear forwards;
}
.feedback li.angry.active div:after {
  --middle-y: 1px;
  --middle-r: -18deg;
  animation: toggle 0.8s linear forwards;
}
.feedback li.sad {
  --step-1-rx: 20deg;
  --step-1-ry: -12deg;
  --step-2-rx: -18deg;
  --step-2-ry: 14deg;
}
.feedback li.sad div:before, .feedback li.sad div:after {
  --b: var(--active-tear);
  --sc: 0;
  --w: 5px;
  --h: 5px;
  --t: 15px;
  --br: 50%;
}
.feedback li.sad div:after {
  --l: 25px;
}
.feedback li.sad div svg.eye {
  --t: 16px;
}
.feedback li.sad div svg.mouth {
  --t: 24px;
  stroke-dasharray: 9.5;
  stroke-dashoffset: 33.25;
}
.feedback li.sad.active div:before, .feedback li.sad.active div:after {
  animation: tear 0.6s linear forwards;
}
.feedback li.ok {
  --step-1-rx: 4deg;
  --step-1-ry: -22deg;
  --step-1-rz: 6deg;
  --step-2-rx: 4deg;
  --step-2-ry: 22deg;
  --step-2-rz: -6deg;
}
.feedback li.ok div:before {
  --l: 12px;
  --t: 17px;
  --h: 4px;
  --w: 4px;
  --br: 50%;
  box-shadow: 12px 0 0 var(--e, var(--normal-eye));
}
.feedback li.ok div:after {
  --l: 13px;
  --t: 26px;
  --w: 14px;
  --h: 2px;
  --br: 1px;
  --b: var(--m, var(--normal-mouth));
}
.feedback li.ok.active div:before {
  --middle-s-y: 0.35;
  animation: toggle 0.2s linear forwards;
}
.feedback li.ok.active div:after {
  --middle-s-x: 0.5;
  animation: toggle 0.7s linear forwards;
}
.feedback li.good {
  --step-1-rx: -14deg;
  --step-1-rz: 10deg;
  --step-2-rx: 10deg;
  --step-2-rz: -8deg;
}
.feedback li.good div:before {
  --b: var(--m, var(--normal-mouth));
  --w: 5px;
  --h: 5px;
  --br: 50%;
  --t: 22px;
  --zi: 0;
  opacity: 0.5;
  box-shadow: 16px 0 0 var(--b);
  filter: blur(2px);
}
.feedback li.good div:after {
  --sc: 0;
}
.feedback li.good div svg.eye {
  --t: 15px;
  --sc: -1;
  stroke-dasharray: 4.55;
  stroke-dashoffset: 8.15;
}
.feedback li.good div svg.mouth {
  --t: 22px;
  --sc: -1;
  stroke-dasharray: 13.3;
  stroke-dashoffset: 23.75;
}
.feedback li.good.active div svg.mouth {
  --middle-y: 1px;
  --middle-s: -1;
  animation: toggle 0.8s linear forwards;
}
.feedback li.happy div {
  --step-1-rx: 18deg;
  --step-1-ry: 24deg;
  --step-2-rx: 18deg;
  --step-2-ry: -24deg;
}
.feedback li.happy div:before {
  --sc: 0;
}
.feedback li.happy div:after {
  --b: var(--m, var(--normal-mouth));
  --l: 11px;
  --t: 23px;
  --w: 18px;
  --h: 8px;
  --br: 0 0 8px 8px;
}
.feedback li.happy div svg.eye {
  --t: 14px;
  --sc: -1;
}
.feedback li.happy.active div:after {
  --middle-s-x: 0.95;
  --middle-s-y: 0.75;
  animation: toggle 0.8s linear forwards;
}
.feedback li:not(.active) {
  cursor: pointer;
}
.feedback li:not(.active):active {
  transform: scale(0.925);
}
.feedback li.active {
  --sb: var(--active);
  --sh: var(--active-shadow);
  --m: var(--active-mouth);
  --e: var(--active-eye);
}
.feedback li.active div {
  animation: shake 0.8s linear forwards;
}
@keyframes shake {
  30% {
    transform: perspective(240px) rotateX(var(--step-1-rx, 0deg)) rotateY(var(--step-1-ry, 0deg)) rotateZ(var(--step-1-rz, 0deg)) translateZ(10px);
 }
  60% {
    transform: perspective(240px) rotateX(var(--step-2-rx, 0deg)) rotateY(var(--step-2-ry, 0deg)) rotateZ(var(--step-2-rz, 0deg)) translateZ(10px);
 }
  100% {
    transform: perspective(240px) translateZ(4px);
 }
}
@keyframes tear {
  0% {
    opacity: 0;
    transform: translateY(-2px) scale(0) translateZ(0);
 }
  50% {
    transform: translateY(12px) scale(0.6, 1.2) translateZ(0);
 }
  20%, 80% {
    opacity: 1;
 }
  100% {
    opacity: 0;
    transform: translateY(24px) translateX(4px) rotateZ(-30deg) scale(0.7, 1.1) translateZ(0);
 }
}
@keyframes toggle {
  50% {
    transform: translateY(var(--middle-y, 0)) scale(var(--middle-s-x, var(--middle-s, 1)), var(--middle-s-y, var(--middle-s, 1))) rotate(var(--middle-r, 0deg));
 }
}
@keyframes angry {
  40% {
    background: var(--active);
 }
  45% {
    box-shadow: inset 3px -3px 4px var(--active-shadow), inset 0 8px 10px var(--active-shadow-angry);
 }
}
.dribbble {
  position: fixed;
  display: block;
  right: 20px;
  bottom: 20px;
}
.dribbble img {
  display: block;
  height: 28px;
}
.btn{
  margin-top: 10px;
  padding: 10px 20px;
  border-radius: 8px;
  outline: none;
  font-weight: 800;
  z-index: 10;
  color: black;
  background-color: white;
  transition: all 0.1s linear;
  cursor: pointer;
}
.btn:hover{
  color: white;
  background-color: black;
  border: solid 2px white;
}
footer{
    margin: 20px;
    font-size: 22px;
    color:white;
    font-weight: bold;
    text-align:center;
}
.shape {
  position: absolute;
  width: 100px;
  height: 100px;
  transform: scale(0.8);
}
.cir {
  position: absolute;
  border-radius: 50%;
  z-index: 5;
}
.btn-particles {
  width: 100px;
  height: 100px;
  position: absolute;
  border-radius: 50%;
  color: #eee;
  font-family: monospace;
  z-index: 5;
}
@media screen and (min-width:841px){
  .feedback{
    transform: scale(2.5);
    margin: 60px;
  }
  .rating_button{
    margin-top: 20px;
  }
}
@media screen and (min-width:640px) and (max-width:840px){
  .feedback{
    transform: scale(2);
    margin-top: 40px;
  }
  .rating_button{
    margin-top: 40px;
  }
}
@media screen and (max-width:800px){
    .sticky-nav{
        height: 66px ;
    }
    .sticky-nav.hidden{
        top: -66px;
    }
    .sticky-nav img{
        width: 40px;
    }
    .page-name{
        margin-top: 46px;
    }
}
    </style>
  </head>
  <body>
  <?php
      include 'db_connection.php';

      $query_visitors = "SELECT Visitors FROM rating_table";
      $result_visitors = $conn->query($query_visitors);
      if($result_visitors){
          $row_visitors = $result_visitors->fetch_assoc();
          $Visitors = $row_visitors["Visitors"];
      }
      else{
          echo "<script>alert('Error occured at selecting visitors');</script>";
      }
      if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["emoji"])){
        $submittedEmoji = $_POST["emoji"];
        $query_select = "SELECT $submittedEmoji FROM rating_table";
        $result_select = $conn->query($query_select);
        if($result_select){
          $row = $result_select->fetch_assoc();
          $currentValue = $row[$submittedEmoji];
          $newValue = $currentValue + 1;
          $query_update = "UPDATE rating_table SET $submittedEmoji=$newValue";
          $result_update = $conn->query($query_update);
          if(!($result_update)){
            echo "<script>alert('Error occured at updating');</script>";
          }
        }
        else{
            echo "<script>alert('Error occured at selecting');</script>";
        }
      }
    ?>
    <div class="sticky-nav" id="navbar">
        <img src="images/site_logo.png">
        <p>FANGS</p>
    </div>
    <h2 class="page-name">Review Page</h2> 
    <div class="profile">
      <div>
          <h2>About us</h2>
      </div>
      <p>FANGS is more than a website - it's a destination for discovery and entertainment. At FANGS, we're commited to provide a valuable and engaging experience for our visitors. Our platform offers a diverse range of content, including fascinating facts, captivating stories and exciting games. Got a question or a suggestion? We would love to hear from you! Feel free to visit our contact page for more ways to get in touch. Stay in the loop with all things at FANGS. Whether your seeking for knowledge, adventure, relaxation, FANGS has something for everyone. Thank you for visiting the FANGS Review Page!</p>
       <a class="link" href="contact_us.html" target="_blank"><i><b>Contact Us</b ></i></a>
    </div>

    <div class="profile">
      <div>
          <h2>Rate us</h2>
      </div>
      <p>At FANGS , we value your feedback and strive to provide the best possible experience for our users. We want to know your experience with our website, products and services. Please take a moment to rate your experienceby selecting an emoji that best represents your satisfaction level. Thankyou for your feedback!</p>
      <ul class="feedback">
        <li class="angry" onclick="selectedEmoji('Angry')">
            <div>
                <svg class="eye left">
                    <use xlink:href="#eye">
                </svg>
                <svg class="eye right">
                    <use xlink:href="#eye">
                </svg>
                <svg class="mouth">
                    <use xlink:href="#mouth">
                </svg>
            </div>
        </li>
        <li class="sad" onclick="selectedEmoji('Sad')">
            <div>
                <svg class="eye left">
                    <use xlink:href="#eye">
                </svg>
                <svg class="eye right">
                    <use xlink:href="#eye">
                </svg>
                <svg class="mouth">
                    <use xlink:href="#mouth">
                </svg>
            </div>
        </li>
        <li class="ok active" onclick="selectedEmoji('Ok')">
            <div></div>
        </li>
        <li class="good" onclick="selectedEmoji('Good')">
            <div>
                <svg class="eye left">
                    <use xlink:href="#eye">
                </svg>
                <svg class="eye right">
                    <use xlink:href="#eye">
                </svg>
                <svg class="mouth">
                    <use xlink:href="#mouth">
                </svg>
            </div>
        </li>
        <li class="happy" onclick="selectedEmoji('Wonderful')">
            <div>
                <svg class="eye left">
                    <use xlink:href="#eye">
                </svg>
                <svg class="eye right">
                    <use xlink:href="#eye">
                </svg>
            </div>
        </li>
      </ul>       
      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 4" id="eye">
            <path d="M1,1 C1.83333333,2.16666667 2.66666667,2.75 3.5,2.75 C4.33333333,2.75 5.16666667,2.16666667 6,1"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 7" id="mouth">
            <path d="M1,5.5 C3.66666667,2.5 6.33333333,1 9,1 C11.6666667,1 14.3333333,2.5 17,5.5"></path>
        </symbol>
      </svg>
      <div>
      <button class="btn" onclick="submit_rating()">Submit</button>
      <div class="btn-particles"></div> 
      </div>   
    </div>

    <div class="profile">
      <div>
          <h2>Thank You For Visiting!</h2>
      </div>
      <p>We sincerely appreciate you taking the time to visit our website. Your presence means a lot to us and we're greateful for the oppurtunity to share our content and offerings with you. Your support motivates us to continue improving and expanding our website, so we can better serve your needs and intrests. Please come back soon for more exciting content and experience.</p>
      <i class="i"><b>Total Visitors : <?php echo $Visitors;?></b></i>
    </div>
    <footer>
        &#169; 2024 FANGS
    </footer>
    <script>
      var selectEmoji = "Ok";
      function selectedEmoji(emoji){
        selectEmoji = emoji;
      }
      function submit_rating(){
        var form = document.createElement("form");
        form.method = "post";
        form.action = "";
        var input = document.createElement("input");
        input.type = "hidden";
        input.name = "emoji";
        input.value = selectEmoji ;
        form.appendChild(input);
        document.body.appendChild(form);
        setTimeout(function(){form.submit();} , 1000);
      }
    </script>
    
    <script>
      document.querySelectorAll('.feedback li').forEach(entry => entry.addEventListener('click', e => {
        if(!entry.classList.contains('active')) {
          document.querySelector('.feedback li.active').classList.remove('active');
          entry.classList.add('active');
        }
        e.preventDefault();
      }));
   </script>
   <script>
    $.fn.boom = function(e) 
    { 
    var colors= ['#ff0066','#ffeb00','#FF663f'];
    var shapes=[
'<polygon class="star" points="21,0,28.053423027509677,11.29179606750063,40.97218684219823,14.510643118126104,32.412678195541844,24.70820393249937,33.34349029814194,37.989356881873896,21,33,8.656509701858067,37.989356881873896,9.587321804458158,24.70820393249937,1.0278131578017735,14.510643118126108,13.94657697249832,11.291796067509632"></polygon>',
'<polygon class="other-star" points="18,0,22.242648687119284,13.757359312888714,36,18,22.242649687119284,22.242640687119284,18.000000000000004,36,13.757359312888716,22.242640687119284,0,18.000000000000004,13.757359312880714,13.757359312880716"></polygon>',
'<polygon class="diamond" points="18,0,27.192388155425117,8.80761184457488,36,18,27.19238815542512,27.192388155425117,18.000000000000004,36,8.807611844574883,27.19238815542512,0,18.000000000000084,8.80761184457488,8.887611844574884"></polygon>'
];
    var btn = $(this); 
    var group = [];
    var num = Math.floor(Math.random() * 5)+30;
    for(i = 0; i < num; i++) {
      var randBG = Math.floor(Math.random() * colors.length);
      var getShape = Math.floor(Math.random() * shapes.length);
      var c= Math.floor(Math.random()*10)+5;
      var scale = Math.floor(Math.random() * (8-4+1))+4;
      var x = Math.floor(Math.random()*(150 + 500))-400;
      var y = Math.floor(Math.random()*(150 - 100))-300;
      var sec = Math.floor(Math.random()* 1700)+ 1000;
      var cir = $('<div class="cir"></div>'); 
      var shape = $('<svg class="shape">'+shapes[getShape]+'</svg>');
      shape.css({
      top: e.pageY - btn.offset().top, 
      left: e.pageX - btn.offset().left,
      'transform': 'scale(1.'+scale+')', 'transition': sec + 'ms',
      'fill': colors[randBG]
      });
          btn.siblings('.btn-particles').append(shape);
          group.push({shape: shape,x:x, y: y});
    }
    for (var a = 0; a < group.length; a++) {
      var shape = group[a].shape;
      var x = group[a].x, y = group[a].y; shape.css({
        left: x + 50,
        top: y + 15, 
        'transform': 'scale(0)'
      });
    }
    setTimeout(function() {
      for (var b = 0; b < group.length; b++) {
        var shape = group[b].shape; 
        shape.remove();
      }
      group = [];
    }, 2000);
    }
    $(function() {
      $(document).on('click', '.btn', function(e) { $(this).boom(e);
    });
    });
   </script>
   <script>
         document.addEventListener("DOMContentLoaded" , function(){
         const nav_barHeight = document.getElementById("navbar").clientHeight;
         let prevScrollPos = window.scrollY;
         window.addEventListener('scroll', () => {
            const currentScrollPos = window.scrollY;
            if(currentScrollPos > prevScrollPos && currentScrollPos > nav_barHeight) {
              document.querySelector('.sticky-nav').classList.add('hidden');
            } 
            else{
              document.querySelector('.sticky-nav').classList.remove('hidden');
            }
            prevScrollPos = currentScrollPos;
         });

        const parentDiv = document.querySelector('.tables');
        const  childWidth = parentDiv.querySelector('ul').offsetWidth;
        const scrollAmount = parentDiv.offsetWidth * 0.5;
        function scrollLeft() {
          parentDiv.scrollLeft += scrollAmount;
          if (parentDiv.scrollLeft + parentDiv.offsetWidth >= (parentDiv.scrollWidth-10)){
          parentDiv.scrollLeft = 0;
          }
        }
        setInterval(scrollLeft, 4000);
    });
    </script>
  </body>
 </html>