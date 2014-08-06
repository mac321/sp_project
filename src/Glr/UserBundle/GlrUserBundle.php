<?php

namespace Glr\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GlrUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
