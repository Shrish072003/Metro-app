
    <?php 

        include "dbconfig.php";
        
        $pageName = $_GET['q'];;
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else{
            $ipa = getIPAddress();
            $sql3 = "DELETE FROM tblengpagelikes where IPAddress='$ipa' AND PageName='$pageName'";
            if (mysqli_query($conn, $sql3)) {
                return "1";
            } else {
                return "0";
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

