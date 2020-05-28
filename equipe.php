<!DOCTYPE html>
<html>
    <head>
        <title>LeBDG - team</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <?php
                    try
                    {
                        $bdd = new PDO('mysql:host=localhost;dbname=awayfrom0008_basetest;charset=utf8', 'useradmin', 'Miramas2019!');
                    }
                    catch (Exception $e)
                    {
                            die('Erreur : ' . $e->getMessage());
                    }

                    $reponse = $bdd->query('SELECT logo, pseudo, description FROM `logins` WHERE pseudo="'.$_GET["user"].'"');
                    $donnees = $reponse->fetch();

        ?>
        <header class="main">
            <div class="wrap">
                <h1 class="bdg-font">Le Bistro des Gamers</h1>
                <nav>
                    <ul>
                        <li>
                            <a href="index.php#live" class="js-scrollTo" title="Notre direct">
                                Live
                            </a>
                        </li>
                        <li>
                            <a href="index.php#contact" class="js-scrollTo" title="Nous contacter">
                                Nous contacter
                            </a>
                        </li>
                        <li>
                            <a href="index.php#team" class="js-scrollTo" title="Notre équipe">
                                Streamers
                            </a>
                        </li>
                        <li>
                            <a href="index.php#partners" class="js-scrollTo" title="Nos partenaires">
                                Partenaires
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main id="main-content" class="wrap">
            <article id="presentation">
                <header class="article">
                    <?php print '<img class="team-logo-equipe" src="'.$donnees['logo'].'" tilte="Logo de  '.$_GET["user"].'" alt="Logo de '.$_GET["user"].'"/>'; ?>
                    <h2 class="bdg-font" id="pseudo-usr"><?php print $_GET['user']; ?></h2>
                </header>
                <section class="article">
                    <?php print "<p>
                        ".$donnees['description']."
                    </p>";
                    ?>
                    <?php 
                    print '<iframe src="https://player.twitch.tv/?channel='.$donnees["pseudo"].'" frameborder="0" allowfullscreen="true" scrolling="no" height="450" width="100%"></iframe><a href="https://www.twitch.tv/'.$donnees['pseudo'].'?tt_content=text_link&tt_medium=live_embed" style="padding:2px 0px 4px; display:block; width:345px; font-weight:normal; font-size:10px; text-decoration:underline;">Regardez une vidéo live de '.$donnees["pseudo"].' sur www.twitch.tv</a>                
                        </section>';
                    ?>
            </article>
            
        </main>
    </body>
</html>