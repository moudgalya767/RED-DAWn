<?php
	//require 'common.php';
?>

<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="home_style.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
     <nav class="navbar navbar-inverse navbar-static-top" style="margin:0px;">
    <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar" onclick="toggle()">

                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                                <span class="icon-bar"></span>                        
                        </button>    
                <a href="#" class="navbar-brand">redDawn</a>
                         </div>
  
        <div class="collapse navbar-collapse navbar-right " id=mynavbar >      

            <form class="nav navbar-right form-inline form-group"  style="padding-top: 10px;">


                <button class="btn form-control nav-item" style="background-color: orange; color: black"><span class="glyphicon glyphicon-envelope" id="messages"></span></button>                
                
                <button class="btn form-control nav-item" style="background-color: orange; color: black"><span class="glyphicon glyphicon-user" id="friends"></span></button>

                <button class="btn form-control nav-item" style="background-color: orange; color: black"><span class="glyphicon glyphicon-cog" id="settings"></span></button>

                <button class="btn form-control nav-item" style="background-color: orange; color: black"><span class="glyphicon glyphicon-log-out" id="logout"></span></button>
                
                
                
                                

            
            
            </form>
            </div>
        </div>
        </nav>
    <video autoplay muted loop id="myVideo">
        <source src="background.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="container">
        <div class="row row-dec">
            <div class="col-xs-3">
                <?php
                    $username = "User Name";//$_SESSION['user']; 
                    $query = "SELECT * FROM users WHERE username = '$username'";
                    //$res = mysqli_query($con, $query);
                    //$row = mysqli_fetch_assoc($res);
                    $posts = 0;//$row['posts'];
                    $likes = 0;//$row['likes'];
                    $img = "img4.jpg";//$row['p_img'];
                ?>
                <div class="row col-dec">
                    <div class="col-xs-6">
                        <div class="thumbnail user">
                            <img src="<?php echo $img ?>" alt="Profile pic">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="use">
                            <a href="#" class="usr"><?php echo $username?></a>
                            <p>Posts: <?php echo $posts?><br>
                               Likes: <?php echo $likes?></p>
                        </div>
                    </div>
                </div><br>
                <div class="row col-dec">
                    <div class="col-xs-12">
                        <h4>Popular</h4>
                    </div>
                </div>
            </div>
            <div class="col-xs-5 col-xs-offset-1 col-dec">
                <input class="form-control" type="text" placeholder="Wanna say something..??" name="post">
            </div>
            
        </div>
    </div>
</body>
</html>


<script type="text/javascript">
    function toggle(){
        console.log('clicked');
        if(document.getElementById('logout').innerHTML == "")
         {   
        document.getElementById('logout').innerHTML=" Logout";
        document.getElementById('settings').innerHTML=" Settings";
        document.getElementById('friends').innerHTML=" Requests";
        document.getElementById('messages').innerHTML=" Messages";
       }
       else
       {
        document.getElementById('logout').innerHTML="";
        document.getElementById('settings').innerHTML="";
        document.getElementById('friends').innerHTML="";
        document.getElementById('messages').innerHTML="";
       }
}
</script>
