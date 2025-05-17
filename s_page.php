<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stories_Page-FANGS</title>
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
    overflow-Y: hidden;
}
.mostly_played .topgames:focus {
    outline: none;
}
.mostly_played .topgames::-webkit-scrollbar{
    display: none;
}
.mostly_played .topgames::-webkit-scrollbar-thumb{
    background-color: transparent;
}
.topgames .eachgame{
    display: flex;
    align-items: center;
    justify-content: center;
    padding-inline: 40px;
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
hr{
    height: 2px; 
    background:white;
    border: none; 
    margin: 20px 10px; 
    border-radius: 2px;
}
#s1:hover{
    margin-left: 70px;
}
.birthdayCard {
  position: relative;
  width: 120px;
  height: 150px;
  cursor: pointer;
  transform-style: preserve-3d;
  transform: perspective(2500px);
  transition: 1s;
  transform: rotate(15deg);
}
.birthdayCard:hover {
  transform: perspective(2500px) rotate(0deg);
}
.birthdayCard:hover .cardFront {
  transform: rotateY(-160deg);
}
.cardFront {
  position: relative;
  background-color: #fff;
  width: 120px;
  height: 150px;
  overflow: hidden;
  transform-origin: left;
  transition: 0.6s;
  border-radius: 6px;
}
.cardInside {
  position: absolute;
  background-color: rgba(255,255,255,0.2);
  width: 120px;
  height: 150px;
  z-index: -1;
  left: 0;
  top: 0;
  border-radius: 6px;
  border: solid 3px white;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 10px;
  gap: 4px;
}
.take_button{
    outline: none;
    color: white;
    border: solid 2px white;
    border-radius: 2px;
    background-color: transparent;
    padding: 2px 6px;
    cursor: pointer;
    font-size: 12px;
}
p {
  color: white;
  font-size: 12px;
  text-align: justify;
}
.back {
  color: white;
  font-size:14px;
  text-align: center;
}
.all_stories{
    position: relative;
    padding: 0 20px;
    color: #45a29e;
}
.container{
    display: flex;
    flex-direction: column;
    align-items: center;
}
.container .each_story{
    width: 100%;
    border-radius: 15px;
    border: solid 3px white;
    padding: 20px;
    display: flex;
    align-items: center;
    margin-block: 20px;
    opacity: 1;
}
.container .each_story:first-child{
    margin-top: 0;
}
.container .each_story.reverse{
    flex-direction: row-reverse;
}
.container .each_story img{
    width: 250px;
    display: block;
    aspect-ratio: 1;
    border-radius: 12px;
} 
.container .each_story .story_details{
    display: flex;
    padding-inline: 20px;
    justify-content:space-around;
    flex-direction: column;
    height: 250px;
    width: 100%;
}
.container .each_story .story_details h2{
    display: flex;
    width: 100%;
    justify-content: left;
    color:#ffcb9a;
}
.container .each_story .story_details p{
    display: -webkit-box;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical; 
    overflow: hidden;
    text-overflow: ellipsis; 
    font-size: 16px;
    color: white;
}
.container .each_story .story_details .last_div{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}
.container .each_story .story_details .last_div button{
    outline: none;
    border: 2px solid white;
    border-radius: 6px;
    padding: 8px 14px;
    font-weight: 600;
    cursor: pointer;
    background-color: transparent;
    color:white;
    transition: all ease .4s;
}
.container .each_story .story_details .last_div button:hover{
    background-color: white;
    color:black;
}
.container .each_story .story_details .last_div h3{
    color:#ffcb9a;
}
.no_story{
    font-size: 22px;
    color: white;

}
@media screen and (max-width:800px){
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
    .container .each_story img{
        width: 150px;
    } 
    .container .each_story .story_details{
        height: 150px;
    }
    .container .each_story .story_details p{
        -webkit-line-clamp: 3;
        font-size: 14px;
    }
}
@media screen and (max-width: 400px){
    .sticky-nav{
        height: 66px ;
    }
    .sticky-nav.hidden{
        top: -66px;
    }  
}
      </style>
