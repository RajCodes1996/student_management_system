<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "school_erp";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM student_details ORDER BY id ASC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Students Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: green;
            text-align: center;
        }

        .top-bar {
            margin: 20px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .total {
            font-size: 18px;
            font-weight: bold;
        }

        .search-box {
            display: flex;
            align-items: center;
        }

        .search-box input {
            padding: 6px;
            width: 200px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background: #fff;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background: #0e9d57;
            color: white;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        tr:hover {
            background-color: #e6f2ff;
        }

        .actions a {
            margin: 0 5px;
            text-decoration: none;
            color: brown;
            font-weight: bold;
        }

        .actions a:hover {
            text-decoration: underline;
        }

        .highlight {
            background-color: #fff9c4 !important;
        }

        .footer{
           position: absolute;
           top:750px;
           left:200px;
           font-style: italic;
 }
    </style>
    <script>
        function searchStudent() {
            let input = document.getElementById("searchInput").value.toUpperCase();
            let table = document.getElementById("studentsTable");
            let tr = table.getElementsByTagName("tr");

            for (let i = 1; i < tr.length; i++) {
                tr[i].classList.remove("highlight");
                let td = tr[i].getElementsByTagName("td");
                let show = false;
                for (let j = 0; j < td.length; j++) {
                    if (td[j] && td[j].innerText.toUpperCase().includes(input)) {
                        show = true;
                    }
                }
                tr[i].style.display = show ? "" : "none";
                if (show) tr[i].classList.add("highlight");
            }
        }
    </script>
</head>
<body>

    <a href="student_details.php"><i><h2>STUDENTS DETAILS</h2></i></a>

    <div class="top-bar">
        <div class="total">
            Total Students: <?php echo mysqli_num_rows($result); ?>
        </div>
        <div class="search-box">
            Search: <input type="text" id="searchInput" onkeyup="searchStudent()" placeholder="Enter name, class...">
        </div>
    </div>

    <table id="studentsTable">
        <tr>
            <th>No.</th>
            <th>Scholar No.</th>
            <th>Name</th>
            <th>Father</th>
            <th>Class</th>
            <th>Mobile</th>
            <th>DOB</th>
            <th>Action</th>
        </tr>

        <?php
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$i}</td>
                <td>{$row['scholar_no']}</td>
                <td>{$row['name']}</td>
                <td>{$row['father_name']}</td>
                <td>{$row['class']}</td>
                <td>{$row['mobile']}</td>
                <td>{$row['dob']}</td>
                <td class='actions'>
                    <a href='#'>View</a> ||
                    <a href='#'>Delete</a> ||
                    <a href='#'>Inactive</a> ||
                    <a href='#'>TC</a>
                </td>
            </tr>";
            $i++;
        }
        mysqli_close($conn);
        ?>
    </table>

</body>
</html>
