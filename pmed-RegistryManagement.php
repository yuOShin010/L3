<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>pmed-Registry Management</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="./Pmed.php" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">Quality Assurance</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div>
        <!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li>
                <!-- End Search Icon-->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a>
                    <!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul>
                    <!-- End Notification Dropdown Items -->

                </li>
                <!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a>
                    <!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>BSIT Dept.
                                        <Sent you a message/h4>
                                            <p>The file you sent to us is still ongoing</p>
                                            <p>3 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>BSCRIM Dept.</h4>
                                    <p>The file you submitted to us is complete.</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>EDUC Dept.</h4>
                                    <p>My file was submitted last wenesday.</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>

                    </ul>
                    <!-- End Messages Dropdown Items -->

                </li>
                <!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="./assets/img/favicon.png" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Doc. Cha</span>
                    </a>
                    <!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header d-flex">
                            <h4> <img src="./assets/img/favicon.png" alt="Profile" class="rounded-circle"> Doc. Cha</h4>
                            <span>Accreditation Head</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pmed-userAccount.php">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pmed-userAccount.php">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul>
                    <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->

            </ul>
        </nav>
        <!-- End Icons Navigation -->

    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Quality Assurance Department</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>

                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                    <li class="nav-item">
                        <a href="./pmed-dashboard.php">
                            <i class="bi bi-circle"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <!-- End Dashboard Nav -->

                    <li>
                        <a class="nav-link " href="./pmed-RegistryManagement.php">
                            <i class="bi bi-grid"></i><span>Registry Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="./pmed-distributeManagement.php">
                            <i class="bi bi-circle"></i><span>Distribute Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="./pmed-validation.php">
                            <i class="bi bi-circle"></i><span>Validation</span>
                        </a>
                    </li>
                    <li>
                        <a href="./pmed-history.php">
                            <i class="bi bi-circle"></i><span>History</span>
                        </a>
                    </li>
                    <li>
                        <a href="./audit-trail.php">
                            <i class="bi bi-circle"></i><span>Audit Trail</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Components Nav -->
        </ul>

    </aside>
    <!-- End Sidebar-->


    <!-- main -->
    <main id="main" class="main mw-100">
        <div class="pagetitle">
            <h1>Registry Management </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./Pmed.php">Quality Assurance Department</a></li>
                    <li class="breadcrumb-item active">Registry Management</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <!-- first card -->
            <div class=" row ">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body p-4 shadow-lg">
                            <div class="pagetitle">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h3>List of Survey Instrument</h3>
                                    </div>

                                    <!-- button TRIGGERS -->
                                    <div class="col-lg-1 d-inline-flex justify-content-between">
                                        <button type="button" class="btn btn-primary bi bi-plus " title="add" data-toggle="modal" data-target="#modality"></button>
                                        <!-- <button type="button" class="btn btn-primary bi bi-clock-history"></button> -->
                                        <div class="btn-group">
                                            <button type="button" title="Option" class="btn rounded bi bi-three-dots" id="option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>

                                            <div class="dropdown-menu" aria-labelledby="option">
                                                <button type="button" class="dropdown-item">Hide</button>
                                                <button type="button" class="dropdown-item">Select</button>
                                                <button type="button" class="dropdown-item">Help?</button>
                                            </div>
                                        </div>
                                        <!-- End of TRIGGERS -->

                                        <!-- Modal Header -->
                                        <div class="modal fade" id="modality" tabindex="-1" role="dialog" aria-labelledby="modalityLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modality">Add Survey instrument</h5>
                                                        <button class="close" title="close" type="button" data-dismiss="modal" aria-label="close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal BODY -->
                                                    <div class="modal-body">
                                                        <form>
                                                            <!-- input box -->
                                                            <div class="form-group p-4">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label class="col-form-label">Instrument:</label>
                                                                        <input title="Setting the title of survey instrument" type="text" class="form-control w-100" placeholder="Title">
                                                                    </div>

                                                                    <!-- Dropdown Section for add icon -->
                                                                    <!-- <div class="col-md-6">
                                                                        <label class="col-form-label">Assign Course:</label>
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="CourseList" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"> List of Courses</button>

                                                                            <div class="dropdown-menu p-4 w-100" aria-labelledby="CourseList">
                                                                                <h1 class="dropdown-header">Courses</h1>
                                                                                <table class="table table-hover table-borderless">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <a href="#" class="Dropdown-items">Bachelor of Science in Information Tecnology</a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <a href="#" class="Dropdown-items">Bachelor of Science in Criminology</a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <a href="#" class="Dropdown-items">bachelor of Science Administrative</a>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div> -->
                                                                    <!-- end of Dropdown section -->
                                                                </div>

                                                                <label class="col-form-label">Instrument:</label>
                                                                <input type="file" class="form-control" title="choose file from computer" placeholder="uploadfile">
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" data-dismiss="modal" title="Discard Action">Cancel</button>
                                                        <button class="btn btn-primary" title="Save Changes">Upload</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-wrapper-scroll-y my-custom-scrollbar p-3">
                                    <table class="table table-light table-bordered table-hover">
                                        <thead class="">
                                            <th class="text-center">
                                                Title
                                            </th>
                                            <th class="text-center">
                                                Uploaded
                                            </th>
                                            <th class="text-center">
                                                Duration
                                            </th>
                                            <th class="text-center">
                                                Action
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center" scope="row">Survey Instrument 1</td>
                                                <td class="text-center" scope="row">January 2, 2023</td>
                                                <td class="text-center" scope="row">1 week</td>
                                                <td class="text-center" scope="row">
                                                    <button class="btn btn-primary bi bi-pencil-fill" title="edit" data-toggle="modal" data-target="#editSect" id="EditAct"></button>

                                                    <!-- modal for edit section -->
                                                    <div class="modal fade" id="editSect" tabindex="-1" role="dialog" aria-labelledby="editSectLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Edit Survey instrument</h5>
                                                                    <button class="close" title="close" type="button" data-dismiss="modal" aria-label="close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <!-- EDIT SECTION -->
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <!-- <div class="dropdown">
                                                                            <button class="btn btn-outline-secondary dropdown-toggle w-75" type="button" id="CourseList" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"> List of Courses</button>

                                                                            <div class="dropdown-menu p-4 w-75" aria-labelledby="CourseList">
                                                                                <h1 class="dropdown-header">Courses</h1>
                                                                                <table class="table table-hover table-borderless">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <a href="#" class="Dropdown-items">Bachelor of Science in Information Tecnology</a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <a href="#" class="Dropdown-items">Bachelor of Science in Criminology</a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <a href="#" class="Dropdown-items">bachelor of Science Administrative</a>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>

                                                                            </div>
                                                                        </div> -->
                                                                        <!-- End of Dropdown -->

                                                                        <!-- INPUT SECTION -->
                                                                        <div class="form-group">
                                                                            <label class="col-form-label d-flex justify-content-lg-start">Instrument:</label>
                                                                            <input title="Setting the title of survey instrument" type="text" class="form-control" placeholder="Title">
                                                                            <label class="col-form-label d-flex justify-content-lg-start">Instrument:</label>
                                                                            <input type="file" class="form-control" title="choose file from computer" placeholder="uploadfile">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-secondary" data-dismiss="modal" title="Discard Action">Cancel</button>
                                                                    <button class="btn btn-primary" title="Save Changes">Upload</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end for edit Section -->

                                                    <!-- DELETE SECTION -->
                                                    <button class="btn btn-danger bi bi-trash-fill" title="Delete" data-toggle="modal" data-target="#delSect" id="delAct"></button>

                                                    <!-- modal for DELETE section -->
                                                    <div class="modal fade" id="delSect" tabindex="-1" role="dialog" aria-labelledby="delSectLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger">
                                                                    <button class="close" title="close" type="button" data-dismiss="modal" aria-label="close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <!-- Modal body of DELETE SECTION -->
                                                                <div class="modal-body">
                                                                    <h5 class="modal-title pb-4">Are you sure you want to delete?</h5>
                                                                    <button class="btn btn-secondary" data-dismiss="modal" title="Discard Action">Cancel</button>
                                                                    <button class="btn btn-outline-danger" title="Delete the file">Delete</button> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end -->


                                                    <!-- dropdown for option ICON -->
                                                    <div class="btn-group">
                                                        <button class="btn rounded btn-outline-info bi bi-three-dots-vertical" id="option2" data-toggle="dropdown" title="More" aria-haspopup="true" aria-expanded="false"></button>

                                                        <div class="dropdown-menu" aria-labelledby="option2">
                                                            <button class="dropdown-item">Hide</button>
                                                            <button class="dropdown-item">Print</button>
                                                            <button class="dropdown-item">Help?</button>
                                                        </div>
                                                    </div>
                                                    <!-- end  -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" scope="row ">Survey Instrument 2</td>
                                                <td class="text-center" scope="row">January 2, 2023</td>
                                                <td class="text-center" scope="row">1 week</td>
                                                <td class="text-center" scope="row">
                                                    <button class="btn btn-primary bi bi-pencil-fill" title="edit" data-toggle="modal" data-target="#editSect" id="EditAct"></button>

                                                    <!-- modal for edit section -->
                                                    <div class="modal fade" id="editSect" tabindex="-1" role="dialog" aria-labelledby="editSectLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Edit Survey instrument</h5>
                                                                    <button class="close" title="close" type="button" data-dismiss="modal" aria-label="close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <!-- EDIT SECTION -->
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <!-- <div class="dropdown">
                                                                            <button class="btn btn-outline-secondary dropdown-toggle w-75" type="button" id="CourseList" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"> List of Courses</button>

                                                                            <div class="dropdown-menu p-4 w-75" aria-labelledby="CourseList">
                                                                                <h1 class="dropdown-header">Courses</h1>
                                                                                <table class="table table-hover table-borderless">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <a href="#" class="Dropdown-items">Bachelor of Science in Information Tecnology</a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <a href="#" class="Dropdown-items">Bachelor of Science in Criminology</a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <a href="#" class="Dropdown-items">bachelor of Science Administrative</a>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>

                                                                            </div>
                                                                        </div> -->
                                                                        <!-- End of Dropdown -->

                                                                        <!-- INPUT SECTION -->
                                                                        <div class="form-group">
                                                                            <label class="col-form-label d-flex justify-content-lg-start">Instrument:</label>
                                                                            <input title="Setting the title of survey instrument" type="text" class="form-control" placeholder="Title">
                                                                            <label class="col-form-label d-flex justify-content-lg-start">Instrument:</label>
                                                                            <input type="file" class="form-control" title="choose file from computer" placeholder="uploadfile">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-secondary" data-dismiss="modal" title="Discard Action">Cancel</button>
                                                                    <button class="btn btn-primary" title="Save Changes">Upload</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end for edit Section -->

                                                    <!-- DELETE SECTION -->
                                                    <button class="btn btn-danger bi bi-trash-fill" title="Delete" data-toggle="modal" data-target="#delSect" id="delAct"></button>

                                                    <!-- modal for DELETE section -->
                                                    <div class="modal fade" id="delSect" tabindex="-1" role="dialog" aria-labelledby="delSectLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger">
                                                                    <button class="close" title="close" type="button" data-dismiss="modal" aria-label="close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <!-- Modal body of DELETE SECTION -->
                                                                <div class="modal-body">
                                                                    <h5 class="modal-title pb-4">Are you sure you want to delete?</h5>
                                                                    <button class="btn btn-secondary" data-dismiss="modal" title="Discard Action">Cancel</button>
                                                                    <button class="btn btn-outline-danger" title="Delete the file">Delete</button> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end -->


                                                    <!-- dropdown for option ICON -->
                                                    <div class="btn-group">
                                                        <button class="btn rounded btn-outline-info bi bi-three-dots-vertical" id="option2" data-toggle="dropdown" title="More" aria-haspopup="true" aria-expanded="false"></button>

                                                        <div class="dropdown-menu" aria-labelledby="option2">
                                                            <button class="dropdown-item">Hide</button>
                                                            <button class="dropdown-item">Print</button>
                                                            <button class="dropdown-item">Help?</button>
                                                        </div>
                                                    </div>
                                                    <!-- end  -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" scope="row ">Survey Instrument 3</td>
                                                <td class="text-center" scope="row">January 2, 2023</td>
                                                <td class="text-center" scope="row">1 week</td>
                                                <td class="text-center" scope="row">
                                                    <button class="btn btn-primary bi bi-pencil-fill" title="edit" data-toggle="modal" data-target="#editSect" id="EditAct"></button>

                                                    <!-- modal for edit section -->
                                                    <div class="modal fade" id="editSect" tabindex="-1" role="dialog" aria-labelledby="editSectLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Edit Survey instrument</h5>
                                                                    <button class="close" title="close" type="button" data-dismiss="modal" aria-label="close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <!-- EDIT SECTION -->
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <!-- <div class="dropdown">
                                                                            <button class="btn btn-outline-secondary dropdown-toggle w-75" type="button" id="CourseList" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"> List of Courses</button>

                                                                            <div class="dropdown-menu p-4 w-75" aria-labelledby="CourseList">
                                                                                <h1 class="dropdown-header">Courses</h1>
                                                                                <table class="table table-hover table-borderless">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <a href="#" class="Dropdown-items">Bachelor of Science in Information Tecnology</a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <a href="#" class="Dropdown-items">Bachelor of Science in Criminology</a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <a href="#" class="Dropdown-items">bachelor of Science Administrative</a>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>

                                                                            </div>
                                                                        </div> -->
                                                                        <!-- End of Dropdown -->

                                                                        <!-- INPUT SECTION -->
                                                                        <div class="form-group">
                                                                            <label class="col-form-label d-flex justify-content-lg-start">Instrument:</label>
                                                                            <input title="Setting the title of survey instrument" type="text" class="form-control" placeholder="Title">
                                                                            <label class="col-form-label d-flex justify-content-lg-start">Instrument:</label>
                                                                            <input type="file" class="form-control" title="choose file from computer" placeholder="uploadfile">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-secondary" data-dismiss="modal" title="Discard Action">Cancel</button>
                                                                    <button class="btn btn-primary" title="Save Changes">Upload</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end for edit Section -->

                                                    <!-- DELETE SECTION -->
                                                    <button class="btn btn-danger bi bi-trash-fill" title="Delete" data-toggle="modal" data-target="#delSect" id="delAct"></button>

                                                    <!-- modal for DELETE section -->
                                                    <div class="modal fade" id="delSect" tabindex="-1" role="dialog" aria-labelledby="delSectLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger">
                                                                    <button class="close" title="close" type="button" data-dismiss="modal" aria-label="close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <!-- Modal body of DELETE SECTION -->
                                                                <div class="modal-body">
                                                                    <h5 class="modal-title pb-4">Are you sure you want to delete?</h5>
                                                                    <button class="btn btn-secondary" data-dismiss="modal" title="Discard Action">Cancel</button>
                                                                    <button class="btn btn-outline-danger" title="Delete the file">Delete</button> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end -->


                                                    <!-- dropdown for option ICON -->
                                                    <div class="btn-group">
                                                        <button class="btn rounded btn-outline-info bi bi-three-dots-vertical" id="option2" data-toggle="dropdown" title="More" aria-haspopup="true" aria-expanded="false"></button>

                                                        <div class="dropdown-menu" aria-labelledby="option2">
                                                            <button class="dropdown-item">Hide</button>
                                                            <button class="dropdown-item">Print</button>
                                                            <button class="dropdown-item">Help?</button>
                                                        </div>
                                                    </div>
                                                    <!-- end  -->
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="card bg-light shadow-md">
                        <div class="card-body p-4">
                            <div class="pagetitle p-4">
                                <h5 class="text-primary">Recently Added</h5>
                            </div>

                            <table class="table table-hover table-light rounded">
                                <thead>
                                    <tr>
                                        <th class="text-center text-secondary">Title</th>
                                        <th class="text-center text-secondary">Addedby</th>
                                        <th class="text-center text-secondary">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">Instrument 1</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">Uploaded on January 1st</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">Instrument 2</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">Uploaded on January 2nd</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body shadow-md p-4">
                            <div class="page-title">
                                <h5 class="page-title">2nd row</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>





















    <!-- ======= Footer ======= -->
    <footer id="footer " class="footer ">
        <div class="copyright ">
            &copy; Copyright <strong><span>Accreditation</span></strong>. All Rights Reserved
        </div>
        <div class="credits ">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="# ">Jayjay</a>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="# " class="back-to-top d-flex align-items-center justify-content-center "><i class="bi bi-arrow-up-short "></i></a>

    <!-- Vendor JS Files -->

    <script src="assets/vendor/apexcharts/apexcharts.min.js "></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src="assets/vendor/chart.js/chart.min.js "></script>
    <script src="assets/vendor/echarts/echarts.min.js "></script>
    <script src="assets/vendor/quill/quill.min.js "></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js "></script>
    <script src="assets/vendor/tinymce/tinymce.min.js "></script>
    <script src="assets/vendor/php-email-form/validate.js "></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js "></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>