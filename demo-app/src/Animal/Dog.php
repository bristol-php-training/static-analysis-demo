<?php

declare(strict_types=1);


namespace BristolPhpTraining\BadCode\Animal;


class Dog extends AbstractAnimal
{

    private $breed;

    public function __construct(string $breed, bool $isFemale)
    {
        $this->breed = $breed;
        $this->isFemale = $isFemale;
    }

    /**
     * @return int
     */
    public function getBreed()
    {
        return $this->breed;
    }


    public function isFemale(): bool
    {
        return $this->isFemale;
    }
}
