<form method="POST" class="pb-sm-6 shake" id="contactForm" data-toggle="validator" role="form">
    <!-- <form action="traitement.php" method="POST" class="pb-sm-6" id="contactForm"> -->
    <div class="d-flex flex-column w-75 font-size-18">
        <input type="text" name="nom" id="nom" class="bg-white-op40 border-0 text-prune-dark  font-family-bebas pl-3 mb-3" placeholder="Nom *" required />
        <div class="help-block with-errors"></div>
        <input type="text" name="prenom" id="prenom" class="bg-white-op40 border-0 text-prune-dark  font-family-bebas  pl-3 mb-3" placeholder="Prénom *" required />
        <div class="help-block with-errors"></div>
        <input type="text" name="societe" id="societe" class="bg-white-op40 border-0 text-prune-dark font-family-bebas  pl-3 mb-3" placeholder="Société" />
        <input type="text" name="telephone" id="telephone" class="bg-white-op40 border-0 text-prune-dark  font-family-bebas  pl-3 mb-3" placeholder="Téléphone" />
        <input type="email" name="email" id="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,8}$" class="bg-white-op40 border-0 text-prune-dark  font-family-bebas pl-3 mb-3" placeholder="E-mail *" required />
        <div class="help-block with-errors"></div>
        <textarea name="message" id="message" class="bg-white-op40 border-0 text-prune-dark  font-family-bebas pl-3 mb-3" placeholder="Votre message *" cols="30" rows="10" required></textarea>
        <div class="help-block with-errors"></div>
    </div>
    <div>
        <?php include "recaptcha.php" ?>
    </div>
    <button id="form-submit" class="bg-prune-dark font-family-bebas font-size-24 text-blue  border-0" type="submit">ENVOYER</button>
    <div id="msgSubmit" class="h3 hidden"></div>
</form>