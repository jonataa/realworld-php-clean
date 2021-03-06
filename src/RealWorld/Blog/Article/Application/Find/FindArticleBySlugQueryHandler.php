<?php

declare(strict_types = 1);

namespace RealWorld\Blog\Article\Application\Find;

use RealWorld\Blog\Article\Domain\Article;
use RealWorld\Shared\Domain\Bus\Query\Query;

final class FindArticleBySlugQueryHandler implements Query
{

    protected $finder;

    public function __construct(ArticleFinder $finder)
    {
        $this->finder = $finder;
    }

    public function __invoke(FindArticleBySlugQuery $query): Article
    {
        return $this->finder->search($query);
    }

}