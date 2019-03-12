<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <title>Memory Game</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <link rel="stylesheet" href="memory.css">
</head>

<body>
  <header>
    <nav>
      <a href="../../html/15age.html"><img src="../../pictures/svg/logo_ako.svg" alt="logo"></a>
      <a href="../../html/8compte.html"><img src="../../pictures/svg/avatarbeta.svg" alt="avatar"></a>
    </nav>
    <h1>Memory</h1>
  </header>
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
    $db = getDatabase();

    ?>
  <section class="memory-game">
    <div class="plateau">
<!--
        <div class="memory-card" data-framework="chat">
        <div class="front-face">
<img src="../../pictures/animaux/chat.svg" alt="chat">
          <h1>Chat</h1>
        </div>
        <img class="back-face" src="../../pictures/svg/akobleu.svg" alt="Memory Card">
      </div>
-->
        
        <?php
        $animaux='animaux';
         $drapeaux='drapeaux';
         $monuments='monuments';
         $mythologie='mythologie';
        $db = getDatabase();
$req = $db->query('SELECT * FROM Image_jeu WHERE theme = "'.$drapeaux.'"');

while ($data = $req->fetch()){

    echo '<div class="memory-card" data-framework="';
    echo $data['nom_image'];
    echo '">
        <div class="front-face">
<img src="';
    echo $data['image_jeu'];
    echo '" alt="chat">
          <h1>';
    echo $data['nom_image'];
    echo '</h1>
        </div>
        <img class="back-face" src="';
    echo 'https://image.tamaiticorp.fr/Graphisme/AKO%20images%20pieuvre/shapeAKObleu.svg';
    echo '" alt="Memory Card">
      </div>';
    echo '<div class="memory-card" data-framework="';
    echo $data['nom_image'];
    echo '">
        <div class="front-face">
<img src="';
    echo $data['image_jeu'];
    echo '" alt="chat">
          <h1>';
    echo $data['nom_image'];
    echo '</h1>
        </div>
        <img class="back-face" src="';
    echo 'https://image.tamaiticorp.fr/Graphisme/AKO%20images%20pieuvre/shapeAKObleu.svg';
    echo '" alt="Memory Card">
      </div>';

}
        ?>
        
      <!--
<div class="memory-card" data-framework="chat">
        <div class="front-face">

          <img src="../../pictures/animaux/chat.svg" alt="chat">
          <h1>Chat</h1>
        </div>
        <img class="back-face" src="../../pictures/svg/akobleu.svg" alt="Memory Card">
      </div>

      <div class="memory-card" data-framework="chat">
        <div class="front-face">
          <h1>Chat</h1>
          <img src="../../pictures/animaux/chat.svg" alt="chat">
        </div>
        <img class="back-face" src="../../pictures/svg/akobleu.svg" alt="Memory Card">
      </div>

      <div class="memory-card" data-framework="cheval">
        <div class="front-face">
          <h1>Cheval</h1>
          <img src="../../pictures/animaux/cheval.svg" alt="cheval">

        </div>
        <img class="back-face" src="../../pictures/svg/akobleu.svg" alt="Memory Card">
      </div>

      <div class="memory-card" data-framework="cheval">
        <div class="front-face">
          <h1>Cheval</h1>
          <img src="../../pictures/animaux/cheval.svg" alt="cheval">
        </div>
        <img class="back-face" src="../../pictures/svg/akobleu.svg" alt="Memory Card">
      </div>

      <div class="memory-card" data-framework="chien">
        <div class="front-face">
          <h1>Chien</h1>
          <img src="../../pictures/animaux/chien.svg" alt="chien">
        </div>
        <img class="back-face" src="../../pictures/svg/akobleu.svg" alt="Memory Card">
      </div>

      <div class="memory-card" data-framework="chien">
        <div class="front-face">
          <h1>Chien</h1>
          <img src="../../pictures/animaux/chien.svg" alt="chien">
        </div>
        <img class="back-face" src="../../pictures/svg/akobleu.svg" alt="Memory Card">
      </div>

      <div class="memory-card" data-framework="elephant">
        <div class="front-face">
          <h1>Eléphant</h1>
          <img src="../../pictures/animaux/elephant.svg" alt="elephant">
        </div>
        <img class="back-face" src="../../pictures/svg/akobleu.svg" alt="Memory Card">
      </div>

      <div class="memory-card" data-framework="elephant">
        <div class="front-face">
          <h1>Eléphant</h1>
          <img src="../../pictures/animaux/elephant.svg" alt="elephant">
        </div>
        <img class="back-face" src="../../pictures/svg/akobleu.svg" alt="Memory Card">
      </div>

      <div class="memory-card" data-framework="panda">
        <div class="front-face">
          <h1>Panda</h1>
          <img src="../../pictures/animaux/panda.svg" alt="panda">
        </div>
        <img class="back-face" src="../../pictures/svg/akobleu.svg" alt="Memory Card">
      </div>

      <div class="memory-card" data-framework="panda">
        <div class="front-face">
          <h1>Panda</h1>
          <img src="../../pictures/animaux/panda.svg" alt="panda">
        </div>
        <img class="back-face" src="../../pictures/svg/akobleu.svg" alt="Memory Card">
      </div>

      <div class="memory-card" data-framework="girafe">
        <div class="front-face">
          <h1>Girafe</h1>
          <img src="../../pictures/animaux/girafe.svg" alt="girafe">
        </div>
        <img class="back-face" src="../../pictures/svg/akobleu.svg" alt="Memory Card">
      </div>

      <div class="memory-card" data-framework="girafe">
        <div class="front-face">
          <h1>Girafe</h1>
          <img src="../../pictures/animaux/girafe.svg" alt="girafe">
        </div>
        <img class="back-face" src="../../pictures/svg/akobleu.svg" alt="Memory Card">
      </div>
