<?php http_response_code(404); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>404 Not Found | Precise3DM UK</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
  <!--bootstrap css-->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  
  <!--custom css-->
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/uk.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon-01.png">
  <style>
    body{
      background-color: #fff !important;
    }
    .not-found-section {
      padding: 100px 0;
      text-align: center;
      min-height: 60vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .not-found-section h1 {
      font-size: 120px;
      font-weight: 900;
      color: #ff931e;
      margin-bottom: 20px;
    }
    .not-found-section h2 {
      font-size: 32px;
      margin-bottom: 20px;
    }
    .not-found-section p {
      font-size: 18px;
      margin-bottom: 30px;
    }
    .btn-home {
      background-color: #ff931e;
      color: #fff;
      padding: 12px 30px;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }
    .btn-home:hover {
      background-color: #e58a1b;
      color: #fff;
    }
  </style>
</head>
<body>
    <!-- header start -->
    <?php include('includes/header.php'); ?>
    <!-- header End -->

    <section class="not-found-section">
        <div class="container">
            <h1>404</h1>
            <h2>Oops! Page Not Found</h2>
            <p>It looks like the page you are trying to reach doesn't exist,<br>
            has been moved, or is temporarily unavailable.</p>
            <a href="/uk/index.php" class="btn-home">Back to Home</a>
        </div>
    </section>

    <?php include('includes/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
