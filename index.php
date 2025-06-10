<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Number Dislpay">
    <meta name="keywords" content="immaculata, icd2o">
    <meta name="author" content="Kukwac">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./Favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Favicons/favicon-16x16.png">
    <link rel="manifest" href="./Favicons/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Number Dislpay</title>
  </head>
  <body>
    
    <!-- form to get the indexes of refraction from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="minNumber">Min Number:</label>
      <input type="float" id="minNumber" name="minNumber"><br><br>
      <label for="maxNumber">Max Number:</label>
      <input type="float" id="maxNumber" name="maxNumber"><br><br>
      <input type="submit" value="Display Result">
    </form>

    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results">
      <h4>Order Summary</h4>";
      <div id="user-info">
        <div id="subtotal"></div>
        <div id="tax"></div>
      </div>
    </iframe>  
  </body>
</html>