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
            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title m-b-15">EventGate Wallet Balance</h4>
                            <div class="tickets text-center m-t-50">
                                <div class="position-relative d-inline-block  m-b-50">
                                    <div id="circle2"></div>
                                    <div class="seat-content" style="padding-top:3em;">
                                        <h2>&#8358;100,000</h2>
                                        <span><a href="#" class="btn btn-success" >FUND ACCOUNT</a></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <h6>Total Credit</h6>
                                        <h4 class="color-primary">&#8358;550</h4>
                                    </div>
                                    <div class="col-6">
                                        <h6>Total Debit</h6>
                                        <h4 class="color-primary">&#8358;65500</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-6">
                    <div class="card" style="height:400px; max-height:450px; overflow-y:scroll;">
                        <div class="card-body">
                            <h4 class="card-title m-b-15">LATEST TRANSACTIONS</h4>
                            <div class="upcoming-events">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td><h5>&#8358;100000</h5></td>
                                            <td>TYPE: credit<a href="#">Account Activation Bonus</a></td>
                                            <td>26 Jun 2019<a href="#">09:05 am</a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Online Sales</h4>
                            <div class="row">
                                <div class="col">
                                    <h6>Ticket Sales Revenue</h6>
                                    <h4 class="color-primary">&#8358;5500.00</h4>
                                </div>
                            </div>
                            <div id="simple-line-chart2" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Referral Bonus</h4>
                            <div class="row">
                                <div class="col">
                                    <h6>2 Referrals</h6>
                                    <h4 class="color-primary">&#8358;100.00</h4>
                                </div>
                            </div>
                            <div id="simple-line-chart3" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Wishlist Earnings</h4>
                            <div class="row">
                                <div class="col">
                                    <h6>Donations from friends</h6>
                                    <h4 class="color-primary">&#8358;00.00</h4>
                                </div>
                            </div>
                            <div id="simple-line-chart4" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Other Bonuses</h4>
                            <div class="row">
                                <div class="col">
                                    <h6>Account Commissions</h6>
                                    <h4 class="color-primary">&#8358;5500.00</h4>
                                </div>
                            </div>
                            <div id="simple-line-chart5" class="ct-chart ct-golden-section"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /# content body -->