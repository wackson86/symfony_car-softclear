<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'Tienda\VentaBundle\Repository\ProductsRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'fieldName' => 'name',
   'type' => 'varchar',
   'length' => 150,
   'columnName' => 'name',
  ));
$metadata->mapField(array(
   'fieldName' => 'description',
   'type' => 'varchar',
   'length' => 150,
   'columnName' => 'description',
  ));
$metadata->mapField(array(
   'fieldName' => 'price',
   'type' => 'decimal',
   'length' => 10,
   'columnName' => 'price',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);