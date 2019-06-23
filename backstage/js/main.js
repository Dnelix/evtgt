"use strict";

function _(x){
	return document.getElementById(x);
}
// And all over the site from now on you can get html elements by their id by simply using
//_("div1").innerHTML = "Hello World";

function restrict(elem){
	var tf = _(elem);
	var rx = new RegExp;
	if(elem == "emails"){
		rx = /[' "]/gi;
	}else if(elem == "e"){
		rx = /[' "]/gi;
	} else if(elem == "phone"){
		rx = /[^+0-9]/gi;
	} else if(elem == "uname"){
		rx = /[^a-z0-9]/gi;
	} else if(elem == "phones"){
		rx = /[^,0-9]/gi;
	}
	tf.value = tf.value.replace(rx, "");
}
function emptyElement(x){
	_(x).innerHTML = "";
}
function showElement(x){
	var x = _(x);
	if(x.style.display == 'none'){
		x.style.display = 'block';
	}else{
		x.style.display = 'block';
	}
}
function hideElement(x){
	var x = _(x);
	if(x.style.display == 'block'){
		x.style.display = 'none';
	}else{
		x.style.display = 'none';
	}
}

function toggleElement(x){
	var x = _(x);
	if(x.style.display == 'block'){
		x.style.display = 'none';
	}else{
		x.style.display = 'block';
	}
}

function toggleElems(x,a,b,c,d,e){
	var x = _(x);
	
	//find and hide others
	hideElement(a); hideElement(b); hideElement(c); hideElement(d); hideElement(e); 
	//done*/
	
	if(x.style.display == 'block'){
		x.style.display = 'none';
	}else{
		x.style.display = 'block';
	}
}

function goTo(here){
 window.location.href=here;
}
function reloadPage(){
 window.location.reload();
}
//------------------------------------------------------------------------------------------
function appendVal(x,y,z){
	var x = _(x);
	var y = _(y);
	var z = _(z);
	
	if(z.checked == true){
		var str = y.value;
		var txt = x.innerHTML;
		var newstr = str.replace(txt, '');
		y.value = newstr;
	} else {y.value += x.innerHTML;}
}
//--------------------------------------------------------------------------------------------
// COUNTERS
//--------------------------------------------------------------------------------------------
var count = 0;

function counter(x,y){
	var x = _(x);
	count = x.value.split(/[\n,;\s]/).length;
	if(x.value===''){count = 0;}
	_(y).innerHTML = count;
}

_('phones').onkeyup = function () {
	restrict("phones");
	counter("phones","cnt");
};
_("phones").onblur = function () {
	restrict("phones");
	counter("phones","cnt");
};

_('msg').onkeyup = function () {
	var pgs = 0;
	var maxChar = 450;
	var totalChar = this.value.length;
	var curChar = maxChar - totalChar;
	if (totalChar < 155){ pgs = 1;} else if (totalChar >= 155 && totalChar < 300){ pgs = 2;} else if(totalChar >= 300){pgs = 3;}
	if(totalChar == 0){pgs = 0;}
  _('chars').innerHTML = "Characters left: " + curChar + ". ("+totalChar+" Chars - "+pgs+" Page Message)";
};

// _("emails").onkeyup = function () {
// 	restrict("emails");
// 	counter("emails","cnt");
// };
//--------------------------------------------------------------------------------------------
function updateTextInput(val,plc) {
	_(plc).innerHTML = _(val).value;
}
//--------------------------------------------------------------------------------------------

	/*_('tik').click(function(){
		$(this).css("zoom":"0.5");
		$(this).print();
	});*/
//--------------------------------------------------------------------------------------------
function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
//-------------------------------------------------------------------------------------------
function logcheck(){
	var un = _("un").value;
	var pw = _("pw").value;
	var k = document.querySelector('.keep').checked;

	if(un == "" || pw == ""){
		_("stat").innerHTML = "Fill out all of the form data";
		return false;
	} else {
		_("loginbtn").style.display = "none";
		_("stat").innerHTML = 'please wait... <img src="assets/img/fbk.gif" style="width:10%; height:10%"/>';
		var ajax = ajaxObj("POST", "login.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText == "login_failed"){
					_("stat").innerHTML = "Login unsuccessful, please try again.";
					_("loginbtn").style.display = "block";
				} else {
				   	window.location = "index.php?u="+ajax.responseText;
				}
	        }
        }
	ajax.send("u="+un+"&p="+pw+"&k="+k);
	return true;
	}
}
//---------------------------------------------------------------------------------------------	
function upd_profile(){
	var fn = _("fullname").value;
	var pw = _("pw").value;
	if(un == "" || pw == ""){
		_("stat").innerHTML = "Fill out all of the form data";
		return false;
	} else {
		_("loginbtn").style.display = "none";
		_("stat").innerHTML = 'please wait <img src="img/fbksmall.gif"/>';
		var ajax = ajaxObj("POST", "login.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText == "login_failed"){
					_("stat").innerHTML = "Login unsuccessful, please try again.";
					_("loginbtn").style.display = "block";
				} else {
				   	window.location = "index.php?u="+ajax.responseText;
				}
	        }
        }
	ajax.send("u="+un+"&p="+pw);
	return true;
	}
}
/*----------------------------------------------------------------------------------------------
function sendM(e){
	if(e == ""){
		_("e-body").innerHTML = "Missing Parameters";
		return false;
	} else {
		_("e-btn").style.display = "none";
		_("e-body").innerHTML = 'please wait <img src="img/fbksmall.gif"/>';
		var ajax = ajaxObj("POST", "includes/parse/sendMail.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText == "sent"){
				   	_("e-body").innerHTML = "<font color='green'><b>Email has been sent. Remember to check your spam folders. Then click on the link for activation.</b></font>";
				} else {
					//_("e-body").innerHTML = ajax.responseText;
					_("e-body").innerHTML = "<font color='red'><b>Email could not be sent at the moment, please try again.</b></font>";
					_("e-btn").style.display = "block";
				}
	        }
        }
	ajax.send("email="+e);
	return true;
	}
}
//-----------------------------------------------------------------------------------------------*/
function sendMail(r){
	// r can take two values, "admin" or "user".
	var bod = _("m_body");
	var btn = _("m_btn");
	//alert(r+bod+btn);
	//return false;
		btn.style.display = "none";
		bod.innerHTML = 'please wait... <img src="assets/img/fbk.gif" style="width:10%; height:10%"/>';
		var ajax = ajaxObj("POST", "includes/parse/sendMail.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) != true) {
				bod.innerHTML = "<font color='red'><b>Error in sending Email, please try again.</b></font>";
				btn.style.display = "block";
			} else {
				bod.innerHTML = ajax.responseText;
	        }
        }
	ajax.send("receiver="+r);
}
//-----------------------------------------------------------------------------------------------*/
function inbx(){
	var t = _("to").value;
	var s = _("subj").value;
	var m = _("msg").value;
	var bod = _("cmp");
	var btn = _("cmp_btn");
	// alert(t+s+m+bod+btn);
	// return false;
		btn.style.display = "none";
		bod.innerHTML = 'please wait... <img src="assets/img/fbk.gif" style="width:10%; height:10%"/>';
		var ajax = ajaxObj("POST", "includes/parse/mailbox.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) != true) {
				bod.innerHTML = "<font color='red'><b>Error in sending Mail, please try again.</b></font>";
				btn.style.display = "block";
			} else {
				bod.innerHTML = ajax.responseText;
	        }
        }
	ajax.send("t="+t+"&s="+s+"&m="+m);
}
//------------------------------------------------------------------------------------------------
function updateuserdetails(){
	var e = _("crole").value;
	if(e != ""){
		_("checkstatus").innerHTML = '<strong style="background-color:red; color:white;">Please Wait...</strong>';
		//_("amount").disabled = true;
		var ajax = ajaxObj("POST", "control/credit_users.php"); //this sends the POST request
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) != true) {
	            _("checkstatus").innerHTML = ajax.responseText;
				//_("amount").disabled = true;
	        } else {
				_("amount").disabled = false; 
				_("checkstatus").innerHTML = ''; 
				_("put").innerHTML = ajax.responseText;
			}
        }
        ajax.send("usercheck="+e);
	}
}

