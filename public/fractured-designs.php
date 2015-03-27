<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head lang="en">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

    <title>Fractured Designs | IS0502 Assignment</title>

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

    <!-- 80% Width Content -->
    <div class="unit four-fifths">

        <h1>Fractured Designs</h1>

        <ul class="nav nav-tabs nav-tabs-justified">
            <li><a href="#summary">Summary</a></li>
            <li><a href="#eventual-outcome">Eventual Outcome</a></li>
            <li><a href="#my-thoughts">My Thoughts</a></li>
        </ul>

            <div class="unit three-fourths">

                <h2>Summary</h2>
                <p id="summary" class="leading"><strong>Business Summary:</strong> Creating websites / promotional materials and designs for small bands around Sheffield</p>
                <p><strong>Description:</strong> Entered and won the Peter Jones Tenner Challenge (link + scan of certificate). Carried on running as a trading name for my freelance website design business (serving many types of clients, not just bands) until June 2013. Still a number of clients hosted on FD servers and revenue coming in each month from that.</p>
                <p>Our business was featured in a BBC News article, which included an interview with our team. The article can be found <a href="http://news.bbc.co.uk/1/hi/business/8681118.stm">here</a>.</p>

                <h2 id="eventual-outcome">Eventual Outcome</h2>
                <p>Whilst I know longer actively run Fractured Designs, there are still a number of clients hosted on the servers which we used to host clients websites, and as a result we still receive revenue coming in each month from them.</p>
                <img src="img/fractured-designs-tenner.jpg" alt="Collecting our award for Most Innovative Business Idea" />

                <h2 id="my-thoughts">My Thoughts</h2>
                <p>The image above was taken whilst we collected our award for Most Innovative Business Idea. We collected the award from Michael Acton Smith, CEO of <a href="http://mindcandy.com/">MindCandy</a>. Collecting the award from Michael was a great privilege, and one that set me on path of combining entrepreneurship and technology.</p>

                <h3>Why it worked:</h3>
                <ul>
                    <li>Although the website / design market was, and still is fully saturated, we were offering something different. Operating in an extremely specific niche allowed us to tailor our offerings to our clients, and get to know exactly what it was that our clients wanted to see.</li>
                    <li>We were also able to offer low prices to the bands, lower than they would get anywhere else. This allowed us to gain a good number of clients during the time and thus run a successful business.</li>
                </ul>
                <h3>Hardest barrier:</h3>
                <ul>
                    <li>The hardest barrier to breakdown when running this was finding clients as a team with an initially limited portfolio. Some clients were sceptical at first to accept our services due to the fact we were very new to the business and were just starting out.</li>
                    <li>In order to break this down we had to show the quality of our work to the bands before they would commit to buying designs / websites from us. In order to do this we often had to do spec work, which was largely unpaid.</li>
                </ul>

                <h3>What I learned from the experience:</h3>
                <p>As this was my first proper business venture I learnt a lot of the basics of running your own business, e.g. writing a business plan, marketing basics etc.</p>
            </div>

            <div class="unit one-fourth">

                <div class="date-range">
                    Jan 2010 - March 2010
                </div>
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
