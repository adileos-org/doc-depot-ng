<?php
namespace DocDepot\SiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use DocDepot\SiteBundle\Entity\ActeurSocial;
use DocDepot\SiteBundle\Entity\Beneficiaire;
use DocDepot\SiteBundle\Entity\OrganismeSocial;

class UsersData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $org01 = new OrganismeSocial();
        $org01->setName("Abri44");
        $org01->setAddress("1 rue premiere");
        $org01->setPhoneNumber("0666666666");
        $manager->persist($org01);

        $as01 = new ActeurSocial();
        $as01->setUsername('as01');
        $as01->setEmail('as01@example.com');
        $as01->setPlainPassword('as01');
        $as01->addRole('ROLE_AS');
        $as01->setEnabled(true);
        $as01->setFirstName("alain");
        $as01->setLastName("alain");
        $as01->setPhoneNumber("0666666666");
        $as01->setOrganismeSocial($org01);
        $manager->persist($as01);

		$benef01 = new Beneficiaire();
        $benef01->setUsername('benef01');
        $benef01->setEmail('benef01@example.com');
        $benef01->setPlainPassword('benef01');
        $benef01->addRole('ROLE_BENEF');
        $benef01->setEnabled(true);

        $benef01->setsurname('jojo');

        $manager->persist($benef01);

        $manager->flush();
    }
}

?>