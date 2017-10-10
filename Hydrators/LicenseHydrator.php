<?php

namespace RIPS\ConnectorBundle\Hydrators;

use \stdClass;
use \DateTime;
use RIPS\ConnectorBundle\Hydrators\QuotaHydrator;
use RIPS\ConnectorBundle\Hydrators\OrgHydrator;

class LicenseHydrator
{
    /**
     * Hydrate a collection of license objects into a collection of
     * LicenseEntity objects
     *
     * @param stdClass[] $users
     * @return LicenseEntity[]
     */
    public static function hydrateCollection(array $licenses)
    {
        $hydrated = [];

        foreach ($licenses as $license) {
            $hydrated[] = self::hydrate($license);
        }

        return $hydrated;
    }

    /**
     * Hydrate a license object into a LicenseEntity object
     *
     * @param stdClass $license
     * @return LicenseEntity
     */
    public static function hydrate(stdClass $license)
    {
        $hydrated = new LicenseEntity();

        if (isset($license->id)) {
            $hydrated->setId($license->id);
        }

        if (isset($license->hardware_id)) {
            $hydrate->setHardwareId($license->hardware_id);
        }

        if (isset($license->key)) {
            $hydrated->setKey($license->key);
        }

        if (isset($license->submission)) {
            $hydrated->setSubmission(new DateTime($license->submission));
        }

        if (isset($license->valid_until)) {
            $hydrated->setValidUntil(new DateTime($license->valid_until));
        }

        if (isset($license->quota_distributed)) {
            $hydrated->setQuotaDistributed($license->quota_distributed);
        }

        if (isset($license->quotas) && is_array($license->quotas)) {
            $hydrated->setQuotas(QuotaHydrator::hydrateCollection($license->quotas));
        }

        if (isset($license->parent)) {
            $hydrated->setParent(self::hydrate($license->parent));
        }

        if (isset($license->child)) {
            $hydrate->setChild(self::hydrate($license->child));
        }

        if (isset($license->organisation)) {
            $hydrated->setOrganisation(OrgHydrator::hydrate($license->organisation));
        }

        return $hydrated;
    }
}
