<!DOCTYPE html>
<html lang="en">
<meta character="UTF-8">
<link rel="stylesheet" type="text/css" href="adminstyles.css"/>
<head>
<style>
body{
    text-align: left;
    font-size: 20px;
    //text-decoration: underline;
    background-image: url("images/cc.jpg");
    background-image: no-repeat;
    background-size: fixed;
    font-family: italic;
}
h1{
    color: blue;
    font-size: 40px;
    text-decoration: underline;
}
</style>
<body>
<div class="header">
<h1>USER DETAILS</h1>
<p><a href="logout.php">LOGOUT!</a></p>

</div>

<div class="menu-wrap">
    <nav class="menu">
        <ul class="clearfix">
            <li><a href="UserPage.php">Home</a></li>
            <li>
                <a href="">MY_DETAILS<span class="arrow">&#9660;</span></a>
 
                <ul class="sub-menu">
                    <li><a href="v.php">Personal_Information</a></li>
                    <li><a href="servicedetails.php">SERVICING_Details</a></li>
                    <li><a href="booking_det.php">BOOKING_DETAILS</a></li>
                    <li><a href=""> &amp; FEEDBACK</a></li>
                </ul>
            </li>
            <li><a href="cardetails.php">BOOK_SERVICE</a></li>
        </ul>
    </nav>
</div>

</body>


</head>