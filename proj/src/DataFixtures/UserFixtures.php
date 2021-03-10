<?php

namespace App\DataFixtures;

use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    /**
     * UserFixtures constructor.
     * @var UserPasswordEncoderInterface $encoder
     */
    public function  __construct(UserPasswordEncoderInterface $encoder){
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager)
    {
        $utilisateur = new Utilisateur();
        $utilisateur->setNom('demo1');
        $utilisateur->setPrenom('demo1');
        $utilisateur->setemail('demo1');
        $utilisateur->setMdp($this->encoder->encodePassword($utilisateur,'demo1'));
        $manager->persist($utilisateur);
        $manager->flush();
    }
}
