<?php

namespace LBcrew\BootstrapExtensionBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LBcrewBootstrapExtensionBundle extends Bundle
{
    public function getParent() {
        return 'BcBootstrapBundle';
    }
}
