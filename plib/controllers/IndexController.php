<?php
// Copyright 1999-2026. WebPros International GmbH.
class IndexController extends pm_Controller_Action
{
    public function indexAction()
    {
        $this->view->name = pm_Session::getClient()->getProperty('pname');
    }
}