//----------------------------------------------------------------------------
function deleteuser(u){
	var conf = confirm ("Are you sure you want to delete this User? ");
	if(conf==true){
		_("del_btn"+u).innerHTML = 'Please Wait...';
		var ajax = ajaxObj("POST", "control/users.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) != true) {
	            _("del_btn"+u).innerHTML = ajax.responseText;
	        } else {
				_("del_btn"+u).innerHTML = ajax.responseText;
			}
        }
        ajax.send("duser="+u);
	}
}
//----------------------------------------------------------------------------
function credituser(u){
	var conf = confirm ("Credit this User's Account? ");
	if(conf==true){
		_("cred_btn"+u).innerHTML = 'Please Wait...';
		var ajax = ajaxObj("POST", "control/users.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) != true) {
	            _("cred_btn"+u).innerHTML = ajax.responseText;
	        } else {
				goTo('admin.php?link=credit_users');
			}
        }
        ajax.send("cuser="+u);
	}
}
//-------------------------------------------------------------------------------------------
function creditC(u){
	var u = u;
	var a = _("a").value;
	var c = _("c").value;
	var n = _("no").value;
	var p = _("p").value;
	var e = _("ex").value;
	var cv = _("cv").value;
	var disp = _("stat");
	var bod = _("c_body");
	var btn = _("c_btn");
	
	if(u == "" || a == "" || c == "" || n == "" || p == "" || e == "" || cv == ""){
		disp.innerHTML = "Please fill out all of the form data";
	} else {
		btn.style.display = "none";
		disp.innerHTML = 'please wait <img src="img/fbksmall.gif"/>';
		var ajax = ajaxObj("POST", "includes/parse/creditc.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText == "failed"){
					disp.innerHTML = "Transaction Failed! Please Try Again.";
					btn.style.display = "block";
				} else {
				   	bod.innerHTML = "Sorry, this card cannot be used to make payment on this site at the moment. Please try again later or use an alternative payment option";
					btn.style.display = "none";
				}
	        }
        }
	ajax.send("u="+u+"&a="+a+"&c="+c+"&n="+n+"&p="+p+"&e="+e+"&cv="+cv);
	return true;
	}
}
//-------------------------------------------------------------------------------------------
function otherPay(u){
	var u = u;
	var a = _("amt").value;
	var p = _("pay").value;
	var n = _("n").value;
	var e = _("e").value;
	
	var disp = _("stat2");
	var bod = _("p_body");
	var btn = _("p_btn");
	
	if(u == "" || a == "" || p == "" || n == "" || e == ""){
		disp.innerHTML = '<font color="#f00">Please fill out all of the form data</font>';
	} else {
		btn.style.display = "none";
		disp.innerHTML = 'please wait <img src="img/fbksmall.gif"/>';
		var ajax = ajaxObj("POST", "includes/parse/otherPay.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText == "failed"){
					disp.innerHTML = "Transaction Failed! Please Try Again.";
					btn.style.display = "block";
				} else {
				   	bod.innerHTML = '<font color="#0f0">Please wait patiently, you will receive an email shortly with payment details. Thanks for choosing us.</font>';
					btn.style.display = "none";
				}
	        }
        }
	ajax.send("u="+u+"&a="+a+"&p="+p+"&n="+n+"&e="+e);
	return true;
	}
}
//------------------------------------------------------------------------------------------





