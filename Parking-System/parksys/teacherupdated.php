<!DOCTYPE html>
<html>
<head>
<style>
.grid-container {
  display: grid;
  grid-column-gap: 0.1px;
  grid-template-columns: auto auto;
  background-color: rgb(255, 255, 255);
  border: 2px solid rgb(0, 0, 0);
  padding: 10px;
}
.grid-item {
  background-color: rgba(0, 255, 0, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 10px;
  margin: 7px 300px;
  font-size: 30px;
  text-align: center;
}
<?php
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"parksys");
  $query = "UPDATE `lots` SET `vacancy`= 1 WHERE `user_type` = 'T' AND `vacancy` = 0 LIMIT 1";  
  $query_run = mysqli_query($connection,$query);
?>

</style>
</head>
<body>
<div class="grid-container">
  <div class="grid-item">T41</div>
  <div class="grid-item">T42</div>
  <div class="grid-item">T43</div>
  <div class="grid-item">T44</div>
  <div class="grid-item">T45</div>
  <div class="grid-item">T46</div>
  <div class="grid-item">T47</div>
  <div class="grid-item">T48</div>
  <div class="grid-item">T49</div>
  <div class="grid-item">T50</div>
  <div class="grid-item">T51</div>
  <div class="grid-item">T52</div>
  <div class="grid-item">T53</div>
  <div class="grid-item">T54</div>
  <div class="grid-item">T55</div>
  <div class="grid-item">T56</div>
  <div class="grid-item">T57</div>
  <div class="grid-item">T58</div>
  <div class="grid-item">T59</div>
  <div class="grid-item">T60</div>
</div>
<button class="btn"> <?php echo '<a href="index.php"> Confirm</a>';?> </button>

</body>
</html>