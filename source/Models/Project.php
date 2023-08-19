<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * Class Project
 *
 * @package Source\Model
 * @author  Joab T. Alencar <contato@joabtorres.com.br>
 * @version 1.0
 */
class Project extends Model
{
    /**
     * Project function
     */
    public function __construct()
    {
        parent::__construct("projects", ['id'], ['category_id', 'title', 'image', 'description', 'tags']);
    }
    /**
     * bootstrap function
     *
     * @param integer $category_id
     * @param string $title
     * @param string $image
     * @param string $description
     * @param string $tags
     * @param string $link_demo
     * @param string $link_github
     * @param string $link_youtube
     * @return Project
     */
    public function bootstrap(
        int $category_id,
        string $title,
        string $image,
        string $description,
        string $tags,
        string $link_demo = "",
        string $link_github = "",
        string $link_youtube = ""
    ): Project {
        $this->category_id = $category_id;
        $this->title = $title;
        $this->image = $image;
        $this->description = $description;
        $this->tags = $tags;
        $this->link_demo = $link_demo;
        $this->link_github = $link_github;
        $this->link_youtube = $link_youtube;
        return $this;
    }
    public function category(): ?Category
    {
        if ($this->category_id) {
            return (new Category())->findById($this->category_id);
        }
    }
}
