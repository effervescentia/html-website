<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Project</title>
    <meta name="description" content="Profile of a developer and entrepreneur.">

    <?php include('php/style.php'); ?>
    <script type="text/javascript" src="js/pagenav.js"></script>
  </head>
  <body>
    <?php include('php/header.php'); ?>

    <div class="nav pagenav">
      <div class="container">
        <ul class="pull-left">
          <li><a href="#groupby">GroupBy Inc.</a></li>
          <li><a href="#cbsa">CBSA</a></li>
          <li><a href="#pricemetrix">PriceMetrix Inc.</a></li>
          <li><a href="#kpmg">KPMG</a></li>
        </ul>
      </div>
    </div>

    <div class="page">
      <div class="jumbotron">
        <div class="container">
          <h1>Experience</h1>
        </div>
      </div>

      <div id="groupby">
        <div class="container section jumbo">
          <img class="icon" src="img/groupby.png">
          <h2>Software Developer</h2>
          <h4>GroupBy Inc.</h4>

          <div class="container">
            <div class="row stackicon-row">
              <div class="col-xs-6 col-md-4">
                <img class="stackicon" src="img/web.png">
              </div>
              <div class="col-xs-6 col-md-4">
                <img class="stackicon" src="img/java.svg">
              </div>
              <div class="col-xs-6 col-md-4">
                <img class="stackicon" src="img/elasticsearch.png">
              </div>
            </div>

            <div class="row stackicon-row">
              <div class="col-xs-6 col-md-6">
                <img class="stackicon" src="img/jsp.jpg">
              </div>
              <div class="col-xs-6 col-md-6">
                <img class="stackicon" src="img/github.png">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="cbsa">
        <div class="container section jumbo">
          <img class="icon" src="img/cbsa.jpg">
          <h2>Software Architect</h2>
          <h4>Canadian Border Services Agency</h4>
        </div>
      </div>

      <div id="pricemetrix">
        <div class="container section jumbo">
          <img class="icon" src="img/pricemetrix.png">
          <h2>Test Automation Developer</h2>
          <h4>PriceMetrix Inc.</h4>
        </div>
      </div>

      <div id="kpmg">
        <div class="container section jumbo">
          <img class="icon" src="img/kpmg.jpg">
          <h2>Quality Assurance Analyst</h2>
          <h4>KPMG LLP Canada</h4>
        </div>
      </div>
    </div>

    <?php include('php/footer.php'); ?>
  </body>
</html>