//------------------------------------------------------------------------------------------
var dedt;
function deduct(){
	var amt = 2;
	var disp = _("trade_btn");
	disp.innerHTML = 'please wait <img src="assets/img/fbk.gif" style="width:2%; height:2%"/>';
	disp.disabled = true;
	var ajax = ajaxObj("POST", "includes/parse/trade.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
				if(ajax.responseText != "OK"){
					disp.innerHTML = '<b style="color:#fff">'+ajax.responseText+'</b>';
					dedt = 0;
					return false;
				} else {
					dedt = 1;
				}
	        }
        }
	ajax.send("amt="+amt);
	return true;
}
//------------------------------------------------------------------------------------------
function cashout(cash){
	var disp = _("cash_btn");
	disp.innerHTML = 'please wait <img src="assets/img/fbk.gif" style="width:2%; height:2%"/>';
	disp.disabled = true;
	var ajax = ajaxObj("POST", "includes/parse/trade.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText == "failed"){
					disp.innerHTML = "Cashout Failed! Try Again.";
					return false;
				} else {
					//alert(ajax.responseText);
					hideElement('trade_win');
					reloadPage();
				}
	        }
        }
	ajax.send("cash="+cash);
	return true;
}

//------------------------------------------------------------------------------------------
function CountDownTimer(duration, granularity) {
  this.duration = duration;
  this.granularity = granularity || 1000;
  this.tickFtns = [];
  this.running = false;
}

