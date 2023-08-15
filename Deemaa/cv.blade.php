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
          <li><a href="{{route('index')}}">Home</a></li>
          <li><a href="{{route('page2')}}">About</a></li>
          <li><a href="{{route('page3')}}">Portfolio</a></li>
          <li><a href="{{ route('suggestion.index') }}">Suggestion</a></li>
        </ul>
      </div>
    </nav>
    <div class="home-content" id="home-page">
      <div class="name">
        <h1>Hi, I'm Deema</h1>
        <p>A Web Developer in training.</p>
      </div>
    </div>
  </header>
 @extends ('layouts.footer1')
 @section ('con')
 <h2>Contact Me</h2>
 @endsection
  <!-- JAVASCRIPT -->
  <script src="script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>

</html>