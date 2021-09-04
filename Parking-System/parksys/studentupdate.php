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
  $query = "UPDATE `lots` SET `vacancy`= 1 WHERE `user_type` = 'S' AND `vacancy` = 0 LIMIT 1";  
  $query_run = mysqli_query($connection,$query);
?>

</style>
</head>
<body>
<div class="grid-container">
  <div class="grid-item">S71</div>
  <div class="grid-item">S72</div>
  <div class="grid-item">S73</div>
  <div class="grid-item">S74</div>
  <div class="grid-item">S75</div>
  <div class="grid-item">S76</div>
  <div class="grid-item">S77</div>
  <div class="grid-item">S78</div>
  <div class="grid-item">S79</div>
  <div class="grid-item">S80</div>
  <div class="grid-item">S81</div>
  <div class="grid-item">S82</div>
  <div class="grid-item">S83</div>
  <div class="grid-item">S84</div>
  <div class="grid-item">S85</div>
  <div class="grid-item">S86</div>
  <div class="grid-item">S87</div>
  <div class="grid-item">S88</div>
  <div class="grid-item">S89</div>
  <div class="grid-item">S90</div>
</div>
<button class="btn"> <?php echo '<a href="index.php"> Confirm</a>';?> </button>

</body>
</html>