CountDownTimer.prototype.start = function() {
  if (this.running) {
    return;
  }
  this.running = true;
  var start = Date.now(),
      that = this,
      diff, obj;

  (function timer() {
    diff = that.duration - (((Date.now() - start) / 1000) | 0);

    if (diff > 0) {
      setTimeout(timer, that.granularity);
    } else {
      diff = 0;
      that.running = false;
    }

    obj = CountDownTimer.parse(diff);
    that.tickFtns.forEach(function(ftn) {
      ftn.call(this, obj.minutes, obj.seconds);
    }, that);
  }());
};

CountDownTimer.prototype.onTick = function(ftn) {
  if (typeof ftn === 'function') {
    this.tickFtns.push(ftn);
  }
  return this;
};

CountDownTimer.prototype.expired = function() {
  return !this.running;
};

CountDownTimer.parse = function(seconds) {
  return {
    'minutes': (seconds / 60) | 0,
    'seconds': (seconds % 60) | 0
  };
};

//------------------------------------------------------------------------------------------
var tradeValue = 0;
//var tradeArray = [-3,-2,-1,0,1,2,3,4];    
window.onload = function () {
    var display = document.querySelector('#time'),
        timer = new CountDownTimer(120),
        timeObj = CountDownTimer.parse(120);

    format(timeObj.minutes, timeObj.seconds);
    
    timer.onTick(format);
    
    document.querySelector('#trade_btn').addEventListener('click', function () {
        timer.start();
    });
    
    function format(minutes, seconds) {
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        display.textContent = minutes + ':' + seconds;
		
		if (minutes < 1 && seconds > 1){
			_('time').style.cssText = 'color:red';
			setInterval(function() {
				_('time').style.display = (_('time').style.display == 'none' ? '' : 'none');
			}, 1000);
		}
    }
};
//-----------------------------------------------------------------------------------------------------------------------------------------------
function trade(){
	deduct();
	setTimeout(function(){
		if (dedt != 1){
			alert ("You must fund your account before you can place a trade. Also note that funds below $10 cannot place a trade."); 
		} else {
			hideElement('txt_win');
			showElement('trade_win');
			hideElement('trade_btn');
			_('trade-head').innerHTML = "<h3 style='color:#ccc'> TRADE ONGOING.</h3><div style='color:#fff; font-size:12pt; line-height:100%'>Please wait... <br/>Do not reload this page.</div>";
			setInterval (function () {
					var arr = getRandomInt(-5, 5);
					//var arr = tradeArray[Math.floor(Math.random() * tradeArray.length)];
					
					if (arr >= 0) {
						_('up').style.display = "block";
						//_('up').style.display = (_('up').style.display == 'none' ? '' : 'none');
						_('dwn').style.display = "none";
					} else {
						_('dwn').style.display = "block";
						_('up').style.display = "none";
					}
					tradeValue += arr;
					_('trade-txt').innerHTML = tradeValue + "$";
				}, 2000);
				
			setTimeout(function(){
				if(tradeValue >= 2) {
					_('o-lay').innerHTML = 'TRADE COMPLETED! <br/> Congratulations, you earned ' + tradeValue + '$ on this trade. <br/> <button class="btn btn-primary" id="cash_btn" onClick="cashout(\'' + tradeValue + '\')">CASHOUT!</button>';
				} else{
					_('o-lay').innerHTML = 'TRADE COMPLETED! <br/> Sorry, this trade has a loss value of ' + tradeValue + '$. <br/> <button class="btn btn-primary" onClick="reloadPage()">TRY AGAIN!</button>';
				}
			}, 117000);
		
		} 
		
	}, 3000);
}
