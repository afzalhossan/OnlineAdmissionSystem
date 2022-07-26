<?php
include 'connect.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="style.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>ADMISSION</title>
</head>

<body>
    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-lightbulb"></i> AZ UNIVERSITY </a>

        <nav class="navbar">
            <div id="close-navbar" class="fas fa-times"></div>
            <a href="home.html">Home</a>
            <a href="home.html#about_us">About</a>
            <a href="registration.php">Apply</a>
            <a href="home.html#courses">courses</a>
            <a href="home.html#contact">contact</a>
        </nav>



    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 well">
                <div class="panel panel-info">
                    <div class="panel-body">
                        <form method="post" action="connect.php" class="form-horizontal row">
                            <div class="form-group">
                                <h1 class="text-center">Student Basic Information</h1>
                                <label for="applicant_name" class="control-label col-sm-3">Student's Name :</label>
                                <div class="col-sm-7">
                                    <input type="text" name="applicant_name" id="applicant_name" class="form-control">
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="department" class="control-label col-sm-3">Select Programme: </label>
                                <div class="col-sm-4">
                                    <select type="text" name="department" id="department" class="form-control">
                                        <option value="" disabled selected>Select</option>
                                        <option>B.Sc. Engg. in CSE</option>
                                        <option>B.Sc. Engg. in EEE</option>
                                        <option>Bachelor of Business Administration</option>
                                        <option>B.A. (Hons.) in English</option>
                                        <option>LL.B. (Hons.)</option>
                                        <option>BSS in Economics</option>
                                    </select>
                                </div>
                            </div>



                            <div class="form-group">
                                <h1 class="text-center">Student Personal Information</h1>
                            </div>


                            <div class="form-group">
                                <label for="father_name" class="control-label col-sm-3">Father's Name :</label>
                                <div class="col-sm-7">
                                    <input type="text" name="father_name" id="father_name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="mother_name" class="control-label col-sm-3">Mother's Name :</label>
                                <div class="col-sm-7">
                                    <input type="text" name="mother_name" id="mother_name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="date_of_birth" class="control-label col-sm-3">Date of Birth :</label>
                                <div class="col-sm-2">
                                    <input type="date" name="date_of_birth" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="mobile">Mobile :</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">+880</span>
                                        <input type="text" class="form-control" name="mobile" maxlength="10">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="gender" class="control-label col-sm-3">Gender :</label>
                                <div class="col-sm-2">
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="" selected disabled>Select</option>
                                        <option value="MALE">MALE</option>
                                        <option value="FEMALE">FEMALE</option>
                                    </select>
                                </div>
                                <label for="religion" class="control-label col-sm-2">Religion :</label>
                                <div class="col-sm-3">
                                    <select name="religion" id="religion" class="form-control">
                                        <option value="" disabled selected>Select</option>
                                        <option value="ISLAM">ISLAM</option>
                                        <option value="HINDUISM">HINDUISM</option>
                                        <option value="CHRISTIANITY">CHRISTIANITY</option>
                                        <option value="BUDDHISM">BUDDHISM</option>
                                        <option value="OTHER">OTHER</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="blood_group" class="control-label col-sm-3">Blood Group :</label>
                                <div class="col-sm-2">
                                    <select name="blood_group" id="blood_group" class="form-control">
                                        <option value="">Select</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                </div>
                                <label for="nationality" class="control-label col-sm-2">Nationality :</label>
                                <div class="col-sm-3">
                                    <select name="nationality" id="nationality" class="form-control">
                                        <option value="">Select</option>
                                        <option value="BANGLADESHI" selected>Bangladeshi</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="national_id" class="control-label col-sm-3">National ID :</label>
                                <div class="col-sm-6">
                                    <input type="text" name="national_id" id="national_id" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="control-label col-sm-3">Email :</label>
                                <div class="col-sm-6">
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="present_address" class="control-label col-sm-3">Present Address :</label>
                                <div class="col-sm-7">
                                    <textarea name="present_address" rows="3" id="present_address" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="permanent_address" class="control-label col-sm-3">Permanent Address :</label>
                                <div class="col-sm-7">
                                    <textarea name="permanent_address" id="permanent_address" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <hr>
                            <fieldset>
                                <h1 class="text-center">Academic Qualifications</h1>
                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h5 class="panel-title text-center">SSC or Equivalent Level*</h5>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label for="ssc_exam_type" class="control-label col-sm-4">Examination :</label>
                                                    <div class="col-sm-8">
                                                        <select name="ssc_exam_type" id="ssc_exam_type" class="form-control">
                                                            <option selected disabled value="">Select One</option>
                                                            <option value="SSC">S.S.C</option>
                                                            <option value="Dakhil">Dakhil</option>
                                                            <option value="SSC Vocational">S.S.C Vocational</option>
                                                            <option value="O Level/Cambridge">O Level/Cambridge</option>
                                                            <option value="SSC Equivalent">S.S.C Equivalent</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="ssc_board" class="control-label col-sm-4">Board :</label>
                                                    <div class="col-sm-8">
                                                        <select name="ssc_board" id="ssc_board" class="form-control">
                                                            <option selected disabled value="">Select One</option>
                                                            <option value="DHAKA">Dhaka</option>
                                                            <option value="COMILLA">Comilla</option>
                                                            <option value="RAJSHAHI">Rajshahi</option>
                                                            <option value="JESSORE">Jessore</option>
                                                            <option value="CHITTAGONG">Chittagong</option>
                                                            <option value="BARISAL">Barisal</option>
                                                            <option value="SYLHET">Sylhet</option>
                                                            <option value="DINAJPUR">Dinajpur</option>
                                                            <option value="MADRASAH">Madrasah</option>
                                                            <option value="OTHERS">Others</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="ssc_roll_no" class="control-label col-sm-4">Roll No :</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="ssc_roll_no" id="ssc_roll_no" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-4" for="ssc_result">Result :</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">GPA</span>
                                                            <input type="number" class="form-control" name="ssc_result" id="ssc_result" step="0.01" min="1" max="5">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="ssc_group" class="control-label col-sm-4">Group :</label>
                                                    <div class="col-sm-8">
                                                        <select name="ssc_group" id="ssc_group" class="form-control">
                                                            <option selected disabled value="">Select One</option>
                                                            <option value="SCIENCE">Science</option>
                                                            <option value="HUMANITIES">Humanities</option>
                                                            <option value="BUSINESS STUDIES">Business Studies</option>
                                                            <option value="OTHERS">Others</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="ssc_pass_year" class="control-label col-sm-4">Passing Year :</label>
                                                    <div class="col-sm-8">
                                                        <select name="ssc_pass_year" id="ssc_pass_year" class="form-control">
                                                            <option selected disabled value="">Select One</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2020">2020</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h5 class="panel-title text-center">HSC or Equivalent Level*</h5>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label for="hsc_exam_type" class="control-label col-sm-4">Examination :</label>
                                                    <div class="col-sm-8">
                                                        <select name="hsc_exam_type" id="hsc_exam_type" class="form-control">
                                                            <option selected disabled value="">Select One</option>
                                                            <option value="HSC">H.S.C</option>
                                                            <option value="ALIM">Alim</option>
                                                            <option value="BUSINESS MANAGEMENT">Business Management</option>
                                                            <option value="DIPLOMA IN ENGINEERING/AGRICULTURE">Diploma in Engineering/Agriculture</option>
                                                            <option value="A LEVEL/SR. CAMBRIDGE">A Level/Sr. Cambridge</option>
                                                            <option value="HSC EQUIVALENT">H.S.C Equivalent</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="hsc_board" class="control-label col-sm-4">Board :</label>
                                                    <div class="col-sm-8">
                                                        <select name="hsc_board" id="hsc_board" class="form-control">
                                                            <option selected disabled value="">Select One</option>
                                                            <option value="Dhaka">Dhaka</option>
                                                            <option value="COMILLA">Comilla</option>
                                                            <option value="RAJSHAHI">Rajshahi</option>
                                                            <option value="JESSORE">Jessore</option>
                                                            <option value="CHITTAGONG">Chittagong</option>
                                                            <option value="BARISAL">Barisal</option>
                                                            <option value="SYLHET">Sylhet</option>
                                                            <option value="DINAJPUR">Dinajpur</option>
                                                            <option value="MADRASAH">Madrasah</option>
                                                            <option value="OTHERS">Others</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="hsc_roll_no" class="control-label col-sm-4">Roll No :</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="hsc_roll_no" id="ssc_roll_no" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-4" for="hsc_result">Result :</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">GPA</span>
                                                            <input type="number" name="hsc_result" class="form-control" id="hsc_result" step="0.01" min="1" max="5">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="hsc_group" class="control-label col-sm-4">Group :</label>
                                                    <div class="col-sm-8">
                                                        <select name="hsc_group" id="hsc_group" class="form-control">
                                                            <option selected disabled value="">Select One</option>
                                                            <option value="SCIENCE">Science</option>
                                                            <option value="HUMANITIES">Humanities</option>
                                                            <option value="BUSINESS STUDIES">Business Studies</option>
                                                            <option value="OTHERS">Others</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="hsc_pass_year" class="control-label col-sm-4">Passing Year :</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" name="hsc_pass_year" id="hsc_pass_year">
                                                            <option selected disabled value="">Select One</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2020">2020</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </fieldset>
                    </div>

                    <div class="row">
                        <input type="submit" class="btn btn-success btn-lg btn-block" name="submit">

                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>

    </div>

</body>

</html>