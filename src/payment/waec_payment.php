<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay WAEC Fees</title>
    <meta name="description" content="Make Payments Amkadamiyya School Jalingo">
    <meta name="keywords" content="Admission Amkadamiyya, Schools in Jalingo">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../responsive.css">
    <link rel="stylesheet" href="../../style.css">
    <style>
        .waec-img_payment img {
        min-width: 550px;
        object-fit: cover;
        height: 450px;
        position: fixed;
        z-index: -1;
        opacity: .1;
        right: 0%;
        /* filter: blur(4px); */
        filter: drop-shadow(8px 8px 40px gray);
    }
    </style>
</head>
<body>
    <header><?php include '../../includes/marquee.php' ?><?php include '../../includes/navbar.php' ?></header>
    <main>
    <div class="container py-5 px-3">
        <div class="waec-img_payment">
            <img src="../../assets/icons/waec.png" class="img-fluid">
        </div>
        <h3 class="header">Apply For WAEC</h3>
        <p class="para">Registered and non-registered students can also apply for <b class="bold gray">WAEC</b> in our school. For non-registered students, process may vary.</p>
        <p class="para">Note that incomplete or half payments are not accepted and will be flagged inconclusive.</p>
        
        <!-- Registered Student -->
        <h5 class="header mt-5">For Registered/Internal Students</h5>
        <p class="para">Registered students are required to log in with their ID or registration number before making payments.</p>
        <p class="para">Below are the requirements for registering <b class="bold gray">WAEC</b>.</p>
        <ul>
            <li class="unordered-list">Registration Fee: <b>N40, 000.00</b></li>
            <li class="unordered-list">A headshot passport photograph.</li>
            <li class="unordered-list">First School Leaving Certificate.</li>
            <li class="unordered-list">A headshot passport photograph.</li>
            <li class="unordered-list">A headshot passport photograph.</li>
        </ul>
        
        <!-- Non-Registered Student -->
        <h5 class="header mt-5">For Non-Registered/External Students</h5>
        <p class="para"></p>
        <ul>
            <li class="unordered-list">Registration Fee: <b>N45, 000.00</b></li>
            <li class="unordered-list">A headshot passport photograph.</li>
            <li class="unordered-list">A headshot passport photograph.</li>
            <li class="unordered-list">A headshot passport photograph.</li>
            <li class="unordered-list">A headshot passport photograph.</li>
        </ul>
        <p class="para"> If you are a non-registered student, click this hyperlink for special assessment. <a href="registration_payment.html" class="">Click Here</a></p>
        <br>
        <p class="para" >Kindly fill in the form below. You will be redirected to a site where you make full payment. Only <b class="blue">Visa</b> and <b class="blue">Mastercards</b> are accepted.</p>

        <p class="para">For more enquiries please contact our Accounts Office Desk: <b class="gray">+234 80-2444-7966</b> or <b class="gray">+234 81-0852-6854</b></p>
    </div>
    <div class="container pb-5">
        <form action="" class="semi-white-shadow p-5 br-1">
            <div class="form-input">
                <label for="id" class="form-label">ID Number <span class="text-danger">*</span></label>
                <input type="text" class="input w-100" placeholder="ASJ/18/S/0000">
            </div>
            <div class="form-input">
                <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                <input type="email" class="input w-100" placeholder="Email">
            </div>
            <div class="form-input">
                <label for="nin" class="form-label">NIN Number <span class="text-danger">*</span></label>
                <input type="text" class="input w-100" placeholder="NIN" maxlength="10">
            </div>
            <div class="form-input">
                <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                <input type="text" class="input w-100" placeholder="Phone">
            </div>
            <a href="" id="" class="btn-gray w-100 d-block mt-2">Proceed</a> 
        </form>

    </div>
  </main>


    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/286d2a7519.js" crossorigin="anonymous"></script>
</body>
</html>