<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> MEMBER PAGE</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/vendor.css">
        <link rel="stylesheet" id="theme-style" href="css/app-green.css">
    </head>

    <body>
        

        <?php
            $id=$_GET['id'];
            $mysql_user = "root";
            $mysql_pass = "";
            $server_name = "localhost";
   
            $con = mysqli_connect($server_name, $mysql_user, $mysql_pass);
   
            if(! $con ) {    
                die('Could not connect: ' . mysqli_error($con));
            }
            $sql1 = "SELECT count(*) FROM eventat";
            $d = mysqli_select_db ($con,"testdb");
            $retval1 = mysqli_query($con,$sql1 );
            $row1=mysqli_fetch_array($retval1);
            $sql = "SELECT attendance FROM users WHERE usr_id='$id'";
            $d = mysqli_select_db ($con,"testdb");
            $retval = mysqli_query($con,$sql );
            $row=mysqli_fetch_array($retval);
            $credit=(($row[0])/($row1[0]))*10;
            if(! $retval ) {
                    die('Could not get data: ' . mysqli_error($con));
            }
            ;
        ?>

        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">  
                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="img" style="background-image: url(images/nss.jpg)"> </div> <span class="name">
    			      Member
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
                                <div class="logo"> <span class="l l1"></span> <span class="l l2"></span> <span class="l l3"></span> <span class="l l4"></span> <span class="l l5"></span> </div> Member </div>
                        </div>
                        <nav class="menu">
                            <ul class="nav metismenu" id="sidebar-menu">

                                <li class="active open">
                                    <a href=""> <i class="fa fa-table"></i> Credit Points </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    
                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content responsive-tables-page">
                    <div class="title-block">
                        <h1 class="title"> Hello Member !! :) </h1><br>
                        <br><h2> Number of Events Attended :  <?php echo "$row[0]"; ?> </h2><br>
                        <br><h2> Your Credit Points are :  <?php echo "$credit"; ?> (out of 10)</h2><br>
                       
                    </div>
                    
                    
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