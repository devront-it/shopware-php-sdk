<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PaymentMethod;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PaymentMethodDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'payment_method';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PaymentMethodEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PaymentMethodCollection::class;
    }
}