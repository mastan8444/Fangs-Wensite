<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Home_Page-FANGS</title>
    <link rel="stylesheet" href="h_page.css">
    <style>
    /*     #66fcf1;
           #1f2833;
           #0b0c10;
           #c5c6c7;
           #45a29e; */
    </style>
</head>
<body> 
<?php
include 'db_connection.php';

session_start();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true){
    $pinno = $_SESSION['pinno'];
    $password = $_SESSION['password'];
    $query = "SELECT * FROM login_table WHERE Pinno = '$pinno' AND Password = '$password'";
    $result = mysqli_query($conn, $query);
    if($result){
        $row = mysqli_fetch_assoc($result);
        $name = $row['User_name'];
        $place = $row['Place'];
        $profile_pic = $row['Profile_pic'];
        $profile_pic = "profile_pics/".$profile_pic;
        setcookie("Pinno" , $pinno , 0, "/");
        echo "<style>#para{display:none;}</style>"; 
    }
}
else {
    $pinno ="21030-CM-486";
    $name = "X.Guest";
    $place = "Earth";
    $profile_pic = "profile_pics/select_pic1.jpg";
    setcookie("Pinno" , $pinno , 0, "/");
    $assignments_css = "#save{cursor: not-allowed; } #box2{display: none; } #para{display:block;color:white;text-align: center;padding-top: 20px;}" ;
    echo "<style>$assignments_css</style>";
}
?>
    <div class="sticky-nav" id="navbar">
        <img src="images/site_logo.png">
        <p>FANGS</p>
    </div>
    <div class="edit_profile" id="edit_profile" tabindex="0">
        <div class="edit_profile_navbar">
            <h2>Editing Profile</h2>
            <ion-icon name="close" id="close"></ion-icon>
        </div>
        <div class="profile_pic">
            <h3>Select Profile Pic</h3>
            <div class="selected_pic" style="background-image:url('<?php echo $profile_pic; ?>')" id="selected_pic"></div>
            <div class="select_pic">
                <div class="col">
                    <div class="each-img a" onclick="set_pic(this)"></div>
                    <div class="each-img b" onclick="set_pic(this)"></div>
                    <div class="each-img c" onclick="set_pic(this)"></div>                    
                </div>
                <div class="col">
                    <div class="each-img d" onclick="set_pic(this)"></div>
                    <div class="each-img e" onclick="set_pic(this)"></div>
                    <div class="each-img f" onclick="set_pic(this)"></div>
                </div>              
                <div class="col">
                    <div class="each-img g" onclick="set_pic(this)"></div>
                    <div class="each-img h" onclick="set_pic(this)"></div>
                    <div class="each-img i" onclick="set_pic(this)"></div>
                </div>
            </div>
        </div>
        <div class="edit_details">
            <div>
                <p>Your Name :</p>
                <input type="text" placeholder="<?php echo $name ;?>" id="name1"/>
            </div>
            <div>
                <p>Your From :</p>
                <input type="text" placeholder="<?php echo $place ;?>" id="place1"/>
            </div>
        </div>
        <div class="non-edit_details">
            <hr></hr>
            <div class="ending">
                <h3>
                <?php 
                  echo $pinno; 
                ?>
                </h3>
            </div>
        </div>
        <button id="save" onclick="update_details()">Save</button>
    </div>
    <h2 class="page-name">Home Page</h2>
    <div class="profile">
        <h2 class="ending"><ion-icon name="lock-closed"></ion-icon>End-to-end Encrypted</h2>
        <div class="profile-matter">
            <h2>Profile</h2>
            <ul>
                <li>Your data will not be shared except the "Pinno".</li>
                <li>Enter your details only if you are comfortable with it.</li>
                <li>Don't share your details if you feel insecure.</li>
                <li>If you find any of your Profile details updated / changed wihtout your consent , please Report it to us.</li>
            </ul>
        </div>
        <div class="profile-card">
        <div class="card">
            <div class="lines"></div>
            <div class="imgBx">
               <img src="<?php echo $profile_pic; ?>" alt="Img not found">
            </div>
            <div class="content">
                <div class="details">
                    <h2>
                    <?php 
                    echo $pinno; 
                    ?>
                    <br>
                    <span>
                    <?php
                    echo $name;
                    ?>
                    </span>
                    </h2>
                    <div class="actionBtn">
                        <span>From&nbsp;&nbsp;<h4><?php echo $place ; ?></h4></span>
                        <button id="edit_but">Edit</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="assignments">
        <div class="search">
            <h2>Assignments</h2>
            <div class="input-div">
                <input type="text" placeholder=" FANGS..." id="inputt"/>
                <ion-icon name="close-outline" onclick="clearr()"></ion-icon>
            </div>
            <button>Search</button>
        </div>
        
        <div class="color-code">
            <div class="box1" id="box1">
                <div class="head">
                    <span class="word1">
                        <span style="color:#00dfff" class="w1">C</span>
                        <span style="color:#39ff14" class="w2">O</span>
                        <span style="color:#ff6ec7" class="w3">L</span>
                        <span style="color:#ff9933" class="w4">O</span>
                        <span style="color:#bf40bf" class="w5">R</span>
                    </span>
                    <span class="word2">
                        <span style="color:#ff073a">C</span>
                        <span style="color:#bfff00">O</span>
                        <span style="color:#ff00ff">D</span>
                        <span style="color:#00fff9">E</span>
                        <span style="color:#c5c6c7">:</span>
                    </span>
                </div>
                <div class="boxes">
                    <div class="box" style="color:#ff9933;">Java Programming</div>
                    <div class="box" style="color:#ff00ff">Python Programming</div>
                    <div class="box" style="color:#39ff14">Indutrial Management & Entrepreneurship</div>
                    <div class="box" style="color:#ff073a">Internet Of Things</div>
                    <div class="box" style="color:#00fff9">Software Engineering</div>
                </div>
            </div>
            <?php
            include 'db_connection.php';

            ?>
            <div class="box2" id="box2">
                     <div class="assign ime">
                        <div class="front">
                            <h2>Indutrial Management & Entrepreneurship</h2>
                        </div>
                        <div class="back">
                            <h4><big>More Details</big></h4>
                            <span><b>Category : <small>Assignment-3</small></b></span>
                            <span><b>Issue date : <small>20-3-24</small></b></span>
                            <span><b>Submit date : <small>1-4-24</small></b></span>
                            <span><b>Syllubus : <small>Sums on CPM</small></b></span>
                            <button onclick="window.open('assignments/ime_assign_3.html?value1=39ff14&value2=d2ffbf&value3=20-3-24&value4=1-4-24&value5=Sums on CPM' , '_blank')">
                                View Now
                            </button>
                        </div>
                     </div>
                     <div class="assign java">
                        <div class="front">
                            <h2>Java Programming</h2>
                        </div>
                        <div class="back">
                            <h4><big>More Details</big></h4>
                            <span><b>Category : <small>Assignment-5</small></b></span>
                            <span><b>Issue date : <small>24-3-24</small></b></span>
                            <span><b>Submit date : <small>3-4-24</small></b></span>
                            <span><b>Syllubus : <small>5.12</small></b></span>
                            <button onclick="window.open('assignments/java_assign_5.html?value1=ff9933&value2=ffe0b2&value3=24-3-24&value4=3-4-24&value5=5.12' , '_blank')">
                                View Now
                            </button>
                        </div>
                     </div>
                     <div class="assign se">
                        <div class="front">
                            <h2>Software Engineering</h2>
                        </div>
                        <div class="back">
                            <h4><big>More Details</big></h4>
                            <span><b>Category : <small>Assignment-2</small></b></span>
                            <span><b>Issue date : <small>7-3-24</small></b></span>
                            <span><b>Submit date : <small>27-3-24</small></b></span>
                            <span><b>Syllubus : <small>5.3</small></b></span>
                            <button onclick="window.open('assignments/se_assign_5.html?value1=00fff9&value2=b6fdff&value3=7-3-24&value4=27-3-24&value5=5.3' , '_blank')">
                                View Now
                            </button>
                        </div>
                     </div>
                     <div class="assign python">
                        <div class="front">
                            <h2>Python Programming</h2>
                        </div>
                        <div class="back">
                            <h4><big>More Details</big></h4>
                            <span><b>Category : <small>Assignment-5</small></b></span>
                            <span><b>Issue date : <small>29-3-24</small></b></span>
                            <span><b>Submit date : <small>3-4-24</small></b></span>
                            <span><b>Syllubus : <small>5.3</small></b></span>
                            <button onclick="window.open('assignments/python_assign_5.html?value1=ff00ff&value2=ffb3ff&value3=29-3-24&value4=3-4-24&value5=5.3' , '_blank')">
                                View Now
                            </button>
                        </div>
                     </div>
                     <div class="assign iot">
                        <div class="front">
                            <h2>Internet Of Things</h2>
                        </div>
                        <div class="back">
                            <h4><big>More Details</big></h4>
                            <span><b>Category : <small>Assignment-4</small></b></span>
                            <span><b>Issue date : <small>5-1-24</small></b></span>
                            <span><b>Submit date : <small>31-1-24</small></b></span>
                            <span><b>Syllubus : <small>3.4.4</small></b></span>
                            <button onclick="window.open('assignments/iot_assign_3.html?value1=ff073a&value2=ffb3c4&value3=5-1-24&value4=31-1-24&value5=3.4.4' , '_blank')">
                                View Now
                            </button>
                        </div>
                     </div>
                     <div class="assign java">
                        <div class="front">
                            <h2>Java Programming</h2>
                        </div>
                        <div class="back">
                            <h4><big>More Details</big></h4>
                            <span><b>Category : <small>Record</small></b></span>
                            <span><b>Issue date : <small>1-4-24</small></b></span>
                            <span><b>Submit date : <small>13-4-24</small></b></span>
                            <span><b>Syllubus : <small>Exp:9 - Exp:14</small></b></span>
                            <button onclick="window.open('assignments/java_assign_5.html?value1=ff9933&value2=ffe0b2&value3=1-4-24&value4=13-4-24&value5=Exp:9-Exp:14' , '_blank')">
                                View Now
                            </button>
                        </div>
                     </div>
            </div>
            <p id="para">Assignments can't be accessed by the Guest users!</p>
        </div>
    </div>
    <script>
        const tabs = document.querySelectorAll('.tab_btn'); 
        const all_content= document.querySelectorAll('.content');
        tabs.forEach((tab, index)=>{
            tab.addEventListener('click', (e)=>{
                tabs.forEach(tab=>{
                    tab.classList.remove('active');
                });
                tab.classList.add('active');
                var line = document.querySelector('.line');
                line.style.display = "block";
                document.getElementById('b1').classList.remove('b1'); 
                line.style.width= e.target.offsetWidth+ "px";
                line.style.left= e.target.offsetLeft +"px";
                all_content.forEach(content=>{
                    content.classList.remove('active');
                });
                all_content[index+1].classList.add('active');
            });
        });


    function clearr(){
        var input_tag = document.getElementById("inputt");
        input_tag.value = "";
    }


    const selected_pic = document.getElementById('selected_pic');
    function set_pic(immagge){
        selected_pic.style.backgroundImage = window.getComputedStyle(immagge).getPropertyValue('background-image');
    }

    let list = document.querySelectorAll('.each-img');
        function activeLink(){
            list.forEach((item) =>
            item.classList.remove('active'));
            this.classList.add('active');
        }
        list.forEach((item) =>
        item.addEventListener('click',activeLink));



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



    const profile_edit = document.getElementById('edit_profile');
    const close_but = document.getElementById('close');
    const profile_edit_but = document.getElementById("edit_but");
    const name1 = document.getElementById("name1");
    const place1 = document.getElementById("place1");
    const save_button = document.getElementById("save");

    profile_edit_but.addEventListener('click' , function(){
        profile_edit.style.display = "flex";
    });

    profile_edit.onblur = function(){
        if(name1.matches(":hover") || place1.matches(":hover") || save_button.matches(":hover")){
            profile_edit.style.display = "flex";
        }
        else{
            profile_edit.style.display = "none";
        }
    } ;

    close_but.addEventListener('click' , () =>{
        profile_edit.style.display = "none";
    });

    function update_details(){
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = "";

        const input0 = document.createElement('input');
        input0.type = "hidden";
        input0.name = "image_url";
        const backGroundImageUrl = document.getElementById('selected_pic').style.backgroundImage;
        input0.value = backGroundImageUrl.split('/').pop().replace(/['")]/g,'');

        const input1 = document.createElement('input');
        input1.type = "hidden";
        input1.name = "new_name";
        if(name1.value != ""){
            input1.value = name1.value;
        }
        else{
            input1.value = "<?php echo $name ;?>";
        }

        const input2 = document.createElement('input');
        input2.type = "hidden";
        input2.name = "new_place";
        if(place1.value != ""){
            input2.value = place1.value;
        }
        else{
            input2.value = "<?php echo $place ;?>";
        }

        form.appendChild(input0);
        form.appendChild(input1);
        form.appendChild(input2);

        document.body.appendChild(form);

        form.submit();
    }
     </script>
     <?php
     include 'db_connection.php';
     if($_SERVER['REQUEST_METHOD']==='POST'){
         $image_url = $_POST['image_url'];
         $new_name = $_POST['new_name'];
         $new_place = $_POST['new_place'];
         $Pinno=$_COOKIE['Pinno'];

         $query_update = "UPDATE login_table SET User_name='$new_name' , Place='$new_place' , Profile_pic='$image_url' WHERE Pinno='$Pinno'";
         if(!($conn->query($query_update) === TRUE)){
             echo "<script>alert('Error in updating!')</script>" ;
         }
     }
     ?>
</body>
</html>