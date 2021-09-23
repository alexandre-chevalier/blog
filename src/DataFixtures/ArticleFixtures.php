<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixture extends Fixture{
    public function load(ObjectManager $manager)
    {
        for ($i=0; $i < 20 ; $i++) { 
          $article = new Article();
          $article->setTitre('fixtur');
          $article->setContenu('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis condimentum neque.
           Etiam eu lacus sit amet nibh faucibus efficitur varius et elit. Nulla ullamcorper vehicula orci in pulvinar. Maecenas eget eros non lectus gravida tristique sit amet eget nibh. Quisque vitae rhoncus tortor, ac ornare ante. Integer leo risus, euismod a orci ac, ornare porttitor ex. Mauris condimentum dolor lacus, vel mattis magna vehicula sed. Cras lobortis elit lectus, sit amet cursus augue tincidunt nec. Suspendisse potenti. Aenean convallis enim in enim semper, varius condimentum quam tristique. Phasellus ut felis id libero pretium posuere. Curabitur ultrices lacus augue, eget sodales ipsum ultrices eu.
          Etiam leo turpis, pulvinar in dolor vitae, lobortis cursus augue. Nulla quis pellentesque odio. Mauris porttitor nisl erat, et interdum erat sagittis eget. Nunc consequat dolor tortor, ut accumsan sem mattis vitae. Integer ac dolor leo. Suspendisse et scelerisque magna. Integer vel condimentum nunc. Curabitur gravida nisi finibus nisi ornare dignissim. Donec dolor arcu, suscipit eu ligula luctus, varius imperdiet ante. Praesent sed dolor vitae nulla mattis finibus quis non nunc. Nulla posuere libero ut urna consequat, at porttitor neque elementum. Donec sed augue rutrum, pulvinar quam ac, ornare dui. Nam ut turpis odio. Suspendisse pharetra lorem sed lorem hendrerit, in rutrum libero fermentum. Duis posuere
           felis nisl, ut varius ante commodo vel. Mauris posuere libero id laoreet lacinia.');

          $manager->persist($article);

        }

        $manager->flush();
    }
}
