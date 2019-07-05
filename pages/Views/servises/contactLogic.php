<?php 
$emailError = $subjectError = $messageError = "";
    $email = $subject = $messege = "";
    if (isset($_POST['send']))
    {
        $isCorectInformation = true;
        if (!empty($_POST['email']))
            {
                $email = test_input($_POST['email']);
            }
            else
            {
                $emailError = "Field is requare!";
                $isCorectInformation = false;
            }
        if (!empty($_POST['subject']))
            {
                $subject = test_input($_POST['subject']);
            }
            else
            {
                $subjectError = "Field is requare!";
                $isCorectInformation = false;
            }
        if (!empty($_POST['messege']))
            {
                $messege = $_POST['subject'];

            }
            else
            {
                $subjectError = "Field is requare!";
                $isCorectInformation = false;
            }


        if ($isCorectInformation) {
            $_SESSION['table'] = "contact";
            include('../Database/ContactRepository.php');
            $data = new ContactRepository();
            $data->AddEmail($email, $subject, $messege);
            $email = $subject = $messege = "";
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
 ?>