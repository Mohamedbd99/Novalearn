<?php
namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class NoProfanity extends Constraint
{
    public $message = 'Le texte contient un langage inapproprié.';
}
