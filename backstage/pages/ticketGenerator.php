<link href="css/print_style.css" rel="stylesheet" type="text/css" media="print" />
<?php
  if (isset($_POST['numTik'])){
    $tid = $_POST['numTik'];
  } else {
    echo "You have no permission to view this page";
    exit();
  }
  
?>
    <div class="content-body" id="tik">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-12">
                    <div class="row">
                    
                      <?php for ($i=1; $i<=$tid; $i++){ 
                        if($i<10){$i = "00".$i;} else if($i>99){$i=$i;} else{$i = "0".$i;}
                      ?>
                        <div class="col-sm-4 col-md-3 inside">
                            <div class="card event-card" style="background-image:url(../assets/images/thumb/tickx.png); background-repeat:no-repeat; background-size:100% 100%; border:1px solid #E53632">
                                <div class="event-card-img">
                                    <img class="img-fluid" src="../assets/images/events/event-main2.jpg" alt="001">
                                    <h4 style="border:1px solid #fff; text-shadow:5px 5px 5px #ccc; background-color:#000"><?= $i; ?></h4>
                                </div>
                                <div class="card-footer" style="text-align:center; text-transform:uppercase; padding:10px 0px">
                                    <div class="col-md-12">This will be the title of the event </div>
                                </div>
                                <div class="card-body">
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
                      <?php } ?>
                        
                    </div>
                    <div class="row btn_row">
                      <div class="col-md-12" style="text-align:center">
                        <a href="javascript:;" id="tik_btn" class="btn btn-success" >PRINT TICKETS</a>
                      </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
<script>
  document.getElementById('tik_btn').onclick = function(){
		//alert('hey'); return false;
    document.getElementById('tik').style.zoom = 1;
    window.print();
  }
</script>
	