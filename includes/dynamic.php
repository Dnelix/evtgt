<?php
    function curPageName() {
    return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
    }

    $page = curPageName();
    $pag = explode('.',$page);
    $pgz = $pag[0];

    switch($pgz){
        case 'home':
        $pagetitle = "EventGates Home|| Your best ally for every Event";
        $metatitle = "EventGates Home|| Your best ally for every Event";
        $metadesc = "Welcome to Event Gates. Great events begins with great planning. Event Gates is the easiest to use application that allows anyone to create and manage events, send out quick invitations, sell event tickets and create IVs for free.";
        break;
        
        case 'events':
        $pagetitle = "EventGates Events|| Every great event begins with a good plan";
        $metatitle = "EventGates Events|| Every great event begins with a good plan";
        $metadesc = "Here you can see a list of some recent events posted on eventgates. Event Gates is the easiest to use application that allows anyone to create and manage events, send out quick invitations, sell event tickets and create IVs for free.";
        break;
        case 'about':
        $pagetitle = "EventGates || About Us";
        $metatitle = "EventGates || About Us";
        $metadesc = "We are passionate about making your event work. Event Gates is the easiest to use application that allows anyone to create and manage events, send out quick invitations, sell event tickets and create IVs for free.";
        break;
        case 'contact':
        $pagetitle = "EventGates || Contact Us";
        $metatitle = "EventGates || Contact Us";
        $metadesc = "We don't think you will ever need to contact because our platform was designed with you in mind. Event Gates is the easiest to use application that allows anyone to create and manage events, send out quick invitations, sell event tickets and create IVs for free.";
        break;


        default:
        $pagetitle = "EventGates || Your best ally for every Event";
        $metatitle = "EventGates || Your best ally for every Event";
        $metadesc = "Welcome to Event Gates. Great events begins with great planning. Event Gates is the easiest to use application that allows anyone to create and manage events, send out quick invitations, sell event tickets and create IVs for free.";

    }
?>