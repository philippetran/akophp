<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="puzzle.css">
    <title>Puzzle</title>
</head>

<body>

    <div>

        <h1> Puzzle </h1>
        <table class="plateau">
            <tr>
                <th id="1"></th>
                <th id="2"></th>
                <th id="3"></th>


            </tr>
            <tr>
                <th id="4"></th>
                <th id="5"></th>
                <th id="6"></th>

            </tr>
            <tr>
                <th id="7"></th>
                <th id="8"></th>
                <th id="9"></th>
            </tr>


        </table>

    </div>

    
    <?php
    
    define('DB_HOST', 'mysql:host=localhost;dbname=philippetran_tamaiticorp');
  define('DB_USER', 'philippetran_admin');
  define('DB_PASSWORD', 'tamaiticorp');
 $currentUser = null;

  function getDatabase() {
    $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    return $pdo;
  }
   
  
    echo '<p>';
    echo $_POST['animaux'];
    echo '</p>';
    
    echo '<p>';
    echo $_POST['monuments'];
    echo '</p>';
    $animaux=rand(1,5);
    $monuments=rand(6,9);
    
    $db = getDatabase();
    if (isset($_POST['animaux'])){
        
$req = $db->query('SELECT piece_puzzle FROM puzzle WHERE nom_puzzle='.$animaux.'');
}
    else if (isset($_POST['monuments'])){
        $req = $db->query('SELECT piece_puzzle FROM puzzle WHERE nom_puzzle='.$monuments.'');
    }
    

echo "<h2>coucou</h2>";
 $i = 1;

while ($data = $req->fetch())
{
    echo '<img id="img';
    echo $i;
    echo '" data-case="';
    echo $i;
    echo '" src="';
	echo $data['piece_puzzle'];
    echo '"> <br>';
   $i++;
}

$reponse->closeCursor();

    
    ?>
<!--
    <img id="img9" data-case="9" src="CoccinellePuzzle/coccinellepuzzle9.svg" alt="">
    <img id="img6" data-case="6" src="CoccinellePuzzle/coccinellepuzzle6.svg" alt="">
    <img id="img3" data-case="3" src="CoccinellePuzzle/coccinellepuzzle3.svg" alt="">
    <img id="img5" data-case="5" src="CoccinellePuzzle/coccinellepuzzle5.svg" alt="">
    <img id="img8" data-case="8" src="CoccinellePuzzle/coccinellepuzzle8.svg" alt="">
    <img id="img4" data-case="4" src="CoccinellePuzzle/coccinellepuzzle4.svg" alt="">
    <img id="img7" data-case="7" src="CoccinellePuzzle/coccinellepuzzle7.svg" alt="">
    <img id="img1" data-case="1" src="CoccinellePuzzle/coccinellepuzzle1.svg" alt="">
    <img id="img2" data-case="2" src="CoccinellePuzzle/coccinellepuzzle2.svg" alt="">
-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="puzzle.js"></script>

</body>

</html>