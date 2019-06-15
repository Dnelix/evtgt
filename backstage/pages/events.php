    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <h1><?= ucwords($page); ?></h1>
                </div>
                <div class="col-7">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="./">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><?= ucwords($page); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="content-body">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card event-card inside">
                                <div class="card-header">
                                    <div class="media">
                                        <img class="mr-3 img-fluid" src="../assets/images/events/event-head.png" alt="placeholder image">
                                        <div class="media-body">
                                            <h3 class="mt-0">WELCOME</h3>
                                            <p style="color:#0a0;">NEW EVENT CREATED</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-sponsor">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <p style="font-size:9pt">Now you're good to go (or are you?)<br/>
                                            Here are a few more things you can do with any event listed on this page:</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 stripfnt">
                                            <h5>VIEW/EDIT</h5>
                                            <p>Click on any event image to see more details including the event URL. Also make changes.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 stripfnt">
                                            <h5>TICKETS/CUSTOMIZED IVs</h5>
                                            <p>Generate event access tickets for both online and offline sales. To begin click on TICKETS</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 stripfnt">
                                            <h5>SHARE</h5>
                                            <p>Use the SHARE link the get the word out on different social media</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 stripfnt">
                                            <h5>INVITATIONS</h5>
                                            <p>Send out customized bulk Emails or SMS announcing your event </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card event-card">
                                <div class="card-header">
                                    <div class="media">
                                        <div class="media-body"><p class="event-header">Wedding ceremony between chike and daniel in hong kong</p></div>

                                        <div class="dropdown custom-dropdown">
                                            <div data-toggle="dropdown"> <i class="fa fa-bars"></i> </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Details</a>
                                                <a class="dropdown-item" href="?stage=invite">Send Invitations</a>
                                                <a class="dropdown-item" href="?stage=ticket&evt=xx">Manage Tickets/IVs</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="event-card-img">
                                    <img class="img-fluid" src="../assets/images/events/event-main2.jpg" alt="placeholder image" data-toggle="modal" data-target="#event-view">
                                    <h4><i class="fa fa-map-marker"></i> Anambra &nbsp;
                                    <span style="text-align:right; font-size:10pt"><i class="fa fa-clock-o"></i> 02:30pm</span></h4>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <a href="?stage=calendar">
                                          <div class="col-auto"><h5>Date</h5><p>June 16, 2018</p></div>
                                        </a>
                                        <div class="col-auto"><h5 style="color:#E53632">Entry</h5><p style="color:#E53632">Strictly IV</p></div>
                                        <a href="?stage=ticket&evt=xx">
                                          <div class="col-auto"><h5>Tickets/IV</h5><p>Available 26/100</p></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-sponsor">
                                    <div class="row justify-content-between">
                                        <div class="col-auto"><h4>Sponsor(s):</h4><div class="card-sponsor-img"><p>Dnelix, IBM</p></div></div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <ul>
                                        <li>
                                        <div class="dropdown">
                                            <div data-toggle="dropdown"><a href="#"><i class="fa fa-share-alt"></i> Share</a></div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fa fa-whatsapp"></i> Share on Whatsapp</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-facebook"></i> Share on Facebook</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-twitter"></i> Share on Twitter</a>
                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                                    <div class="pull-right"><a href="?stage=invite"><i class="fa fa-bar-chart"></i>Invitations</a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>