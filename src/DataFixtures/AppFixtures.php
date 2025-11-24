<?php

namespace App\DataFixtures;

use App\Entity\Bottle;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $bourgogne = new Bottle();
        $bourgogne->setDesignation('Bourgogne');
        $bourgogne->setDescription('Bourgogne is a region in France that produces some of the best wines in the world.');
        $bourgogne->setPrice(400);
        $bourgogne->setImgurl('https://www.bourgogne.fr/sites/default/files/styles/crop_16_9_1200x675/public/2024-08/bourgogne_1_0.jpg?itok=3jCqX6cI');
        $manager->persist($bourgogne);

        $champagne = new Bottle();
        $champagne->setDesignation('Champagne');
        $champagne->setDescription('Champagne is a region in France that produces some of the best wines in the world.');
        $champagne->setPrice(600);
        $champagne->setImgurl('https://www.champagne.fr/sites/default/files/styles/crop_16_9_1200x675/public/2024-08/champagne_1_0.jpg?itok=3jCqX6cI');
        $manager->persist($champagne);

        $bordeaux = new Bottle();
        $bordeaux->setDesignation('Bordeaux');
        $bordeaux->setDescription('Bordeaux is a region in France that produces some of the best wines in the world.');
        $bordeaux->setPrice(300);
        $bordeaux->setImgurl('https://www.bordeaux.fr/sites/default/files/styles/crop_16_9_1200x675/public/2024-08/bordeaux_1_0.jpg?itok=3jCqX6cI');
        $manager->persist($bordeaux);

        $rhone = new Bottle();
        $rhone->setDesignation('Rhône');
        $rhone->setDescription('Rhône is a region in France that produces some of the best wines in the world.');
        $rhone->setPrice(100);
        $rhone->setImgurl('https://www.rhone.fr/sites/default/files/styles/crop_16_9_1200x675/public/2024-08/rhone_1_0.jpg?itok=3jCqX6cI');
        $manager->persist($rhone);

        $loire = new Bottle();
        $loire->setDesignation('Loire');
        $loire->setDescription('Loire is a region in France that produces some of the best wines in the world.');
        $loire->setPrice(50);
        $loire->setImgurl('https://www.loire.fr/sites/default/files/styles/crop_16_9_1200x675/public/2024-08/loire_1_0.jpg?itok=3jCqX6cI');
        $manager->persist($loire);

        $provence = new Bottle();
        $provence->setDesignation('Provence');
        $provence->setDescription('Provence is a region in France that produces some of the best wines in the world.');
        $provence->setPrice(120);
        $provence->setImgurl('https://www.provence.fr/sites/default/files/styles/crop_16_9_1200x675/public/2024-08/provence_1_0.jpg?itok=3jCqX6cI');
        $manager->persist($provence);

        $alsace = new Bottle();
        $alsace->setDesignation('Alsace');
        $alsace->setDescription('Alsace is a region in France that produces some of the best wines in the world.');
        $alsace->setPrice(250);
        $alsace->setImgurl('https://www.alsace.fr/sites/default/files/styles/crop_16_9_1200x675/public/2024-08/alsace_1_0.jpg?itok=3jCqX6cI');
        $manager->persist($alsace);

        $languedoc = new Bottle();
        $languedoc->setDesignation('Languedoc');
        $languedoc->setDescription('Languedoc is a region in France that produces some of the best wines in the world.');
        $languedoc->setPrice(75);
        $languedoc->setImgurl('https://www.languedoc.fr/sites/default/files/styles/crop_16_9_1200x675/public/2024-08/languedoc_1_0.jpg?itok=3jCqX6cI');
        $manager->persist($languedoc);

        $manager->flush();
    }
}
