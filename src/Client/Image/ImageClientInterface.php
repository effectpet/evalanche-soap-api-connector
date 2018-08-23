<?php

namespace Scn\EvalancheSoapApiConnector\Client\Image;

use Scn\EvalancheSoapApiConnector\Client\ClientInterface;
use Scn\EvalancheSoapStruct\Struct\Generic\CategoryInformationInterface;
use Scn\EvalancheSoapStruct\Struct\Generic\ResourceInformationInterface;
use Scn\EvalancheSoapStruct\Struct\Generic\ResourceTypeInformationInterface;
use Scn\EvalancheSoapStruct\Struct\Generic\ServiceStatusInterface;

/**
 * Interface ImageClientInterface
 *
 * @package Scn\EvalancheSoapApiConnector\Client\Image
 */
interface ImageClientInterface extends ClientInterface
{
    /**
     * @param string $image
     * @param string $title
     * @param int $categoryId
     *
     * @return ResourceInformationInterface
     */
    public function create(string $image, string $title, int $categoryId): ResourceInformationInterface;

    /**
     * @param int $id
     * @param int $categoryId
     *
     * @return ResourceInformationInterface
     */
    public function copy(int $id, int $categoryId): ResourceInformationInterface;

    /**
     * @param int $id
     *
     * @return bool
     */
    public function delete(int $id): bool;

    /**
     * @param int $id
     *
     * @return ResourceInformationInterface[]
     */
    public function getListByMandatorId(int $id): array;

    /**
     * @param int $id
     *
     * @return ResourceInformationInterface[]
     */
    public function getByCategoryId(int $id): array;

    /**
     * @param string $id
     *
     * @return ResourceInformationInterface
     */
    public function getByExternalId(string $id): ResourceInformationInterface;

    /**
     * @param int $id
     *
     * @return ResourceInformationInterface
     */
    public function getById(int $id): ResourceInformationInterface;

    /**
     * @param int $id
     * @param int $mandatorId
     *
     * @return ResourceInformationInterface[]
     */
    public function getByTypeId(int $id, int $mandatorId): array;

    /**
     * @param int $id
     *
     * @return CategoryInformationInterface
     */
    public function getDefaultCategoryByCustomerId(int $id): CategoryInformationInterface;

    /**
     *
     * @return ResourceTypeInformationInterface[]
     */
    public function getTypeIds(): array;

    /**
     * @param int $id
     * @param int $categoryId
     *
     * @return ResourceInformationInterface
     */
    public function move(int $id, int $categoryId): ResourceInformationInterface;

    /**
     *
     * @return ServiceStatusInterface
     */
    public function getServiceAvailable(): ServiceStatusInterface;
}