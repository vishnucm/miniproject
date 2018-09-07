<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> ADMIN PAGE</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/vendor.css">
        <link rel="stylesheet" id="theme-style" href="css/app-green.css">
    </head>

    <body>
            

        <?php
            $mysql_user = "root";
            $mysql_pass = "";
            $server_name = "localhost";
   
            $con = mysqli_connect($server_name, $mysql_user, $mysql_pass);
   
            if(! $con ) {    
                die('Could not connect: ' . mysqli_error($con));
            }
   
            $sql = 'SELECT usr_id,name,email,password,user FROM users';
            $d = mysqli_select_db ($con,"testdb");
            $retval = mysqli_query($con,$sql );
            $sql1 = 'SELECT ID,event,att FROM eventat';
            $d = mysqli_select_db ($con,"testdb");
            $retval1 = mysqli_query($con,$sql1 );
   
            if(! $retval ) {
                    die('Could not get data: ' . mysqli_error($con));
            }
            ;
            if(! $retval1 ) {
                    die('Could not get data: ' . mysqli_error($con));
            }
            ;

            if(isset($_POST['submit'])){
            $mysql_user = "root";
            $mysql_pass = "";
            $server_name = "localhost";
   
            $con = mysqli_connect($server_name, $mysql_user, $mysql_pass);

            $d = mysqli_select_db ($con,"testdb");
            $count=0;
           
                //to run PHP script on submit
            if(!empty($_POST['check_list'])){
            // Loop to store and display values of individual checked checkbox.
            foreach($_POST['check_list'] as $selected){

            $query = "UPDATE users SET attendance=attendance+1 WHERE usr_id='$selected'";
            $gets = mysqli_query($con,$query );
           $count=$count+1;
            }
            }
             $event=mysqli_real_escape_string($con, $_POST['event']);
             $query = "INSERT into eventat(event,att) VALUES ('" . $event . "', '" . $count . "')";
            $gets = mysqli_query($con,$query );
        }

        ?>

        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">  
                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="img" style="background-image: url(images/nss.jpg);"> </div> <span class="name">
                      Admin
                    </span> </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    
                                    <a class="dropdown-item" href="../index.html"> <i class="fa fa-power-off icon"></i> Logout </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </header>
                <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                <div class="logo"> <span class="l l1"></span> <span class="l l2"></span> <span class="l l3"></span> <span class="l l4"></span> <span class="l l5"></span> </div> Admin </div>
                        </div>
                        <nav class="menu">
                            <ul class="nav metismenu" id="sidebar-menu">

                                <li >
                                    <a href="index.php"> <i class="fa fa-table"></i> MEMBERS </a>
                                </li>
                                 <li >
                                   <a href="proposals.php"> <i class="fa fa-pencil-square-o"></i> PROPOSALS </a>
                                </li>
                                 <li >
                                   <a href="event.php"> <i class="fa fa-pencil-square-o"></i> EVENTS </a>
                                </li>
                                <li class="active open">
                                   <a href=""> <i class="fa fa-pencil-square-o"></i> ATTENDANCE </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    
                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content responsive-tables-page">
                    <div class="title-block">
                        <h1 class="title"> Attendance Marking </h1>
                    </div>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                        </div>
                                        <section class="example">
                                            <div class="table-responsive">
                                            <form action="attendance.php" method="post">
                                            <label>
                                                Event Name :
                                            </label><br>
                                            <input type="text" name="event" placeholder="Enter event Name" required="true">
                                            <br><br>
                                            <?php
                                            while($row = mysqli_fetch_array($retval)) { 
                                                $d=$row['usr_id'];
                                                $u=$row['name'];

                                                if($row['user'] != "staff"){?>
                                             <input type="checkbox" name='check_list[]' value="<?php echo  "$d" ?>"><label><?php echo "$u" ?></label><br/>                                           
                                            
                                                
                                            <?php
                                            }
                                        }
                                            

                                            ?>
                                            
                                           <input type="submit" name="submit" value="Submit"/>
                                            </form>
                                                
                                                
                                            </div>
                                        </section>
                                        <div class="title-block">
                                            <h1 class="title">Event Attendance </h1>
                                        </div>
                                        <section class="example">
                                            <div class="table-responsive">
                                                
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>EVENT</th>
                                                                                                                     
                                                             <th> PARTICIPANTS ATTENDED</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        while($row1 = mysqli_fetch_array($retval1)) {
                                                           
                                                        
                                                        echo "<tr>
                                                            <td> {$row1['ID']} </td> 
                                                            <td> {$row1['event']} </td> 
                                                            
                                                            <td>{$row1['att']}</td>
                                                            
                                                             
                                                        </tr>";
                                                        }
                                                        

                                                        ?>
                                                    
                                                      
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    
                </article>
            </div> 
        </div>
        <script>
            (function(i, s, o, g, r, a, m)
            {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function()
                {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-80463319-2', 'auto');
            ga('send', 'pageview');
        </script>
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
    </body>

</html>