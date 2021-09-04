<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exit</title>
    <style type="text/css">
        body{
            margin: 0;
            padding: 0;
            background: #25252a;
        }

        .container{
            display:flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
            text-align: center;
            min-height: 100vh;
            color:white;
            font-size: xx-large;
        }
        .btn{
            width: 80px;
            height: 30px;
            border: none;
            color:black;
            border-radius: 4px;
            transition: ease-out 0.3s;
            font-size: auto;
            outline: none;
            border: 3px solid #32fbf2;
            position: relative;
            z-index:1;
        }

        .btn:before{
            color:#fff;
            cursor: pointer;
        }

        .btn:before{
            transition: 0.5s all ease;
            position: absolute;
            top: 0;
            left: 50%;
            right: 50%;
            bottom: 0;
            opacity: 0;
            content: "";
            background-color: #42fbf2;
        }

        .btn:hover::before{
            transition: 0.5s all ease;
            left: 0;
            right: 0;
            opacity: 1;
            z-index: -1;
        }
        #tslot{
            height:200px;
            font-size:14pt;
        }
        a{
            text-decoration: none;  
            color:black;
        }

        </style>
</head>
<body>
	<center><br><br>
        <form>
            <h1>Fill The Information To Exit </h1><br>
        </form>
        
        <form action="" method="post">
            Vehical NO: <input type="text" name="vl_no" ><br><br>             

            USN: <input type="text" name="usn" ><br><br>

            Staff ID: <input type="text" name="s_id" ><br><br>
             

            Slot NO.: <input type="text" name="slot_no" ><br><br>

            
            <input type="submit" name="submit" value="LEAVE">
            <?php
            session_start();
            if(isset($_POST['submit'])){
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"parksys");
  $query = "UPDATE `lots` SET `vacancy`= 0 WHERE `slot_no` = '$_POST[slot_no]' AND `vacancy` = 1 LIMIT 1";  
  $query_run = mysqli_query($connection,$query);
}
else  { 
    ?>
    <h1></h1>
   <?php 
}
?>
        </form><br>

</body>
</html>