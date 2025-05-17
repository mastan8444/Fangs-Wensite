<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games_Page-FANGS</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
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
    <style>
@import url("https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600;700;800;900&display=swap");
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins' , sans-serif;
}
html{
    scroll-behavior: smooth ;
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
}
.profile{
    position: relative;
    width: 100%;
    display:flex;
    align-items: center;
    justify-content: center;
    border: 3px solid white;
    border-radius: 15px;
    padding: 40px 40px;
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
.mostly_played{
    margin-top: 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.mostly_played h2{
    position: relative;
    padding: 0 20px;
    color: #45a29e;
}
.mostly_played .topgames{
    overflow: auto;
    position: relative;
    display: flex;
    flex-direction: row;
    background: rgba(0,0,0,0);
    align-items: center;
    gap: 8%;
    padding: 40px;
    padding-bottom: 60px;
    scrollbar-width: none;
}
.mostly_played .topgames:focus{
    outline: none;
}
.mostly_played .topgames::-webkit-scrollbar{
    display: none;
}
.mostly_played .topgames::-webkit-scrollbar-thumb{
 background-color: transparent;
}
.topgames .eachgame{
    border-radius: 50%;
    height: 150px;
    width: 150px;
    flex-shrink: 0;
    box-shadow: inset 0 0 10px #c4c5c6,0 0 10px #c4c5c6;
    transition : all 0.5s ease ; 
}
.topgames .eachgame::before{
    content: '';
    position: absolute;
    background-color: white;
    height: 150px;
    width: 150px;
    top:60%;
    transform:rotateX(80deg);
    filter: blur(16px);
    opacity: 0.5;
    border-radius: 50%; 
}
.eachgame a{
    text-decoration: none;
    width: 150px ;
    aspect-ratio:1;
    display:block;
}
.eachgame img{
   width: 100%;
   height: 100%;
   border-radius: 50%;
   opacity: 0.9;
}
.eachgame img:hover{
   opacity:  1;
}
hr{
    height: 2px; 
    background:white;
    border: none; 
    margin: 40px 10px; 
    border-radius: 2px;
}
.all_games{
    position: relative;
    padding: 0 20px;
    color: #45a29e;
    margin-bottom: 20px;
}
.container{
    display: flex;
    flex-wrap:wrap;
    justify-content: space-around;
}
.container div{
    border-radius: 20px;
}
.row{
    position: relative;
    display: flex;
    align-items: center;
    transition: 0.5s ease;
    justify-content: space-between;
    margin: 2%;
    width: 45%;
}
.row .big img , .small .top img , .small .bottom img{
    height: 100%;
    width: 100%;
    border-radius: inherit;
    outline: none;
    transition: all 0.3s ease ;
}
.row .big img:hover , .small .top img:hover , .small .bottom img:hover{
    box-shadow: 0 0 10px 2px white;
}
.big{
    width: 60%;
    aspect-ratio: 1;
}
.small{
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    width: 30%;
    height: 100%;
}
.small .top{
    height:45%;
    width: 100%;
}
.small .bottom{
    height:45%;
    width: 100%;
}
.leaderboard{
    margin: 20px 0px;
    padding: 20px;
    border: 3px solid white;
    border-radius: 15px;
}
.leaderboard div{
    position: relative;
}
.leaderboard div h3{
    position: absolute;
    color: #ffcb9a;
    background: #2f363e;
    left: 40px;
    bottom : 5px;
    padding: 0 20px;
    font-size: 24px;
}
.tables{
    display: flex;
    scroll-snap-type: x mandatory;
    overflow: scroll;
    padding:20px;
    gap: 4%;
    scroll-behavior: smooth;
    scrollbar-width: none;
}
.tables::-webkit-scrollbar{
    display: none;
}
.tables::-webkit-scrollbar-thumb{
    width: none;
}
.tab{ 
    flex-shrink: 0;
    scroll-snap-align: center;
    position: relative;
    width: 96%;
    padding: 10px;
    background: rgba(0,0,0,0.3);
    box-shadow: inset 0 0 15px rgba(0,0,0,0.2);
    border-radius:12px;
    overflow:hidden;
}
.tab li{
    display: flex;
    background: rgba(255,255,255,0.1);
    padding : 10px 20px;
    color: white;
    margin: 5px 0;
    transition: .5s;
}
.tab li:nth-child(1){
    background: transparent;
    display: block;
    text-align: center;
    font-weight: 900;
}
.tab li:nth-child(1):hover{
    transform: scale(1);
    background: transparent;
}
.tab li:nth-child(2){
    background: rgba(255,255,255,0.6);
}
.tab li:nth-child(3){
    background: rgba(255,255,255,0.4);
}
.tab li:nth-child(4){
    background: rgba(255,255,255,0.2);
}
.tab li span:nth-child(1){
    width: 10%;
}
.tab li span:nth-child(2){
    width: 55%;
}   
 .tab li span:nth-child(3){
    width: 15%;
    text-align: right;
}
.tab li span:nth-child(4){
    width: 20%;
    text-align: right;
}
.tab li:hover{
    background: #ff3772;
    transform: scale(1.06);
}
.leaderboard .note{
    color: #c5c6c7;
    margin: 10px;
}
.popup{
    width: 340px;
    border-radius:14px;
    border: 4px solid #66fcf1 ;
    background-color: #0b0c10;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-inline: 20px;
    padding-block: 10px;
    display: none;
}
.popup #popup_pic{
    border-radius: 10px;
    width: 150px;
    border: 3px solid #66fcf1;
}
.popup .div1{
    color: #c5c6c7;
    display: flex;
    justify-content: center;
}
.popup div ion-icon{
    position: absolute;
    font-size: 18px; 
    top: 5px;
    right: 5px;
    cursor : pointer;
}
.popup div ion-icon:hover{
    color: white;
}
.popup .div2,.popup .div2 .button{
    margin-top: 4px;
}
.popup .div2 span{
    display: block	;
    color: #c5c6c7;
}
.popup .div2 span big{
    color: white;
    display: inline-flex;
}
.popup .div2 span p{
    display: inline;
    margin-left: 5px;
}
.popup .div2 button{
    color: white;
    border: 2px solid white;
    background-color: transparent ;
    padding: 8px; 
    font-size: 14px;
    cursor: pointer;
    margin-top: 8px; 
    border-radius: 8px;
    transition:0.3s ease;
    width: 100%;
}
.popup .div2 button:hover{
    transform: scale(1.06);
    background-color: white;
    color: #0b0c10;
    border: 2px solid white;
}
@media screen and (min-width: 890px){
    .tab{
        padding : 20px;
    }
    .tab li{
        padding : 20px 40px;
    }
    .tab li:hover{
        transform: scale(1.003);
    }
    .tab li:nth-child(1):hover{
        transform: scale(1);
        background: transparent;
}
}
@media screen and (min-width: 500px) {
    .tab{
        padding : 20px;
    }
    .tab li{
        padding : 20px 20px;
    }
    .tab li:hover{
        transform: scale(1.05);
    } 
    .tab li:nth-child(1):hover{
        transform: scale(1);
        background: transparent;
    }
}
@media screen and (min-width:1100px){
    .row{
        margin: 20px;
    }
    .row.left,.row.next,.row.next img,.row.left img{
        transform: rotate(180deg);
    }
}
@media screen and (max-width:1100px){
    .row{
       margin: 20px;
       width: 80%;
    }
}
@media screen and (max-width:800px){
    .row{
       margin: 20px;
       width: 90%;
    }
    .container div{
       border-radius: 12px;
    }
    .sticky-nav img{
        width: 40px;
    }
    .sticky-nav{
        height: 66px ;
    }
    .sticky-nav.hidden{
        top: -66px;
    }
    .page-name{
      margin-top: 60px;
      font-size: 22px;
    }
}
@media screen and (max-width:500px){
    body{
       padding: 6px;
    }
    .row{
       margin: 16px;
       width: 100%;
    }
    .small{
       width: 30%;
    }
}
@media screen and (max-width: 400px){
    .sticky-nav{
        height: 66px ;
    }
    .sticky-nav.hidden{
        top: -66px;
    }
    .leaderboard{
        padding:10px 0px;;
    }
    .leaderboard div h3{
        bottom: -5px;
    }
    .tab{
        width: 100%;
    }
    .leaderboard .note{
        font-size: 12px; 
        margin: 8px; 
    }  
}
      </style>
</head>
<body>
    <?php
        include 'db_connection.php';
        
        $game1 = "Memory Game";
        $game2 = "Cube Cutter";
        $game3 = "Asteroid Assault";
        $game4 = "2048";
        $game5 = "Snake Game";

        $query_game1 = "SELECT Pinno, High_score FROM leadboard_table WHERE Game_name='$game1' ORDER BY High_score ASC LIMIT 5";
        $query_game2 = "SELECT Pinno, High_score FROM leadboard_table WHERE Game_name='$game2' ORDER BY High_score DESC LIMIT 5";
        $query_game3 = "SELECT Pinno, High_score FROM leadboard_table WHERE Game_name='$game3' ORDER BY High_score DESC LIMIT 5";
        $query_game4 = "SELECT Pinno, High_score FROM leadboard_table WHERE Game_name='$game4' ORDER BY High_score DESC LIMIT 5";
        $query_game5 = "SELECT Pinno, High_score FROM leadboard_table WHERE Game_name='$game5' ORDER BY High_score DESC LIMIT 5";

        $result_query_game1 = $conn->query($query_game1);
        $result_query_game2 = $conn->query($query_game2);
        $result_query_game3 = $conn->query($query_game3);
        $result_query_game4 = $conn->query($query_game4);
        $result_query_game5 = $conn->query($query_game5);

        $game1_details = array();
        $game2_details = array();
        $game3_details = array();
        $game4_details = array();
        $game5_details = array();

        #Memory Game
        if(mysqli_num_rows($result_query_game1)>0){
            while($game1_row = $result_query_game1->fetch_assoc()){
                $game1_details[] = array('Pinno'=>$game1_row['Pinno'] , 'High_score'=>$game1_row['High_score']);
            }
        }
        #Cube Cutter
        if(mysqli_num_rows($result_query_game2)>0){
            while($game2_row = $result_query_game2->fetch_assoc()){
                $game2_details[] = array('Pinno'=>$game2_row['Pinno'] , 'High_score'=>$game2_row['High_score']);
            }
        }
        #Asteroid Assult
        if(mysqli_num_rows($result_query_game3)>0){
            while($game3_row = $result_query_game3->fetch_assoc()){
                $game3_details[] = array('Pinno'=>$game3_row['Pinno'] , 'High_score'=>$game3_row['High_score']);
            }
        }
        #2048
        if(mysqli_num_rows($result_query_game4)>0){
            while($game4_row = $result_query_game4->fetch_assoc()){
                $game4_details[] = array('Pinno'=>$game4_row['Pinno'] , 'High_score'=>$game4_row['High_score']);
            }
        }
        #Snake Game
        if(mysqli_num_rows($result_query_game5)>0){
            while($game5_row = $result_query_game5->fetch_assoc()){
                $game5_details[] = array('Pinno'=>$game5_row['Pinno'] , 'High_score'=>$game5_row['High_score']);
            }
        }

    ?>
    <div class="sticky-nav" id="navbar">
        <img src="images/site_logo.png">
        <p>FANGS</p>
    </div>
    <h2 class="page-name">Games Page</h2>
    <div class="profile">
        <div>
            <h2>Games & Entertainment</h2>
        </div>
        <p>At FANGS , we believe that entertainment should be just a click away. Our single-player games are carefully curated to offer you a diverse range of experiences. Whether you're seeking a quiet moment of reflection or a burst of creativity , we have something special for you. Our mission is simple: To bring joy and amusement to your screen. Our games are designed to provide a break from the every day hustle and offer a space where you can unwind , explore and embrace the lighter side of life.</p>
    </div>
    <div class="mostly_played">
        <h2>Mostly played Games:</h2>
        <div class="topgames">
            <div class="eachgame">
		        <a href="#1"><img src="games/g_hangman.jpg"/></a>
            </div>
            <div class="eachgame">
		        <a href="#2"><img src="games/g_rockpaperscissors.jpg"/></a>
            </div>
            <div class="eachgame">
		        <a href="#3"><img src="games/g_memorygame.jpg"/></a>
           </div>
            <div class="eachgame">
		        <a href="#4"><img src="games/g_snake.jpg"/></a>
           </div>
            <div class="eachgame">
                <a href="#5"><img src="games/g_cubecutter.jpg"/></a>
           </div>
            <div class="eachgame">
                <a href="#6"><img src="games/g_asteroidassault.jpg"/></a>
           </div>
        </div>
    </div>
    <hr/>
    <h2 class="all_games">All Games:</h2>
    <div class="container">
    <div class="row">
        <div class="big" id="4">
          <img src="games/g_snake.jpg" alt="SNAKE GAME" data-name="Snake Game" data-category="Classic Archade" data-mostlyPlayedGame="Yes" data-description="Control the Snake with arrow keys. Eat the food to grow longer while avoiding collisions with the Snake's own tail. Achive the high score wihtout crashing!" data-href="games/g_snake.php" data-img="games/g_snake.jpg" onclick="open_popup(this)"/>
        </div>
        <div class="small">
          <div class="top">
            <img src="games/g_2048.jpg" alt="2048 GAME" data-name="2048" data-category="Puzzle" data-mostlyPlayedGame="No" data-description="Slide numbered tiles on a grid to combine them and create a tile with the number 2048. New tiles appear after each move. Plan to reach 2048 tile while avoiding filling up the Grid!" data-href="games/g_2048.php" data-img="games/g_2048.jpg" onclick="open_popup(this)"/>
          </div>
          <div class="bottom">
            <img src="games/g_calculator.jpg" alt="CALCULATOR" data-name="Calculator" data-category="Utility" data-mostlyPlayedGame="No" data-description="Use the calculator to perform basic operations. Get quick and accurate results for your Calculations for ease!" data-href="games/g_calculator.html" data-img="games/g_calculator.jpg" onclick="open_popup(this)"/>
          </div>
        </div>
    </div>
    <div class="row left">
        <div class="small">
          <div class="top">
            <img src="games/g_drawing.jpg" alt="DRAWING GAME" data-name="Drawing game" data-category="Creativity" data-mostlyPlayedGame="No" data-description="Use your mouse or touchscreen to create drawings. Choose a variety of drawing tools to express yourself. Let your imagination run on the digital canvas!" data-href="games/g_drawing.html" data-img="games/g_drawing.jpg" onclick="open_popup(this)"/>
          </div>
          <div class="bottom" id="3">
            <img src="games/g_memorygame.jpg" alt="MEMORY GAME" data-name="Memory Game" data-category="Puzzle" data-mostlyPlayedGame="Yes" data-description="Flip cards to reveal images hidden underneath , then try to find the matching pairs by remembering their location. Complete the game as quickly as possible." data-href="games/g_memorygame.php" data-img="games/g_memorygame.jpg" onclick="open_popup(this)"/>
          </div>
        </div>
        <div class="big" id="1">
            <img src="games/g_hangman.jpg" alt="HANGMAN" data-name="Hangman" data-category="Word Puzzle" data-mostlyPlayedGame="Yes" data-description="Guess the hidden word by selecting letters. With each incorrect guess,a part of the Hangman is drawn. If the Hangman is completed before you guess the word , you lose." data-href="games/g_hangman.html" data-img="games/g_hangman.jpg" onclick="open_popup(this)"/>
        </div>        
    </div>
     <div class="row next">
        <div class="big" id="2">
            <img src="games/g_rockpaperscissors.jpg" alt="ROCK PAPER SCISSORS" data-name="Rock Paper Scissors" data-category="Classic Game" data-mostlyPlayedGame="Yes" data-description="Challenge the computer to a game. Choose between rock,paper,scissors and see who wins each round. Test your luck in this timeless game of chance!" data-href="games/g_rockpaperscissors.html" data-img="games/g_rockpaperscissors.jpg" onclick="open_popup(this)"/>
        </div>
        <div class="small">
          <div class="top">
            <img src="games/g_tictactoe.jpg" alt="TIC TAC TOE" data-name="Tic Tac Toe" data-category="Strategy" data-mostlyPlayedGame="No" data-description="Play against a computer in the classic game of Tic Tac Toe. Take turns placing X's or O's on a 3*3 grid." data-href="games/g_tictactoe.html" data-img="games/g_tictactoe.jpg" onclick="open_popup(this)"/>
          </div>
          <div class="bottom" id="5">
            <img src="games/g_cubecutter.jpg" alt="CUBE CUTTER" data-name="Cube Cutter" data-category="Archade" data-mostlyPlayedGame="Yes" data-description="Swipe your finger/mouse across the screen to slice through incoming cubes. Be quick and precise to slice as many cubes as possible without missing any." data-href="games/g_cubecutter.php" data-img="games/g_cubecutter.jpg" onclick="open_popup(this)"/>    
          </div>
        </div>
    </div>
    <div class="row">
        <div class="small">
          <div class="top">
            <img src="games/g_bmi.jpg" alt="BMI CALCULATOR" data-name="BMI Calculator" data-category="Health" data-mostlyPlayedGame="No" data-description="Calculate your Body mass Index (BMI) by entering your height and weight. BMI is a measure of body fat based on height and weight applies to adult men and women." data-href="games/g_bmi.html" data-img="games/g_bmi.jpg" onclick="open_popup(this)"/>
          </div>
          <div class="bottom"></div>
        </div>
        <div class="big" id="6">
            <img src="games/g_asteroidassault.jpg" alt="ASTEROID ASSAULT" data-name="Asteroid Assault" data-category="Shooter" data-mostlyPlayedGame="Yes" data-description="Defend the sun at the center of the screen from incoming asteroids by controlling a rotating gun with your mouse. Destroy them before they collide with the sun and set High score!" data-href="games/g_asteroidassault.php" data-img="games/g_asteroidassault.jpg" onclick="open_popup(this)"/>    
        </div>        
    </div>
    <!--
     <div class="row">
        <div class="big"></div>
        <div class="small">
          <div class="top"></div>
          <div class="bottom"></div>
        </div>
    </div>
    <div class="row left">
        <div class="small">
          <div class="top"></div>
          <div class="bottom"></div>
        </div>
        <div class="big"></div>        
    </div> -->
    </div>
    
    <div class="leaderboard">
    <div><h3>Leader Board</h3></div>
    <div class="tables">
      <ul class="tab"> 
        <li><big>Memory Game</big></li>
        <li>
            <span>1</span>
            <span><?php echo $game1_details[0]['Pinno'] ;?></span>
            <span><?php echo $game1_details[0]['High_score'] ;?></span>
            <span><ion-icon name="trophy"></ion-icon></span>
        </li>
        <li>
            <span>2</span>
            <span><?php echo $game1_details[1]['Pinno'] ;?></span>
            <span><?php echo $game1_details[1]['High_score'] ;?></span>
            <span><ion-icon name="trophy"></ion-icon></span>
        </li>
        <li>
            <span>3</span>
            <span><?php echo $game1_details[2]['Pinno'] ;?></span>
            <span><?php echo $game1_details[2]['High_score'] ;?></span>
            <span><ion-icon name="trophy"></ion-icon></span>
        </li>
        <li>
            <span>4</span>
            <span><?php echo $game1_details[3]['Pinno'] ;?></span>
            <span><?php echo $game1_details[3]['High_score'] ;?></span>
            <span><ion-icon name="shield-half"></ion-icon></span>
        </li>
        <li>
            <span>5</span>
            <span><?php echo $game1_details[4]['Pinno'] ;?></span>
            <span><?php echo $game1_details[4]['High_score'] ;?></span>
            <span><ion-icon name="shield-half"></ion-icon></span>
        </li>
      </ul>
    
      <ul class="tab">
        <li><big>Cube Cutter</big></li>
        <li>
            <span>1</span>
            <span><?php echo $game2_details[0]['Pinno'] ;?></span>
            <span><?php echo $game2_details[0]['High_score'] ;?></span>
            <span><ion-icon name="trophy"></ion-icon></span>
        </li>
        <li>
            <span>2</span>
            <span><?php echo $game2_details[1]['Pinno'] ;?></span>
            <span><?php echo $game2_details[1]['High_score'] ;?></span>
            <span><ion-icon name="trophy"></ion-icon></span>
        </li>
        <li>
            <span>3</span>
            <span><?php echo $game2_details[2]['Pinno'] ;?></span>
            <span><?php echo $game2_details[2]['High_score'] ;?></span>
            <span><ion-icon name="trophy"></ion-icon></span>
        </li>
        <li>
            <span>4</span>
            <span><?php echo $game2_details[3]['Pinno'] ;?></span>
            <span><?php echo $game2_details[3]['High_score'] ;?></span>
            <span><ion-icon name="shield-half"></ion-icon></span>
        </li>
        <li>
            <span>5</span>
            <span><?php echo $game2_details[4]['Pinno'] ;?></span>
            <span><?php echo $game2_details[4]['High_score'] ;?></span>
            <span><ion-icon name="shield-half"></ion-icon></span>
        </li>
      </ul>
    
      <ul class="tab">
        <li><big>Asteroid Assult</big></li>
        <li>
            <span>1</span>
            <span><?php echo $game3_details[0]['Pinno'] ;?></span>
            <span><?php echo $game3_details[0]['High_score'] ;?></span>
            <span><ion-icon name="trophy"></ion-icon></span>
        </li>
        <li>
            <span>2</span>
            <span><?php echo $game3_details[1]['Pinno'] ;?></span>
            <span><?php echo $game3_details[1]['High_score'] ;?></span>
            <span><ion-icon name="trophy"></ion-icon></span>
        </li>
        <li>
            <span>3</span>
            <span><?php echo $game3_details[2]['Pinno'] ;?></span>
            <span><?php echo $game3_details[2]['High_score'] ;?></span>
            <span><ion-icon name="trophy"></ion-icon></span>
        </li>
        <li>
            <span>4</span>
            <span><?php echo $game3_details[3]['Pinno'] ;?></span>
            <span><?php echo $game3_details[3]['High_score'] ;?></span>
            <span><ion-icon name="shield-half"></ion-icon></span>
        </li>
        <li>
            <span>5</span>
            <span><?php echo $game3_details[4]['Pinno'] ;?></span>
            <span><?php echo $game3_details[4]['High_score'] ;?></span>
            <span><ion-icon name="shield-half"></ion-icon></span>
        </li>
      </ul>

      <ul class="tab">
        <li><big>2048</big></li>
        <li>
            <span>1</span>
            <span><?php echo $game4_details[0]['Pinno'] ;?></span>
            <span><?php echo $game4_details[0]['High_score'] ;?></span>
            <span><ion-icon name="trophy"></ion-icon></span>
        </li>
        <li>
            <span>2</span>
            <span><?php echo $game4_details[1]['Pinno'] ;?></span>
            <span><?php echo $game4_details[1]['High_score'] ;?></span>
            <span><ion-icon name="trophy"></ion-icon></span>
        </li>
        <li>
            <span>3</span>
            <span><?php echo $game4_details[2]['Pinno'] ;?></span>
            <span><?php echo $game4_details[2]['High_score'] ;?></span>
            <span><ion-icon name="trophy"></ion-icon></span>
        </li>
        <li>
            <span>4</span>
            <span><?php echo $game4_details[3]['Pinno'] ;?></span>
            <span><?php echo $game4_details[3]['High_score'] ;?></span>
            <span><ion-icon name="shield-half"></ion-icon></span>
        </li>
        <li>
            <span>5</span>
            <span><?php echo $game4_details[4]['Pinno'] ;?></span>
            <span><?php echo $game4_details[4]['High_score'] ;?></span>
            <span><ion-icon name="shield-half"></ion-icon></span>
        </li>
      </ul>

      <ul class="tab">
        <li><big>Snake Game</big></li>
        <li>
            <span>1</span>
            <span><?php echo $game5_details[0]['Pinno'] ;?></span>
            <span><?php echo $game5_details[0]['High_score'] ;?></span>
            <span><ion-icon name="trophy"></ion-icon></span>
        </li>
        <li>
            <span>2</span>
            <span><?php echo $game5_details[1]['Pinno'] ;?></span>
            <span><?php echo $game5_details[1]['High_score'] ;?></span>
            <span><ion-icon name="trophy"></ion-icon></span>
        </li>
        <li>
            <span>3</span>
            <span><?php echo $game5_details[2]['Pinno'] ;?></span>
            <span><?php echo $game5_details[2]['High_score'] ;?></span>
            <span><ion-icon name="trophy"></ion-icon></span>
        </li>
        <li>
            <span>4</span>
            <span><?php echo $game5_details[3]['Pinno'] ;?></span>
            <span><?php echo $game5_details[3]['High_score'] ;?></span>
            <span><ion-icon name="shield-half"></ion-icon></span>
        </li>
        <li>
            <span>5</span>
            <span><?php echo $game5_details[4]['Pinno'] ;?></span>
            <span><?php echo $game5_details[4]['High_score'] ;?></span>
            <span><ion-icon name="shield-half"></ion-icon></span>
        </li>
    </div>
    <div class="note">
     <p><i>NOTE : For latest updates please do refresh or sometimes it may take a while to update the high scores. </i></p>
    </div>
    </div>




    <div class="popup" id="popup_div">
       <div class="div1">
         <img id="popup_pic"/>
         <ion-icon onclick="close_popup()" name="close-outline" size="large"></ion-icon>
       </div>
       <div class="div2">
           <span><big><b>Name : </b></big><p  id="name"></p></span>
           <span><big><b>Category : </b></big><p id="cat"></p></span>
           <span><big><b>Mostly Played Game : </b></big><p id="mpg"></p></span>
           <span><big><b>Description : </b></big><p id="des"></p></span>
           <button id="games_button" onclick="redirect(this)">Play Now</button>
       </div>
    </div>
    <script>
        const popup = document.getElementById("popup_div");        
        function close_popup(){
	    popup.style.display= 'none';
        }
        function open_popup(image){
          if(popup.style.display!= 'block'){
            const name = image.getAttribute("data-name");
            const description = image.getAttribute("data-description");
            const game_href = image.getAttribute("data-href");
            const img_src = image.getAttribute("data-img");
            const mostlyPlayedGame= image.getAttribute("data-mostlyPlayedGame");
            const category = image.getAttribute("data-category");
            document.getElementById("games_button").href = game_href;
            document.getElementById('name').innerHTML = name;
            document.getElementById('cat').innerHTML = category;
            document.getElementById('mpg').innerHTML = mostlyPlayedGame;
            document.getElementById('des').innerHTML = description;
            document.getElementById('popup_pic').src = img_src;
     	    popup.style.display= 'block';
          }
          else{close_popup();}
        }
        function redirect(button){
            window.open(button.href, "_blank");
        }
    </script>
</body>
</html>