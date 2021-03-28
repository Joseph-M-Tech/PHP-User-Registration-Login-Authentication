<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}


?>

<!--
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Website Title</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
		</div>
	</body>
</html>

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="container">
        <div class="nav-wrapper">
            <div class="left-side">
                <div class="nav-link-wrapper active-nav-link">
                    <a href="home.php" >Home</a>
                </div>
                <div class="nav-link-wrapper">
                    <a href="about.html">About</a>
                </div>
			</div>
			
            <div class="right-side">
				
                <div class="brand">
                    <div class="logo">JOSEPH MWANGI</div>
                </div>

            </div>
        </div>

        <div class="content-wrapper">
            
            <div class="portfolio-items-wrapper">

                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image:url(images/portfolio1.jpg)"></div>
          
                    <div class="img-text-wrapper">
                      <div class="logo-wrapper">
                        <img src="images/logos/quip.png" alt="">
                      </div>
          
                      <div class="subtitle">I built the Quip Ecommerce platform, named a Top 25 Invention by Time Magazine in 2016.</div>
                    </div>
                  </div>
          
                  <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image:url(images/portfolio2.jpg)"></div>
                    <div class="img-text-wrapper">
                      <div class="logo-wrapper">
                        <img src="images/logos/devcamp.png" alt="">
                      </div>
          
                      <div class="subtitle">Coding bootcamp and learning management system.</div>
                    </div>
                  </div>
          
                  <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image:url(images/portfolio3.jpg)"></div>
                    <div class="img-text-wrapper">
                      <div class="logo-wrapper">
                        <img src="images/logos/eventbrite.png" alt="">
                      </div>
          
                      <div class="subtitle">Eventbrite is the leading event management platform on the web with millions of individuals utilizing their applications
                        to find, register or, and management events in numerous industries.</div>
                    </div>
                  </div>
          
                  <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image:url(images/portfolio4.jpg)"></div>
                    <div class="img-text-wrapper">
                      <div class="logo-wrapper">
                        <img src="images/logos/shop-hacker.png" alt="">
                      </div>
          
                      <div class="subtitle">Shop Hacker allows you to easily import digital products such as elearning courses, software, and games directly
                        into your ecommerce store.</div>
                    </div>
                  </div>
          
                  <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image:url(images/portfolio5.jpg)"></div>
                    <div class="img-text-wrapper">
                      <div class="logo-wrapper">
                        <img src="images/logos/crondose.png" alt="">
                      </div>
          
                      <div class="subtitle">Online tutorials and productivity tips.</div>
                    </div>
                  </div>
          
                  <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image:url(images/portfolio6.jpg)"></div>
                    <div class="img-text-wrapper">
                      <div class="logo-wrapper">
                        <img src="images/logos/dailysmarty.png" alt="">
                      </div>
          
                      <div class="subtitle">Keep track of what you learn every day.</div>
                    </div>
                  </div>
          
                  <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image:url(images/portfolio7.jpg)"></div>
                    <div class="img-text-wrapper">
                      <div class="logo-wrapper">
                        <img src="images/logos/dashtrack.png" alt="">
                      </div>
          
                      <div class="subtitle">What you track improves. DashTrack is a journal that makes it easy to track your daily tasks and make the most
                        of your time each day.</div>
                    </div>
                  </div>
          
                  <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image:url(images/portfolio8.jpg)"></div>
                    <div class="img-text-wrapper">
                      <div class="logo-wrapper">
                        <img src="images/logos/devtrunk.png" alt="">
                      </div>
          
                      <div class="subtitle">Online shop for developer happiness.</div>
                    </div>
                  </div>
          
                  <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image:url(images/portfolio9.jpg)"></div>
                    <div class="img-text-wrapper">
                      <div class="logo-wrapper">
                        <img src="images/logos/edutechional.png" alt="">
                      </div>
          
                      <div class="subtitle">Online technology tutorials.</div>
                    </div>
                  </div>
          
                  <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image:url(images/portfolio10.jpg)"></div>
                    <div class="img-text-wrapper">
                      <div class="logo-wrapper">
                        <img src="images/logos/ministry-safe.png" alt="">
                      </div>
          
                      <div class="subtitle">A complete child safety system for organizations.</div>
                    </div>
                  </div>
          
                  <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image:url(images/portfolio11.jpg)"></div>
                    <div class="img-text-wrapper">
                      <div class="logo-wrapper">
                        <img src="images/logos/open-devos.png" alt="">
                      </div>
          
                      <div class="subtitle">Publish and share daily devotionals.</div>
                    </div>
                  </div>
          
                  <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image:url(images/portfolio12.jpg)"></div>
                    <div class="img-text-wrapper">
                      <div class="logo-wrapper">
                        <img src="images/logos/toastability.png" alt="">
                      </div>

                      <div class="subtitle">Easy way to manage the digital life of your bar or restaurant.</div>

            </div>

        </div>
    </div>
    
</body>

<script>
  const portfolioItems = document.querySelectorAll('.portfolio-item-wrapper')

  portfolioItems.forEach(portfolioItem => {
    portfolioItem.addEventListener('mouseover', () => {
      
      portfolioItem.childNodes[1].classList.add('img-darken');
    })

    portfolioItem.addEventListener('mouseout', () => {
     
      portfolioItem.childNodes[1].classList.remove('img-darken');
    })
  } )
</script>
</html>