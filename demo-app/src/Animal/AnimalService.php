<?php

declare(strict_types=1);


namespace BristolPhpTraining\BadCode\Animal;



class AnimalService
{

    /**
     * @var AnimalRepository
     */
    private $animalRepository;


    public function printAnimal(string $name)
    {
        $animal = $this->animalRepository->findFirst($name);
        if ($animal === null) {
            echo "Could not find animal with name [$name]";
        } else {
            echo "Found an animal with name [$name]";
        }
    }


    public function printDogBreed()
    {
        $dog = $this->animalRepository->findFirstDog();
        echo $dog->getBreed();
    }



    public function isFirstDogIsFemale()
    {
        $dog = $this->animalRepository->findFirstDog();
        if ($dog->isFemale()) {
            return true;
        } else {
            return false;
        }

        echo "I don't know what gener the dog is";
        return null;
    }
}
