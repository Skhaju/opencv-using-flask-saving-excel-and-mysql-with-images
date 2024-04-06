<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtered Data</title>
    <style>
       
       body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px; /* Increased padding for better aesthetics */
            text-align: left;
        }

        th {
            background-color: #184274; /* Cool blue color for headers */
            color: white; /* White text for better contrast */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        img {
            max-width: 200px; /* Adjusted image size for better display */
            height: auto;
        }
        button {
            padding: 15px 40px;
            background-color: #28a745;
            color: white;
            border: none;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
            animation: button-appear 0.5s ease forwards;
        }

        button:hover {
            background-color: #38c959;
        }
    </style>
</head>
<body>
    <button onclick="goBack()">&#8592;&nbsp;Back</button>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
<?php
    // Establish MySQL connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "face";

    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get start and end dates from the form submission
    $start_date = $_GET['start_date'];
    $end_date = $_GET['end_date'];

 // SQL query to retrieve data within the specified date range
 $sql = "SELECT * FROM your_table WHERE Date BETWEEN '$start_date' AND '$end_date'";
 $result = $conn->query($sql);
 

 // Display the fetched data
 if ($result->num_rows > 0) {
     echo "<table>
     <tr>
     <th>Date</th>
     <th>Time</th>
     <th>Image_Path</th>
     <th>Image</th>
     </tr>";
     
     while($row = $result->fetch_assoc()) {
         echo "<tr>
         <td>".$row["Date"]."</td>
         <td>".$row["Time"]."</td>
         <td>".$row["image_path"]."</td>
         <td><img src='data:image/jpeg;base64,".base64_encode($row["image_blob"])."' alt='Image'></td>
         </tr>";

     }
     echo "</table>";
 } else {
     echo "0 results";
 }

 $conn->close();
 ?>

</body>
</html>
   