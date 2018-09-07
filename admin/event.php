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
            $d = mysqli_select_db ($con,"testdb");
            if(! $con ) {    
                die('Could not connect: ' . mysqli_error($con));
            }
            if (isset($_POST['addevent'])) {

    
                                    $event = mysqli_real_escape_string($con, $_POST['event']);
                                    $datee = mysqli_real_escape_string($con, $_POST['datee']);
                                    if(mysqli_query($con, "INSERT INTO events(event,datee) VALUES('" . $event . "', '" . $datee . "')")) {
                                                 $successmsg = "Successfully Added!";
                                                } else {
                                                                $errormsg = "Error in adding event...Please try again later!";
                                                        }
                                                    
                }
              


            $sql = 'SELECT ID,event,datee FROM events';
            
            $retval = mysqli_query($con,$sql );
   
            if(! $retval ) {
                    die('Could not get data: ' . mysqli_error($con));
            }
            ;

            if(isset($_GET['del']))
            {
                $delete_id=$_GET['del'];  
                $delete_query="DELETE  from events WHERE ID='$delete_id'";//delete query  
                $run=mysqli_query($con,$delete_query);  
                if($run)  
                {  
                //javascript function to open in the same window   
                    echo "<script>window.open('event.php?deleted=user has been deleted','_self')</script>";  
                }  
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
                                <li class="active open">
                                   <a href=""> <i class="fa fa-pencil-square-o"></i> EVENTS </a>
                                </li>
                                <li >
                                   <a href="attendance.php"> <i class="fa fa-pencil-square-o"></i> ATTENDANCE </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    
                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content responsive-tables-page">
                    <div class="title-block">
                        <h1 class="title"> Events </h1>
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
                                            <table  class="table table-striped table-bordered table-hover">  
                                                       <thead>  
                                                 
                                                       <tr>  
                                                 
                                                           <th>ID</th>  
                                                           <th>EVENT</th>  
                                                           <th>DATE</th>  
                                                           <th>DELETE</th>  
                                                           <th>UPDATE</th> 
                                                       </tr>  
                                                       </thead>  
                                                 
                                                       <?php  
                                                       include("../dbconnect.php");  
                                                       $view_users_query = "SELECT * FROM events";//select query for viewing users.  
                                                       $run=mysqli_query($con,$view_users_query);//here run the sql query.  
                                                 
                                                       while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
                                                       {  
                                                           $ID=$row[0];  
                                                           $EVENT=$row[1];  
                                                           $DATE=$row[2];  
                                                                                                            
                                                 
                                                 
                                                       ?>  
                                                 
                                                       <tr>  
                                               <!--here showing results in the table -->  
                                                           <td><?php echo $ID;  ?></td>  
                                                           <td><?php echo $EVENT;  ?></td>  
                                                           <td><?php echo $DATE;  ?></td>  
                                                           
                                                           <td><a href="event.php?del=<?php echo $ID ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
                                                           <td><a href="edit.php?del=<?php echo $ID ?>"><button class="btn btn-danger">Update</button></a></td> 
                                                       </tr>  
                                                 
                                                       <?php } ?>  
                                                 
                                                   </table>
                                                   
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                        </div>
                                        <section class="example">
                                            <form role="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="eventform">
                
                                                                     <legend>Add Event</legend>

                                                                    <div >
                                                                            <label for="name">Event</label>
                                                                            <input type="text" name="event" placeholder="Enter Event Name"  required />
                                                                    </div>
                    
                                                                    <div >
                                                                            <label for="name">Date : </label>
                                                                            <input type="date" name="datee" placeholder=" yyyy-mm-dd " />
                                                                            <span ><?php if (isset($date_error)) echo $date_error; ?></span>
                                                                    </div>

                    
                                                                    <div class="form-group">
                                                                            <input type="submit" name="addevent" value="Add Event" class="btn btn-primary" />
                                                                    </div>
                
                                            </form>
                                            <span ><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
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