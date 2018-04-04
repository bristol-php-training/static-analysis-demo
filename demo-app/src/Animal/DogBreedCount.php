<?php

declare(strict_types=1);


namespace BristolPhpTraining\BadCode\Animal;


class DogBreedCount
{

    private $breed;

    /**
     * DogBreedCount constructor.
     * @param string $breed
     */
    public function __construct(string $breed)
    {
        $this->count = 1;
    }

    public function increment(bool $isFemale): void
    {
        $this->count++;
        if ($isFemale) {
            $this->femaleCount++;
        }
    }

    /**
     * @return mixed
     */
    public function getBreed(): string
    {
        return $this->breed;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }


    public function getFemaleCount(): int
    {
        return $this->femaleCount;
    }

}
