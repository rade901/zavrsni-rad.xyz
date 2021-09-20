<?php

$dev = $_SERVER['REMOTE_ADDR']==='127.0.0.1' ? true : false;

if($dev){
    $baza=[
        'server'=>'localhost',
        'baza'=>'edunovapp23',
        'korisnik'=>'root',
        'lozinka'=>''  
    ];
    $url = 'http://zavrsni-rad.xyz/';
}else{
    $baza=[
        'server'=>'localhost',
        'baza'=>'hefest_pp23',
        'korisnik'=>'hefest_pp23',
        'lozinka'=>'Vukovarska51klisa.'  
    ];
    $url = 'http://polaznik06.edunova.hr/';
}
return [
    'dev'=> $dev,
    'nazivApp'=>'Edunova APP',
    'url'=>$url,
    'baza'=>$baza
];