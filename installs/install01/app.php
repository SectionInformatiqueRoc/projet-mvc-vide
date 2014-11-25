<?php

namespace Install;

class App {

    const C = 'Utilisateur';
    const A = 'authentication';
    const TITLE = 'SIO CRM';

    const SALT_BEFORE='dmlkfgj 8/*a12("';
    const SALT_AFTER='nsdèsqmaé3d_';
    
    //internationalisation
    static $lang = 'fr_FR.UTF-8';
    static $domain = 'messages';

    static function init() {
        \MVC\Session::init();
        
    }

}
