<?php

require 'database.php';

    if(isset($_POST["create"])){

        $lrn                  = $_POST["lrn"];
        $voucher              = $_POST["voucher"];
        $vaccinationstatus    = $_POST["vaccinationstatus"];
        $lastname             = $_POST["lastname"];
        $firstname            = $_POST["firstname"];
        $middlename           = $_POST["middlename"];
        $suffix               = $_POST["suffix"];
        $sex                  = $_POST["sex"];
        $civilstatus          = $_POST["civilstatus"];
        $citizenship          = $_POST["citizenship"];
        $birthdate            = $_POST["birthdate"];
        $age                  = $_POST["age"];
        $birthplace           = $_POST["birthplace"];
        $email                = $_POST["email"];
        $mobilenumber         = $_POST["mobilenumber"];
        $address              = $_POST["address"];
        $barangay             = $_POST["barangay"];
        $city                 = $_POST["city"];
        $postal               = $_POST["postal"];
        $province             = $_POST["province"];
        $registered           = $_POST["registered"];
        $myfile               = $_POST["myfile"];
        $course               = $_POST["course"];
        $shsname              = $_POST["shsname"];
        $shsyrEnrolled        = $_POST["shsyrEnrolled"];
        $shsyrCompleted       = $_POST["shsyrCompleted"];
        $shsawards            = $_POST["shsawards"];
        $jhsname              = $_POST["jhsname"];
        $jhsyrEnrolled        = $_POST["jhsyrEnrolled"];
        $jhsyrCompleted       = $_POST["jhsyrCompleted"];
        $jhsawards            = $_POST["jhsawards"];
        $fathersLastname      = $_POST["fathersLastname"];
        $fathersFirstname     = $_POST["fathersFirstname"];
        $fathersMiddlename    = $_POST["fathersMiddlename"];
        $fathersEducation     = $_POST["fathersEducation"];
        $fathersage           = $_POST["fathersage"];
        $fatherscivilstatus   = $_POST["fatherscivilstatus"];
        $fathersnumber        = $_POST["fathersnumber"];
        $fathersaddress       = $_POST["fathersaddress"];
        $fathersoccupation    = $_POST["fathersoccupation"];
        $fatherscompanyname   = $_POST["fatherscompanyname"];
        $fathersmonthlyIncome = $_POST["fathersmonthlyIncome"];
        $fathersregistered    = $_POST["fathersregistered"];
        $mothersLastname      = $_POST["mothersLastname"];
        $mothersFirstname     = $_POST["mothersFirstname"];
        $mothersMiddlename    = $_POST["mothersMiddlename"];
        $mothersSuffix        = $_POST["mothersSuffix"];
        $mothersEducation     = $_POST["mothersEducation"];
        $mothersAge           = $_POST["mothersAge"];
        $mothersCivilStatus   = $_POST["mothersCivilStatus"];
        $mothersMobileNumber  = $_POST["mothersMobileNumber"];
        $mothersAdress        = $_POST["mothersAdress"];
        $mothersOccupation    = $_POST["mothersOccupation"];
        $mothersCompanyname   = $_POST["mothersCompanyname"];
        $mothersMonthlyIncome = $_POST["mothersMonthlyIncome"];
        $mothersRegistered    = $_POST["mothersRegistered"];
        $contactFullname      = $_POST["contactFullname"];
        $contactNumber        = $_POST["contactNumber"];
        $contactRelationship  = $_POST["contactRelationship"];
        $contactCompleteNumber= $_POST["contactCompleteNumber"];

        $query = "INSERT INTO registrationform VALUES('$lrn', '$voucher', '$vaccinationstatus', '$lastname', '$firstname', '$middlename', '$suffix', '$sex', '$civilstatus', '$citizenship', '$birthdate', '$age', '$birthplace', '$email', '$mobilenumber', '$address', '$barangay', '$city', '$postal', '$province', '$registered', '$myfile', '$course', '$shsname', '$shsyrEnrolled', '$shsyrCompleted', '$shsawards ', '$jhsname', '$jhsyrEnrolled', '$jhsyrCompleted', '$jhsawards', '$fathersLastname', '$fathersFirstname', '$fathersMiddlename', '$fathersEducation', '$fathersage', '$fatherscivilstatus', '$fathersnumber', '$fathersaddress', '$fathersoccupation', '$fatherscompanyname', '$fathersmonthlyIncome', '$fathersregistered', '$mothersLastname', '$mothersFirstname', '$mothersMiddlename', '$mothersSuffix', '$mothersEducation', '$mothersAge', '$mothersCivilStatus', '$mothersMobileNumber', '$mothersAdress', '$mothersOccupation', '$mothersCompanyname', '$mothersMonthlyIncome', '$mothersRegistered', '$contactFullname', '$contactNumber', '$contactRelationship', '$contactCompleteNumber')";
        mysqli_query($conn, $query);
        echo "<script> alert('Data submitted'); </script>";

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesInApplication.css">
    <title>Application Form | Pamantasan ng Cabuyao</title>

<script>
    function validate(){

        var valid = false;

        if (document.getElementById("agree").checked) {

            valid = true;
        }

        else if (document.getElementById("hereby").checked) {

            valid = true;
        }

        if(valid){

            alert("Data submitted");
           
            
        }else{
            alert("Confirmation required");
            return false;

        }
    }

</script>
</head>
<style>

.privacy-statements{

    margin: 10px 15px; 

}

.privacy-statements input{

    font-size: 12px;
    color: white;
}

.create{

    margin-left: 40%;
    margin-right: 40%;
    background-color: darkgreen;
    width: 20%;
    height: 5vh;
    color: white;
    cursor: pointer;

}

#agree{

    margin-left: 1%;
    margin-top: 2%;

}

