<!DOCTYPE html>
<html>
<head>
 <title> Members List</title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
   <style type="text/css">
     body{
          background-image: url('g13.jpg');
          background-repeat : no-repeat;
          background-size: cover;
     }
   </style>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">╰☆☆ 𝓔𝓛𝓘𝓣𝓔 𝓦𝓞𝓡𝓛𝓓 𝓕𝓘𝓣𝓝𝓔𝓢𝓢 ☆☆╮</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Hi Gaurav Hegde <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../ad/admindash.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Operations
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="insert.php">INSERT </a>
          <a class="dropdown-item" href="display.php">DELETE </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="update.php">UPDATE</a> 
        </div>
      </li>
      <form  action="adminpanel.php">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Queries</button>
    </form>&nbsp&nbsp
    <form  action="reviewdisplay.php">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Reviews</button>
      </form>&nbsp&nbsp
    <form  action="../Gymwebsite/login.php">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">LOGOUT</button>
    </form>&nbsp&nbsp
  </div>
</nav>


 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class=  "text-center" style="font-size: 50px;
                                          background: -webkit-linear-gradient( #eee, #333);
                                           -webkit-background-clip: text;
                                            -webkit-text-fill-color: transparent;" >Members List</h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Username </th>
 <th> Email </th>
 <th> Mobile </th>
 <th> Membership </th>
 <th> Duration </th>
 <th> Date </th>
 <th> Delete </th>
 <th> Update </th>


 </tr >

 <?php

 include 'userinfo.php'; 
 $query = "select * from userinfodata ";

 $query = mysqli_query($con,$query);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center text-white">
 <td > <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['user'];  ?> </td>
 <td> <?php echo $res['email'];  ?> </td>
 <td> <?php echo $res['mobile'];  ?> </td>
 <td> <?php echo $res['membership'];  ?> </td>
 <td> <?php echo $res['duration'];  ?> </td>
 <td> <?php echo $res['date'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>