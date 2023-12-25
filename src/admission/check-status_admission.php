<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Admission Status</title>
    <meta name="description" content="Check For Admission Amkadamiyya School Jalingo">
    <meta name="keywords" content="Admission Amkadamiyya, Schools in Jalingo">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../responsive.css">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
  <header><?php include '../../includes/marquee.php' ?><?php include '../../includes/navbar.php' ?></header>
  <main>
    <div class="container py-5 px-3">
      <h3 class="header">Admission Status</h3>
      <div class="form-inline max-width">
        <input type="search" id="search_check_admission" name="" class="input w-75" placeholder="Enter your application code">
        <input type="submit"  class="submit-btn" id="admission_submit-btn">
      </div>

      <p class="para mb-5">You have no pending application, kindly apply for admission first. <a href="process_admission.php" class="">Apply For Admission</a></p>
      <p class="mt-3"></p>
    </div>
  </main>




    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/286d2a7519.js" crossorigin="anonymous"></script>
</body>
</html>