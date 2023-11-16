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

    if ($choice3 === 'takeRest')
    {
        echo '<p>You decided to take rest and your team to lost. Now, your dedication to the sport is in question</p>';
        echo '<p>Game Over</p>';
        echo '<form method="post">'; 
        echo '<input type="radio" name="choice4" value="reset3" id="choice-reset3"><label for="choice-reset3">Reset</label>';
        echo '<input type="submit" name="fourth_choice">';
        echo '</form>';
    }
    elseif ($choice3 === 'keepPlaying')
    {
        echo '<p>Your decision to play through the pain altered his performance and strained his relationship with the coach.</p>';
        echo '';
        echo 'Now, A fierce rivalry brewed between Riverside Academy and Metrolane High. Alex faced the choice of either succumbing to the pressure of the rivalry or rising above it to promote sportsmanship';
        echo '<form method="post">';
        echo '<input type="radio" name="choice4" value="pressure" id="choice-pressure"><label for="choice-pressure">Crumble under pressure</label>';
        echo '<input type="radio" name="choice4" value="rise" id="choice-rise"><label for="choice-rise">Rise above the pressure and promote sportmanship</label>';
        echo '<input type="submit" name="fourth_choice">';
        echo '</form>'; 
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'&& isset($_POST['fourth_choice']))
{
    $choice4 = $_POST['choice4'];

    if ($choice4 === 'pressure')
    {
        echo '<p>Oh no, you have crumbled under pressure. :(</p>';
        echo '<p>Start Over</p>';
        echo '<form method="post">'; 
        echo '<input type="radio" name="choice5" value="reset4" id="choice-reset4"><label for="choice-reset4">Reset</label>';
        echo '<input type="submit" name="fifth_choice">';
        echo '</form>';
    }
    elseif ($choice4 === 'rise')
    {
        echo '<p>You have rised above the pressure and won the game for your team, all while showing incredible sportmanship</p>';
        echo '<p>As your basketball career soared, your family feels neglected.</p>';
        echo '<p>Now, you are stuck between choosing family commintment to go to your sister graduation or to play an important game for your team</p>';
        echo '<form method="post">';
        echo '<input type="radio" name="choice5" value="family" id="choice-family"><label for="choice-family">Go to your sister graduation</label>';
        echo '<input type="radio" name="choice5" value="team" id="choice-team"><label for="choice-team">Go play for the team</label>';
        echo '<input type="submit" name="fifth_choice">';
        echo '</form>';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'&& isset($_POST['fifth_choice']))
{
    $choice5 = $_POST['choice5'];

    if ($choice5 === 'family')
    {
        echo '<p>You have made your family proud by going to the graduation, but in doing so you have put your career on the line. Now you are no longer the part of the team</p>';
        echo '<p>Game Over</p>';
        echo '<form method="post">'; 
        echo '<input type="radio" name="choice6" value="reset5" id="choice-reset5"><label for="choice-reset5">Reset</label>';
        echo '<input type="submit" name="sixth_choice">';
        echo '</form>';
    }

    elseif ($choice5 === 'team')
    {
        echo '<p>You have won the game for your team but your family has felt neglected.</p>';
        echo '<p>Because of your dedication and good performance you have been promoted to team captain</p>';
        echo '<p>The captaincy has come at the cost of you academic progress</p>';
        echo '<p>Now, you have to make a decision on focusing on studies or focusing on sports</p>';
        echo '<form method="post">';
        echo '<input type="radio" name="choice6" value="study" id="choice-study"><label for="choice-study">Focus on Studies</label>';
        echo '<input type="radio" name="choice6" value="sports" id="choice-sports"><label for="choice-sports">Focus on Sports</label>';
        echo '<input type="submit" name="sixth_choice">';
        echo '</form>';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'&& isset($_POST['sixth_choice']))
{
    $choice6 = $_POST['choice6'];

    if ($choice6 === 'study')
    {
        echo '<p>You decided to focus on studies and you asked Maya for help, who excells academically. This also improved your bond with Maya</p>';
        echo '<p>After working together, romantic feelings blossomed between you and Maya, complicating your friendship. The choice
                between risking your bond for a romantic relationship or preserving your friendship challenged
                 both your hearts and priorities.
                </p>';
        echo '<form method="post">';
        echo '<input type="radio" name="choice7" value="relationship" id="choice-relationship"><label for="choice-relationship">Explore a Romantic Relationship</label>';
        echo '<input type="radio" name="choice7" value="friend" id="choice-friend"><label for="choice-friend">Stay Just Friends</label>';
        echo '<input type="submit" name="seventh_choice">';
        echo '</form>';
        
    }
    
    elseif ($choice6 === 'sports')
    {
        echo '<p>You decided to focus on studies and you asked Maya for help, who is very goof at sports. This also improved your bond with Maya</p>';
        echo '<p>After working together, romantic feelings blossomed between you and Maya, complicating your friendship. The choice
                between risking your bond for a romantic relationship or preserving your friendship challenged
                 both your hearts and priorities.
                </p>';
        echo '<form method="post">';
        echo '<input type="radio" name="choice7" value="relationship" id="choice-relationship"><label for="choice-relationship">Explore a Romantic Relationship</label>';
        echo '<input type="radio" name="choice7" value="friend" id="choice-friend"><label for="choice-friend">Stay Just Friends</label>';
        echo '<input type="submit" name="seventh_choice">';
        echo '</form>';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'&& isset($_POST['seventh_choice']))
{
    $choice7 = $_POST['choice7'];

    if ($choice7 === 'relationship')
    {
        echo '<p>Your decision to explore their feelings deepened their connection but also introduced complexities.</p>';
        echo '<p>In his final year at Riverside, you face the ultimate decision: to carve your own legacy or live in the shadows of your familys basketball dynasty</p>';
        echo '<form method="post">';
        echo '<input type="radio" name="choice8" value="own" id="choice-own"><label for="choice-own">Create your own legacy</label>';
        echo '<input type="radio" name="choice8" value="familylegacy" id="choice-familylegacy"><label for="choice-familylegacy">Keep living in the shadow of your familys legacy</label>';
        echo '<input type="submit" name="eighth_choice">';
        echo '</form>';
    }

    elseif ($choice7 ===  'friend')
    {
        echo '<p>You decided to admire Maya from far, and just stayed friends</p>';
        echo '<form method="post">';
        echo '<input type="radio" name="choice8" value="own" id="choice-own"><label for="choice-own">Create your own legacy</label>';
        echo '<input type="radio" name="choice8" value="familylegacy" id="choice-familylegacy"><label for="choice-familylegacy">Keep living in the shadow of your familys legacy</label>';
        echo '<input type="submit" name="eighth_choice">';
        echo '</form>';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'&& isset($_POST['eighth_choice']))
{
    $choice8 = $_POST['choice8'];

    if ($choice8 === 'own')
    {
        echo '</p>Your decision to honor your roots while forging your unique path on and off the court solidified your identity</p>';
        echo'';
        echo 'In a world where the dribble of the ball echoed louder than words, Alex Carters journey through
        these pivotal decisions shaped not just his basketball career, but his character and
        relationships, leaving an indelible mark on the sports-loving city of Metrolane.';
        echo 'THE END';
    }

    elseif ($choice8 === 'familylegacy')
    {
        echo'<p> You stayed at the safe side, and kept your familys name and dynasty safe.</p>';
        echo'';
        echo 'In a world where the dribble of the ball echoed louder than words, Alex Carters journey through
        these pivotal decisions shaped not just his basketball career, but his character and
        relationships, leaving an indelible mark on the sports-loving city of Metrolane.';
        echo 'THE END';
    }
}
session_destroy();

?>
