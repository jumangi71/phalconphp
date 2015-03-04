<?php

class ErrorsController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Oops!');
        parent::initialize();
    }

    public function show404Action()
    {
        var_dump(404);
    }

    public function show401Action()
    {
        var_dump(401);
    }

    public function show500Action()
    {
        var_dump(500);
    }
}
