<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color:#5F9EA0;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 25px; 
  line-height: 30px;
  border-radius: 6  px;
}


.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: white;
  color: black;
}

.header-right {
  float: center;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align:center;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
  
  <div class="header-right">
    <a class="active" href="home">Home</a>
    <a class="active" href="register">SIGN UP</a>
    <a class="active" href="login">SIGN IN</a>
    <a class="active" href="">Contact</a>
    <a class="active"href="">About</a>
  </div>
</div>

<div style="padding-left:20px">
  
</div>

</body>
</html>