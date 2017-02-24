<?php

namespace IKNSA\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use IKNSA\BlogBundle\Entity\Post;

class LoadPost extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $one = new Post;
        $one->setTitle('Apres un selfie ayant mal tourné, Thomas Pesquet à la dérive');
        $one->setSummary('N° 1');
        $one->setContent('Alors qu’il tentait de se prendre en photo en train d’effectuer un « dab » sur fond de planète Terre, un passage de débris a brutalement projeté Thomas Pesquet dans le vide intersidéral. Le contact radio n’ayant pas été rompu, « l’astronaute le plus cool de l’univers » en profite pour partager son sauvetage sur les réseaux sociaux.');
        $one->setCreatedAt(new \Datetime);
        $one->setExtension('jpeg');
        $one->setUser($this->getReference('user-contributor'));
        $manager->persist($one);

        $two = new Post;
        $two->setTitle('Grippe aviaire : abattage préventif de tous les éleveurs de canards des Landes');
        $two->setSummary('N° 2');
        $two->setContent('Quelques minutes après avoir annoncé l’abattage préventif de tous les canards landais, le ministre de l’agriculture, Stéphane Le Fol,l a enfoncé le clou. Pour éviter tout risque de propagation de l’épidémie de grippe aviaire, il a également demandé l’abattage de tous les éleveurs de la région. Reportage.');
        $two->setCreatedAt(new \Datetime);
        $two->setExtension('jpeg');
        $two->setUser($this->getReference('user-contributor'));
        $manager->persist($two);

        $three = new Post;
        $three->setTitle('Ligue 1 : un penalty sera désormais accordé à Lyon dès le coup d’envoi des matchs');
        $three->setSummary('N° 3');
        $three->setContent('La décision a été prise par la Ligue de Football Professionnel (LFP) ce matin. Afin de donner une chance aux équipes adverses de revenir au score, le traditionnel penalty offert par les arbitres à l’Olympique Lyonnais ne pourra plus être sifflé en fin de rencontre.');
        $three->setCreatedAt(new \Datetime);
        $three->setExtension('jpeg');
        $three->setUser($this->getReference('user-contributor'));
        $manager->persist($three);

        $manager->flush();

        $this->addReference('post-one', $one);
        $this->addReference('post-two', $two);
        $this->addReference('post-three', $three);
    }

    public function getOrder()
    {
        return 200;
    }
}
