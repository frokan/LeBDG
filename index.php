<!DOCTYPE html>
<html>
    <head>
        <title>LeBistroDesGamers</title>
        <meta charset="ansi">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <!--SCRIPT ANNONCE ARRIVEE
            <script type="text/javascript">
            if ( confirm( "Soutenir le #BDGMonth" ) ) {
                window.location = "https://www.tipeeestream.com/bdgmonth/donation";
            } else {
        // Code à éxécuter si l'utilisateur clique sur "Annuler" 
            }
            </script>-->
        <header class="main" id="header-main">
            <div class="wrap">
                <h1 class="bdg-font">Le Bistro des Gamers</h1>
                <nav>
                    <ul>
                        <li>
                            <a href="#live" class="js-scrollTo" title="Notre direct">
                                Live
                            </a>
                        </li>
                        <li>
                            <a href="#contact" class="js-scrollTo" title="Nous contacter">
                                Nous contacter
                            </a>
                        </li>
                        <li>
                            <a href="#team" class="js-scrollTo" title="Notre équipe">
                                Streamers
                            </a>
                        </li>
                        <li>
                            <a href="#partners" class="js-scrollTo" title="Nos partenaires">
                                Partenaires
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- CONTENU -->
        <main id="main-content" class="wrap">
            <article id="propos">

                <header class="article">
                    <h2 class="bdg-font">Qui sommes-nous ?</h2>
                </header>
                <section class="article">
                    <p>
                        Le Bistro des Gamers est une association loi 1901 déclarée en novembre 2019 et crée en novembre 2017, notre but est de partager une passion commune avec nos Streamers
                        qui est le stream et de vous la partager, entre les jeux vidéos, les émissions, le développement et le just chatting, Le Bistro des Gamers se voit être une structure 
                        très diversifiée sur son contenu. 
                    </p>
                    <iframe width="100%" height="500px" src="https://www.youtube.com/embed/Nvh6QqThyOs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </section>
            </article>
            <!-- LIVE -->
            <article id="live">

                <header class="article">
                    <h2 class="bdg-font">En direct !</h2>
                </header>
                <section class="article">
                    <iframe src="https://player.twitch.tv/?channel=lebistrodesgamers" frameborder="0" allowfullscreen="true" scrolling="no" height="600" width="100%"></iframe><a href="https://www.twitch.tv/lebistrodesgamers?tt_content=text_link&tt_medium=live_embed" style="padding:2px 0px 4px; display:block; width:100%; font-weight:normal; font-size:10px; text-decoration:underline;">Regardez une vidéo live de LeBistroDesGamers sur www.twitch.tv</a>
                </section>
                </footer>
            </article>
            <!-- contact -->
            <article id="contact">

                <header class="article">
                    <h2 class="bdg-font">Nous contacter</h2>
                <section class="article">
                        <div class="middle-contact">
                        <form method="post" action="testmail.php">
                          <p>
                            <input type="text" name="nom" placeholder="votre nom.." id="name01" required/>
                          </p>
                        <p>
                          <input type="text" name="prenom" placeholder="votre prénom.." id="surname" required/>
                        </p>
                        <p>
                          <input type="email"  name="mail" placeholder="e.mail@yourmail.com" id="mail" required />
                        </p>
                        <p>
                          <select name="raison" id="reason"  required >
                            <option >Demande par rapport aux recrutements.</option>
                            <option >Comment accéder à la chaîne twitch.</option>
                            <option >Ou est-ce qu'est le planning.</option>
                            <option >Autres ? Veuillez préciser</option>
                          </select>
                        </p>
                        <p>
                          <textarea name="message" id="message">Veuillez entrer votre message ici..</textarea>
                        </p>
                          <button value="Envoyer" id="boutonsend">Envoyer !</button>
                        </form>
                      </div>
                </section>
                </footer>
            </article>
            <!-- EQUIPE  -->
            <article id="team">

                <header class="article">
                    <h2 class="bdg-font">Notre équipe</h2>
                </header>
                <section class="article">
                    <?php
                    try
                    {
                        $bdd = new PDO('mysql:host=localhost;dbname=awayfrom0008_basetest;charset=utf8', 'useradmin', 'Miramas2019!');
                    }
                    catch (Exception $e)
                    {
                            die('Erreur : ' . $e->getMessage());
                    }

                    $reponse = $bdd->query('SELECT logo, pseudo FROM `logins`');
                    ?>
                    <table id="bdgstreamers">
                        <ul>
                    <?php
                    while ($logos = $reponse->fetch())
                    {  
                        print "<li>
                        <a href='equipe.php?user=".$logos['pseudo']."'><img class='team-logo' src='".$logos['logo']."' title='Logo de ".$logos['pseudo']."' alt='Logo de ".$logos['pseudo']."'/></a>
                        </li>";
                    }

                    $reponse->closeCursor();
                    ?></ul>
                        
                    </table>
                </section>
                </footer>
            </article>
            <!-- PARTNERS -->
            <article id="partners">

                <header class="article">
                    <h2 class="bdg-font">Nos partenaires</h2>
                </header>
                <section class="article">
                    
                </section>
                </footer>
            </article>
        </main>
        <footer class="main"></footer>
    </body>
</html>