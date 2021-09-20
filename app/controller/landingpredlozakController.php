<?php

class landingpredlozakController extends AutorizacijaController
{
    public function index()
    {
        $this->view->render('view' . 
        DIRECTORY_SEPARATOR . 'landingpredlozak');
    }
}