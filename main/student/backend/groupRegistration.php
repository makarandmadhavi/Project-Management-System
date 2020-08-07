<?php
    include 'conn.php';

    //for precise error
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $member1 = $_POST['member1'];
    $member2 = $_POST['member2'];
    $member3 = $_POST['member3'];

    $mem1_email = $_POST['mem1_email'];
    $mem1_phone = $_POST['mem1_phone'];

    $mem2_email = $_POST['mem2_email'];
    $mem2_phone = $_POST['mem2_phone'];

    $mem3_email = $_POST['mem3_email'];
    $mem3_phone = $_POST['mem3_phone'];

    //password
    $symbols=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9'];
    $key=$symbols[rand(0,25)];
    for($i=0;$i<5;$i++){
        $key=$key.$symbols[rand(0,34)];
    }
    //password ends

    //group_id
    $stmt1 = $conn->prepare("select shift from student where name in (?, ?, ?)");
    echo $conn->error;
    $stmt1->bind_param("sss",$member1,$member2,$member3);
    $stmt1->execute();
    $result1 = $stmt1->get_result();
    $shift=array();
    while($row = $result1->fetch_assoc()):
        array_push($shift,$row["shift"]);
    endwhile;
    $stmt1->close();
    
    $values = array_count_values($shift);
    arsort($values);
    
    $popular = array_slice(array_keys($values), 0, 2, true);
 
    
    $sql="SELECT * FROM groups";
    $result=mysqli_query($conn,$sql);
    $rowcount=mysqli_num_rows($result)+1;
    $id = (string)$rowcount;

    // $sql = "SELECT group_username FROM groups ORDER BY group_username DESC LIMIT 1";
    // $result=mysqli_query($conn,$sql);
    // $row = $result->fetch_row();
    // $last_grpid = $row[0];
    // $last_id = substr($last_grpid, 2, strlen($last_grpid) - 2);
    // $id = (int)$last_id + 1;

    $groupId = "";
    if($popular[0] == '1'){
        $groupId = "f"."_".$id;
    }elseif ($popular[0] == '0') {
        $groupId = "s"."_".$id;
    }
    //group_id ends

    //insert group details into group table
    $stmt = $conn->prepare("insert into groups(member1, member2, member3, groupname)
    values(?, ?, ?, ?)");
    $stmt->bind_param("ssss",$member1, $member2, $member3, $groupId);
    $stmt->execute();
    echo $stmt->error;
    $stmt->close();
    
    //update students table
    $stmt = $conn->prepare("UPDATE student SET isGrouped = 1 WHERE name in (?, ?, ?)");
    $stmt->bind_param("sss",$member1, $member2, $member3);
    $stmt->execute();
    $stmt->close();


    //insert group login details into login table
    $login_type = 'student';
    $stmt = $conn->prepare("insert into login(username, password, type)
    values(?, ?, ?)");
    $stmt->bind_param("sss",$groupId, $key, $login_type);
    $stmt->execute();
    echo $stmt->error;
    $stmt->close();


   //send email to group members
    // include "../../classes/class.phpmailer.php"; // include the class name
    // $mail = new PHPMailer(); // create a new object
    // $mail->IsSMTP();         // enable SMTP
    // $mail->SMTPDebug = 1;    // debugging: 1 = errors and messages, 2 = messages only
    // $mail->SMTPAuth = true;  // authentication enabled
    // $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    // $mail->Host = "smtp.gmail.com";
    // $mail->Port = 465; // or 587  465
    // $mail->IsHTML(true);
    // $mail->Username = "nikhil.ingale99@gmail.com"; //"teamtcrait@gmail.com";       //"tcteamrait@gmail.com";   // "halltktteam@gmail.com";
    // $mail->Password = ""; //"teamtc@rait";                 //"raittcteam";             // "raithalltkt";
    // $mail->SetFrom("nikhil.ingale99@gmail.com");  //("teamtcrait@gmail.com");         //("tcteamrait@gmail.com");     // ("halltktteam@gmail.com");
    // $mail->Subject = "Final Year Project Group Registration";
    // $mail->SMTPOptions = array(
    //     'ssl' => array(
    //         'verify_peer' => false,
    //         'verify_peer_name' => false,
    //         'allow_self_signed' => true
    //     )
    // );
    // $body = nl2br("Your group have been successfully registered for Final Year Project.\n Your group members are \n 1) $member1 \n 2) $member2 \n 3) $member3 \n Complete your project abstract submission by logging into the system using your Group Login Credentials as followed. \n Group Username : ".$groupId." \n Password : ".$key);
    // $mail->Body = $body;
    // $address = array();
    // array_push($address, $mem1_email, $mem2_email, $mem3_email);
    // foreach($address as $key => $val){
    //     $mail->AddAddress($val);
    // }
                                                
            
    // if(!$mail->Send())
    //     {
    //     echo "Mailer Error: " . $mail->ErrorInfo;
    //     }
    //     else
    // {
    //     ?
     //     <script> -->
     //         alert(nl2br("Registered Successfully !")); -->
     //     </script> -->
    //     <?ph
    // } 
?>
