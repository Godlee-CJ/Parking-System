<!DOCTYPE html>
<html>
    <head>
        <title>Staff Parking</title>


        <style type="text/css">
        body{
            margin: 0;
            padding: 0;
            background: #25252a;
        }

        .middle{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}

.btn{
    position: relative;
    display: block;
    color: white;
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
    justify-content: 'center';
    text-decoration: none;
    text-align-last: center;
    margin: 20px 630px;
    border: 2px solid #ff7675;
    padding: 14px 50px;
    text-transform: uppercase;
    overflow: hidden;
    transition: 1s all ease;
}

.btn::before{
    background: #ff7675;
    content:"";
    width: 100%;
    height: 100%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    z-index: -1;
    transition: all 0.6s ease;
}

.btn1::before{
    width: 0;
    height: 100%;
}

.btn1:hover::before{
    width:100%;
}

.btn2::before{
    width: 100%;
    height: 0;
}

.btn2:hover::before{
    height: 100%;
}

.btn3::before{
    width: 0;
    height: 100%;
}

.btn3:hover::before{
    width:100%;
}

.btn4::before{
    width: 100%;
    height: 0;
}

.btn4:hover::before{
    height: 100%;
}
        #tslot{
            height:250px;
            font-weight: bolder;
            text-align: center;
            width: 250px;    
        }
        h1{
    text-align: center;
    font-size: 50px;
    color: white;
    font-family: 'Anton', sans-serif;
    font-family: 'Prompt', sans-serif;
}

h3{
    color:white;
}
        a{
            text-decoration: none;  
            color:black;
        }
        </style>
    </head>
    <body>
        <section>
            <div class="container">
                <form>

                    
                    <?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"parksys");
    $mysql = "SELECT * FROM `lots` WHERE `user_type` = 'V' AND `vacancy` = 0 LIMIT 1;";  
    $result = mysqli_query($connection,$mysql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result))
        {
            
?>
                   <center>  
                    <h1> Here is your slot number:</h1>
                    <input type="text" value="<?php echo $row['user_type'].$row['slot_no']?>" id="tslot" style="font-family: sans-serif;
                    font-size: 100px;" name="tslot" disabled>
                    <br>
                    <br>
                    <a href="visitordetails.php" class="btn btn1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;confirm</a>
                    <a href="index.php" class="btn btn1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;back</a>
                    <?php
                }
            }
            else{
                ?>
                <center>
                    
                <h1>SORRY ALL SLOTS IN THIS SECTION ARE OCCUPIED</h1>
                <a href="index.php" class="btn btn1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;back</a>
    
                </center>
                
          </div>
        </section>
    </body>
</html>
<?php 
}
?>