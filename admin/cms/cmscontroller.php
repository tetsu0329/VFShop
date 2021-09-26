<?php
    require_once ("../../include/initialize.php");
    $action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

    switch ($action) {
        case 'updateaboutus' :
        doUpdateAboutUs();
        break;
        
        case 'updatemission' :
        doUpdateMission();
        break;

        case 'updatevision' :
        doUpdateVision();
        break;

        case 'updatecontact' :
        doUpdateContact();
        break;

        
    }
    function doUpdateAboutUs(){
	    if(isset($_POST['ourstorysave'])){
            $about = New About(); 
            $about->CMS_ABOUT_STORY = $_POST['aboutcontent'];
            $about->update();
  
            message("Our Story has been updated!", "success");
            redirect("index.php?view=About");
        } 
    }
    function doUpdateMission(){
	    if(isset($_POST['updtmissionbtn'])){
            $about = New About(); 
            $about->CMS_ABOUT_MISSION = $_POST['aboutmission'];
            $about->update();
  
            message("Mission has been updated!", "success");
            redirect("index.php?view=About");
        }
    }
    function doUpdateVision(){
	    if(isset($_POST['updtvisionbtn'])){
            $about = New About(); 
            $about->CMS_ABOUT_VISION = $_POST['aboutvision'];
            $about->update();
  
            message("Vision has been updated!", "success");
            redirect("index.php?view=About");
        }
    }
    function doUpdateContact(){
	    if(isset($_POST['updatecontactbtn'])){
            $contact = New Contact(); 
            $contact->CMS_CONTACT_NAME = $_POST['name'];
            $contact->CMS_CONTACT_ADDRESS = $_POST['address'];
            $contact->CMS_CONTACT_EMAIL = $_POST['email'];
            $contact->CMS_CONTACT_PHONE = $_POST['phone'];
            $contact->CMS_CONTACT_FB = $_POST['facebook'];
            $contact->CMS_CONTACT_IG = $_POST['instagram'];
            $contact->CMS_CONTACT_TWT = $_POST['twitter'];
            $contact->update();
  
            message("Contact Information has been updated!", "success");
            redirect("index.php?view=Contact");
        }
    }
    
?>