<?php

namespace Jiwon\CCCPBundle\Repository;

/**
 * TemplateRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TemplateRepository extends \Doctrine\ORM\EntityRepository
{
	public function findAll()
    {
        $query = $this->createQueryBuilder('t')
        	->leftJoin('t.id_categorie', 'c')
        	->orderBy('c.categorie', 'ASC')
        	->addOrderBy('t.nom', 'ASC');

        return $query->getQuery()->getResult();
    }
}
