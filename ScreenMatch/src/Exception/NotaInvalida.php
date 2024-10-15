<?php

namespace ScreenMatch\src\Exception;

class NotaInvalida extends \InvalidArgumentException
{
    public function __construct()
    {
        parent::__construct('Nota tem que ser entre 0 e 10');
    }
}