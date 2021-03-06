<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Custom;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Custom\ExtensionEntity;
use RIPS\ConnectorBundle\Hydrators\Application\CustomHydrator;

class ExtensionHydrator
{
    /**
     * Hydrate a collection of extension objects into a collection of
     * ExtensionEntity objects
     *
     * @param stdClass[] $extensions
     * @return ExtensionEntity[]
     */
    public static function hydrateCollection(array $extensions)
    {
        $hydrated = [];

        foreach ($extensions as $extension) {
            $hydrated[] = self::hydrate($extension);
        }

        return $hydrated;
    }

    /**
     * Hydrate a extension object into a ExtensionEntity object
     *
     * @param stdClass $extension
     * @return ExtensionEntity
     */
    public static function hydrate(stdClass $extension)
    {
        $hydrated = new ExtensionEntity();

        if (isset($extension->id)) {
            $hydrated->setId($extension->id);
        }

        if (isset($extension->extension)) {
            $hydrated->setExtension($extension->extension);
        }

        if (isset($extension->custom)) {
            $hydrated->setCustom(CustomHydrator::hydrate($extension->custom));
        }

        return $hydrated;
    }
}
