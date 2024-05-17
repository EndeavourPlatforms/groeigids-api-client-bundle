<?php

declare(strict_types=1);

namespace Endeavour\GroeigidsApiClientBundle;

use Endeavour\GroeigidsApiClientBundle\DependencyInjection\GroeigidsApiClientExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class GroeigidsApiClientBundle extends AbstractBundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new GroeigidsApiClientExtension();
    }
}