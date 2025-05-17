<!doctype html>
<html>
<head>
 <title>Administrator-FANGS</title>
 <link rel="shortcut icon" href="https://fangs.infinityfreeapp.com/images/icon.png">
 <link rel="icon" href="https://fangs.infinityfreeapp.com/images/icon.png">
 <style>
@import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900');           
*{
     box-sizing: border-box;
     font-family: 'Poppins',sans-serif;
}
body{
	background-image: url(images/admin.jpg);
    background-repeat: no-repeat;
  	background-size:100% 100%;
    background-poition: center;
    background-attachment: fixed;
    padding-inline: 20px;
}
h1{
	font-size: 52px;
	color: white;
	margin: 5px;
}
h2{
	font-size: 38px;
	color: #86c232;
}
.note{
	color: #6b6e70;
	font-weight: 600;
	margin: 20px;
 	position: relative;
	font-size: 16px;
    text-align: justify;
}
.head{
	margin: 20px;
	display: flex;
	padding: 5px;
	align-items: center;
}
.drop{
	display: flex;
	align-items: center;
    justify-content: space-around;
}
.text{
	color: #6b6e70;
	font-size: 22px;
	font-weight: 800;
}
.run{
    height: 400px;
	background-color: rgba(255,255,255,0.3);
 	border-radius: 25px;
	padding: 20px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-evenly;
    overflow-Y : scroll;
}
.run::-webkit-scrollbar {
    	display: none;
}
.float_card{
    padding: 10px;
    margin: 20px;
    border:3px solid white;
    color: white;
    border-radius: 22px;
    font-size: 16px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    width: 200px;
    height: 300px;
    transition: all ease 0.3s;
}
.float_card:hover{
    transform: scale(1.05);
}
.run:hover > .float_card:not(:hover){
    filter: blur(4px);
}
.float_card p{
    color: inherit;
    text-align: center;
}
.float_card a{
    text-decoration: none;
    color: inherit;
}
.finalbut{
	border-radius: 12px;
	font-size: 15px;
	font-weight: 500;
	background-color: #86c232;
	color: white;
	border: none;
    padding: 8px 12px;
}
.finalbut:hover{
	box-shadow: 0px 0px 9px 3px  white;
}
.result{
  	font-size: 18px;
	font-weight: 500;
	color: white;
	margin: 30px;
}
</style>
</head>
<body>
    <?php
        include 'db_connection.php';

        session_start();


        if(!(isset($_SESSION['logged_in'])) && $_SESSION['logged_in'] !== true){
            $overlay_css = "position: fixed; top: 0; left: 0; width: 100%; height: 100%; backdrop-filter: blur(4px); background-color: rgba(0, 0, 0, 0.5); display: flex; justify-content: center; align-items: center; color: white; font-size: 24px; text-align: center;";
            $overlay_content = "Unauthorized users don't have access to the admin page";
            echo "<div style='$overlay_css'>$overlay_content</div>";
        }
        else{
            $pinno = $_SESSION['pinno'];
            $password = $_SESSION['password'];

            if($pinno!='21030-CM-485' && $password!='485PlatinaMASH'){
                $overlay_css = "position: fixed; top: 0; left: 0; width: 100%; height: 100%; backdrop-filter: blur(4px); background-color: rgba(0, 0, 0, 0.5); display: flex; justify-content: center; align-items: center; color: white; font-size: 24px; text-align: center;";
                $overlay_content = "Unauthorized users don't have access to the Admin page";
                echo "<div style='$overlay_css'>$overlay_content</div>";
            }
        }
    ?>
    <div class="head"><h2>Welcome Back -</h2><h1> ADMINISTRATOR</h1></div>
    <div class="drop">
        <p class="text">Select the Action :</p> 
        <div class="result">
            Click on the links below to make any changes in the database. These links help the administrator to chose the specific page of the PHP-MyAdmin easily. 
        </div>
        <button class="finalbut" onclick="window.location.href='https://fangs.infinityfreeapp.com';">Go Back To WebSite</button>
    </div>
    <div class="run">
        <div class="float_card">
            <p>This link is for the DataBase home Page-FANGS</p>
            <a href="https://php-myadmin.net/db_structure.php?db=if0_36003154_fangs" target="_blank"><i><u>Click here !</u></i></a>
        </div>
        <div class="float_card">
            <p>This link is for the facts_table browse view. Used to know what facts are present</p>
            <a href="https://php-myadmin.net/sql.php?db=if0_36003154_fangs&table=facts_table&pos=0" target="_blank"><i><u>Click here !</u></i></a>
        </div>
        <div class="float_card">
            <p>This link is for the facts_table  SQL commands manipulation Page. Can add facts using SQL commands</p>
            <a href="https://php-myadmin.net/tbl_sql.php?db=if0_36003154_fangs&table=facts_table" target="_blank"><i><u>Click here !</u></i></a>
        </div>
        <div class="float_card">
            <p>This link is for the leadboard_table browse view. Can see the High_scorers.</p>
            <a href="https://php-myadmin.net/sql.php?db=if0_36003154_fangs&table=leadboard_table&pos=0" target="_blank"><i><u>Click here !</u></i></a>
        </div>
        <div class="float_card">
            <p>This link is for the leadboard_table  SQL commands manipulation Page. Can remove any unwanted player's details.</p>
            <a href="https://php-myadmin.net/tbl_sql.php?db=if0_36003154_fangs&table=leadboard_table" target="_blank"><i><u>Click here !</u></i></a>
        </div>
        <div class="float_card">
            <p>This link is for the login_table  browse view. Can view all the registeret users of FANGS</p>
            <a href="https://php-myadmin.net/sql.php?db=if0_36003154_fangs&table=login_table&pos=0" target="_blank"><i><u>Click here !</u></i></a>
        </div>
        <div class="float_card">
            <p>This link is for the login_table  SQL commands manipulation Page. Change the details in login_table</p>
            <a href="https://php-myadmin.net/tbl_sql.php?db=if0_36003154_fangs&table=login_table" target="_blank"><i><u>Click here !</u></i></a>
        </div>
        <div class="float_card">
            <p>This link is for the rating_table  browse view. The rating & visitors of FANGS can be known.</p>
            <a href="https://php-myadmin.net/sql.php?db=if0_36003154_fangs&table=rating_table&pos=0" target="_blank"><i><u>Click here !</u></i></a>
        </div>
        <div class="float_card">
            <p>This link is for the rating_table  SQL commands manipulation Page. Used to clear any rating or visitors</p>
            <a href="https://php-myadmin.net/tbl_sql.php?db=if0_36003154_fangs&table=rating_table" target="_blank"><i><u>Click here !</u></i></a>
        </div>
        <div class="float_card">
            <p>This link is for the stories_table  browse view. Shows all the stories in the Table.</p>
            <a href="https://php-myadmin.net/sql.php?db=if0_36003154_fangs&table=stories_table&pos=0" target="_blank"><i><u>Click here !</u></i></a>
        </div>
        <div class="float_card">
            <p>This link is for the stories_table  SQL commands manipulation Page. Can add a new story, delete or modify the existing stories.</p>
            <a href="https://php-myadmin.net/tbl_sql.php?db=if0_36003154_fangs&table=stories_table" target="_blank"><i><u>Click here!</u></i></a>
        </div>
    </div>
    <p class="note">NOTE : Don't share the login details of the ADMINSTRATOR for more members. Work with the interface carefully as you make changes directly in the Database. Think a minute before making a change in the Database. Make sure for whom you are creating the Account(Dose the pinno belongs to him/she or not ?). If anyone query for the Password when they forgot, make sure that the person is asking for his/her own Account's password. Try to use this interface only in a PC, Laptop or a Computer as it doesn't have responsiveness.</p>
</body>
</html>   <ul>
                    <li>After logging in, navigate to the "Files" section.</li>
                    <li>Find and click on the file named "telegram_bot.py".</li>
                    <li>This is the program file for your Telegram bot.</li>
                    <li>Additionally, there may be a file named "database.db" which is the .db file of the login table from Fangs.</li>
                </ul>
                </li>
                <li><strong>Accessing Databases:</strong>
                <ul>
                    <li>In PythonAnywhere, navigate to the "Databases" section.</li>
                    <li>Find and click on the "Fangs$TelegramBot" database.</li>
                    <li>You can interact with this database through the console.</li>
                </ul>
                </li>
            </ol>
        </div>
    </div>
    <p class="note">NOTE : Don't share the login details of the ADMINSTRATOR for more members. Work with the interface carefully as you make changes directly in the Database. Think a minute before making a change in the Database. Make sure for whom you are creating the Account(Dose the pinno belongs to him/she or not ?). If anyone query for the Password when they forgot, make sure that the person is asking for his/her own Account's password. Try to use this interface only in a PC, Laptop or a Computer as it doesn't have responsiveness.</p>
</body>
</html>