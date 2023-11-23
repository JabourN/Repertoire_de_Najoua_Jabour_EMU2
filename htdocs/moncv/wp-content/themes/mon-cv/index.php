<?php get_header(); ?>

  <h1>Curriculum Vitae</h1>

  <img width="300" src="<?php echo get_template_directory_uri(); ?>/assets/images/Najoua.jpg">
  <h2>Najoua Jabour</h2>

  <h3>Informations Personnelles</h3>
  <ul>
    <li><strong>Nom :</strong> Jabour</li>
    <li><strong>Prénom :</strong> Najoua</li>
    <li><strong>Date de Naissance :</strong> 15 juillet 2002 (21 ans)</li>
    <li><address><strong>Adresse :</strong> 27, Avenue Jean Dubrucq, 1080 Bruxelles, Belgique</address></li>
    <li><strong>Téléphone :</strong> <a href="tel:+32498749642">+32 4 98 74 96 42</a></li>
    <li><strong>Email :</strong> <a href="mailto:najoua.jabour@isfsc.be">najoua.jabour@isfsc.be</a></li>
  </ul>
  
  <h3>Expériences Professionnelles</h3>
  <ul>
    <li>Hôtesse d'accueil - World Of Mind
      <ul>
        <li>Vente des tickets au guichet</li>
        <li>Accueil et explication du concept aux clients</li>
        <li>S'assurer que tout se passe bien</li>
        <li>Gérer le stock et la boutique</li>
      </ul>
    </li>
    <li>Caissière polyvalente - Carrefour Express
      <ul>
        <li>Gérer le stock et la boutique</li>
      </ul>
    </li>
    <li>Caissière polyvalente - ADAM FOOD
      <ul>
        <li>Prendre les commandes</li>
        <li>Préparer les commandes</li>
        <li>Répondre aux téléphones et aux bornes de livraison</li>
        <li>Gérer le stock</li>
        <li>La plonge et nettoyer le restaurant</li>
      </ul>
    </li>
    <li>Animatrice - CEMOM 
      <ul>
        <li>Préparer des activités</li>
        <li>Se charger des enfants</li>
      </ul>
    </li>
    <li>Caissière polyvalente - Domino's Pizza
      <ul>
        <li>Prendre les commandes</li>
        <li>Préparer les commandes</li>
        <li>Gérer le stock</li>
        <li>La plonge et nettoyer le restaurant</li>
      </ul>
    </li>
  </ul>

  <?php
    $formations = new WP_Query([
        'post_type' => 'formations',
    ]);
  ?>
  <?php
    $skillslist = new WP_Query([
        'post_type' => 'skills',
    ]);
  ?>
   <?php
    $langueslist = new WP_Query([
        'post_type' => 'langues',
    ]);
  ?>
   <?php
    $Centres_i = new WP_Query([
        'post_type' => 'Centres_i',
    ]);
  ?>
  <?php if ($formations->have_posts()): ?>
  <h3>Formations</h3>
  <ul>
    <?php while ($formations->have_posts()): $formations->the_post(); ?>
      <li><?php the_title(); ?> - <a href=" <?php the_permalink(); ?>" >voir</a></li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>
<?php if ($skillslist->have_posts()): ?>
  <h3>Compétences</h3>
  <ul>
    <?php while ($skillslist->have_posts()): $skillslist->the_post(); ?>
      <li><?php the_title(); ?> - <a href=" <?php the_permalink(); ?>" >voir</a></li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>

<?php if ($langueslist->have_posts()): ?>
  <h3>Langues</h3>
  <ul>
    <?php while ($langueslist->have_posts()): $langueslist->the_post(); ?>
      <li><?php the_title(); ?></li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>

<?php if ($Centres_i->have_posts()): ?>
  <h3>Centres d'Intérêt</h3>
  <ul>
    <?php while ($Centres_i->have_posts()): $Centres_i->the_post(); ?>
      <li><?php the_title(); ?></li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>

  <footer>
    <p>CV de Najoua Jabour 2023-2024</p>
  </footer>
</body>
</html> 

<?php get_footer(); ?>
