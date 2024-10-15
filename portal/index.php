
<!--index.php-->
<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta http-equiv='cache-control' content='no-cache'> 
            <meta http-equiv='expires' content='0'> 
            <meta http-equiv='pragma' content='no-cache'>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>index.php</title>
            <link href="css/index_styles.css" type="text/css" rel="stylesheet">
        </head>
    <body class="home">
        <div id="wrapper"> 
            <header>
                <section class="tittle" alt="title">
                <h1>My Portal Page</h1>
                </section>
                <nav id="primary">
                    <ul>
                        <li><a href="index.html">INDEX</a></li>
                        <li><a href="about.html">ABOUT</a></li>
                        <li><a href="Work.html">WORK</a></li>
                        <li><a href="gallery.html">GALLERY</a></li>
                        <li><a href="contact.html">CONTACT</a></li>
                    </ul>
                </nav>
                </header>   
                <?php include 'includes/header';?> 
                <?php include 'includes/template';?>
                <!--header ends here-->
    
                <main>
                    <div class="content">
                        <p>My name is Nahum Yane, and I love IT.
                            <p>
                            I was born and raised, both my childhood
                            and adolescence in Mexico, and I have lived in Seattle Washington for the past 15 years.</p><br>
                            
                            <p>Growth is always a priotity for me, so I am always looking for ways to keep my self and mind
                            occupied in doing the things that benefit me in some more than ways.
                            In my spare time, I like to read, to cook, to watch the news, and 
                            to enjoy of myself and solitude.</p><br>

                            <p>Academically, I attended Seattle Central College where I completed my:
                            ESL, ABE, GED, and a 2-year transfer degree in Global Studies. After this, I completed a 2-year
                            college degree from Mexico via online through the National Autonomous University of Mexico (UNAM). 
                            Similarly, I completed 3 semesters 
                            from the same University in Political Sciences.</p><br>

                            <p>Also, I am about to complete a 2-year college transfer degree in pplication development
                            at North Seattle Colleg; nonetheless, I also registerd at Seattle Central College to pursue
                            the 90-credit certificate in website development. My goal is to gain experience
                            working both as a back-end and front-end application and website development.
                            I highly believe that both skills are essential in the world of technology to efficiently
                            know how to manage new technologies.</p><br>
                            
                            <p>My short-term goal is to complete my 2-year website application certificate and application degree, to then
                            take a bacherlo's degree in Application Development so that I can join the workforce industry
                            and work for a technology company to put into practice and already education while continuing
                            develop hands-on work and some other valuable and on demand IT skills.</p><br>
                        </p>
                    </div>
                                                                       
                </main>
                <?php include 'includes/template';?>
                                                                        
                <aside>
                    <section class="aside_img">
                        <img class="mypicture"
                            src="./images/309.jpg"
                            alt="mypicture.">
                            <?php include 'includes/template';?>
                    </section>                                          
                </aside> 
                <?php include 'includes/template';?>                                      

                <section class="aside_bottom">                     
                    <h2>Current IT162 Work:</h2>
                    <section class="content_h2">                       
                        <ul>
                            <ol><a href="https://github.com/NahumYanez">GitHub Repo</a></ol><br>
                            <ol><a href="https://nahyan.dreamhosters.com/portal/index.php">Header & Footer</ol><br>
                            <ol><a href=""></a></ol><br>
                            <ol><a href=""></a></ol><br>
                            </ul>
                    </section>                                          
                </section>
                <?php include 'includes/aside_bottom';?>                                           


                <footer>
                    <ul>
                        <li>Copyright 2023 &copy;</li>
                        <li>All rights reserved</li>
                        <li><a href="">Terms of Use</a></li>
                        <li><a href="">Designed By Nahum Yanez</a></li>
                        <li><a href="">Index.html</a></li>
                        <li><a href="">Page Valid</a></li>
                    </ul>
                </footer>
                <?php include 'include/footer';?>
                <?php include 'includes/template';?>
            </div>
        </body>
    </html>