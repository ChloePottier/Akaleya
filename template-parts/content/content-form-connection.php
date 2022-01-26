<p class='py-5'>Pour visualiser cette page, merci de vous connecter.</p>
<?php wp_login_form(array(
    'redirect'       => get_permalink(), // par défaut renvoie vers la page courante
    'label_username' => 'Identifiant',
    'label_password' => 'Mot de passe',
    'label_remember' => 'Se souvenir de moi',
    'label_log_in'   => 'Se connecter',
    'form_id'        => 'login-form',
    'id_username'    => 'user-login',
    'id_password'    => 'user-pass',
    'id_remember'    => 'rememberme',
    'id_submit'      => 'wp-submit',
    'remember'       => true, //afficher l'option se souvenir de moi
    'value_remember' => false //se souvenir par défaut ?
));
