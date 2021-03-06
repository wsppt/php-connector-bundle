<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Hydrators\ApplicationHydrator;
use RIPS\ConnectorBundle\InputBuilders\ApplicationBuilder;
use RIPS\ConnectorBundle\Entities\ApplicationEntity;

class ApplicationService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new UserService instance
     *
     * @param APIService
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all applications
     *
     * @param array $queryParams
     * @return ApplicationEntity[]
     */
    public function getAll(array $queryParams = [])
    {
        $applications = $this->api->applications()->getAll($queryParams);

        return ApplicationHydrator::hydrateCollection($applications);
    }

    /**
     * Get application by id
     *
     * @param int $appId
     * @param array $queryParams
     * @return ApplicationEntity
     */
    public function getById($appId, array $queryParams = [])
    {
        $application = $this->api->applications()->getById($appId, $queryParams);

        return ApplicationHydrator::hydrate($application);
    }

    /**
     * Create a new application
     *
     * @param ApplicationBuilder $input
     * @param array $queryParams
     * @return ApplicationEntity
     */
    public function create(ApplicationBuilder $input, array $queryParams = [])
    {
        $application = $this->api->applications()->create($input->toArray(), $queryParams);

        return ApplicationHydrator::hydrate($application);
    }

    /**
     * Update an existing application
     *
     * @param int $appId
     * @param ApplicationBuilder $input
     * @param array $queryParams
     * @return ApplicationEntity
     */
    public function update($appId, ApplicationBuilder $input, array $queryParams = [])
    {
        $application = $this->api->applications()->update($appId, $input->toArray(), $queryParams);

        return ApplicationHydrator::hydrate($application);
    }

    /**
     * Delete all applications
     *
     * @param array $queryParams
     * @return void
     */
    public function deleteAll(array $queryParams = [])
    {
        $this->api->applications()->deleteAll($queryParams);
    }

    /**
     * Delete application by id
     *
     * @param int $appId
     * @param array $queryParams
     * @return void
     */
    public function deleteById($appId, array $queryParams = [])
    {
        $this->api->applications()->deleteById($appId, $queryParams);
    }
}
