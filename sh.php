    <!DOCTYPE html>
    <html>
    <head>
     <title>Table with database</title>
     <style>
      table {
       border-collapse: collapse;
       width: 100%;
       color: #588c7e;
       font-family: monospace;
       font-size: 25px;
       text-align: left;
         } 
      th {
       background-color: #588c7e;
       color: white;
        }
      tr:nth-child(even) {background-color: #f2f2f2}
     </style>
    </head>
    <body>
     <table>
     <tr>
      <th>Card_ID</th> 
      <th>NAME</th> 
      <th>IN/OUT</th>
      <th>DATE_&_TIME</th>
     </tr>
     <?php
    $conn = mysqli_connect('localhost', 'root', 'password', 'rig');
      // Check connection
      if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
      } 
      $sql = "SELECT Card_ID, NAME, IN/OUT, DATE_&_TIME FROM p";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
       // output data of each row
       while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Card_ID"]. "</td><td>" . $row["NAME"] . "</td><td>"
    . $row["IN/OUT"]. "</td><td>" . "</td><td>" . $row["DATE_&_TIME"] "</td></tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
    </table>
    </body>
    </html>