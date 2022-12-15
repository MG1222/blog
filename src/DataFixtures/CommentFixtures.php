<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\User;

class CommentFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
		$comment = new Comment;
		$comment->setUserId($this->getReference('user' . rand(0, 4)));
		$comment->setPostId($this->getReference('post' . rand(0, 4)));
		$manager->persist($comment);

        $manager->flush();
    }
}
