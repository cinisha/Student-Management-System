<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teacher Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color:  #7387a6;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background-color: #1f2d3d;
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
            background-color: #2e4053;
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
            color: #1f2d3d;
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

        .btn {
            padding: 6px 12px;
            background-color: #27ae60;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-danger {
            background-color: #c0392b;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Teacher Profile</h2>
    <a href="#">Dashboard</a>
    <a href="#">Profile</a>
    <a href="#">My Classes</a>
    <a href="#">Students</a>
    <a href="#">Marks</a>
    <a href="#">Logout</a>
</div>

<div class="main-content">

    <div class="card">
        <h3>Teacher Profile</h3>
        <p><strong>Name:</strong>Ravi Thakur</p>
        <p><strong>Employee ID:</strong> 201</p>
        <p><strong>Department:</strong> Computer Science</p>
        <p><strong>Email:</strong> ravithakur@gmail.com</p>
        <p><strong>Phone:</strong> 9800243567</p>
    </div>

    <div class="card">
        <h3>Assigned Classes</h3>
        <table>
            <tr>
                <th>Course Code</th>
                <th>Course Name</th>
                <th>Semester</th>
                <th>Students</th>
            </tr>
            <tr>
                <td>CS201</td>
                <td>Data Structures</td>
                <td>Semester 1</td>
                <td>45</td>
            </tr>
            <tr>
                <td>CS205</td>
                <td>Database Systems</td>
                <td>Semester 1</td>
                <td>40</td>
            </tr>
        </table>
    </div>


    <div class="card">
        <h3>Attendance Overview</h3>
        <table>
            <tr>
                <th>Course</th>
                <th>Total Students</th>
                <th>Present Today</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>Data Structures</td>
                <td>45</td>
                <td>42</td>
                <td><button class="btn">Mark Attendance</button></td>
            </tr>
            <tr>
                <td>Database Systems</td>
                <td>40</td>
                <td>38</td>
                <td><button class="btn">Mark Attendance</button></td>
            </tr>
        </table>
    </div>

</div>

</body>
</html>