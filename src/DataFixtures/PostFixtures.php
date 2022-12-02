<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $post = new Post();

        $post->setTitle('Fixture post');
        $post->setDescription('this is a description');
        $post->setDate(new \DateTime());
        $post->setImagePath('https://cdn.pixabay.com/photo/2021/12/26/19/27/nature-6895756_1280.jpg');
        $post->setAuthor($this->getReference('author_1'));

        $manager->persist($post);


        $post2 = new Post();

        $post2->setTitle('post 2');
        $post2->setDescription('this is a description for post 2');
        $post2->setDate(new \DateTime());
        $post2->setImagePath('https://cdn.pixabay.com/photo/2021/11/22/05/02/dalmatian-6815838_1280.jpg');
        $post2->setAuthor($this->getReference('author_2'));

        $manager->persist($post2);

        $manager->flush();

    }
}
