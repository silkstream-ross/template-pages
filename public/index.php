
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>template pages</title>
    <link rel="stylesheet" href="dist/css/default.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Sen&display=swap" rel="stylesheet">

</head>
<body>
<?php
require_once (__DIR__.'/includes/header.php');
?>
<div class="main-page-content">
    <div class="main-banner">
        <img class="banner-image" src="/images/Safari Shot cropped.jpg">
        <div class="banner-content">
            <div class="banner-heading"><h2><span>VIP</span> Luxury Experiences</h2></div>
            <div class="banner-links"><button class="banner-link">Events</button><button class="banner-link">Travel</button></div>
            <div class="banner-switch-links"><a class="banner-switch-link"></a><a class="banner-switch-link"></a></div>
        </div>
    </div>
    <div class="main-page-featured-events">
        <div class="section-heading-group">
            <h2 class="section-heading">FEATURED EVENTS</h2>
            <p class="section-subheading">VIP Access to Sold Out Events</p>
        </div>
        <div class="featured-events-container">
            <div class="featured-events-item">
                <img class="featured-event-img" src="/images/events/Royal Ascot 2024.jpg" width="420" height="266">
                <div class="featured-event-details">
                    <span class="featured-event-category">Horse Racing</span>
                    <h3 class="featured-event-title">Royal Ascot 2024</h3>
                    <p class="featured-event-location">Ascot Racecourse</p>
                    <p class="featured-event-date">Tues 18th - Sat 22nd June 2024</p>
                </div>
            </div>
            <div class="featured-events-item-primary">
                <img class="featured-event-img" src="/images/events/Monaco Grand Prix 2024 cropped.jpg"  height="266" width="905">
                <div class="featured-event-details">
                    <span class="featured-event-category">Motorsport</span>
                    <h3 class="featured-event-title">2024 Formula 1 Monaco Grand Prix</h3>
                    <p class="featured-event-location">Monte Carlo</p>
                    <p class="featured-event-date">Fri 24th - Sun 26th May 2024</p>
                </div>
            </div>
            <div class="featured-events-item">
                    <img class="featured-event-img" src="/images/events/The 152nd Open.jpg" width="420" height="266">
                <div class="featured-event-details">
                    <span class="featured-event-category">Golf Major</span>
                    <h3 class="featured-event-title">The 152nd Open</h3>
                    <p class="featured-event-location">Royal Troon Golf Course</p>
                    <p class="featured-event-date">Wed 17th - Sun 21st July 2024</p>
                </div>
            </div>
            <div class="featured-events-item">
                <img class="featured-event-img" src="/images/events/Henley Royal Regatta.jpg" width="420" height="266">
                <div class="featured-event-details">
                    <span class="featured-event-category">Rowing</span>
                    <h3 class="featured-event-title">Henley Royal Regatta</h3>
                    <p class="featured-event-location">Henley-On-Thames</p>
                    <p class="featured-event-date">Tues 2nd - Sat 6th July 2024</p>
                </div>
            </div>
            <div class="featured-events-item">
                <img class="featured-event-img" src="/images/events/Wimbledon.jpg" width="420" height="266">
                <div class="featured-event-details">
                    <span class="featured-event-category">Tennis Major</span>
                    <h3 class="featured-event-title">Wimbledon Championships</h3>
                    <p class="featured-event-location">All England Tennis Club</p>
                    <p class="featured-event-date">Mon 1st - Sun 14th July 2024</p>
                </div>
            </div>
        </div>
        <div class="section-end">
            <button class="section-end-btn">View All Events</button>
        </div>
    </div>
    <div class="main-page-ambassador">
        <div class="ambassador-content">
            <img  src="/images/Mark & Chris.png" width="500">
            <div class="ambassador-text">
                <h1 class="ambassador-heading">Experience it all with go privilege</h1>
                <p class="ambassador-body">
                    Our brand ambassador Chris Robshaw with Go Privilege managing director
                    Mark Hooper at the 2023 Masters Golf.<br>
                    <br>
                    "I'm really excited to be officially joining the Go Privilege team and enhancing
                    their clients’ experience at events including motivational talks.<br>
                    <br>
                    As a rugby professional and general sporting enthusiast, I am looking forward
                    to supporting their client annual events including golf days, as well as the yearly
                    calendar of core sporting, entertainment and lifestyle events and experiences.”
                </p>
                <div class="ambassador-end">
                    <p class="ambassador-name">Chris Robshaw</p>
                    <p class="ambassador-final">Go Privilege Brand Ambassador</p>
                </div>
            </div>
        </div>
    </div>
    <div class="main-page-travel-services">
        <div class="section-heading-group">
            <h2 class="section-heading">Our Travel Services</h2>
            <p class="section-subheading">Get inspired by our luxury travel features</p>
        </div>
        <div class="travel-services-slider">
            <div class="travel-services-slider-buttons">
                <a href="#" class="travel-slider-left-button"><img src="images/arrowLeft.svg" width="70" height="70"></a>
                <a href="#" class="travel-slider-right-button"><img src="images/arrowRight.svg" width="70" height="70"></a>
            </div>
            <div class="travel-services-slider-items">
                <div class="travel-services-slider-item">
                    <p class="slider-item-title">Corporate Flights</p>
                    <img src="images/travel/Corporate%20Flights.jpg" width="375">
                </div>
                <div class="travel-services-slider-item">
                    <p class="slider-item-title">Private Villas</p>
                    <img src="images/travel/Private%20Villas.jpg" width="375">
                </div>
                <div class="travel-services-slider-item">
                    <p class="slider-item-title">Private Yachts</p>
                    <img src="images/travel/Private%20Yacht%20Charter.jpg" width="375">
                </div>
            </div>
        </div>
        <div class="section-end">
            <button class="section-end-btn-lng">View All Our Travel Services</button>
        </div>
    </div>
    <div class="main-page-social-posts">

    </div>
    <div class="main-page-partners">
        <h2 class="partners-title">Go Privilege, the UK's leading concierge company</h2>
        <p class="partners-text">
            Founded by PGA Golf Professional Mark Hooper, Go Privilege offers a wide range of sports hospitality,
            tickets, and travel packages to all major sporting events across the World.
            Whether you are looking for corporate hospitality to entertain clients or need tickets for a social occasion
            Go Privilege has a wide variety of options to suit all levels of budget and requirements.<br><br>
            We provide an unparalleled level of service throughout every hospitality booking and are extremely proud of our customer reviews.
            Choosing the right sports hospitality suite or venue can prove a difficult task so please feel free to get in touch
            and speak to one of our sales team for help and advice.
        </p>
    </div>
</div>
<?php
//require_once (__DIR__.'/includes/footer.php');
?>
</body>
</html>