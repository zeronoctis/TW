<?php

	namespace TW\neloBundle\Entity;

	use Doctrine\ORM\EntityRepository;

	class ProductRepository extends EntityRepository{

		public function findAllOrderedByName(){
			return $this->getEntityManager()->createQuery('SELECT p FROM TWneloBundle:Product p ORDER BY p.name ASC')->getResult();
		}

		public function findGreaterThanPriceOrderedByPrice($price){
			$em = $this->getEntityManager();
			$repository = $em->getRepository('TWneloBundle:Product');
			$query = $repository->createQueryBuilder('p')
			->where('p.price > :price')
			->setParameter('price', $price)
			->orderBy('p.price', 'ASC')
			->getQuery();

			return $query->getResult();
		}
	}


?>