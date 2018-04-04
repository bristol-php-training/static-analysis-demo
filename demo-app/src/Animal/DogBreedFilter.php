<?php

declare(strict_types=1);


namespace BristolPhpTraining\BadCode\Animal;


class DogBreedFilter
{

    /**
     * @param Dog[] $dogs
     * @return array of DogBreedCount
     */
    public function getDogBreedCounts(iterable $dogs): array
    {
        $dogBreedCounts = [];

        foreach($dogs as $dog) {
            $breed = $dog->getBreed();

            foreach($dogBreedCounts as $dogBreedCount) {
                if ($dogBreedCount->getBreed() == $breed) {
                    $isFemale = $dog->isFemale();
                    $dogBreedCount->incrementCount($isFemale);
                } else {
                    $dogBreedCounts[] = new DogBreedCount($breed, $isFemale);
                }
            }

        }

    }

}
