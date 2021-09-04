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
  $query = "UPDATE `lots` SET `vacancy`= 1 WHERE `user_type` = 'H' AND `vacancy` = 0 LIMIT 1";  
  $query_run = mysqli_query($connection,$query);
?>

</style>
</head>
<body>
<div class="grid-container">
  <div class="grid-item">H1</div>
  <div class="grid-item">H2</div>
  <div class="grid-item">H3</div>
  <div class="grid-item">H4</div>
  <div class="grid-item">H5</div>
  <div class="grid-item">H6</div>
  <div class="grid-item">H7</div>
<div class="grid-item">H8</div>
  <div class="grid-item">H9</div>
  <div class="grid-item">H10</div>
  <div class="grid-item">H11</div>
  <div class="grid-item">H12</div>
  <div class="grid-item">H13</div>
  <div class="grid-item">H14</div>
  <div class="grid-item">H15</div>
  <div class="grid-item">H16</div>
  <div class="grid-item">H17</div>
  <div class="grid-item">H18</div>
  <div class="grid-item">H19</div>
  <div class="grid-item">H20</div>
</div>
<button class="btn"> <?php echo '<a href="index.php"> Confirm</a>';?> </button>

</body>
</html>