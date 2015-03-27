<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head lang="en">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

    <title>Piranhr |IS0502 Assignment</title>

    <!-- Include our primary CSS -->
    <link href="css/styles.css" rel="stylesheet" title="Default Styles"/>
    <!-- Include our alternate CSS -->
    <link href="css/alternatestyles.css" rel="alternate stylesheet" title="Alternate Styles" />

    <!-- Include the TypeKit library -->
    <script src="//use.typekit.net/fwp4ich.js" type="text/javascript"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <!-- Include the GA Tracking Script -->
    <script type="text/javascript">
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-61240120-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body>

<!-- Begin the grid -->
<div class="grid">
    <!-- 20% Width Sidebar -->
    <div class="unit one-fifth">
        <?php include("elements/sidebar.php"); ?>
    </div>

    <!-- Begin 80% grid -->
    <div class="unit four-fifths">

        <h1>Piranhr</h1>

        <ul class="nav nav-tabs nav-tabs-justified">
            <li><a href="#summary">Summary</a></li>
            <li><a href="#eventual-outcome">Eventual Outcome</a></li>
            <li><a href="#my-thoughts">My Thoughts</a></li>
        </ul>

            <div class="unit three-fourths">


                <h2 id="summary">Summary</h2>
                <p class="leading"><strong>Business Summary:</strong> Online wagering and social networking platform for gamers.</p>
                <p><strong>Description:</strong> Piranhr started in October 2012 when my friend Tom Walker and I developed the idea he had, for a website where gamers could come together and place real money bets on the outcome of the outcome of the video game matches they played.</p>

                <h2 id="eventual-outcome">Eventual Outcome</h2>
                <p>Development of the website begun soon after, and carried on for a lengthy period. Eventually, in March 2014 we carried out a soft launch of the site. This initial launch was successful, gaining over 150 users in the first 4 weeks. Unfortunately however, many users stopped using the platform due to a number of bugs and issues with the site.</p>

                <h2 id="my-thoughts">My Thoughts</h2>
                <p>Despite the fact Piranhr has taken over two and a half years to develop, and still has not fully launched, I am extremely proud of what myself and Tom have achieved with it. We have put a great number of hours into developing business plans, designing and developing the website. We hope to launch in June, and whether it is sucessful or not I will be very proud of Piranhr.</p>

                <p>The site is currently being re-developed, and we hope to launch in June 2015. Some screenshots of the site are included below:</p>

                <img src="img/dashboard-1024x657.png" alt="Piranhr Dashboard" /><span>Piranhr Dashboard</span>
                <img src="img/challenges-1024x654.png" alt="Piranhr Challenges" /><span>Piranhr Challenges</span>
                <img src="img/profile-1024x515.png" alt="Piranhr User Profile" /><span>Piranhr User Profile</span>
                <img src="img/user-profile.png" alt="Piranhr New User Profile" /><span>Piranhr New User Profile</span>


            </div>

            <div class="unit one-fourth">

                <div class="date-range">
                    September 2011 - Present
                </div>

                <a href="http://www.piranhr.com">Piranhr.com</a>
            </div>

    </div>
    <!-- Include the validation badge -->
    <?php include('elements/validated-badge.php'); ?>
</div>

<!-- Include the contact modal -->
<?php include('elements/modal-contact.php'); ?>

<!-- Include jQuery JavaScript Library -->
<script type="text/javascript" src="js/libs/jquery-min.js"></script>
<script type="text/javascript" src="js/emailFeedback.js"></script>

<script type="text/javascript">

    //Validate and then send form via Ajax
    $('form[id="form-contact"]').submit(function( event ) {
        alert( "Handler for .submit() called." );

        //Prevent default action so form is not submitted
        event.preventDefault();

        //Run validate function
        validateForm();

    });

</script>

</body>
</html>
