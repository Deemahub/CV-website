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

  <section class="about-me" id="about">
    <div class="container">
      <div class="about-content">
        <div class="left-content">
          <div>
            <h1 class="about-heading">About Me</h1>
          </div>
          <br><br><br><br>
          <p>
          Web developer in training with a passion for creating user-friendly and engaging websites.
          Currently learning HTML, CSS, JavaScript, PHP, and MySQL.
          Proven ability to learn new technologies quickly and efficiently
          </p>
        </div>
        <div class="skills">
          <div class="right-content">
            <div>
              <h1 class="skills-heading">My Skills</h1>
            </div>
            <div class="skills-bar">
              <div class="bar">
                <div class="info">
                  <span>HTML</span>
                </div>
                <div class="progress-line"><span class="html"></span></div>
                <div class="bar">
                  <div class="info">
                    <span>CSS</span>
                  </div>
                  <div class="progress-line"><span class="css"></span></div>
                  <div class="bar">
                    <div class="info">
                      <span>BOOTSTRAP</span>
                    </div>
                    <div class="progress-line"><span class="bootstrap"></span></div>
                    <div class="bar">
                      <div class="info">
                        <span>JAVASCRIPT</span>
                      </div>
                      <div class="progress-line"><span class="javascript"></span></div>
                      <div class="bar">
                        <div class="info">
                          <span>C Programming</span>
                        </div>
                        <div class="progress-line"><span class="c"></span></div>
                      </div>
                    </div>
                  </div>
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