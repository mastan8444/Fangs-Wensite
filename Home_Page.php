<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fangs-Home Page</title>
    <link href="https://fangs.infinityfreeapp.com/images/icon.png" rel="icon">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <style>
@import url("https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600;700;800;900&display=swap");
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins' , sans-serif;
}
body{
    background: #2f363e;
    overflow: hidden;
}
.navigation{
    position: fixed;
    left:0;
    top: 0;
    width: 90px;
    height: 100%;
    background: #2f363e;
    box-shadow: 25px 25px 75px rgba(0,0,0,0.25),
    10px 10px 70px rgba(0,0,0,0.25),
    inset 5px 5px 10px rgba(0,0,0,0.5),
    inset 5px 5px 20px rgba(255,255,255,0.2),
    inset -5px -5px 15px rgba(0,0,0,0.75);
    display: flex;
    justify-content: center;
    align-items: flex-end;
    flex-direction: column;
    gap: 30px;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
}
.navigation li{
    position: relative;
    list-style: none;
    width: 80px;
    height: 80px;
    display: flex;
    justify-content: center;
    margin: 0 5px;
}
.navigation li::before{
    content: '';
    position: absolute;
    top: calc(50% - 2.5px);
    left: 20px;
    width: 5px;
    height: 5px;
    border-radius: 50%;
    transition: 0.5s;
}
.navigation li.active::before{
    background: #66fcf1;
    box-shadow: 0 0 5px #66fcf1,
    0 0 10px #66fcf1,
    0 0 20px #66fcf1,
    0 0 30px #66fcf1,
    0 0 40px #66fcf1,
    0 0 50px #66fcf1 ;
}  
.navigation li a{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-decoration: none;
}
.navigation li a p{
    display: none;
    position: absolute;
    text-decoration: none;
    font-size: 20px;
    font-weight: 400;
    color: #aaa;
    right:100px;
    width: 50px;
    transition: 0.5s;
    transition-delay: 0.2s;

}
.navigation li:hover a p{
    color: #66fcf1;
}
.navigation li a .icon{
    position: absolute;
    font-size: 1.75em;
    width: 80px;
    height: 80px;
    color: #aaa;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.5s;
    transition-delay: 0.2s;
}
.navigation li:hover a .icon{
    color: #66fcf1;
}
.navigation li.active a p{
    color: #66fcf1;
}
.navigation li.active a .icon{
    transform: translateX(40px);
    background: #66fcf1;
    color: #fff;
    box-shadow: 5px 5px 7px rgba(0,0,0,0.25),
    inset 2px 2px 3px rgba(255,255,255,0.25),
    inset -3px -3px 5px rgba(0,0,0,0.5);
    transition-delay: 0s;
}
.navigation li a .icon::before{
    content: '';
    position: absolute;
    inset: 10px;
    background: #2f363e;
    border-radius: 50%;
    box-shadow: 5px 5px 5px rgba(0,0,0,0.5),
    inset 2px 2px 3px rgba(255,255,255,0.25),
    inset -3px -3px 5px rgba(0,0,0,0.5);
    transform: scale(0);
    transition: 0.5s;  
}
.navigation li.active a .icon::before{
    transform: scale(1);
}
.navigation li a .text{
    position: absolute;
    left: 80px;
    font-size: 1em;
    font-weight: 500;
    background: #66fcf1;
    color: #2f363e;
    padding: 2px 10px;
    border-radius: 15px;
    box-shadow: 5px 5px 7px rgba(0,0,0,0.25),
    inset -3px -3px 5px rgba(0,0,0,0.5);
    opacity: 0;
    visibility: hidden;
    transition: 0.5s;
}
.navigation li a .text::before{
    content: '';
    position: absolute;
    top: 50%;
    left: -2.4px;
    transform: translateY(-50%) rotate(45deg);
    width: 8px;
    height: 8px;
    background: #66fcf1;  
}
.navigation li:hover a .text{
    left: 100px;
    opacity: 1;
    visibility: visible;
}
.navigation li.active:hover a .text{
    left: 140px;
    opacity: 1;
    visibility: visible;
}
.frame-div{
    position: absolute;
    left: 90px;
    width: calc(100% - 90px);
    height: 100%;
}
.frame{
    position: relative;
    width: 100%;
    height: 100%;
    border: none;
}
@media screen and ( min-width: 1500px){
    .navigation{
        width: 200px;
    }
    .navigation li a p{
        display: flex;
    }
    .navigation li:hover a .text{
        display: none;
    }
    .frame-div{
        left: 200px;
        width: calc(100% - 200px);
    }
}
@media screen and (max-width: 600px){
    .navigation{
        position: fixed;
        width: 100%;
        height: 90px;
        flex-direction: row;
        gap: 10px;
        top: calc(100% - 74px);
        border-top-right-radius: 15px;
        border-top-left-radius: 15px;
        border-bottom-right-radius: 0;
    }
    .navigation li::before{
        top: calc(80% - 2.5px);
        left: 50%;
    }   
    .navigation li.active a .icon{
        transform: translateY(-40px);
    }
    .navigation li a .text{
        left: 0px;
        bottom: calc(100% + 30px);
        font-size: 1.0em;
        box-shadow: 5px 5px 5px rgba(0,0,0,0.5),
    inset 2px 2px 3px rgba(255,255,255,0.25),
    inset -3px -3px 5px rgba(0,0,0,0.5);
    }
    .navigation li a .text::before{
        display: none;
    }
    .navigation li:hover a .text{
        left: 0px;
        bottom: calc(100% + 30px);
    }
    .navigation li.active:hover a .text{
        left: 0px;
        bottom: calc(100% + 70px);
    }
    .frame-div{
        left: 0;
        width: 100%;
        height: calc(100% - 64px);
    }
}
@media screen and (max-width:470px){
    .navigation{
        height: 74px;  
        gap: 8px;      
    } 
    .navigation li::before{
        top: 70%;
    }
    .navigation li a .icon{
        font-size: 1.5em;
        height: 62px;
        width: 62px;
    }
     .navigation li a .text{
        font-size: .70em;
        padding :4px 8px;
    }
    .navigation li.active a .icon{
        transform: translateY(-36px);
    }
    .navigation li.active:hover a .text{
        bottom: calc(100% + 42px);
    }
    #firstchd{
        left: 2px;
    }
    #lastchd{
        left: -1px;
    }
    #midchd{
        left:0px;
    }
    
}
@media screen and (min-width:380px) and (max-width:465px){
    #firstchd{
        left: 8px;
    }
    #lastchd{
        left: 6px;
    }
    #midchd{
        left: 8px;
    }
    
}
@media screen and (max-width: 330px){
    .navigation{
        gap: 5px;
        height:68px;
    }
    .navigation li a .icon{
        height: 55px;
        width: 55px;
        font-size: 1.1em;
    }
    .navigation li.active:hover a .text{
        bottom: calc(100% + 38px);
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
        $newVisitors = $Visitors + 1;
        $query_update_visitors = "UPDATE rating_table SET Visitors=$newVisitors";
        $result_update_visitors = $conn->query($query_update_visitors);
        if(!($result_update_visitors)){
            echo "<script>alert('Error occured at updating visitors');</script>";
        }
    }
    else{
        echo "<script>alert('Error occured at selecting visitors');</script>";
    }
    ?>
    
    <div class="frame-div">
        <iframe class="frame" name="page-place" src="h_page.php"></iframe>
    </div>
    <ul class="navigation" id="navbar">
        <li>
            <a href="g_page.php" target="page-place"><p>Games</p>
                <span class="icon">
                    <ion-icon name="game-controller-outline"></ion-icon>
                </span>
                <span class="text" id="firstchd">Games</span>
            </a>
        </li>
        <li>
            <a href="f_page.php" target="page-place"><p>Facts</p>
                <span class="icon">
                    <ion-icon name="bulb-outline"></ion-icon>
                </span>
                <span class="text" id="firstchd">Facts</span>
            </a>
        </li>
        <li class="active">
            <a href="h_page.php" target="page-place"><p>Home</p>
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="text" id="midchd">Home</span>
            </a>
        </li>
        <li>
            <a href="s_page.php" target="page-place"><p>Stories</p>
                <span class="icon">
                    <ion-icon name="library-outline"></ion-icon>
                </span>
                <span class="text" id="lastchd">Stories</span>
            </a>
        </li>
        <li>
            <a href="r_page.php" target="page-place"><p>Review</p>
                <span class="icon">
                    <ion-icon name="paper-plane-outline"></ion-icon>
                </span>
                <span class="text" id="lastchd">Review</span>
            </a>
        </li>
    </ul>
    <script>
        let list = document.querySelectorAll('.navigation li');
        function activeLink(){
            list.forEach((item) =>
            item.classList.remove('active'));
            this.classList.add('active');
        }
        list.forEach((item) =>
        item.addEventListener('click',activeLink));
    </script>
 
</body>
</html>
