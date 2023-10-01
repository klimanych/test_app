<?php


namespace Src\Products\Actions\UpdateProductAction;

use Src\Products\Enums\ProductStatus;


class UpdateProductAction
{
    /**
     * @var int
     */
    private int $id;

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
     * UpdateProductAction constructor.
     * @param int $id
     * @param string $article
     * @param string $name
     * @param ProductStatus $status
     * @param array|null $data
     */
    public function __construct(int $id, string $article, string $name, ProductStatus $status, ?array $data)
    {
        $this->id = $id;
        $this->article = $article;
        $this->name = $name;
        $this->status = $status;
        $this->data = $data;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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
