<?php

/**
 * Created by PhpStorm.
 * User: gir
 * Date: 22/09/15
 * Time: 15:05
 */
namespace GroblogBundle\Entity;

use Doctrine\ORM\EntityRepository;

class PostRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByLastPost($limit)
    {
        return $this->findBy(
            array(),
            array(
                "datebillet" => "DESC",
                "id" => "DESC"
            ),
            $limit
        );
    }
}