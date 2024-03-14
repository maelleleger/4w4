<?php get_header(); ?>
<h2>front-page.php</h2>
<!-- <h1><front-page class="php">dljhovg</front-page></h1> -->
<div id="entete" class="global">
        <section class="entete__header">
            <h1 class="bgc-text"><?php echo get_bloginfo('name') ?></h1> <!-- c'est des titres qui sont dans le admin de wordpres (réglage/général)-->
            <h2 class="bgc-text"><?php echo get_bloginfo('description') ?></h2><!-- c'est des titres qui sont dans le admin de wordpres (réglage/général)-->
            <h2 class="bgc-text">4w4 - conception d'interface <br> et développement web</h2>
            <h4 class="bgc-text">TIM - Collège de Maisonneuve</h4>
            <button class="btnEvent">Événement</button>
        </section>

        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" style="fill:var(--couleur-arriere-accueil)"></path>
            </svg>
        </div>
    </div>
    <div id="accueil" class="global">
        <section>
            <h2>Accueil</h2>
            <div class="section_cours">

                <!-- // boucle pour afficher tous les posts
                    // if (have_posts()){
                    //     while(have_posts()){
                    //         the_post();
                    //         the_title('<p>','</p>');
                    //         $contenu = get_the_content();
                    //         $contenu = wp_trim_words($contenu, 10);
                    //         echo $contenu;
                    //     } -->

                    <!-- boucle pour afficher la carte avec les posts -->


                    <?php 
                    
                    if (have_posts()):
                            while(have_posts()): the_post(); 
                            // $titre = get_the_title(); //le titre, le sigle et la durée ensemble
                            // $nomCours = substr($titre, 7, -6); //le titre du cours
                            // $sigle = substr($titre,0, 7); //le sigle du cours
                            // $duree = substr($titre, -6); //la durée du cours
                            // $pos_parenthese = strpos($titre, '(')
                            // $duree = substr($titre, $pos_parenthese);
                            // strpos()
                            //substr
                        ?>
                            <div class="carte">
                                <!-- <h5><?php echo $sigle; ?></h5> le sigle du cours -->
                                <!-- <h4><php the_title(); ?></h4> -->
                                <!-- <h4><php echo $titre; ?></h4> -->
                                <!-- <h4><?php echo $nomCours; ?></h4> le titre du cours
                                <h4><?php echo $duree; ?></h4> la durée du cours -->
                                <?php the_title() ?>
                                <p><?php echo wp_trim_words(get_the_content(), 10); ?></p> <!-- après 10 mots, il y a des "..." -->
                                <p><a href=""><?php echo get_permalink(); ?></a>la suite</p>
                            </div>
                           <?php endwhile; ?>
                        <?php endif; ?>

            <!-- <blockquote class="citation">
                Voici un endroit pour placer des citations pour expliquer les informations ou autres choses. C'est un zone de texte utile et voilà, conne journée tous le monde :)
                </blockquote> -->
        </section>
    </div>
    <div id="evenement" class="global">
        <section>
            <h2>Événement</h2>
        </section>
        <?php get_template_part("gabarit/vague"); ?>
    </div>
    <div id="galerie" class="global diagonale">
        <section>
            <h2>Galerie</h2>
        </section>
    </div>
    <?php
        get_footer()
    ?>