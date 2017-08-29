<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>portfolio</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/pretty.min.css"/>
  <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.0.46/css/materialdesignicons.min.css"/>
</head>

<body>


  <div class="al">
    <div class="acontainer">
      <span class="logo">Portfolio</span>
      <ul>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Plan</a></li>
        <li><a href="#">Contact</a></li>
        <a class="btn btn-primary lang" href="ar/ar.php">AR</a>
      </ul>
      <div class="head">
        <h1>MOAD EL AZZAOUI</h1>
        <p>UI/UX DESIGNER - WEB DEVLOPPER</p>
      </div>
    </div>
  </div>

  <div class="about">
    <span class="mdi mdi-account account"></span>
    <h2>ABOUT</h2>
    <div class="con">
      <p class="blockquote lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
      dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <div class="pretty plain toggle">
        <input type="checkbox"/>
        <label><i class="mdi mdi-thumb-up success"></i> Good</label>
        <label><i class="mdi mdi-thumb-down danger"></i> Bad</label>
      </div>
    </div>
  </div>

  <div class="portfolio">
    <span class="mdi mdi-briefcase-check bri"></span>
    <h2>PORTFOLIO</h2>
    <div class="card" style="width: 20rem;">
      <img class="card-img-top" src="http://via.placeholder.com/318x150" alt="Card image cap">
      <div class="card-block">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card" style="width: 20rem;">
      <img class="card-img-top" src="http://via.placeholder.com/318x150" alt="Card image cap">
      <div class="card-block">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card" style="width: 20rem;">
      <img class="card-img-top" src="http://via.placeholder.com/318x150" alt="Card image cap">
      <div class="card-block">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <br>
    <div class="pretty plain toggle">
      <input type="checkbox"/>
      <label><i class="mdi mdi-thumb-up success"></i> Good</label>
      <label><i class="mdi mdi-thumb-down danger"></i> Bad</label>
    </div>
  </div>
  <div class="plan">
    <span class="mdi mdi-bookmark-check check"></span>
    <h2>PLAN</h2>
    <div class="card" style="width: 20rem;">
      <div class="card-block">
        <h4 class="card-title alert alert-success">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item alert alert-info">Cras justo odio</li>
        <li class="list-group-item alert alert-info">Dapibus ac facilisis</li>
        <li class="list-group-item alert alert-info">Vestibulum at eros</li>
      </ul>
    </div>

    <div class="card" style="width: 20rem;">
      <div class="card-block">
        <h4 class="card-title alert alert-success">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item alert alert-info">Cras justo odio</li>
        <li class="list-group-item alert alert-info">Dapibus ac facilisis</li>
        <li class="list-group-item alert alert-info">Vestibulum at eros</li>
      </ul>
    </div>

    <div class="card" style="width: 20rem;">
      <div class="card-block">
        <h4 class="card-title alert alert-success">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item alert alert-info">Cras justo odio</li>
        <li class="list-group-item alert alert-info">Dapibus ac facilisis</li>
        <li class="list-group-item alert alert-info">Vestibulum at eros</li>
      </ul>
    </div>
    <br>
    <div class="pretty plain toggle">
      <input type="checkbox"/>
      <label><i class="mdi mdi-thumb-up success"></i> Good</label>
      <label><i class="mdi mdi-thumb-down danger"></i> Bad</label>
    </div>
  </div>

  <div class="contact">
    <span class="mdi mdi-message-processing message"></span>
    <h2>CONTACT</h2>
    <form class="" action="" method="post">
      <label for="username">username</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username">
      <label for="Email1">Email address</label>
      <input type="email" class="form-control" id="Email1" placeholder="Enter email">
      <label>Message</label>
      <textarea name="name" rows="8" cols="47"></textarea>
      <button class="btn btn-success" type="submit" name="button">send</button>
    </form>
  </div>
  <p class="copy">copyright &copy; 2017-2018</p>


  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
