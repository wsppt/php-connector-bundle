<?php

namespace RIPS\ConnectorBundle\Services\Application\Custom;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\SinkHydrator;
use RIPS\ConnectorBundle\InputBuilders\Application\Custom\SinkBuilder;
use RIPS\ConnectorBundle\Entities\Application\Custom\SinkEntity;

class SinkService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new SinkService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all sinks for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return SinkEntity[]
     */
    public function getAll($appId, $customId, array $queryParams)
    {
        $sinks = $this->api->customs()->sinks()->getAll($appId, $customId, $queryParams);

        return SinkHydrator::hydrateCollection($sinks);
    }

    /**
     * Get sink for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sinkId
     * @return SinkEntity
     */
    public function getById($appId, $customId, $sinkId)
    {
        $sink = $this->api->customs()->sinks()->getById($appId, $customId, $sinkId);

        return SinkHydrator::hydrate($sink);
    }

    /**
     * Create sink for custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param SinkBuilder $input
     * @return SinkEntity
     */
    public function create($appId, $customId, SinkBuilder $input)
    {
        $sink = $this->api->customs()->sinks()->create($appId, $customId, $input->toArray());

        return SinkHydrator::hydrate($sink);
    }

    /**
     * Update sink for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sinkId
     * @param SinkBuilder $input
     * @return SinkEntity
     */
    public function update($appId, $customId, $sinkId, SinkBuilder $input)
    {
        $sink = $this->api->customs()->sinks()->update($appId, $customId, $sinkId, $input->toArray());

        return SinkHydrator::hydrate($sink);
    }

    /**
     * Delete all sink for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return void
     */
    public function deleteAll($appId, $customId, array $queryParams = [])
    {
        $this->api->customs()->sinks()->deleteAll($appId, $customId, $queryParams);
    }

    /**
     * Delete sink for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sinkId
     * @return void
     */
    public function deleteById($appId, $customId, $sinkId)
    {
        $this->api->customs()->sinks()->deleteById($appId, $customId, $sinkId);
    }
}