#hereby{

    margin-left: 1%;

}
    
label{

        color: white;
        padding: 2%;
}
input{

        margin-top: 2%;
        margin-bottom: 2%;
        border-radius: 3px;
        height: 3vh;
}
</style>
<body>
	<nav>
        <div class="nav-wrapper">
            <div class="logo">
                <img src="img/logo1.png" alt="">
            </div>
            <ul>
                <li><a href="home.html">HOME</a></li>
                <li><a href="#">About</a>
                    <!--Sub menu in About-->
                    <ul class="dropdown">
                        <li><a  href="history.html">History</a></li>
                        <li><a  href="chedrecognition.html">CHED Recognition</a></li>
                        <li><a  href="mvc.html">Mission, Vission & Core Values</a></li>
                        <li><a  href="pnchymn.html">PNC Hymn</a></li>
                    </ul>
                  </li>
                <li><a href="programs.html">Programs</a></li>
                 <li class="dropright"><a href="#">ADMISSION</a>
             <!--Sub menu in About-->
                    <ul class="dropdown">
                        <li><a  href="registration.html">New Students</a></li>
                        <li><a  href="oldstudent.html">Old Students</a></li>
                        
                    </ul>
                </li>
                <li>
                <a href="contact.html">Contacts</a></li>
            </ul>
        </div>
    </nav>

       <form id="appform" method="post"  onsubmit="return validate()">
        <h1 style="color: gold; font-size: 300%; padding: 2%; margin-left: 30%; margin-top: 7%;">REGISTRATION FORM</h1>
            <div class="container" style="background-color: darkgreen; width: 70%; height: 90vh; margin-left: 15%; border-radius: 5px;">
                <h2 style="text-align: center; padding: 2%; color: white;">BASIC INFORMATION</h2>
                <label for="lrn">Learning Reference Number:</label>
                <input type="text" name="lrn" required>

               <label for="voucher">Do you have voucher: </label>
                <select id="voucher" name="voucher">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select> <br>

                <label for="vaccinationstatus">Vaccination Status: </label>
                <select id="status" name="vaccinationstatus">
                    <option value="notvacc">Not Vaccinated</option>
                    <option value="fullyvacc">Fully Vaccinated</option>
                    <option value="booster">Booster Shot</option>
                </select>

                <label for="lastname">Lastname: </label>
                <input type="text" name="lastname" required> 

                <label for="firstname">Firstname: </label>
                <input type="text" name="firstname" required> <br>

                <label for="middlename">Middlename: </label>
                <input type="text" name="middlename" required>

                <label for="suffix">Suffix: </label>
                <input type="text" name="suffix">

                <label for="sex">Sex: </label>
                <select id="sex" name="sex">
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                </select>

                <label for="civilstatus">Civil Status: </label>
                <select id="status" name="civilstatus">
                    <option value="single">Single</option>
                    <option value="married">Married</option> 
                    <option value="widow">Widow</option> 
                </select> <br>

                <label for="citizenship">Citizenship: </label>
                <input type="text" name="citizenship" required>

                <label for="birthdate">Birthdate:</label>
                <input type="date" id="start" name="birthdate"
                       value="2022-07-22"
                       min="1972-01-01" max="2022-12-31">

                <label for="age">Age: </label>
                <input type="text" name="age" required> <br>

                <label for="birthplace">Birthplace: </label>
                <input type="text" name="birthplace" required>

                <label for="email">Email Address: </label>
                <input type="email" name="email" required> <br>

                 <label for="mobilenumber">Mobile Number: </label>
                <input type="text" name="mobilenumber">

                <label for="address">Address: </label>
                <input style="width: 50%; height: 4vh;" type="text" name="address" placeholder="Block/Lot/Unit/Building/Street, Subdivision/Purok/Compound" required> <br>

                <label for="barangay">Barangay: </label>
                <input type="text" name="barangay" required> 

                <label for="postal">Postal/Zip Code: </label>
                <input type="text" name="postal" required>

                <label for="city">City: </label>
                <input type="text" name="city" required> <br>

               <label for="registered">Are you a registered voter in Cabuyao: </label>
                <select id="registered" name="registered" required >
                    <option value="yes">Yes</option>
                    <option value="no">No</option> 
                </select> <br>
            </div>
            <br>
         <div class="container" style="background-color: darkgreen; width: 70%; height: 30vh; margin-left: 15%; border-radius: 5px;">
                <h2 style="text-align: center; padding: 2%; color: white;">APPLICATION FOR ADMISSION INFORMATION</h2>

                 <label style= "margin-left: 30%; font-size: 12px;" for="myfile">Upload your ID picture:</label>
                 <input type="file" id="myfile" name="myfile" required><br><br>

                 <label style="margin-left: 20%;"for="course">Course Applied For: </label>
                <select id="course" name="course" required>
                    <!--CBAA-->
                    <option value="bsa">BS Accountancy</option>
                    <option value="bsba">BS Business Administration</option> 
                    <option value="bsafm">BS Business Administration Major in Financial Management</option>
                    <option value="bsba">BS Business Administration Major in Marketing Management</option> 

                    <!--CEAS-->
                     <option value="bsede">Bachelor of Secondary Education Major in English</option>
                     <option value="bsedm">Bachelor of Secondary Education Major in Math</option>
                     <option value="bsedss">Bachelor of Secondary Education Major in Social Studies</option>
                     <option value="bsedf">Bachelor of Secondary Education Major in Filipino</option>
                     <option value="beed">Bachelor of Elementary Education</option>

                     <!--CHAS-->
                     <option value="bsn">Bachelor of Science in Nursing</option>
                      <option value="bsp">Bachelor of Science in Pyschology</option>

                      <!--CCE-->
                       <option value="bscs">Bachelor of Science in Computer Science</option>
                       <option value="bsit">Bachelor of Science in Information Technology</option>
                       <option value="bsce">Bachelor of Science in Computer Engineering</option>
                       <option value="bsee">Bachelor of Science in Electronics Engineering</option>
                       <option value="bsie">Bachelor of Science in Industrial Engineering</option>

                       <!--Graduate Programs-->
                        <option value="me">Master of Education Major in Administration & Supervision</option>
                         <option value="mba">Master of Business Administration</option>

                        <!--TechVoc-->
                        <option value="automativeservicing">Automative Servicing, NC II</option>
                         <option value="bookkeeping">Bookkeeping, NC II</option>
                         <option value="electronicproduct">Electronic Product Assembly Servicing, NC II</option>
                         <option value="driving">Driving, NC II</option>
                          <option value="housekeeping">Housekeeping, NC II</option>
                </select> <br>
                </div>
                    <br>
            <div class="container" style="background-color: darkgreen; width: 70%; height: 60vh; margin-left: 15%; border-radius: 5px;">
                <h2 style="text-align: center; padding: 2%; color: white;">HIGH SCHOOL EDUCATION INFORMATION</h2>

                <label for="shsname">Senior High School Name: </label>
                <input style="width: 20%;" type="text" name="shsname" required>

                <label for="shsyrEnrolled">Year Enrolled: </label>
                <input style="width:8%;" type="text" name="shsyrEnrolled" required>

                 <label for="shsyrCompleted">Year Completed: </label>
                <input style="width: 8%;" type="text" name="shsyrCompleted" required>

                <label style="font-size: 10px; margin-left: 20%;"for="shsawards">Please provide any recognition, citation, or awards you have received during the Senior High School (If there is any) </label> <br>
                <input style="width: 30%; margin-left: 35%;" type="text" name="shsawards"> <br>

                <label for="jhsname">Junior High School Name: </label>
                <input style="width: 20%;" type="text" name="jhsname">

                <label for="jhsyrEnrolled">Year Enrolled: </label>
                <input style="width: 8%;" type="text" name="shsyrEnrolled" required>

                 <label for="jhsyrCompleted">Year Completed: </label>
                <input style="width: 8%;" type="text" name="jhsyrCompleted" required>

                <label style="font-size: 10px; margin-left: 20%;"for="jhsawards">Please provide any recognition, citation, or awards you have received during the Junior High School (If there is any) </label> <br>
                <input style="width: 30%; margin-left: 35%;" type="text" name="jhsawards">
            </div>
            <br>
            <div class="container" style="background-color: darkgreen; width: 70%; height: 130vh; margin-left: 15%; border-radius: 5px;">
                <h2 style="text-align: center; padding: 2%; color: white;">PARENTAL INFORMATION</h2>

                <h3 style="text-align: center; padding: 2%; color: white;">FATHER'S INFORMATION</h3>

                <label for="fathersLastname">Lastname: </label>
                <input style="width: 12%;" type="text" name="fathersLastname" required>

                <label for="fathersFirstname">Firstname: </label>
                <input style="width: 12%;" type="text" name="fathersFirstname" required>

                <label for="fathersMiddlename">Middlename: </label>
                <input style="width: 10%;" type="text" name="fathersMiddlename" required>

                <label for="fathersSuffix">Suffix: </label>
                <input style="width: 7%;" type="text" name="fathersSuffix">

                <label for="fathersEducation">Educational Attaintment </label>
                <select id="fathersEducation" name="fathersEducation" required>
                    <option value="graduate">Graduate</option>
                    <option value="undergraduate">Undergraduate</option> 
                </select>

                <label for="fathersage">Age: </label>
                <input style="width: 12%;" type="text" name="fathersage" required>
            
                <label for="fatherscivilstatus">Civil Status: </label>
                <select id="fatherscivilstatus" name="fatherscivilstatus" required>
                    <option value="single">Single</option>
                    <option value="married">Married</option> 
                    <option value="widow">Widow</option> 
                </select> <br>

                <label for="fathersnumber">Mobile Number: </label>
                <input style="width: 12%;" type="text" name="fathersnumber" required>

                <label for="fathersaddress">Complete Address: </label>
                <input style="width: 40%;" type="text" name="fathersaddress" placeholder="Block/Lot/Unit/Building/Street, Subdivision/Purok/Compound" required>

                <label for="fathersoccupation">Occupation: </label>
                <input type="text" name="fathersoccupation" required>

                 <label for="fatherscompanyname">Company Name: </label>
                <input type="text" name="fatherscompanyname" required> <br>

                <label for="fathersmonthlyIncome">Monthly Income: </label>
                <input type="text" name="fathersmonthlyIncome">

                <label for="fathersregistered">Are you a registered voter in Cabuyao: </label>
                <select id="fathersregistered" name="fathersregistered" required >
                    <option value="yes">Yes</option>
                    <option value="no">No</option> 
                </select>

                <!--Mother's Information-->

                <h3 style="text-align: center; padding: 2%; color: white;">MOTHER'S INFORMATION</h3>

                <label for="mothersLastname">Lastname: </label>
                <input style="width: 12%;" type="text" name="mothersLastname" required>

                <label for="mothersFirstname">Firstname: </label>
                <input style="width: 12%;" type="text" name="mothersFirstname" required>

                <label for="mothersMiddlename">Middlename: </label>
                <input style="width: 10%;" type="text" name="mothersMiddlename" required>

                <label for="mothersSuffix">Suffix: </label>
                <input style="width: 7%;" type="text" name="mothersSuffix">

                <label for="mothersEducation">Educational Attaintment </label>
                <select id="mothersEducation" name="mothersEducation" required>
                    <option value="graduate">Graduate</option>
                    <option value="undergraduate">Undergraduate</option> 
                </select>

                <label for="mothersAge">Age: </label>
                <input style="width: 12%;" type="text" name="mothersAge" required>
            
                <label for="mothersCivilStatus">Civil Status: </label>
                <select id="mothersCivilStatus" name="mothersCivilStatus" required>
                    <option value="single">Single</option>
                    <option value="married">Married</option> 
                    <option value="widow">Widow</option> 
                </select> <br>

                <label for="mothersMobileNumber">Mobile Number: </label>
                <input style="width: 12%;" type="text" name="mothersMobileNumber" required>

                <label for="mothersAdress">Complete Address: </label>
                <input style="width: 40%;" type="text" name="mothersAdress" placeholder="Block/Lot/Unit/Building/Street, Subdivision/Purok/Compound" required>

                <label for="mothersOccupation">Occupation: </label>
                <input type="text" name="mothersOccupation" required>

                 <label for="mothersCompanyname">Company Name: </label>
                <input type="text" name="mothersCompanyname" required> <br>

                <label for="mothersMonthlyIncome">Monthly Income: </label>
                <input type="text" name="mothersMonthlyIncome">

                <label for="mothersRegistered">Are you a registered voter in Cabuyao: </label>
                <select id="mothersRegistered" name="mothersRegistered" required >
                    <option value="yes">Yes</option>
                    <option value="no">No</option> 
                </select>
            </div> <br>

                <div class="container" style="background-color: darkgreen; width: 70%; height: 80vh; margin-left: 15%; border-radius: 5px;">
                <h2 style="text-align: center; padding: 2%; color: white;">CONTACT IN CASE OF EMERGENCY</h2>

                <label for="contactFullname">Full Name: </label>
                <input type="text" name="contactFullname" required>

                <label for="contactNumber">Contact Number: </label>
                <input type="text" name="contactNumber" required>

                <label for="contactRelationship">Relationship: </label>
                <input style ="width: 10%;" type="text" name="contactRelationship" required>

                <label for="contactCompleteNumber">Complete Address: </label>
                <input style="width: 40%;" type="text" name="contactCompleteNumber" placeholder="Block/Lot/Unit/Building/Street, Subdivision/Purok/Compound" required>

                <div style="color: white; font-size: 15px;" class="privacy-statements">
                <form name="myform"> 
                <input type="checkbox" id="agree" value="Certify">  I certify that the information I have provided are true to the best of my knowledge without any malice or any intention <p style="margin-left: 2%;"> to commit acts of misrepresentation  </p><br>
                 <input type="checkbox" id="hereby" value="Aware"> I am aware that any false, misleading, or deceptive information provided may lead to withdrawal, expulsion, or any <p style="margin-left: 2%; color: white;"> disiplinary action which may be dealth with by the school's authorities </p><br>
                </form>
            </div>

             <button style="background-color: white; width: 20%; height: 3vh; border-radius: 4px; margin-left: 20%; cursor: pointer;"><a style="text-decoration: none; color: black;" href="registration.html" >BACK</a></button>

              <input style="background-color: white; width: 20%; margin-left: 20%; cursor: pointer;" type="submit" name="create" value="SUBMIT"> 

              <button type="button" style="background-color: white; width: 25%; height: 3vh; border-radius: 4px; margin-left: 38%;margin-top: 1%; cursor: pointer;"> <a style ="text-decoration: none; color: black;"href="appfile.html">GO TO DOWNLOAD THE FILE </a></button>
            </div>
       </form>
</body>
</html>

