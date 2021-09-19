<?php
    require_once ("../../include/initialize.php");

    //$sqlinquirycount = mysqli_query($conn,"SELECT * FROM inquirytable");
    //$inquirycount = mysqli_num_rows($sqlinquirycount);

    //$sqlinquirycount2 = mysqli_query($conn,"SELECT * FROM inquirytable WHERE messagestatus = 'Active'");
    //$inqunread = mysqli_num_rows($sqlinquirycount2);

    //$sqlinquirycount3 = mysqli_query($conn,"SELECT * FROM inquirytable WHERE messagestatus = 'Read'");
    //$inqread = mysqli_num_rows($sqlinquirycount3);

    $mydb->setQuery("SELECT * FROM `tblinquiry`");
    $eInquiry = $mydb->executeQuery();
    $inquiryNum = $eInquiry->num_rows;

    $mydb->setQuery("SELECT * FROM `tblorder`");
    $eOrder = $mydb->executeQuery();
    $orderNum = $eOrder->num_rows;

    $mydb->setQuery("SELECT * FROM `tbluseraccount`");
    $eUser = $mydb->executeQuery();
    $userNum = $eUser->num_rows; 
    
    $mydb->setQuery("SELECT * FROM `tblproduct`");
    $eProduct = $mydb->executeQuery();
    $productNum = $eProduct->num_rows;

?>