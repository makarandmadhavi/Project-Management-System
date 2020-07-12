<?php
    include 'config.php';
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $member1 = $_POST['member1'];
    $member2 = $_POST['member2'];
    $member3 = $_POST['member3'];
    $leader_email = $_POST['lead_email'];
    $leader_phone = $_POST['lead_phone'];
    $groupname = $_POST['groupName'];
    $domain = $_POST['projectDomain'];
    $projectname = $_POST['projectName'];
    $abstract = $_POST['projectAbstract'];

    $stmt = $conn->prepare("insert into groups(groupname, member1, member2, member3, leader_phone, leader_email, domain, projectname, projectdetails)
    values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss",$groupname, $member1, $member2, $member3, $leader_phone, $leader_email, $domain, $projectname, $abstract);
    $stmt->execute();
    ?>
    <script>
        alert("Registered Successfully");
        // window.location.replace('index.php');
    </script>
    <?php
    $stmt->close();

    // include "classes/class.phpmailer.php"; // include the class name
    // $mail = new PHPMailer(); // create a new object
    // $mail->IsSMTP();         // enable SMTP
    // $mail->SMTPDebug = 1;    // debugging: 1 = errors and messages, 2 = messages only
    // $mail->SMTPAuth = true;  // authentication enabled
    // $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    // $mail->Host = "smtp.gmail.com";
    // $mail->Port = 465; // or 587  465
    // $mail->IsHTML(true);
    // $mail->Username = "nikhil.ingale99@gmail.com"; //"teamtcrait@gmail.com";       //"tcteamrait@gmail.com";   // "halltktteam@gmail.com";
    // $mail->Password = "gunner645445"; //"teamtc@rait";                 //"raittcteam";             // "raithalltkt";
    // $mail->SetFrom("nikhil.ingale99@gmail.com");  //("teamtcrait@gmail.com");         //("tcteamrait@gmail.com");     // ("halltktteam@gmail.com");
    // $mail->Subject = "Issue of Transfer Certificate";
    // $mail->SMTPOptions = array(
    //     'ssl' => array(
    //         'verify_peer' => false,
    //         'verify_peer_name' => false,
    //         'allow_self_signed' => true
    //     )
    // );
    // $body = "Hello";
    // $mail->Body = $body;
    // $Email = "chirag.ingale@gmail.com";
    // $mail->AddAddress("$Email") ;
                                                
            
    // if(!$mail->Send())
    //     {
    //     echo "Mailer Error: " . $mail->ErrorInfo;
    //     }
    //     else
    // {
    //     echo"<h1><center>Mail Sent </h1></center>"; 
    // }
?>
