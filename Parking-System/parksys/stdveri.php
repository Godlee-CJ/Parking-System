<!DOCTYPE html>
<html>
<head>
    <title>Student Verification</title>
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
            <h1>Student Verification</h1><br>
        </form>
        
        <form action="" method="post">
            USN: <input type="text" name="usn" required><br><br>
            
            <input type="submit" name="submit" value="submit">
        </form><br>
        
        <?php
            session_start();
            if(isset($_POST['submit'])){
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"parksys");
                $query = "select * from std where usn = '$_POST[usn]'";
                $query_run = mysqli_query($connection,$query);
                while ($row = mysqli_fetch_assoc($query_run)) {
                    if($row['usn'] == $_POST['usn']){
                        
                            header("Location: student.php");
                        }
                        else{

                     ?>
                     
                       
                            
                            <?php
                        }
                    }
                }
                
            
        ?>
    </center>
</body>
</html>