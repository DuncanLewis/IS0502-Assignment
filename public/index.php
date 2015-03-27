<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head lang="en">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>Home | IS0502 Assignment</title>

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
        <!-- Include the common sidebar -->
        <?php include("elements/sidebar.php"); ?>
    </div>


    <!-- 80% Width Content -->
    <div class="unit four-fifths">

        <h1>My Business Ventures</h1>


        <p class="leading">Welcome to my website.</p>
        <p>I have always been interested in business and entrepeneurship. This is probably due in large part to the fact that my mum has run her own business for the past 25 years.</p>
        <p>In 2010 I first got the opportunity to start my own business, this was through a national competition called the Tenner Challenge. More information on the challenge, and our award winning business can be found <a href="fractured-designs.php">here</a>.</p>

        <p>Most recently I started Piranhr with my good friend Tom Walker. Piranhr is an online wagering platform for gamers. More information on Piranhr can be found <a href="/piranhr.php">here</a> .</p>

        <p>Below is a brief summary of the business ventures mentioned on the site.</p>

        <table class="table">
            <thead>
            <tr>
                <th>Dates</th>
                <th>Business</th>
                <th>Active</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>October 2012 - Present</td>
                <td><a href="piranhr.php">Piranhr</a></td>
                <td>Yes</td>
            </tr>
            <tr>
                <td>September 2011 - Present</td>
                <td><a href="veoserv.php">VeoServ</a></td>
                <td>Yes</td>
            </tr>
            <tr>
                <td>August 2010 - March 2011</td>
                <td><a href="absolute-hosting.php">Absolute Hosting</a></td>
                <td>No</td>
            </tr>
            <tr>
                <td>Jan 2010 - March 2010</td>
                <td><a href="fractured-designs.php">Fractured Designs</a></td>
                <td>No</td>
            </tr>
            </tbody>
        </table>

        <h2>Website</h2>
        <p>The website itself has been created using WebStorm and PHPStorm, two brilliant IDE's. Both WebStorm and PHPStorm can be downloaded for free from the JetBrains website (for educational use).</p>

        <p>The purpose of this website is to provide readers with information on:</p>
        <ol>
            <li>My business background</li>
            <li>My most recent business ventures</li>
            <li>Personal thoughts and feelings related to the various businesses</li>
        </ol>
        <p>I have made the source of the website available to all, you can access and download the source files for the site over on <a href="https://github.com/DuncanLewis/IS0502-Assignment">GitHub</a>.</p>

        <h3>Definitions of Technologies Utilised</h3>
        <dl>
            <dt>GitHub</dt>
            <dd>Version control software.</dd>
            <dt>Less</dt>
            <dd>A pre-compiler to help organise, and speed up CSS development.</dd>
        </dl>
    </div>
    <!-- Include the validation badge -->
    <?php include('elements/validated-badge.php'); ?>
</div>

<!-- Include the contact modal -->
<?php include('elements/modal-contact.php'); ?>

<!-- Include jQuery JavaScript Library -->
<script type="text/javascript" src="js/libs/jquery-min.js"></script>

</body>
</html>
