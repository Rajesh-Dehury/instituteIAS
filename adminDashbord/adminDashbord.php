<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

    <title>User DashBord</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand d-lg-block d-none" href="adminDashbord.php?content_id=profile">Admin Dashbord</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </a>
                        <div class="dropdown-menu rounded-0 m-0 p-0 mt-2 bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white-50" href="adminDashbord.php?content_id=profile">My Profile</a>
                            <a class="dropdown-item text-white-50" href="adminDashbord.php?content_id=viewAdminProfiles">View All Profiles</a>                            
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Courses
                        </a>
                        <div class="dropdown-menu rounded-0 m-0 p-0 mt-2 bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white-50" href="adminDashbord.php?content_id=viewCourse">View Courses</a>
                            <a class="dropdown-item text-white-50" href="adminDashbord.php?content_id=createCourse">Create Courses</a>                            
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Notification
                        </a>
                        <div class="dropdown-menu rounded-0 m-0 p-0 mt-2 bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white-50" href="adminDashbord.php?content_id=viewNotifications">View Notification</a>
                            <a class="dropdown-item text-white-50" href="adminDashbord.php?content_id=createNotification">Create Notification</a>                            
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Student
                        </a>
                        <div class="dropdown-menu rounded-0 m-0 p-0 mt-2 bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white-50" href="adminDashbord.php?content_id=studentRegistationRequest">Registation Request</a>
                            <a class="dropdown-item text-white-50" href="adminDashbord.php?content_id=#">Course Request</a>                        
                            <a class="dropdown-item text-white-50" href="adminDashbord.php?content_id=viewAllStudents">View Students</a>                        
                        </div>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="adminDashbord.php?content_id=cource">Cources</a> -->
                        
                    </li>
                    <li class="nav-item">
                    </li>
                </ul>
            </div>
            <form class="form-inline my-2 my-lg-0 " action="logout.php" method="post">
                <button class="btn btn-outline-danger px-4 rounded-0" type="submit">Log out</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <?php
            $content=isset($_GET['content_id']) ? $_GET['content_id'] : '';

            switch ($content) {
                case "profile":
                    include 'adminProfile.php';
                    break;                      
                case "viewAdminProfiles":
                    include 'viewAdminProfiles.php';
                    break;                      
                case "createAdmin":
                    include 'createAdmin.php';
                    break;                      
                case "updateAdmin":
                    include 'updateAdmin.php';
                    break;   
                    
                    // course section
                case "createCourse":
                    include 'createCourse.php';
                    break;    
                case "viewCourse":
                    include 'viewCourse.php';
                    break;    
                case "addCourseData":
                    include 'addCourseData.php';
                    break; 
                    
                    // Notifications
                case "viewNotifications":
                    include 'viewNotifications.php';
                    break;    
                case "createNotification":
                    include 'createNotification.php';
                    break;
                
                // students
                case "studentRegistationRequest":
                    include 'studentRegistationRequest.php';
                    break;
                case "viewAllStudents":
                    include 'viewAllStudents.php';
                    break;
                case "viewStudentRecord":
                    include 'viewStudentRecord.php';
                    break;

                    
                    // default
                default:
                    include 'adminProfile.php';
                }     
        ?>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
    <style>
        .dropdown-item:hover{
            color:black !important;
        }
    </style>
</body>

</html>