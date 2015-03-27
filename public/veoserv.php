<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head lang="en">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

    <title>VeoServ | IS0502 Assignment</title>

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

        <h1>VeoServ</h1>

        <ul class="nav nav-tabs nav-tabs-justified">
            <li><a href="#summary">Summary</a></li>
            <li><a href="#eventual-outcome">Eventual Outcome</a></li>
            <li><a href="#my-thoughts">My Thoughts</a></li>
        </ul>

            <div class="unit three-fourths">

                <h2 id="summary">Summary</h2>
                <p class="leading"><strong>Business Summary:</strong> Hosting Minecraft servers for gamers and gaming communities.</p>
                <p><strong>Description:</strong> VeoServ started as a reincarnation of the previously successful <a href="absolute-hosting.php">AbsoluteHosting</a>. We started the new business as a result of learning from previous mistakes, we knew now how to prevent similar attacks that we had experienced previously with Absolute Hosting.</p>

                <h2 id="eventual-outcome">Eventual Outcome</h2>
                <p>Our aim was clear, to grow to, and grow past the size we had previously achieved. Within the first 6 months of running VeoServ we had developed a customer base of just over 300 customers, each on a monthly, or annually recurring subscription. By midway through year 2 this grew to over 600 and we achieved a revenue of over &pound;70,000.</p>

                <h2 id="my-thoughts">My Thoughts</h2>
                <p>Although VeoServ has steadily been declining in size since 2013, I am still very proud of what we achieved with it. At 18 I was the director of a company with a revenue of &pound;70,000 - No Mark Zuckerburg, but equally it was no small feat. </p>


                <p>I have included some screenshots of the current website below, this was entirely designed by myself back in August 2012.</p>

                <img src="img/veoserv-homepage.png" alt="VeoServ Homepage" /><span>VeoServ Homepage</span>
                <img src="img/veoserv-about-page.png" alt="VeoServ About" /><span>VeoServ About</span>

            </div>

            <div class="unit one-fourth">

                <div class="date-range">
                    September 2011 - Present
                </div>

                <a href="http://www.veoserv.com">VeoServ.com</a>
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
