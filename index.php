<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Brand Boosters Global</title>
</head>

<body>
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <div class="contain">
        <div class="asset_1">
            <img src="img/asset_1.png" alt="pattern">
        </div>
        <div class="asset_2">
            <img src="img/asset_2.png" alt="pattern">
        </div>
        <!-- header starts -->
        <header>
            <nav id="menu">
                <ul>
                    <li>
                        <a href="index.php">
                            <strong>Home</strong>
                        </a>
                    </li>
                    <li>
                        <a href="#">BRAND BOOSTERS USA</a>
                    </li>
                    <li>
                        <a href="/">
                            <img src="img/logo.png" alt="Brand Boosters Global" width="150px">
                        </a>
                    </li>
                    <li>
                        <a href="index.php">BRAND BOOSTERS UK</a>
                    </li>
                    <li>
                        <a href="index.php">CONTACT US</a>
                    </li>
                </ul>
            </nav>
            <!-- header ends   -->

            <!-- mobile menu   -->
            <nav class="menu-extras">
                <input type="checkbox" id="check">
                <ul class="d-flex align-items-center justify-content-between" id="my-nav">
                    <li>
                        <i class="fas fa-grin-beam"></i>
                        <a href="index.php"> <img src="img/logo.png" alt="logo" width="100px"> </a>
                    </li>
                    <li>
                        <label for="check">
                            <a class="mx-3" style="cursor: pointer;">
                                <i class="fa fa-bars" id="hamberger"></i>
                            </a>
                        </label>
                    </li>
                </ul>
                <ul id="menu-extra">
                    <li>
                        <a href="index.php">
                            <strong>Home</strong>
                        </a>
                    </li>
                    <li>
                        <a href="#">BRAND BOOSTERS USA</a>
                    </li>
                    <li>
                        <a href="#">BRAND BOOSTERS UK</a>
                    </li>
                    <li>
                        <a href="#">CONTACT US</a>
                    </li>
                </ul>
            </nav>
            <!-- mobile menu ends -->
        </header>

        <section id="home-header">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6 header-text">
                        <h1><strong>Connection</strong> Brands <br /> with Audiences <br /><strong> Brand
                                Boosters</strong>
                        </h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde repellat rem et eos
                            consequuntur
                            laborum accusamus provident vero, reiciendis quam velit sunt, quibusdam dignissimos, quasi
                            officiis exercitationem nemo laudantium possimus?</p>
                        <div class="btn-explore">
                            <a href="#">
                                Explore Your Brand
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="header-img">
                            <lottie-player src="https://lottie.host/0dd5a61c-2511-4f23-89df-42488fb958ee/78Cx7X3e5f.json" background="transparent" speed="1" style="width: 100%; height: auto;" direction="1" mode="normal" autoplay></lottie-player>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="brands">
            <div class="asset_3">
                <img src="img/asset_3.png" alt="image">
            </div>
            <div class="our-brands">
                <h2>We Operate in <strong>Multiple</strong> Countries</h2>
            </div>
            <div class="brands pt-3">
                <div class="uk mx-5">
                    <a href="#" target="_blank">
                        <img src="img/uk.png" alt="Brand Boosters UK">
                    </a>
                </div>
                <div class="usa mx-5">
                    <a href="#" target="_blank">
                        <img src="img/usa.png" alt="Brand Boosters USA">
                    </a>
                </div>
                <div class="gaming mx-5">
                    <a href="#" target="_blank">
                        <img src="img/gaming.png" alt="Brand Boosters USA">
                    </a>
                </div>
            </div>
            <div class="globe">
                <img src="img/globe.png" alt="globe" width="100%">
            </div>
            <div class="asset_4">
                <img src="img/asset_4.png" alt="image">
            </div>
        </section>

        <footer>
            <div>
                All Rights Reserved &copy; <span id="year"></span> <strong><a href="mailto:info@brandboosters.us">Brand
                        Boosters Global</a></strong>
            </div>
        </footer>
    </div>

    <script>
        const date = new Date();
        const year = document.getElementById("year");
        year.textContent = date.getFullYear();

    </script>
</body>

</html>