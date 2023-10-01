<?php


namespace Src\Products\Exceptions;


class ProductArticleExistsException extends \Exception
{
    /**
     * @var string
     */
    private string $invalidArticle;

    /**
     * ProductArticleExistsException constructor.
     * @param string $invalidArticle
     */
    public function __construct(string $invalidArticle)
    {
        $this->invalidArticle = $invalidArticle;
        parent::__construct($this->createMessage(),422);
    }


    /**
     * @return string
     */
    private function createMessage(): string
    {
        return sprintf('Продукт с артилклем "%s" уже существует',$this->invalidArticle);
    }
}
