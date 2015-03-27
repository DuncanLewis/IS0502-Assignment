<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head lang="en">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

    <title>Absolute Hosting | IS0502 Assignment</title>

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

        <h1>Absolute Hosting</h1>

        <ul class="nav nav-tabs nav-tabs-justified">
            <li><a href="#summary">Summary</a></li>
            <li><a href="#eventual-outcome">Eventual Outcome</a></li>
            <li><a href="#my-thoughts">My Thoughts</a></li>
        </ul>

            <div class="unit three-fourths">

                <h2 id="summary">Summary</h2>
                <p class="leading"><strong>Business Summary:</strong> Business hosting and managing minecraft servers for owners of gaming communities.</p>

                <p><strong>Description:</strong> Very successful for the entirety of the time it was run. We had over 300 clients with recurring subscriptions each month by February 2011. </p>

                <h2 id="eventual-outcome">Eventual Outcome</h2>
                <p>However in March 2011 we suffered a number of DDoS attacks to our servers. Consequently our datacenter imposed heavy bandwidth charges on us for going over our monthly allowance; we were unable to pay these fines (over &pound;3000) and thus our only option was to shut down the business.</p>
                <p>We were able to find a competitor of ours, Nitrous Networks, and persuade them to take on our customers in order to ensure the continuation of their service.</p>

                <h2 id="my-thoughts">My Thoughts</h2>
                <h3>Why it worked:</h3>
                <ul>
                    <li>With absolute hosting, we started at the perfect time in my opinion. Minecraft had just started to become very popular, the number of users was increasing almost exponentially, and there were only a limited number of server hosts that offered minecraft, much fewer specialised in minecraft. We had carved out a very specific niche and that allowed us to grow rapidly.</li>
                    <li>We were also able to offer heavy discounts vs other game hosts, due to the fact we were so new, and our servers were rented, rather than co-located. As a result this kept our costs very low, and we were able to quickly increase or decrease our capacity based upon demand.</li>
                </ul>
                <h3>Hardest barrier:</h3>
                <ul>
                    <li>The hardest barrier to breakdown when running this was finding clients as a team with an initially limited portfolio. Some clients were sceptical at first to accept our services due to the fact we were very new to the business and were just starting out</li>
                    <li>In order to break this down we had to show the quality of our work to the bands before they would commit to buying designs / websites from us. In order to do this we often had to do spec work, which was largely unpaid.</li>
                </ul>

                <h3>What I learned from the experience:</h3>
                <p>As this was my first proper business venture I learnt a lot of the basics of running your own business, e.g. writing a business plan, marketing basics etc.</p>

            </div>

            <div class="unit one-fourth">

                <div class="date-range">
                    August 2010 - March 2011
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
