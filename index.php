<?php get_header(); ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css ">
    <link href='https://fonts.googleapis.com/css?family=Product+Sans:400,400i,700,700i' rel='stylesheet' type='text/css'>

    <title>Produits en vrac</title>
  </head>

  <body>
    <section>
      <article class="head_search">
        <h1 class="titles">Où acheter mes produits en vrac ?</h1>
        <form> <input class="location_input" type="text" name="location_shop" placeholder="Ville, magasin"><p class="location_input"> et/ou </p><input class="location_input" type="text" name="product" placeholder="Produit"> <button type="submit" class="fa fa-map-marker" aria-hidden="true"> </button></form>
        <a href=“#” class="see_map">Voir la carte</a>
        <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
      </article>
    </section>

    <div id="banner_blog">Lisez l'avancée du site sur mon blog et participez à son élaboration
    </div>

    <section>
      <img src="https://a4.odistatic.net/images/landingpages/vacation/640x480/paris_640x480.jpg" alt="Paris">
      <p>Paris</p>
      <img src="http://carte-escapegame.fr/wp-content/uploads/2016/03/grenoble.jpg" alt="grenoble">
      <p>Grenoble</p>
      <img src="http://bonjour-lyon.fr/wp-content/uploads/2013/06/lyon-quai-saone-julien-reboulet.jpg" alt="lyon">
      <p>Lyon</p>
      <img src="http://pvtistes.net/wp-content/uploads/2012/09/Osaka-vu-de-nuit-800x529.jpg" alt="autres villes">
      <p>Autres villes</p>
      <a href=“#” class="see_map">Voir la carte</a>
    </section>

    <section>
      <article>
        <h2 class="titles">Un monde zéro déchet tous ensemble</h2>
        <h3 class="titles">Ajoutez vos bonnes adresses de vrac (épiceries, magasins bio, supermarchés, bouchers, etc)</h3>
        <form>
          <input class="commerce_add" type="text" name="commerce_name" placeholder="Ex: Day by Day">
          <input class="commerce_add" type="text" name="commerce_address1" placeholder="Adresse">
          <input class="commerce_add" type="text" name="commerce_address2">
          <input class="commerce_add" type="text" name="postcode" placeholder="Code Postal">
          <input class="commerce_add" type="text" name="city" placeholder="Ville">
          <input class="commerce_add" type="text" name="country" placeholder="Pays">
          <button type=“button”>Valider l'ajout d'un commerce </button>
        </form>
      </article>
    </section>

    <section>
      <article>
        <p>Si vous ne donnez qu'une fois par mois, pensez à moi</p>
        <button type="button">Faire un don</button>
      </article>
    </section>

  </body>
</html>

<?php get_footer(); ?>
