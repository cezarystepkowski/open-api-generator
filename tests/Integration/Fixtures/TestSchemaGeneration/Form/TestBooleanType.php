<?php

declare(strict_types=1);

namespace Speicher210\OpenApiGenerator\Tests\Integration\Fixtures\TestSchemaGeneration\Form;

use Symfony\Component\Form\AbstractType;

final class TestBooleanType extends AbstractType
{
    public function getBlockPrefix() : string
    {
        return 'boolean';
    }
}
