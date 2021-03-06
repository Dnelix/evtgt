
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
                        <div class="col-xl-3 col-sm-4 col-md-3 inside">
                            <div class="card event-card" style="background-image:url(../assets/images/thumb/tickx.png); background-repeat:no-repeat; background-size:100% 100%;">
                                <div class="event-card-img">
                                    <img class="img-fluid" src="../assets/images/events/event-main2.jpg" alt="001">
                                    <h4 style="border:1px solid #fff; text-shadow:5px 5px 5px #ccc; background-color:#000">001</h4>
                                </div>
                                <div class="card-footer" style="text-align:center; text-transform:uppercase;">
                                    <div class="col-md-12">This will be the title of the event </div>
                                </div>
                                <div class="card-body" style="text-align:center">
                                    <div class="row">
                                        <div class="col-md-6" style="color:#E53632; padding:0px 10px; text-align:right; border-right:1px solid #000"><p style="color:#E53632">ENTRY<br/>Strictly on IV</p></div>
                                        <div class="col-md-6" style="color:#E53632; padding:0px 10px; text-align:left; border-left:1px solid #000"><p>STANDARD TICKET</p></div>
                                    </div>
                                </div>
                                <div class="card-sponsor" style="text-align:center">
                                    <div class="row">
                                        <div class="col-md-12"><h4>JUL 28 | </h4><div class="card-sponsor-img"><p> 4pm</p></div></div>
                                        <div class="col-md-12 courtesy">Courtesy of <span>EVENTGATES</span></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-md-9" style="border-left:1px solid #ccc">
                          <p>Yes! we have already designed a FREE event ticket for you.</p>
                          <p>WHAT WOULD YOU LIKE TO DO NEXT?</p>
                            <div class="panel-group" id="accordion">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                    <div class="card event-card"><div class="card-body">1. Change my Ticket Design</div></div></a>
                                  </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                  <div class="panel-body">Request a unique ticket design. This service will cost a one-time fee of 500 EG_units.<br/>
                                  <a href="#" class="btn btn-success">PROCEED</a></div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                    <div class="card event-card"><div class="card-body">2. Sell my Tickets online</div></div></a>
                                  </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                  minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                  commodo consequat.</div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                    <div class="card event-card"><div class="card-body">3. Generate numbered tickets for offline printing</div></div></a>
                                  </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                  <div class="panel-body">Number of tickets to generate: 
                                    <form action="?stage=ticketGenerator" method="post">
                                      <div class="form-group row" style="margin-left:2px">
                                        <input type="number" class="form-control col-md-3" name="numTik" id="numTik"/> &nbsp;
                                        <input type="submit" class="btn btn-success" value="GENERATE"/>
                                        <span id="plc"></span>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>