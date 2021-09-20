<?php
// singleton pattern https://phpenthusiast.com/blog/the-singleton-design-pattern-in-php
class DB extends PDO
{

    private static $instanca=null;

    private function __construct($baza)
    {
        $dsn='mysql:host=' . $baza['server'] . 
        ';dbname=' . $baza['baza'];
        parent::__construct($dsn,$baza['korisnik'],$baza['lozinka']);
        $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    }


    public static function getInstanca()
    {
        //prvi puta kada nismo spojeni na bazu;
        if(self::$instanca==null){
            self::$instanca = new self(App::config('baza'));
        }
        return self::$instanca;
    }
    
}