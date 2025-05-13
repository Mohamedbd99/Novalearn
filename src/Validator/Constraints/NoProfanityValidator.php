<?php
namespace App\Validator\Constraints;

use App\Service\ProfanityFilter;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;
use Symfony\Component\Validator\Exception\UnexpectedValueException;

class NoProfanityValidator extends ConstraintValidator
{
    private ProfanityFilter $profanityFilter;

    public function __construct(ProfanityFilter $profanityFilter)
    {
        $this->profanityFilter = $profanityFilter;
    }

    public function validate($value, Constraint $constraint): void
    {
        if (!$constraint instanceof NoProfanity) {
            throw new UnexpectedTypeException($constraint, NoProfanity::class);
        }

        if (null === $value || '' === $value) {
            return;
        }

        if (!is_string($value)) {
            throw new UnexpectedValueException($value, 'string');
        }        if ($this->profanityFilter->containsProfanity($value)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $value)
                ->addViolation();
        }
    }
}
