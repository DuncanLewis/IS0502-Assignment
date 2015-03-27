<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head lang="en">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

    <title>Report | IS0502 Assignment</title>

    <!-- Include our primary CSS -->
    <link href="../css/styles.css" rel="stylesheet" title="Default Styles"/>
    <!-- Include our alternate CSS -->
    <link href="../css/alternatestyles.css" rel="alternate stylesheet" title="Alternate Styles" />


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
        <?php include("../elements/sidebar.php"); ?>
    </div>


    <!-- 80% Width Content -->
    <div class="unit four-fifths">

        <div class="report">
            <h1>What is Web Accessibility and Why is it Important in Web Development</h1>

            <h2>Introduction</h2>
            <p>In the UK, 71% of disabled people use the internet in order to search for and buy goods and services (W3.org, 2012). If these web users are unable to access the websites they wish to access, the ethos of the web itself is being violated; that is people who want to access the web to consume, or to create content, are unable to. It is not only the users that can benefit from the availability of accessible sites however; for businesses, it is extremely important to make websites accessible or else they risk losing out on a great deal of business from disabled people, or people using older, less powerful devices.</p>

            <h3>Definition of Web Accessibility</h3>
            <p>Web accessibility is the tailoring of websites to certain standards, in order to ensure people with disabilities, people with poor internet connections, and people using older devices are able to use the web in the same way any other person could.</p>
            <p>According to W3.org, web accessibility also <em>"means that people with disabilities can perceive, understand, navigate, and interact with the Web, and that they can contribute to the Web."</em> (W3.org, 2005). It is therefore as much about disabled people being able to contribute, and make their own voices heard on the web, as it is about allowing them to consume content written by others.</p>
            <p>There are many different aspects to web accessibility, most involving different disabilities, but some are involved with ensuring that people on all devices, and all internet connections (whether good or bad), are able to access web pages. For example someone accessing a website on a very old computer, with Internet Explorer 6 and a dial up internet connection should still be able to access the site and view the content, even if some modern aspects of the site are not available to them.</p>

            <h3>Definition of Web Development</h3>
            <p>Website development is the process of first designing a website, including web pages, and then creating the HTML and CSS files that allow the website to be rendered in a browser. The initial design of the website, as well as the development process have a large role to play in developing an accessible website. Each element of the design, must be carefully designed to ensure that people with visual impairments for example, are able to clearly view the content.</p>

            <h2>Body</h2>

            <h3>Different Types of Accessibility Requirements</h3>

            <h4>Disabilities</h4>
            <p>There are four main areas which are covered by accessibility requirements when it comes to disabilities, they are:</p>
                <ul>
                    <li>Visual</li>
                    <li>Cognitive</li>
                    <li>Hearing</li>
                    <li>Mobility</li>
                </ul>
                (Lal, 2012)
            <h4>Devices and Internet Connections</h4>
            <p>There is an ever-increasing digital divide between the haves and have-nots, this is especially present between developed, and developing countries. Today, two-thirds of the world remain unconnected to the internet, the vast majority of this is in developing nations (Internet.org, 2015). Those in developing nations that do have internet access, are often accessing the internet through old, low-power devices, and the internet connection itself is often very low bandwidth. It is important therefore that these low-power devices are catered for, as well as slow connections. Building accessible websites is key to ensure the voices of the developing world are heard.</p>

            <h3>Techniques for Accessible Web Development</h3>
            <p>Using modern web development standards, such as HTML5, allow developers to utilise a wide range of features to make their websites accessible.</p>
            <p>With the standardisation of HTML5 came a new set of features available to developers allowing them to improve their web sites accessibility; these features are known as the Accessible Rich Internet Applications Suite (ARIA) and are part of the W3 Web Accessibility Initiative (WAI) (W3.org, 2014). ARIA introduces roles, states and properties which allow developers to create more semantic elements within their sites, meaning advanced, rich elements that rely heavily on the power of modern devices, and fast internet connections to render them are shown to those with the capability to view them; but those without these capabilities should still be able to view the websites content in its most basic form. The same goes for those with disabilities, for example a blind web user, utilising a screen reader should be able to use the website the same way a non-disabled user should. The ARIA suite provides the tools for web developers to achieve this.</p>

            <h5>ARIA Features</h5>
            <h6>ARIA Roles</h6>
            <p>Aria Roles allow developers to specify the type of element in a far more semantic, meaningful way than may otherwise be possible.</p>

            <p>An example of an ARIA Role may be a navigation bar:
                &#60;div role="navigation"&#62;
                If a screen reader for example were to come across this element, with the ARIA role attribute, it will know to treat it as a navigation element and not as a standard container.
            </p>

            <h3>Benefits of Developing Accessible Websites</h3>
            <p>The benefits of developing accessible websites are numerous and wide-reaching. Not only does building accessible websites benefit those who will primarily be using the website, but also the companies or organisations behind the websites as well as users who do not require accessible features due to disabilities, older devices or poor internet connections.</p>
            <p>For businesses and organisations, having an accessible website is extremely important. There are numerous examples of businesses that have failed to implement accessible websites, and been fined for the lack of accessibility. Perhaps the biggest example of this came in 2006 when the National Federation for the Blind (NFB) filed a lawsuit against Target Corporation, after they failed to make changes that would make their site accessible. Cited issues included:</p>
            <ul>
                <li>a lack of alternative (alt) text on the site</li>
                <li>online purchases could not be completed without the use of a mouse</li>
                <li>image maps to show store locations were inaccessible</li>
                <li>many headings important to navigating the site were missing</li>
            </ul>
            <p>The result of the lawsuit saw Target settle for $6million with NFB (National Federation of the Blind et al., plaintiffs, v. Target Corporation, Defendant, 2009). In comparison, it would have cost them little more than a few thousand dollars to implement the changes across the site. Target obviously did not value the importance of web accessibility, and making their site available to all users. This was a mistake that cost Target greatly, but ultimately it set a legal precedent for companies to ensure their sites are accessible and available to all.</p>
            <p>The benefits of developing accessible websites are not only the consequences of not developing accessible web sites however. There have been a number of clear cases in recent years, where the development of an accessible website has greatly increased sales for a business.</p>
            <p>One such example can be found here in the UK with Tesco and their "Tesco Access" site. Although this has now been merged with their main site, Tesco initially developed a separate website, specifically for users with visual, and other impairments (McManus, 2001). Tesco Access was also widely used by non-disabled users, many older users, and users on slow connections found this version of the site easier to use. These changes were made in 2001 and led to an increase of sales by &pound;13 million annually. Additionally pre-christmas orders increased to 700,000 per week in 2001 (W3.org, 2009).</p>

            <h2>Conclusion</h2>
            <p>The ethos of the web is that it is an inclusive place, where people are not discriminated against, and thus web accessibility is key to ensuring that disabled people, or those with poor connections and old devices are included in making the web a better, altogether more inclusive place that gathers views from people of all walks of life, and all locations, regardless of wealth, age, race or any disability they may have.</p>
            <p>Web developers, and the companies or organisations they work for, have a responsibility to not just create websites, but to ensure the sites they create stick to this ethos and promote the web as a place for all people to visit, and become part of.</p>
            <p>It is constantly becoming cheaper and easier for new developers to begin creating and publishing websites to the web. Therefore it is very important that the standards defined by W3 for accessibility are clear and easy to understand by web developers of any level.</p>
            <p>Continuing to become a more inclusive place is key for the future of the web, with an ever more present digital divide between the haves and the have-nots, it is important to maintain the ethos of inclusivity, to ensure that more and more people are able to access the web and use it for good.</p>

            <h2>References</h2>
            <p>Blake, J. (2015) YouTube: We know automatic subtitles aren't good enough, BBC Newsbeat. Available at: http://www.bbc.co.uk/newsbeat/31004497 (Accessed: 20 March 2015).</p>
            <p>Diwan, A. (2015) 'How Many of Your Users Need Accessible Websites', Sitepoint. Available at: http://www.sitepoint.com/how-many-users-need-accessible-websites/ (Accessed: 20 March 2015).</p>
            <p>Explorable.com, (2009) Research Paper Outline Examples. Available at: https://explorable.com/research-paper-outline-examples (Accessed: 20 March 2015).</p>
            <p>Internet.org, (2015) Internet.org by Facebook. Available at: http://internet.org (Accessed: 20 March 2015).</p>
            <p>Lal, R. (2012) Building HTML5 Applications - Designing Accessibility with HTML5, Msdn.microsoft.com. Available at: https://msdn.microsoft.com/en-us/magazine/jj863135.aspx (Accessed: 20 March 2015).</p>
            <p>McManus, S. (2001) 'Tesco launches visionary website', Sean.co.uk. Available at: http://www.sean.co.uk/a/webdesign/accessibility.shtm (Accessed: 20 March 2015).</p>
            <p>National Federation of the Blind et al., plaintiffs, v. Target Corporation, Defendant (2009) 3:06-cv-01802-MHP.</p>
            <p>W3.org, (2005) Introduction to Web Accessibility. Available at: https://www.w3.org/WAI/intro/accessibility.php (Accessed: 20 March 2015).</p>
            <p>W3.org, (2012) Resources for Developing a Web Accessibility Business Case for Your Organization. Available at: http://www.w3.org/WAI/bcase/resources (Accessed: 20 March 2015).</p>
            <p>W3.org, (2009) Target Corporation - A Cautionary Tale of Inaccessibility. Available at: http://www.w3.org/WAI/bcase/target-case-study (Accessed: 20 March 2015).</p>
            <p>W3.org, (2009) Tesco - Case Study of Accessibility Benefits. Available at: http://www.w3.org/WAI/bcase/tesco-case-study (Accessed: 20 March 2015).</p>
            <p>W3.org, (2014) WAI-ARIA Overview. Available at: http://www.w3.org/WAI/intro/aria.php (Accessed: 20 March 2015).</p>

            <h2>Bibliography</h2>
            <p>Explorable.com, (2009) Research Paper Outline Examples. Available at: https://explorable.com/research-paper-outline-examples (Accessed: 20 March 2015).</p>
        </div>
    </div>
    <!-- Include the validation badge -->
    <?php include('../elements/validated-badge.php'); ?>
</div>

<!-- Include the contact modal -->
<?php include('../elements/modal-contact.php'); ?>

<!-- Include jQuery JavaScript Library -->
<script type="text/javascript" src="../js/libs/jquery-min.js"></script>

</body>
</html>
