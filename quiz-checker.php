<?php

include("config.php");


$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];
$question4 = $_POST['quest4'];




$sql = "UPDATE answer SET question_1='$question1', question_2='$question2', question_3='$question3', question_4='$question4', date=CURRENT_TIMESTAMP WHERE id=1";

if ($conn->query($sql) === TRUE) 

    {
   
        $sql = "SELECT answer_1, answer_2, answer_3, answer_4 FROM correct_ans";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

            $answer_1 = $row["answer_1"];
            $answer_2 = $row["answer_2"];
            $answer_3 = $row["answer_3"];
            $answer_4 = $row["answer_4"];

            if($answer_1 == $question1)
            {
 
                if($answer_2 == $question2)
                {

                    if($answer_3 == $question3)
                    {

                        if($answer_4 == $question4)
                        {
                            echo"<script type='text/javascript'>window.location.href='redirect.php';</script>";
                        }
                        else
                        {
                            echo"<script type='text/javascript'>alert('Question #4: incorrect!');window.location.href='index.php';</script>";
                        }   

                    }

                    else
                    {
                        echo"<script type='text/javascript'>alert('Question #3: incorrect!');window.location.href='index.php';</script>";
                    }


                }
                else
                {
                    echo"<script type='text/javascript'>alert('Question #2: incorrect!');window.location.href='index.php';</script>";
                }
            }

            else
            {
                echo"<script type='text/javascript'>alert('Question #1: incorrect!');window.location.href='index.php';</script>";
            }
            

        }
        } else {
        echo "0 results";
        }


    }
    else {
    echo "Error updating record: " . $conn->error;
    }

    $conn->close();

?>  