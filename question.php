<?php

$questionName=filter_input(INPUT_POST,'QuestionName');
$questionBody=filter_input(INPUT_POST,'questionBody');
$questionSkills=filter_input(INPUT_POST,'questionSkills');
$doubleCheckSkills=explode(',',$questionSkills);

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    if (empty($questionName))
    {
        $NameError = "Must provide a Question Name.";
    }
         elseif(strlen($questionName) <3)
            {
                $NameError= "Question Name must be 3 characters or more.";
            }

    if (empty($questionBody))
    {
        $bodyError = "Must provide a Question Body.";
    }
        elseif(strlen($questionBody) >= 500)
            {
                $bodyError= "Question Body cannot be more than 500 characters.";
            }

    if (empty($questionSkills))
    {
        $skillError = "Must provide skills.";
    }
        elseif(count($doubleCheckSkills)<2)
            {
                $skillError= "Must provide 2 or more skills.";
            }

}
?>


<html>

    <head><title> Question Form</title></head>

        <h1> Questionnaire </h1>
        <div>
            Question Name = <?php if(!$NameError) echo $questionName; ?>
            <span <span class="error"><?php echo $NameError; ?></span>
        </div>
        <div>
            Question Body = <?php if(!$bodyError) echo $questionBody; ?>
            <span <span class="error"><?php echo $bodyError; ?></span>
        </div>
        <div>
            Question Skills = <?php if (!$skillError) echo $questionSkills; ?>
            <span <span class="error"><?php echo $skillError; ?></span>
        </div>

</html>