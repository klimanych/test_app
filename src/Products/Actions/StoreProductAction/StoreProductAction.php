<?php

namespace Src\Products\Actions\StoreProductAction;

use Src\Products\Enums\ProductStatus;

class StoreProductAction
{
    /**
     * @var string
     */
    private string $article;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var ProductStatus
     */
    private ProductStatus $status;


    /**
     * @var array | null
     */
    private ?array $data;

    /**
     * StoreProductAction constructor.
     * @param string $article
     * @param string $name
     * @param ProductStatus $status
     * @param array|null $data
     */
    public function __construct(string $article, string $name, ProductStatus $status, ?array $data)
    {
        $this->article = $article;
        $this->name = $name;
        $this->status = $status;
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getArticle(): string
    {
        return $this->article;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return ProductStatus
     */
    public function getStatus(): ProductStatus
    {
        return $this->status;
    }

    /**
     * @return array|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }




}
