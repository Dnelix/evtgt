<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EventGates Backstage | Hatch your events here</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="manifest" href="site.html">
    <link rel="apple-touch-icon" href="icon.html">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="../assets/plugins/chartist/css/chartist.min.css">

    <link href="../assets/plugins/fullcalender/css/fullcalendar.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="logo">
                        <a href="../"><img src="../assets/images/logo.png" alt=""></a>
                    </div>

                    <span class="nav-control">
                        <i class="fa fa-bars"></i>
                    </span>
                </div>
                <!--div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="">
                        <form action="#">
                            <div class="form-group">
                                <i class="icofont icofont-search"></i>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </form>
                    </div>
                </div-->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                    <a href="#" class="btn btn-primary create-event-btn" data-toggle="modal" data-target="#creat-event">Create New Event</a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="header-user-profile">
                        <div class="dropdown">
                            <div data-toggle="dropdown">
                                <img src="../assets/images/thumb/1.png" alt="">
                                <span> EG_Wallet:<span> &#8358;2500.00</span></span>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="?stage=wallet">My Wallet</a>
                                <a class="dropdown-item" href="?stage=profile">My Profile</a>
                                <a class="dropdown-item" href="?stage=message">Notifications <span class="badge badge-danger">5</span></a>
                                <a class="dropdown-item" href="?stage=referrals">My Referrals</a>
                                <a class="dropdown-item" href="?stage=calendar">Calendar</a>
                                <a class="dropdown-item" href="?stage=logout">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /# header -->

    <div class="menu">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <nav class="topbar-nav">
                        <ul class="metismenu" id="metismenu">
                            <li>
                                <a href="./">
                                    <span class="fa fa-tachometer"></span> DASHBOARD
                                </a>
                            </li>
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false">
                                    <span class="fa fa-calendar-check-o"></span> Events
                                </a>
                                <ul aria-expanded="false">
                                    <li>
                                            <a href="?stage=events">My Events</a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#creat-event">Create an Event</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="peoples.html">
                                    <span class="fa fa-users"></span> My Contacts
                                </a>
                            </li>
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false">
                                    <span class="fa fa-envelope"></span> Messaging
                                </a>
                                <ul aria-expanded="false">
                                    <li>
                                        <a href="?stage=bulksms">BulkSMS</a>
                                    </li>
                                    <li>
                                        <a href="?stage=emails">Bulk Email</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="?stage=calendar">
                                    <span class="fa fa-calendar"></span> Calendar
                                </a>
                            </li>
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false">
                                    <span class="fa fa-cog"></span> Settings
                                </a>
                                <ul aria-expanded="false">
                                    <li>
                                        <a href="?stage=profile">Profile</a>
                                    </li>
                                    <li>
                                        <a href="?stage=wallet">Wallet</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /# menu -->