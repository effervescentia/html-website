<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Project</title>
    <meta name="description" content="Profile of a developer and entrepreneur.">

    <?php include('php/style.php'); ?>
    <script type="text/javascript" src="js/projects.js"></script>
  </head>
  <body>
    <?php include('php/header.php'); ?>

    <div class="nav projnav">
      <div class="container">
        <ul class="pull-left">
          <li><a href="#benteichman">benteichman.ca</a></li>
          <li><a href="#unify">Unify</a></li>
          <li><a href="#charmaster">Character Master</a></li>
          <li><a href="#oncampus">OnCampus</a></li>
        </ul>
      </div>
    </div>

    <div class="page">
      <div class="jumbotron">
        <div class="container">
          <h1>Projects</h1>
        </div>
      </div>

      <div id="benteichman">
        <div class="container section jumbo">
          <img class="icon" src="img/webicon.png">
          <h2>benteichman.ca</h2>
          <h4>A website designed to showcase my development experience and innovation.</h4>
          <hr>
        </div>
      </div>

      <div id="unify">
        <div class="container section jumbo">
          <hr>
          <img class="icon" src="img/unify.png">
          <h2>Unify</h2>
          <h4>A universal interface for social networks.</h4>
          <hr>
        </div>
      </div>

      <div id="charmaster">
        <div class="container section jumbo">
          <hr>
          <img class="icon" src="img/charmaster.png">
          <h2>Character Master</h2>
          <h4>A D&D character manager with built in tools.<h4>
          <hr>
        </div>
      </div>

      <div id="oncampus">
        <div class="container section jumbo">
          <hr>
          <img class="icon" src="img/oncampus.png">
          <h2>OnCampus</h2>
          <h4>An interactive map of the UofW campus with scheduling and path-finding tools.</h4>
          <hr>
        </div>
      </div>
    </div>

    <?php include('php/footer.php'); ?>
  </body>
</html>
