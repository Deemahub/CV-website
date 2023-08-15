<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio Code</title>
  <link rel="stylesheet" href="styles.css" />
  <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
  <header class="header">
    <nav class="navbar">
      <div class="navbar-container container">
        <div>
          <h1 class="navbar-brand">Deema Allhaib</h1>
        </div>
        <ul class="menu-items">
          <li><a href="/">Home</a></li>
          <li><a href="/2">About</a></li>
          <li><a href="/3">Portfolio</a></li>
          <li><a href="/suggestion">Suggestion</a></li>
        </ul>
      </div>
    </nav>
  <section id="my-works">
    <div class="portfolio">
      <div class="proj-heading">
        <h1>Portfolio</h1>
      </div>
      <div class="portfolio-content container">
        <div class="proj-1">
          <div class="proj1-details">
            <i class="fab fa-java"></i>
            <h2>Bricks Breaker Game</h2>
            <p>Build Using Java</p>
          </div>
        </div>

        <div class="proj-2">

          <div class="proj2-details">
            <i class="fab fa-html5"></i>
            <i class="fab fa-css3-alt"></i>
            <i class="fab fa-js"></i>
            <i class="fab fa-php"></i>
            <h2>Coffee website</h2>
            <p>Build Using HTML,CSS,JAVASCRIPT,PHP</p>
          </div>
        </div>
      <div class="proj-2">
        <div class="proj2-details">
            <i class="fab fa-java"></i>
            <h2>Train Management System</h2>
            <p>Build Using Java</p>
          </div>
        </div>
        <div class="more-work">
          <p>
            More
          </p>
          <a href="https://github.com/Deemahub" target="blank">Github</a>
        </div>
      </div>
    </div>
  </section>
 @extends ('layouts.footer1')
 @section ('con')
 <h2>Contact Me</h2>
 @endsection
  <!-- JAVASCRIPT -->
  <script src="script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>

</html>