-->
    </div>
  </section>
  <section class="footer">
    <button class="son" type="image" id="son"></button>
    <div class="notactived">
      <img src="../../pictures/svg/erreur.svg" alt="" id="condition">
      <p id="text_condition"></p>
    </div>
    <a href="/html/themes/animaux.html"><img src="../../pictures/svg/flecheretour.svg" alt="return" class="return"></a>
  </section>

  <!-- MODAL DEBUT JEU -->

  <div class="modal" tabindex="-1" role="dialog" id="modal_debut">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <section class="debut_jeu">
            <img src="/pictures/svg/AKOOOO.svg" alt="" class="ako">
            <div class="circular-sb">
              <p>Collecte les paires d'images correspondantes</p>
              <div class="circle3"></div>
              <div class="circle4"></div>
              <img src="/pictures/svg/boutonson.svg" alt="" class="son">
            </div>
          </section>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Jouer</button>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL VICTOIRE AKO APPARAIT -->

  <div class="modal" tabindex="-1" role="dialog" id="completed">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <section class="conversation">
            <div class="circular-sb">
              <p>Hey! Tu es trop fort, tu as complété le memory</p>
              <img src="/pictures/svg/boutonson.svg" alt="" class="son">
              <div class="circle3"></div>
              <div class="circle4"></div>
            </div>
            <img src="/pictures/svg/AKOOOO.svg" alt="" class="ako">
          </section>
        </div>
        <div class="modal-header">
          <div class="col-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="modal-close">
              <span aria-hidden="true">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px"
                  height="50px" viewBox="0 0 268.832 268.832" xml:space="preserve">
                  <g>
                    <path d="M265.171,125.577l-80-80c-4.881-4.881-12.797-4.881-17.678,0c-4.882,4.882-4.882,12.796,0,17.678l58.661,58.661H12.5
                   c-6.903,0-12.5,5.597-12.5,12.5c0,6.902,5.597,12.5,12.5,12.5h213.654l-58.659,58.661c-4.882,4.882-4.882,12.796,0,17.678
                   c2.44,2.439,5.64,3.661,8.839,3.661s6.398-1.222,8.839-3.661l79.998-80C270.053,138.373,270.053,130.459,265.171,125.577z" />
                  </g>
                </svg>
              </span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SCRIPT -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script src="modal_debut.js"></script>
  <script src="memory.js"></script>
</body>

</html>

  