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


</style>
</head>
<body>
<div class="grid-container">
  <div class="grid-item">V21</div>
  <div class="grid-item">V22</div>
  <div class="grid-item">V23</div>
  <div class="grid-item">V24</div>
  <div class="grid-item">V25</div>
  <div class="grid-item">V26</div>
  <div class="grid-item">V27</div>
  <div class="grid-item">V28</div>
  <div class="grid-item">V29</div>
  <div class="grid-item">V30</div>
  <div class="grid-item">V31</div>
  <div class="grid-item">V32</div>
  <div class="grid-item">V33</div>
  <div class="grid-item">V34</div>
  <div class="grid-item">V35</div>
  <div class="grid-item">V36</div>
  <div class="grid-item">V37</div>
  <div class="grid-item">V38</div>
  <div class="grid-item">V39</div>
  <div class="grid-item">V40</div>
</div>
<button class="btn"> <?php echo '<a href="index.php"> Confirm</a>';?> </button>
<?php
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"parksys");
  $query = "UPDATE `lots` SET `vacancy`= 1 WHERE `user_type` = 'S' AND `vacancy` = 0 LIMIT 1";  
  $query_run = mysqli_query($connection,$query);
?>

</body>
</html>