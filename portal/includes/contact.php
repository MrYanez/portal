
<?php include 'portal-config.php';?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <title><?=$title?></title>
    <title>Nahum Yanez</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/forms.css">
  
 </head>
 <body>
     <header>
     <h1><i class="logo fa <?=$logo?>"></i> Nahum Yanez</h1>
        <nav class="topnav" id="myTopnav">
        <a href="https://nahyan.dreamhosters.com/portal/index.php#" class="active">Home</a>
            <a href="https://nahyan.dreamhosters.com/portal/includes/header.php" target="_blank">Header</a>
            <a href="https://nahyan.dreamhosters.com/portal/includes/contact.php" target="_blank">Contact</a>
            <a href="https://nahyan.dreamhosters.com/portal/includes/case-study.php" target="_blank">Case Study</a>
            <a href="" target="_blank">Portal-config</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </nav>
     </header>
     
   <main class="wrapper">
        <h2 class="subheader"><?=$PageID?>!</h2>
        <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "yaneznahum123@gmail.com";  //place your/your client's email address here
        $toName = "Nahum"; //place your client's name here
        $website = "IT162 Contact form";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>


<?php include 'includes/footer.php';?>
  


    