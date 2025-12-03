<?php

declare(strict_types=1);


namespace App\Service;


use App\Entity\Character;
use App\Repository\CharacterRepository;

class CharacterService
{
    public function __construct(private readonly CharacterRepository $characterRepository)
    {
    }

    public function getAllCharacters() : array
    {
        return $this->characterRepository->getAllCharacters();
    }

    public function createNewCharacter(Character $character) :void
    {
        $this->characterRepository->createCharacter($character);
    }
}
