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

                <div class="col-xl-9">
                    <div class="setting-personal">

                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">ADD RECEIPIENTS</label>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <textarea class="form-control" placeholder="" id="phones"></textarea>
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-users"></i>
                                                </span>
                                            </span>
                                            <p style="font-size:8pt; font-weight:normal">Seperate phone numbers with commas (,) Don't include +234</p>
                                            <p style="font-size:9pt; font-weight:normal; color:#E53632"><span id="cnt">0</span> CONTACTS ENTERED</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 text-center">
                                        <button class="btn btn-secondary" onClick="toggleElement('import_contacts')">or Import Contacts</button>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item" id="import_contacts" style="display:none">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">IMPORT CONTACTS</label>
                                    <div class="col-lg-3">
                                        <select id="inputState" class="form-control">
                                            <option>Import Phone Numbers from previous sent messages</option>
                                            <option>Import Phone Numbers from Google Account</option>
                                            <option>Import Phone Numbers from my contacts on EventGate</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">YOUR MESSAGE HERE</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" placeholder="" id="msg" style="height:100px" maxlength="450"></textarea>
                                        <div id="e_url" style="display:none">EVentGate URL</div>
                                        <p style="font-size:9pt; font-weight:normal" id="chars"></p>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="customcheckbox" class="custom-control-input" id="customcheckbox2">
                                            <label class="custom-control-label error" for="customcheckbox2" style="margin:0px; padding:0px;" onClick="appendVal('e_url','msg','customcheckbox2')">Include my EventGate event URL</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item text-center">
                                <p style="font-size:9pt; font-weight:normal; color:#E53632">Don't worry. we will handle the rest!</p>
                                <button class="btn btn-secondary">SEND SMS <i class="fa fa-send"></i></button>
                            </div>

                        </div>


                    </div>
                </div>

                <div class="col-xl-3 left-line">
                    <div class="event-sideber m-l-15">
                        <h4>ACCOUNT DETAILS</h4>
                        <div class="event-sideber-img">
                            <ul class="sidebar-ul">
                                <li>
                                    <a href="#"><h5>EG Wallet</h5><p>N45446</p></a>
                                </li>
                                <li>
                                    <a href="#"><h5>SMS Units</h5><p>N45446</p></a>
                                </li>
                            </ul>
                        </div>
                        <div class="event-sideber-category">
                            <!--h4>LINKS</h4-->
                                <div>YOU CAN SEND...</div>
                                <div><span class="error">100</span> - 1 paged SMS</div>
                                <div><span class="error">50</span> - 2 paged SMS</div>
                                <div><span class="error">20</span> - 3 paged SMS</div>
                                <div>CURRENT NETWORK COST PER SMS : <span class="error">&#8358;3</span></div>
                                <div><hr/></div>
                                <div><a href="#">View Sent Messages</a></div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>