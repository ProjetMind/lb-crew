<?php

namespace LBcrew\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LBcrewUserBundle extends Bundle
{
    public function getParent() 
    {
        return 'FOSUserBundle';
    }
}

