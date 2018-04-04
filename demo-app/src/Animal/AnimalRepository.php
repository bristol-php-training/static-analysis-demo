<?php

declare(strict_types=1);


namespace BristolPhpTraining\BadCode\Animal;


class AnimalRepository
{

    /**
     * @var AbstractAnimal[]
     */
    private $animals;


    /**
     * @param AbstractAnimal $abstractAnimal
     */
    public function addAnimal(AbstractAnimal $abstractAnimal)
    {
        $this->animals[] = $abstractAnimal;
    }


    /**
     * Returns first Animal of the given name.
     *
     * @param string $name
     * @return AbstractAnimal
     */
    public function findFirst(string $name)
    {
        foreach($this->animals as $animal) {
            if ($animal->getName() === $name) {
                return $animal;
            }
        }
    }





    public function findFirstDog(): ?Dog
    {
        foreach ($this->animals as $animal) {
            if ($animal instanceof Dog) {
                return $animal;
            }
        }

        return null;
    }
}




