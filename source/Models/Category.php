<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * Class Category
 *
 * @package Source\Model
 * @author  Joab T. Alencar <contato@joabtorres.com.br>
 * @version 1.0
 */
class Category extends Model
{
    /**
     * Category function
     */
    public function __construct()
    {
        parent::__construct(
            "categories",
            ['id'],
            ['category']
        );
    }
    /**
     * bootstrap function
     *
     * @param string $category
     * @return Category
     */
    public function bootstrap(string $category): Category
    {
        $this->category = $category;
        return $this;
    }
}
