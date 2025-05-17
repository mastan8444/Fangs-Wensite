<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facts_Page-FANGS</title>
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
    flex-direction: column;
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
    text-align:justify;
}
.category{
    width: 100%;
    margin-block: 10px;
}
.category div{
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin-block: 10px;
    gap: 10px;
}
.category div span{
    width: 50%;
    padding: 10px 0;
    border: solid 3px white;
    font-size: 16px;
    color: white;
    border-radius: 8px;
    text-align: center;
    transition: all 0.3s ease;
    cursor: pointer;
}
.category div span:not(:hover) {
    opacity: 0.5;
}
.category div span:hover {
    opacity: 1;
}
.category div span.clicked{
    opacity: 1;
}
.para_facts{
    position: relative;
    width: 100%;
    display:flex;
    flex-direction: column;
    align-items: left;
    justify-content: center;
    border: 3px solid white;
    border-radius: 15px;
    padding: 40px 40px;
}
.para_facts div h2{
    position: absolute;
    color: #ffcb9a;
    background: #2f363e;
    left: 60px;
    top: -16px;
    padding: 0 20px;
    font-size: 24px;
    border: solid 3px white;
    border-radius: 10px;
}
.para_facts p{
    font-size: 22px;
    color:white;
    text-align:justify;
}
@media screen and (max-width: 400px){
    .sticky-nav{
        height: 66px ;
    }
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
}
</style>
</head>
<body>
    <div class="sticky-nav" id="navbar">
        <img src="images/site_logo.png">
        <p>FANGS</p>
    </div>
    <h2 class="page-name">Facts Page</h2>
    <div class="profile">
        <div>
            <h2>Facts Hub</h2>
        </div>
        <p>Welcome to FANGS Facts Page, your gateway to a world of wonder and knowledge! As you embark on your journey through our website, prepare to be captivated by a treasure trove of fasinating facts from around the globe. Whether you're here to satisfy your curiosity, impress your friends with newfound knowledge or simply indugle in a bit of intellectual escapism, FANGS is your ultimate destination. Explore our collection of fascinating facts from various categories including history, science, nature, technology and more.</p>
    </div>

    <div class="profile">
        <div>
            <h2>Category Selection</h2>
        </div>
        <p>Select a category below to exlpore fasinating facts within that specific topic. Once you choose a category, relavent facts will be displayed below for your exploration and enjoymenet </p>
        <div class="category">
            <div>
                <span onclick="addClass(this , '#ffd70077')" id='span1'>History</span>
                <span onclick="addClass(this , '#00bfff77')" id='span2'>Science</span>
            </div>
            <div>
                <span onclick="addClass(this , '#00ff7f77')" id='span3'>Nature</span>
                <span onclick="addClass(this , '#8a2be277')" id='span4'>Technology</span>
            </div>
            <div>
                <span onclick="addClass(this , '#ffb6c177')" id='span5'>Animal & Wildlife</span>
                <span onclick="addClass(this , '#6495ed77')" id='span6'>Sports & Recreation</span>
            </div>
            <div>
                <span onclick="addClass(this , '#ffffcc77')" id='span7'>Health & Wellness</span>
                <span onclick="addClass(this , '#ff69b477')" id='span8'>Art & Culture</span>
            </div>
            <div>
                <span onclick="addClass(this , '#00ffff77')" id='span9'>Space</span>
                <span onclick="addClass(this , '#00808077')" id='span10'>Geography</span>
            </div>
            <div>
                <span onclick="addClass(this , '#ff00ff77')" id='span11'>Other Facts</span>
                <span onclick="addClass(this , '#ff000077')" id='span12'>Random Facts</span>
            </div>
        </div>
    </div>

    <div class='para_facts' id="para_facts">
        <div>
            <h2>Facts</h2>
        </div>
<?php
    include 'db_connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["fact_button"])) {
        $category = $_POST["fact_button"];
        if($category == "Random Facts") {
            $query = "SELECT `Fact` FROM `facts_table` ORDER BY RAND() LIMIT 10";
        } else {
            $query = "SELECT `Fact` FROM `facts_table` WHERE `Category` = '$category' ORDER BY RAND() LIMIT 10";
        }
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $count = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<p>$count. " . $row["Fact"] . "</p>";
                $count++;
            }
        } else {
            echo "<p>No facts found for this category.</p>";
        }
        if(isset($_POST["clicked_span_id"])) {
            // Set the background color of the clicked span using inline style
            $tag = $_POST["clicked_span_id"];
            $color = $_POST['clicked_span_id_color'];
            echo "<script>document.getElementById('$tag').classList.add('clicked');</script>";
            echo "<script>document.getElementById('$tag').style.backgroundColor = '$color' ;</script>";
            $color_without_opacity = substr($color, 0, 7); // Extract first six characters
            $color_with_new_opacity = $color_without_opacity . "1A"; // Append the new opacity
            echo "<script>document.getElementById('para_facts').style.backgroundColor = '$color_with_new_opacity' ;</script>";
        }
    }
    else{
        echo "<p>Select anyone of the Categories shown above for some interesting facts.</p>";
    }
?>

    </div>


    <script>
    function addClass(thisSpan , new_class){

            var spans = document.querySelectorAll('.category div span');
            spans.forEach(function(span){
                span.style.backgroundColor = 'transparent';
                span.classList.remove('clicked');
            });
            thisSpan.classList.add('clicked');
            thisSpan.style.backgroundColor = new_class;
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '';
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'fact_button';
            hiddenInput.value = thisSpan.textContent;
            form.appendChild(hiddenInput);
            
            const spanIdInput = document.createElement('input');
    spanIdInput.type = 'hidden';
    spanIdInput.name = 'clicked_span_id';
    spanIdInput.value = thisSpan.id; // Set the value to the ID of the clicked span
    form.appendChild(spanIdInput);

    const spanIdInput_color = document.createElement('input');
    spanIdInput_color.type = 'hidden';
    spanIdInput_color.name = 'clicked_span_id_color';
    spanIdInput_color.value = new_class; // Set the value to the ID of the clicked span
    form.appendChild(spanIdInput_color);

    document.body.appendChild(form);
    form.submit();
    }

       /* var init_span = document.getElementById('init_span');
        addClass(init_span , '#ff000077'); */
    </script>
</body>
