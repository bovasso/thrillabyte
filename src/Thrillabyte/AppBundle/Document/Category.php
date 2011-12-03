<?php
namespace Thrillabyte\AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(collection="categories", repositoryClass="Thrillabyte\AppBundle\Document\CategoryRepository")
 */
class Category
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $name;
    
    /**
     * @MongoDB\ReferenceMany(targetDocument="Thrillabyte\AppBundle\Document\Post", inversedBy="categories")
     */
    protected $posts;

    public function __toString()
    {
        return $this->name;
    }
  
    public function __construct()
    {
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add posts
     *
     * @param Thrillabyte\AppBundle\Document\Post $posts
     */
    public function addPosts(\Admingenerator\DoctrineODMDemoBundle\Document\Post $posts)
    {
        $this->posts[] = $posts;
    }

    /**
     * Get posts
     *
     * @return Doctrine\Common\Collections\Collection $posts
     */
    public function getPosts()
    {
        return $this->posts;
    }
}
