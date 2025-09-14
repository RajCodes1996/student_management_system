<!DOCTYPE html>
<html>
<head>
    <title>Student Enquiry Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0eeee;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            margin: auto;
            background-color: white;
            padding: 20px;
        }

        .header {
            background-color: #006837;
            color: white;
            padding: 10px 20px;
            font-size: 24px;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .header img {
            height: 40px;
            margin-right: 10px;
        }

        h2 {
            text-align: center;
            background-color: #006837;
            color: white;
            padding: 10px;
            margin-top: 0;
        }

        fieldset {
            border: none;
            margin-bottom: 20px;
        }

        legend {
            background-color: #006837;
            color: white;
            padding: 8px 12px;
            font-weight: bold;
        }

        .form-table {
            width: 100%;
            border-collapse: collapse;
        }

        .form-table td {
            padding: 8px;
        }

        input[type="text"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        .submit-btn {
            background-color: #006837;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            float: right;
            margin-top: 27px;
        }

        .checkbox-label {
            margin-top: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>

    <div class="header">
        <img src="https://cdn-icons-png.flaticon.com/512/854/854878.png" alt="Phone Icon">
        FRONT DESK
    </div>

    <div class="container">
        <a href="view_enquiries.php"><h2>STUDENT ENQUIRY FORM</h2></a>

        <form method="POST" action="submit_enquiry.php">

            <fieldset>
                <legend>Student Detail</legend>
                <table class="form-table">
                    <tr>
                        <td>Student Name*:</td>
                        <td><input type="text" name="student_name" required></td>
                        <td>Date of Birth*:</td>
                        <td><input type="date" name="dob" required></td>
                        <td>Class*:</td>
                        <td>
                            <select name="class" required>
                                <option value="">Select Class</option>
                                <option>Nursery</option>
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Caste*:</td>
                        <td colspan="2">
                            <input type="radio" name="caste" value="General" required>General
                            <input type="radio" name="caste" value="OBC">OBC
                            <input type="radio" name="caste" value="ST">ST
                            <input type="radio" name="caste" value="SC">SC
                        </td>
                        <td>Gender*:</td>
                        <td colspan="2">
                            <input type="radio" name="gender" value="Male" required>Male
                            <input type="radio" name="gender" value="Female">Female
                        </td>
                    </tr>
                    <tr>
                        <td>Father's Name*:</td>
                        <td><input type="text" name="father_name" required></td>
                        <td>Mother's Name*:</td>
                        <td><input type="text" name="mother_name" required></td>
                        <td>Father Occupation:</td>
                        <td><input type="text" name="father_occupation"></td>
                    </tr>
                    <tr>
                        <td>Mother Occupation:</td>
                        <td><input type="text" name="mother_occupation"></td>
                        <td>Primary Contact No.*:</td>
                        <td><input type="text" name="primary_contact" required></td>
                        <td>Alternate Contact No.*:</td>
                        <td><input type="text" name="alternate_contact"></td>
                    </tr>
                    <tr>
                        <td>Previous Class:</td>
                        <td><input type="text" name="previous_class"></td>
                        <td>Previous School*:</td>
                        <td colspan="3"><input type="text" name="previous_school" required></td>
                    </tr>
                </table>
            </fieldset>

            <fieldset>
                <legend>Correspondence Address</legend>
                <table class="form-table">
                    <tr>
                        <td>Address*:</td>
                        <td colspan="3"><textarea name="address" rows="2" required></textarea></td>
                    </tr>
                    <tr>
                        <td>Locality/Town:</td>
                        <td><input type="text" name="locality"></td>
                        <td>City*:</td>
                        <td><input type="text" name="city" required></td>
                    </tr>
                    <tr>
                        <td>State*:</td>
                        <td><input type="text" name="state" required></td>
                        <td>Pin Code*:</td>
                        <td><input type="text" name="pin_code" required></td>
                    </tr>
                </table>
                <label class="checkbox-label">
                    <input type="checkbox" name="agree" value="1" required> I Agree
                </label>
            </fieldset>

            <input type="submit" class="submit-btn" value="Submit Enquiry">
        </form>
    </div>

</body>
</html>
