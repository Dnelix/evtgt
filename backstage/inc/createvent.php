    <!-- Modal -->
    <div class="modal fade creat-event" id="creat-event">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>CREATE EVENT</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-xl-7">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="m-t-20">TITLE</label>
                                    <input type="text" id="title" class="form-control" placeholder="Music Awards">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="m-t-20" for="formControl">DESCRIPTION</label>
                                    <textarea class="form-control" id="desc" placeholder="Hey, it's my birthday and I'm super excited to share the moment with a few friends... or This event is strictly on invitation as we have limited slots for attendees... or Join us for our family thanksgiving.... No matter what it is, here's where you can describe your event in details ."
                                        rows="4"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <label class="m-t-20" for="formControl">DATE</label>
                                    <div class="input-group clockpicker">
                                        <input type="date" class="form-control" value="<?= date('d-m-Y'); ?>">
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-calendar-o"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label class="m-t-20" for="formControl">TIME</label>
                                    <div class="input-group clockpicker">
                                        <input type="time" class="form-control" value="<?= date('h:i'); ?>">
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label class="m-t-20" for="formControl">DURATION</label>
                                    <div class="input-group clockpicker">
                                        <input type="text" class="form-control" placeholder="2 Days">
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-7">
                                    <label class="m-t-20" for="formControl">LOCATION</label>
                                    <div class="input-group clockpicker">
                                        <input type="text" class="form-control b-r-0" placeholder="The Dome Event Place, Enugu">
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-crosshairs"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label class="m-t-20" for="state">STATE</label>
                                    <select class="form-control" id="state" name="state">
                                        <option value="Enugu">Enugu</option>
                                        <option value="Enugu">Enugu</option>
                                        <option value="Enugu">Enugu</option>
                                        <option value="Enugu">Enugu</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="m-t-20" for="val-skill">ENTRY CONDITION</label>
                                    <select class="form-control" id="entry" name="val-skill">
                                        <option value="">Please select</option>
                                        <option value="free">FREE ENTRY</option>
                                        <option value="iv" onClick="showElement('iv'); hideElement('paid')">STRICTLY ON IV</option>
                                        <option value="paid" onClick="showElement('paid'); hideElement('iv')">PAID ENTRY</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row" id="paid" style="display:none">
                                <div class="col-md-12">
                                    <label class="m-t-20" for="formControl">ENTRY FEE?</label>
                                    <div class="input-group clockpicker col-md-6">
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i>&#8358;</i>
                                            </span>
                                        </span>
                                        <input type="number" class="form-control" placeholder="500">
                                    </div>
                                    <div style="font-size:10pt; color:#0a0">You will be able to create tickets for this Event </div>
                                </div>
                            </div>
                            
                            <div class="row" id="iv" style="display:none">
                                <div class="col-md-12">
                                    <label class="m-t-20" for="formControl">INVITATION CODE</label>
                                    <div style="font-size:10pt; color:#0a0">Enter any unique 6-8 digits, to form your invite code </div>
                                    <div class="input-group clockpicker col-md-6">
                                        <input type="" class="form-control" placeholder="65468500">
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i>##</i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label class="m-t-20" for="formControl">ADD SPONSOR(S)</label>
                                    <div class="input-group clockpicker">
                                        <input type="text" class="form-control b-r-0" value="IBM, MTN, DNelix">
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="m-t-20" for="formControl">UPLOAD EVENT IMAGE</label>
                                    <div class="input-group clockpicker">
                                        <input type="file" class="form-control b-r-0" value="Choose an image">
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-image"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>


                            <button class="btn btn-danger m-t-50">SAVE</button> 
                            <button class="btn btn-danger m-t-50">SAVE &amp; PUBLISH</button>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>