<body>
<!-- Fetching user data-->
 

    <?php
    $regID = $_SESSION["regID"];
    $sql1 = "SELECT * FROM register WHERE regID = $regID;";
    $res1 = $con->query($sql1);
    $user = $res1->fetch_assoc();
    

    include_once("config.php");
    ?>

    <!-- User Details -->
    <div class="div1">
        <table class="tb">
            <tr>
                <th colspan="2"class="heading">User Details:</th>
            </tr>
            <tr>
                <th>Registration ID</th>
                <td><?php echo $user['regID']; ?></td>
            </tr>
            <tr>
                <th> first Name</th>
                <td><?php echo $user['fname']; ?></td>
            </tr>
            <tr>
                <th> last Name</th>
                <td> <?php echo $user['lname']; ?></td>
            </tr>
            <tr>
                <th> user name</th>
                <td> <?php echo $user['userName']; ?></td>
            </tr>
            <tr>
                <th> mail</th>
                <td> <?php echo $user['mail']; ?> </td>
            </tr>
            <tr>
                <th> Password</th>
                <td><?php echo $user['pw']; ?> </td>
            </tr>
             
        </table>
    </div>
    </body>