<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" data-bs-theme="dark">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <title>Armand's Portfolio</title>
    <meta name="description" content="AA Projects Portfolio">

    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://armand.alimemaj.com/" />
    <meta property="og:title" content="Armand's Portfolio" />
    <meta property="og:description" content="AA Projects Portfolio" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://armand.alimemaj.com/" />
    <meta name="twitter:title" content="Armand's Portfolio" />
    <meta name="twitter:description" content="AA Projects Portfolio" />

    <link href="css/aa.css" rel="stylesheet">
    <link href="css/dark-mode.css" rel="stylesheet">
    <link href="css/icons.css" rel="stylesheet">
    <link href="css/magnific.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="symbol.png">

</head>

<body class="portfolio-page">

    <div class="heading">

        <?php require 'includes/aamenu.php' ?>

        <div class="main">
            <div class="container-md">

                <div class="row">

                    <img src="symbol.png" alt="AA Logo" />

                    <h1>Armand's
                        <span>Portfolio.</span>
                    </h1>
                    <h4>I have been working as a Front End Developer & Web Designer since 2016. </p>
                        Here are a few projects i have achieved for my
                        clients.
                    </h4>



                </div>

            </div>
        </div>
    </div>

    <?php require 'includes/aaportfolio.php' ?>


    <?php require 'includes/aafooter.php' ?>

    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/pace.js"></script>
    <script src="js/magnific.js"></script>
    <script src="js/aa.js"></script>
    <script>
    $(document).ready(function() {
        $('.box').each(function() {
            $(this).magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    });
    </script>
    <script type="text/javascript">
    const showclientsDiv = document.querySelector('.showclients');
    const images = showclientsDiv.querySelectorAll('img');

    const randomImage = images[Math.floor(Math.random() * images.length)];

    showclientsDiv.innerHTML = '';
    showclientsDiv.appendChild(randomImage);
    </script>
    <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    setTimeout(function() {
        $('.pace').fadeOut('fast');
    }, 1500);
    </script>

</body>

</html>