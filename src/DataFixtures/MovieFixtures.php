<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The Dark Knight');
        $movie->setReleaseYear(2008);
        $movie->setDescription(['This is the description of the Dark Knight']);
        $movie->setImagePath('https://assets-in.bmscdn.com/discovery-catalog/events/tr:w-400,h-600,bg-CCCCCC/et00391731-lhdetxuqcc-portrait.jpg');
        
        // $movie->addActor($this->getReference('actor_1'));
        // $movie->addActor($this->getReference('actor_2'));

        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Avengers: Endgame');
        $movie2->setReleaseYear(2019);
        $movie2->setDescription(['This is the description of Avengers: Endgame']);
        $movie2->setImagePath('https://images.lifestyleasia.com/wp-content/uploads/sites/5/2022/03/11193455/iconic-movie-characters-2-1600x900.jpg');

        // $movie2->addActor($this->getReference('actor_3'));
        // $movie2->addActor($this->getReference('actor_4'));

        $manager->persist($movie2);

        $manager->flush();
    }
}