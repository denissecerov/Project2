<?php

// Initialize session
session_start();


// Load character data from session
$character = $_SESSION['character'];

// Display game interface
echo '<h1>Welcome to the Adventure Game!</h1>';
echo '<p>Your current stats:</p>';
echo '<ul>';
echo '<li>Name: ' . $character['name'] . '</li>';
echo '<li>Level: ' . $character['level'] . '</li>';
echo '<li>HP: ' . $character['hp'] . '/' . $character['max_hp'] . '</li>';
echo '</ul>';

//Prologue
echo '<p> In the bustling city of Metrolane, where passion for sports pulsated through every street, lived Alex Carter, a rising basketball prodigy. His skill on the court was unparalleled, but beneath his stellar performance lay a tumultuous personal life. The Carter family had a deep legacy in basketball, with Alex destined to continue it. However, the weight of expectations and the desire to forge his own path conflicted within him.</p>';


// Present player with a choice
echo '<p>As a high school senior, Alex faced the first pivotal decision: whether to join his fathers alma mater or venture into uncharted territory</p>';
echo '<form method="post">';
echo '<input type="radio" name="choice" value="left" id="choice-left"><label for="choice-left">Stay in comfort zone and go to same school as father</label>';
echo '<input type="radio" name="choice" value="right" id="choice-right"><label for="choice-right">Be free venture into uncharted territory</label>';
echo '<input type="submit" name="first_choice">';
echo '</form>';

// Process player's choice
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['first_choice']))
{
    $choice = $_POST['choice'];

    if ($choice === 'left') 
	{
        // Handle same as father  path
        echo '<p>You decided to keep doing the same thing as you are, and not take any risks</p>';
        echo '<p>You continued to live the life you are living and died at your home</p>';
        echo '<p>Game Over</p>';
        echo '<form method="post">';
        echo '<input type="radio" name="sub_choice" value="reset" id="choice-reset"><label for="choice-reset">Reset</label>';
        echo '<input type="submit" name="second_choice">';
        echo '</form>';
    } 
	elseif ($choice === 'right') 
	{
        // Handle uncharted path
        echo '<p>Good Decision!</p>';
        echo '<p>Despite his fathers legacy at Metrolane High, you chose to enroll at Riverside Academy</p>';
        echo '<p>But it has strained your relationship with your father</p>';
        echo '';
        echo 'At Riverside, you encountered two contrasting friends, Derrick and Maya. Derrick, a star player, introduced Alex to the glitz of popularity, while Maya, a talented but underrated player, ignited a deep connection with her passion for the game.';
        echo '<form method="post">';
        echo '<input type="radio" name="sub_choice" value="derrick" id="choice-derrick"><label for="choice-derrick">Prioritize friendship with Derrick</label>';
        echo '<input type="radio" name="sub_choice" value="maya" id="choice-maya"><label for="choice-maya">Prioritize friendship with Maya</label>';
        echo '<input type="submit" name="second_choice">';
        echo '</form>';
    }
}
  // Process sub-choice
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['second_choice'])) 
{
        $sub_choice = $_POST['sub_choice'];

        if ($sub_choice === 'reset') 
        {
            // Handle reset choice
            echo '<p>Start Again!</p>';
        } 
        elseif ($sub_choice === 'derrick') 
        {
            // Handle derrick friendship choice
            echo '<p>You got caught up in popularity with Derrick, and all the attention took away your focus from game.</p>';
            echo '<p>Game Over</p>';
            echo '<form method="post">'; 
            echo '<input type="radio" name="choicethree" value="reset2" id="choice-reset2"><label for="choice-reset2">Reset</label>';
            echo '<input type="submit" name="third_choice">';
            echo '</form>';           
        } 
        elseif ($sub_choice === 'maya') 
        {
            // Handle maya friendship choice
            echo '<p>Congratulations! You become friends with Maya and got selected into school basketball team.</p>';
            echo '';
            echo 'During a critical game, You suffered a severe ankle injury. The choice between risking long-term damage to continue playing or taking time off to heal challenged his dedication to the sport.';
            echo '<form method="post">';
            echo '<input type="radio" name="choicethree" value="takeRest" id="choice-takeRest"><label for="choice-takeRest">Take Rest</label>';
            echo '<input type="radio" name="choicethree" value="keepPlaying" id="choice-keepPlaying"><label for="choice-keepPlaying">Keep Playing</label>';
            echo '<input type="submit" name="third_choice">';
            echo '</form>';        
        }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['third_choice'])) 
{
    $choice3 = $_POST['choicethree'];

    if ($choice3 === takeRest)
    {
        echo '<p>You decided to take rest and your team to lost. Now, your dedication to the sport is in question</p>';
        echo '<p>Game Over</p>';
        echo '<form method="post">'; 
        echo '<input type="radio" name="choice4" value="reset3" id="choice-reset3"><label for="choice-reset3">Reset</label>';
        echo '<input type="submit" name="fourth_choice">';
        echo '</form>';
    }
    else if ($choice3 === keepPlaying)
    {
        echo '<p>Your decision to play through the pain altered his performance and strained his relationship with the coach.</p>';
        echo '';
        echo 'Now, A fierce rivalry brewed between Riverside Academy and Metrolane High. Alex faced the choice of either succumbing to the pressure of the rivalry or rising above it to promote sportsmanship';
        echo '<form method="post">';
        echo '<input type="radio" name="choice4" value="pressure" id="choice-pressure"><label for="choice-pressure">Crumble under pressure</label>';
        echo '<input type="radio" name="choice4" value="rise" id="choice-rise"><label for="choice-rise">Rise above the pressure an dpromote sportmanship</label>';
        echo '<input type="submit" name="fourth_choice">';
        echo '</form>'; 
    }
}

?>
