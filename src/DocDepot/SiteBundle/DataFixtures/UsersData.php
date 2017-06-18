<?php
namespace DocDepot\SiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use DocDepot\SiteBundle\Entity\User;

class UsersData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $as01 = new User();
        $as01->setUsername('as01');
        $as01->setEmail('as01@example.com');
        $as01->setPlainPassword('as01');
        $as01->addRole('ROLE_AS');
        $manager->persist($as01);

		$benef01 = new User();
        $benef01->setUsername('benef01');
        $benef01->setEmail('benef01@example.com');
        $benef01->setPlainPassword('benef01');
        $benef01->addRole('ROLE_BENEF');
        $manager->persist($as01);

        $manager->flush();
    }
}

?>