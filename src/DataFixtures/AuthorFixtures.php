<?php

namespace App\DataFixtures;

use App\Entity\Author;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AuthorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $author = new Author();

        $author->setFirstName('Zakaria');
        $author->setLastName('Hamdino');
        $author->setAge(22);
        $manager->persist($author);

        $author2 = new Author();

        $author2->setFirstName('Rania');
        $author2->setLastName('Benlahcen');
        $author2->setAge(19);
        $manager->persist($author2);
        

        $manager->flush();   
        
        $this->addReference('author_1', $author);
        $this->addReference('author_2', $author2);
    }
}
