
    <?php 

        include "dbconfig.php";
        
        $pageName = $_GET['q'];;
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else{
            $ipa = getIPAddress();
            $sql1 = "SELECT * from tblengpagelikes WHERE PageName='$pageName' AND IPAddress='$ipa'";
            if ($result = mysqli_query($conn, $sql1)) {
                $rowcount = mysqli_num_rows( $result );
                echo $rowcount;
            }
            else{
                echo "0";
            }
        }



        function getIPAddress(){
            if (!empty($_SERVER['HTTP_CLIENT_IP']))   
            {
                $ip_address = $_SERVER['HTTP_CLIENT_IP'];
            }
            elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
            {
                $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
            else
            {
                $ip_address = $_SERVER['REMOTE_ADDR'];
            }
            return $ip_address;
        }

    ?>

