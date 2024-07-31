<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <!--A temp stylesheet--> 
    <!--Not sure if you make your own css or bootstrap it-->
  
    <title>MegaPark VR</title>
</head>
<body>    

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href='/Home'>MegaPark</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/Home"><span class="sr-only">Home</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/About">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Games">Games</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Contact">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

<div class='container'>  </div>

@yield('content')
    
<footer class="footer-item">footer for terms, privacy, soical media, etc</footer>
</body>
</html>