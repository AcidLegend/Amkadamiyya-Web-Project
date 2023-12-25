<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply For Admission | Amkadamiyya School</title>
    <meta name="description" content="Apply For Admission Amkadamiyya School Jalingo">
    <meta name="keywords" content="Admission Amkadamiyya, Schools in Jalingo">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../responsive.css">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header><?php include '../../includes/marquee.php' ?><?php include '../../includes/navbar.php' ?></header>
    <main class="py-5 px-3">
    <div class="container">
        <h3 class="header">Enrol your kid Now.</h3>
        <p class="para">Also be advised that all details inputed are saved in the database and can literally be permanent. Take note of letter casing, typo, or other invalid data. Please review all inputs before submitting.</p>
        <div class="my-5"></div>
        <p class="para black bold">Section A: Applicants Data</p>
        <form action="" method="">
            <div class="form_admission semi-white-shadow p-5 br-1">
            <div class="row">
                <!-- FIRST NAME -->
                <div class="col-12 col-md-6">
                    <div class="form-input">
                        <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                        <input type="text" class="input w-100" placeholder="First Name">
                    </div>
                </div>
                <!-- MIDDLE NAME -->
                <div class="col-12 col-md-6">
                    <div class="form-input">
                        <label for="middleName" class="form-label">Middle Name</label>
                        <input type="text" class="input w-100" placeholder="Middle Name">
                    </div>
                </div>
                <!-- LAST NAME -->
                <div class="col-12 col-md-6">
                    <div class="form-input">
                        <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                        <input type="text" class="input w-100" placeholder="Last Name">
                    </div>
                </div>
                <!-- DATE OF BIRTH -->
                <div class="col-12 col-md-6">
                    <div class="form-input">
                        <label for="DOB" class="form-label">Date of Birth <span class="text-danger">*</span></label>
                        <input type="date" class="input w-100" placeholder="DOB">
                    </div>
                </div>
                <!-- NATIONALITY -->
                <div class="col-12 col-md-6">
                    <div class="form-input">
                        <label for="nationality" class="form-label">Nationality <span class="text-danger">*</span></label>
                        <input type="text" class="input w-100" placeholder="Nationality">
                    </div>
                </div>
                <!-- STATE OF ORIGIN -->
                <div class="col-12 col-md-6">
                    <div class="form-input">
                        <label for="state" class="form-label">State of Origin <span class="text-danger">*</span></label>
                        <select onchange="toggleLGA(this);" name="state" id="state" class="form-select form-select-lg fs-small">
							<option value="" selected="selected">State</option>
							<option value="Abia">Abia</option>
							<option value="Adamawa">Adamawa</option>
							<option value="AkwaIbom">AkwaIbom</option>
							<option value="Anambra">Anambra</option>
							<option value="Bauchi">Bauchi</option>
							<option value="Bayelsa">Bayelsa</option>
							<option value="Benue">Benue</option>
							<option value="Borno">Borno</option>
							<option value="Cross River">Cross River</option>
							<option value="Delta">Delta</option>
							<option value="Ebonyi">Ebonyi</option>
							<option value="Edo">Edo</option>
							<option value="Ekiti">Ekiti</option>
							<option value="Enugu">Enugu</option>
							<option value="FCT">FCT</option>
							<option value="Gombe">Gombe</option>
							<option value="Imo">Imo</option>
							<option value="Jigawa">Jigawa</option>
							<option value="Kaduna">Kaduna</option>
							<option value="Kano">Kano</option>
							<option value="Katsina">Katsina</option>
							<option value="Kebbi">Kebbi</option>
							<option value="Kogi">Kogi</option>
							<option value="Kwara">Kwara</option>
							<option value="Lagos">Lagos</option>
							<option value="Nasarawa">Nasarawa</option>
							<option value="Niger">Niger</option>
							<option value="Ogun">Ogun</option>
							<option value="Ondo">Ondo</option>
							<option value="Osun">Osun</option>
							<option value="Oyo">Oyo</option>
							<option value="Plateau">Plateau</option>
							<option value="Rivers">Rivers</option>
							<option value="Sokoto">Sokoto</option>
							<option value="Taraba">Taraba</option>
							<option value="Yobe">Yobe</option>
							<option value="Zamfara">Zamafara</option>
						</select>
                    </div>
                </div>
                <!-- LOCAL GOVERNMENT AREA -->
                <div class="col-12 col-md-6">
                    <div class="form-input">
                        <label for="lga" class="form-label">Local Government Area <span class="text-danger">*</span></label>
                        <select name="lga" id="lga" class="form-select form-select-lg fs-small select-lga" required>
                            <option value="">LGA</option>
						</select>
                    </div>
                </div>
                <!-- GENDER -->
                <div class="col-12 col-md-6">
                    <div class="form-input">
                    <label for="" class="form-label">Gender <span class="text-danger">*</span></label>
                        <select class="form-select form-select-lg fs-small" name="" id="">
                            <option selected>Male</option>
                            <option value="">Female</option>
                        </select>
                    </div>
                </div>
                <!-- UPLOAD A PHOTO -->
                <div class="col-12 col-md-6">
                    <div class="form-input">
                        <label for="photo" class="form-label">Upload a photo <span class="text-danger">*</span></label>
                        <input type="file" class="input w-100 cursor-pointer">
                    </div>
                </div>
                <!-- HEALTH STATUS -->
                <div class="col-12 col-md-6">
                    <div class="form-input">
                        <label for="h-status" class="form-label">Health Status <span class="text-danger">*</span></label><br>
                        <select class="form-select form-select-lg fs-small" name="" id="">
                            <option selected>Disability</option>
                            <option value="">Sickle</option>
                            <option value="">Mental Impairement</option>
                            <option value="">None</option>
                        </select>
                    </div>
                </div>
            </div>
            </div>

            <!-- MARGIN BETWEEN -->
            <div class="mt-5">
                <p class="para black bold">Section B: Parent or Guardian Data</p>
            </div>

            <!-- PARENT OR GUARDIAN DATA -->
            <div class="form_admission semi-white-shadow p-5 br-1">
            <div class="row">
                <!-- PARENTS FIRST NAME -->
                <div class="col-12 col-md-6">
                    <div class="form-input">
                        <label for="p-firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                        <input type="text" class="input w-100" placeholder="First Name">
                    </div>
                </div>
                <!-- PARENTS LAST NAME -->
                <div class="col-12 col-md-6">
                    <div class="form-input">
                        <label for="p-lastName" class="form-label">Last Name</label>
                        <input type="text" class="input w-100" placeholder="Last Name">
                    </div>
                </div>
                <!-- PARENTS RESIDENTIAL ADDRESS -->
                <div class="col-12 col-md-6">
                    <div class="form-input">
                        <label for="address" class="form-label">Home or Residential Address <span class="text-danger">*</span></label>
                        <input type="text" class="input w-100" placeholder="Residential Address">
                    </div>
                </div>
                <!-- PARENTS OCCUPATION -->
                <div class="col-12 col-md-6">
                    <div class="form-input">
                        <label for="occupation" class="form-label">Occupation <span class="text-danger">*</span></label>
                        <input type="text" class="input w-100" placeholder="Parent Occupation">
                    </div>
                </div>
                <!-- CONTEMPORARY SCHOOL -->
                <div class="col-12 col-md-6">
                    <div class="form-input">
                        <label for="h-address" class="form-label">Contemporary School <span class="text-danger">*</span></label>
                        <input type="text" class="input w-100" placeholder="School Transferred from">
                    </div>
                </div>
                <!-- PARENT EMAIL ADDRESS -->
                <div class="col-12 col-md-6">
                    <div class="form-input">
                        <label for="p-email" class="form-label">Parent's Email Address <span class="text-danger">*</span></label>
                        <input type="email" class="input w-100" placeholder="Email Address">
                    </div>
                </div>
                <!-- PARENT NUMBER -->
                <div class="col-12 col-md-6">
                    <div class="form-input">
                        <label for="p-phone1" class="form-label">Parent's Phone Number <span class="text-danger">*</span></label>
                        <input type="number" class="input w-100" placeholder="Phone Number">
                    </div>
                </div>
                <!-- PARENT ALTERNATE NUMBER -->
                <div class="col-12 col-md-6">
                    <div class="form-input">
                        <label for="p-phone2" class="form-label">Alternate Phone Number <span class="text-danger">*</span></label>
                        <input type="number" class="input w-100" placeholder="Phone Number">
                    </div>
                </div>
                <!-- APPLICANT'S ENROLMENT -->
                <div class="col-12 col-md-6">
                    <div class="form-input">
                        <label for="h-status" class="form-label">Applicant's Enrolling Class <span class="text-danger">*</span></label><br>
                        <select name="enrol-class" id="" class="form-select form-select-lg fs-small">
                            <option value="">Pre-Nursery</option>
                            <option value="" selected>Nursery 1</option>
                            <option value="">Nursery 2</option>
                            <option value="">Nursery 3</option>
                            <option value="">Primary 1</option>
                            <option value="">Primary 2</option>
                            <option value="">Primary 3</option>
                            <option value="">Primary 4</option>
                            <option value="">Primary 5</option>
                            <option value="">JSS 1</option>
                            <option value="">JSS 2</option>
                            <option value="">JSS 3</option>
                            <option value="">SSS 1</option>
                            <option value="">SSS 2</option>
                        </select>
                    </div>
                </div>
                <!-- REASON FOR TRANSFER -->
                <div class="col-12 col-md-6">
                    <div class="form-input">
                        <label for="h-status" class="form-label">Reason for Transfer <span class="text-danger">*</span></label><br>
                        <select class="form-select form-select-lg fs-small" name="" id="">
                            <option selected>New Ward</option>
                            <option selected>Expelled</option>
                            <option value="">Migration</option>
                            <option value="">Unsatisfied</option>
                            <option value="">Complicated</option>
                            <option value="">Undisclosed</option>
                        </select>
                    </div>
                </div>
                <!-- ATTESTATION -->
                <div class="attestation-container my-5">
                    <h4 class="header">Attestation</h4>
                    <div class="py-3">
                        <input type="checkbox" class="styled-checkbox shadow" id="">
                        <label for="attestation">&nbsp;I hereby attest and confirm that all the above information is correct.</label>
                    </div>
                </div>
                <!-- SUBMIT BUTTON -->
                <input type="submit"  class="w-100 submit-btn" id="admission_submit-btn"> 
            </div>
            </div>
        </form>
        <!-- MARGIN BETWEEN -->
        <div class="mt-5"></div>
        <div class="container w-50 m-auto">
            <small class="d-block text-center">&copy; Coypright 2018 -<?php echo date('Y');?>. All rights reserved.</small>
        </div>
    </div>
  </main>




    <script src="../../helpers/lga.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/286d2a7519.js" crossorigin="anonymous"></script>
</body>
</html>