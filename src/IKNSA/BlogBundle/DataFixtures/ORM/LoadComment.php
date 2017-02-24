<?php

namespace IKNSA\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use IKNSA\BlogBundle\Entity\Comment;

class LoadComment extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $comment1 = new Comment;
        $comment1->setUser($this->getReference('user-contributor'));
        $comment1->setPost($this->getReference('post-one'));
        $comment1->setCreatedAt(new \Datetime("now"));
        $this->addReference('comment-one-post-one', $comment1);
        $comment1->setComment("First !");
        $comment1->setLike("0");
        $manager->persist($comment1);

        $comment2 = new Comment;
        $comment2->setComment("Trop bien !");
        $comment2->setLike("1");
        $comment2->setCreatedAt(new \Datetime);
        $comment2->setUser($this->getReference('user-contributor'));
        $comment2->setPost($this->getReference('post-one'));
        $this->addReference('comment-two-post-one', $comment2);
        $manager->persist($comment2);

        $comment3 = new Comment;
        $comment3->setComment("CANARD !");
        $comment3->setLike("0");
        $comment3->setCreatedAt(new \Datetime);
        $comment3->setUser($this->getReference('user-contributor'));
        $comment3->setPost($this->getReference('post-two'));
        $this->addReference('comment-one-post-two', $comment3);
        $manager->persist($comment3);

        $manager->flush();
    }

    public function getOrder()
    {
        return 300;
    }
}