</head>
<body>
    <div class="sticky-nav" id="navbar">
        <img src="images/site_logo.png">
        <p>FANGS</p>
    </div>
    <h2 class="page-name">Stories Page</h2>
    <div class="profile">
        <div>
            <h2>Tales & Adventures</h2>
        </div>
        <p>At FANGS, we bring stories to life like never before.With a wide range of genres to choose from, there's something for every reader. Immerse yourself in thrilling adventures, heartfelt tales, and thought-provoking narratives. With our diverse collection of genres, you'll find yourself transported to new worlds with every turn of the page. Whether you're a fan of fantasy, mystery, or romance, our curated selection is sure to captivate your imagination. Explore the power of storytelling with us today.</p>
    </div>
    <div class="mostly_played">
        <h2>Trending Tales:</h2>
        <div class="topgames">
            <div class="eachgame" id="e1">
                <div class="birthdayCard" id="s1">
                    <div class="cardFront"></div>
                    <div class="cardInside">
                        <h3 class="back">Title of the story</h3>
                        <p>
                        Lorem ipsum dolor
                        </p>
                        <a href="#"><button class="take_button">Click here!</button></a>
                    </div>
                </div>
            </div>
            <div class="eachgame">
                <div class="birthdayCard">
                    <div class="cardFront"></div>
                    <div class="cardInside">
                        <h3 class="back">HAPPY BIRTHDAY</h3>
                        <p>Dear Friend,</p>
                        <p>
                        Lorem ipsum dolor
                        </p>
                        <a href="#"><button class="take_button">Click here!</button></a>
                    </div>
                </div>
            </div>
            <div class="eachgame">
                <div class="birthdayCard">
                    <div class="cardFront"></div>
                    <div class="cardInside">
                        <h3 class="back">HAPPY BIRTHDAY</h3>
                        <p>Dear Friend,</p>
                        <p>
                        Lorem ipsum dolor
                        </p>
                        <a href="#"><button class="take_button">Click here!</button></a>
                    </div>
                </div>
            </div>
            <div class="eachgame">
                <div class="birthdayCard">
                    <div class="cardFront"></div>
                    <div class="cardInside">
                        <h3 class="back">HAPPY BIRTHDAY</h3>
                        <p>Dear Friend,</p>
                        <p>
                        Lorem ipsum dolor
                        </p>
                        <a href="#"><button class="take_button">Click here!</button></a>
                    </div>
                </div>
            </div>
            <div class="eachgame">
                <div class="birthdayCard">
                    <div class="cardFront"></div>
                    <div class="cardInside">
                        <h3 class="back">HAPPY BIRTHDAY</h3>
                        <p>Dear Friend,</p>
                        <p>
                        Lorem ipsum dolor
                        </p>
                        <a href="#"><button class="take_button">Click here!</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <h2 class="all_stories">All Stories:</h2>
    <div class="container">
        <?php
            include 'db_connection.php';
            $sql = "SELECT Title, Genres, Image_url, Story_url, Description FROM stories_table";
            $result = $conn->query($sql);
            $counter = 0;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $title = $row['Title'];
                    $genres = $row['Genres'];
                    $image_url = $row['Image_url'];
                    $story_url = $row['Story_url'];
                    $description = $row['Description'];
                    $class = ($counter % 2 == 0) ? 'each_story' : 'each_story reverse';
                    echo '<div class="' . $class . '">';
                    echo '<img src="' . $image_url . '" alt="Image for ' . $title . '"/>';
                    echo '<div class="story_details">';
                    echo '<h2>' . $title . '</h2>';
                    echo '<p>' . $description . '</p>';
                    echo '<div class="last_div">';
                    echo '<h3>Genre : ' . $genres . '</h3>';
                    echo '<a href="' . $story_url . '" target="_blank"><button>Read now!</button></a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    $counter++;
                }
            } else {
                echo '<p class="no_story">No stories found.</p>';
            }
        ?>
    </div>
</body>
</html>
rl .'" target="_blank"><button>Read now!</button></a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    $counter++;
                    $id++;
                }
            } else {
                echo '<p class="no_story">No stories found.</p>';
            }
        ?>
    </div>
</body>
</html>
