<!DOCTYPE html>
<html>
<head>
    <title>Student Admission Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            width: 95%;
            margin: auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0px 0px 10px #ccc;
        }

        h2 {
            text-align: center;
            background-color: #007bff;
            color: white;
            padding: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
        }

        input, select, textarea {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }

        .submit-btn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            float: right;
            margin-top: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <a href="view_admissions.php"><h2>Student Admission Form</h2></a>
    <form action="submit_admission.php" method="POST">
        <table>
            <tr>
                <td>Form No:</td><td><input type="text" name="form_no"></td>
                <td>Admission No*:</td><td><input type="text" name="admission_no" required></td>
            </tr>
            <tr>
                <td>Student Name:</td><td><input type="text" name="student_name"></td>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="Male"> Male
                    <input type="radio" name="gender" value="Female"> Female
                </td>
            </tr>
            <tr>
                <td>Type:</td>
                <td>
                    <input type="radio" name="type" value="Existing"> Existing
                    <input type="radio" name="type" value="New"> New
                </td>
                <td>Caste:</td>
                <td>
                    <input type="radio" name="caste" value="General"> General
                    <input type="radio" name="caste" value="OBC"> OBC
                    <input type="radio" name="caste" value="ST"> ST
                    <input type="radio" name="caste" value="SC"> SC
                </td>
            </tr>
            <tr>
                <td>Transport Facility:</td>
                <td>
                    <input type="radio" name="transport" value="Yes"> Yes
                    <input type="radio" name="transport" value="No"> No
                </td>
                <td>Transport Pickup Stoppage:</td>
                <td><input type="text" name="pickup_stoppage"></td>
            </tr>
            <tr>
                <td>Select House:</td>
                <td>
                    <input type="radio" name="house" value="Unity"> Unity
                    <input type="radio" name="house" value="Harmony"> Harmony
                    <input type="radio" name="house" value="Peace"> Peace
                    <input type="radio" name="house" value="Prosperity"> Prosperity
                </td>
                <td>Distance from Residence:</td>
                <td><input type="text" name="distance"></td>
            </tr>
            <tr>
                <td>Student Class:</td><td><input type="text" name="student_class"></td>
                <td>Nationality:</td><td><input type="text" name="nationality"></td>
            </tr>
            <tr>
                <td>Date of Birth:</td><td><input type="date" name="dob"></td>
                <td>Date of Admission:</td><td><input type="date" name="doa"></td>
            </tr>
            <tr>
                <td>Religion:</td><td><input type="text" name="religion"></td>
                <td>Siblings:</td><td><input type="text" name="siblings"></td>
            </tr>
            <tr>
                <td>Height (cm):</td><td><input type="text" name="height"></td>
                <td>Weight:</td><td><input type="text" name="weight"></td>
            </tr>
            <tr>
                <td>APAR ID:</td><td><input type="text" name="apar_id"></td>
                <td>PEN:</td><td><input type="text" name="pen"></td>
            </tr>
            <tr>
                <td>SSSMID:</td><td><input type="text" name="sssmid"></td>
                <td>Aadhar No:</td><td><input type="text" name="aadhar_no"></td>
            </tr>
            <tr>
                <td>Account No:</td><td><input type="text" name="account_no"></td>
                <td>IFSC Code:</td><td><input type="text" name="ifsc_code"></td>
            </tr>
            <tr>
                <td>Previous School:</td><td><input type="text" name="previous_school"></td>
                <td>Reason for Change:</td><td><input type="text" name="reason_change"></td>
            </tr>
            <tr>
                <td>Class Passed:</td><td><input type="text" name="class_passed"></td>
                <td>Marks Obtained:</td><td><input type="text" name="marks_obtained"></td>
            </tr>
            <tr>
                <td>Father Name:</td><td><input type="text" name="father_name"></td>
                <td>Mother Name:</td><td><input type="text" name="mother_name"></td>
            </tr>
            <tr>
                <td>Father Qualification:</td><td><input type="text" name="father_qualification"></td>
                <td>Mother Qualification:</td><td><input type="text" name="mother_qualification"></td>
            </tr>
            <tr>
                <td>Father Profession:</td><td><input type="text" name="father_profession"></td>
                <td>Mother Profession:</td><td><input type="text" name="mother_profession"></td>
            </tr>
            <tr>
                <td>Father Email:</td><td><input type="email" name="father_email"></td>
                <td>Mother Email:</td><td><input type="email" name="mother_email"></td>
            </tr>
            <tr>
                <td>Father Aadhar:</td><td><input type="text" name="father_aadhar"></td>
                <td>Mother Aadhar:</td><td><input type="text" name="mother_aadhar"></td>
            </tr>
            <tr>
                <td>Residential Address (F):</td><td><textarea name="res_address_f"></textarea></td>
                <td>Residential Address (M):</td><td><textarea name="res_address_m"></textarea></td>
            </tr>
            <tr>
                <td>Office Address (F):</td><td><textarea name="office_address_f"></textarea></td>
                <td>Office Address (M):</td><td><textarea name="office_address_m"></textarea></td>
            </tr>
            <tr>
                <td>Mobile No. (Father):</td><td><input type="text" name="mobile_father"></td>
                <td>Mobile No. (Mother):</td><td><input type="text" name="mobile_mother"></td>
            </tr>
            <tr>
                <td>Fee Concession:</td><td><input type="text" name="fee_concession"></td>
                <td>Concession Amt (%):</td><td><input type="text" name="concession_amt"></td>
            </tr>
            <tr>
                <td>If only child of parent:</td>
                <td>
                    <input type="radio" name="only_child" value="Yes"> Yes
                    <input type="radio" name="only_child" value="No"> No
                </td>
                <td>If siblings already studying:</td>
                <td>
                    <input type="radio" name="siblings_in_school" value="Yes"> Yes
                    <input type="radio" name="siblings_in_school" value="No"> No
                </td>
            </tr>
        </table>
        <input type="submit" class="submit-btn" value="Add">
    </form>
</div>

</body>
</html>
