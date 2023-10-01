<?php


namespace Src\Products\Actions\DeleteProductAction;


class DeleteProductAction
{
    /**
     * @var int
     */
    private int $id;

    /**
     * DeleteProductAction constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }




}
