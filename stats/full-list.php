<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Statistics of Page Likes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>


        <div class="container mt-2">
            <div class="row">
                <div class="col-md-12">
                    <h4>Page Likes - Full List</h4>
                </div>
                <div class="col-md-12">
                    <a href="index.php">Page Likes Count</a> | <a href="full-list.php">Page Likes - Full List</a>
                </div>

                <div class="col-md-12 mt-3">
                    <table class="table table-light table-hover">
                        <thead>
                            <tr>
                                <th scope="col">IP Address</th>
                                <th scope="col">Page Name</th>
                                <th scope="col">Date Stamp</th>
                            </tr>
                        </thead>
                        <tbody>     
                            <?php 
                                include "../dbconfig.php";

                                $conn = new mysqli($servername, $username, $password, $dbname);
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                
                                $sql1 = "SELECT PageName,IPAddress,DateStamp from tblengpagelikes Order By DateStamp Desc";
                                $result = mysqli_query($conn, $sql1);
                                while($row = mysqli_fetch_array($result))
                                {
                                    echo "<tr>";
                                    echo "<td>".$row['IPAddress'] ."</td><td>". $row['PageName']."</td>"."<td>". $row['DateStamp']."</td>"; 
                                    echo "</tr>";
                                }
                                mysqli_close($conn);
                            ?>
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
