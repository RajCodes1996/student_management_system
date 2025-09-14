<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appointment Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: white;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 400px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        label {
            font-weight: 500;
            display: block;
            margin-top: 15px;
            color: #444;
        }

        input[type="text"],
        input[type="date"],
        input[type="time"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            transition: 0.3s;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        input[type="time"]:focus,
        textarea:focus {
            border-color: #4e9af1;
            outline: none;
            box-shadow: 0 0 5px rgba(78, 154, 241, 0.3);
        }

        .gender-options {
            margin-top: 6px;
        }

        .gender-options input {
            margin-right: 5px;
        }

        .gender-options label {
            display: inline;
            margin-right: 10px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #4e9af1;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            margin-top: 25px;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #367dde;
        }
    </style>
</head>
<body>
    <div class="form-container">
       <a href="view_appointments.php"><h2>Appointment Form</h2></a> 
        <form action="insert_appointment.php" method="post">
            <label for="visitor_name">Visitor Name</label>
            <input type="text" name="visitor_name" required>

            <label>Gender</label>
            <div class="gender-options">
                <label><input type="radio" name="gender" value="Male" required> Male</label>
                <label><input type="radio" name="gender" value="Female"> Female</label>
            </div>

            <label for="organization_name">Organization Name</label>
            <input type="text" name="organization_name" required>

            <label for="meeting_purpose">Meeting Purpose</label>
            <input type="text" name="meeting_purpose" required>

            <label for="meet_with">Meet With</label>
            <input type="text" name="meet_with">

            <label for="date">Date</label>
            <input type="date" name="date" required>

            <label for="time">Time</label>
            <input type="time" name="time" required>

            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" required>

            <label for="address">Address</label>
            <textarea name="address" rows="3"></textarea>

            <label for="city">City</label>
            <input type="text" name="city" required>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>