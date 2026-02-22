<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #7387a6;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background-color: #2c3e50;
            position: fixed;
            padding-top: 20px;
            color: white;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color:#1f2d3d;
        }

        .main-content {
            margin-left: 220px;
            padding: 20px;
        }

        .card {
            background: white;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        h3 {
            margin-top: 0;
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #3e596b;
            color: white;
        }

        .profile-info p {
            margin: 5px 0;
        }

        .status-paid {
            color: green;
            font-weight: bold;
        }

        .status-pending {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Student Profile</h2>
    <a href="#">Dashboard</a>
    <a href="#">Profile</a>
    <a href="#">My Courses</a>
    <a href="#">Assignments</a>
    <a href="#">Attendance</a>
    <a href="#">Routine</a>
    <a href="#">Logout</a>
</div>

<div class="main-content">

    <div class="card">
        <h3>Student Profile</h3>
        <div class="profile-info">
            <p><strong>Name:</strong> Sammy Adhikari</p>
            <p><strong>Student ID:</strong> 001</p>
            <p><strong>Program:</strong> BSc Computer Science</p>
            <p><strong>Email:</strong> Sammyadh@gmail.com</p>
        </div>
    </div>

    <div class="card">
        <h3>Enrolled Courses</h3>
        <table>
            <tr>
                <th>Course Code</th>
                <th>Course Name</th>
                <th>Instructor</th>
                <th>Credits</th>
            </tr>
            <tr>
                <td>CS201</td>
                <td>Data Structures</td>
                <td>Hari Lamichane</td>
                <td>3</td>
            </tr>
            <tr>
                <td>CS205</td>
                <td>Database Systems</td>
                <td>Sam Dhakal</td>
                <td>3</td>
            </tr>
            <tr>
                <td>MA202</td>
                <td>Discrete Mathematics</td>
                <td>Ram Bahadur</td>
                <td>4</td>
            </tr>

              <tr>
                <td>CS204</td>
                <td>Computer Science</td>
                <td>Ravi Thakur</td>
                <td>5</td>
            </tr>
            

        </table>
    </div>

    <div class="card">
        <h3>Attendance</h3>
        <table>
            <tr>
                <th>Course</th>
                <th>Total Classes</th>
                <th>Attended</th>
                <th>Percentage</th>
            </tr>
            <tr>
                <td>Data Structures</td>
                <td>20</td>
                <td>18</td>
                <td>90%</td>
            </tr>
            <tr>
                <td>Database Systems</td>
                <td>18</td>
                <td>16</td>
                <td>89%</td>
            </tr>
        </table>
    </div>


</body>
</html>