<?php
namespace Thrillabyte\AppBundle\Document;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


/**
 * @MongoDB\Document(collection="posts", repositoryClass="Thrillabyte\AppBundle\Document\PostRepository")
 */
class Post
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $title;

		/**
     * @MongoDB\Field(type="string")
     */
    protected $body;

    /**
     * @MongoDB\Field(type="boolean", nullable="true")
     */
    protected $is_published;

    /**
     * @MongoDB\ReferenceMany(targetDocument="Thrillabyte\AppBundle\Document\Category", inversedBy="posts")
     */
    protected $categories;

    /**
     * @MongoDB\Field(type="hash")
     */
    protected $hashField;


    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function setCategories(\Doctrine\Common\Collections\ArrayCollection $categories)
    {
         $this->categories = $categories;
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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set body
     *
     * @param string $title
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set is_published
     *
     * @param boolean $isPublished
     */
    public function setIsPublished($isPublished)
    {
        $this->is_published = $isPublished;
    }

    /**
     * Get is_published
     *
     * @return boolean $isPublished
     */
    public function getIsPublished()
    {
        return $this->is_published;
    }

    /**
     * Add categories
     *
     * @param Thrillabyte\AppBundle\Document\Category $categories
     */
    public function addCategories(\Thrillabyte\AppBundle\Document\Category $categories)
    {
        $this->categories[] = $categories;
    }

    /**
     * Get categories
     *
     * @return Doctrine\Common\Collections\Collection $categories
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set hashField
     *
     * @param hash $hashField
     */
    public function setHashField($hashField)
    {
        $this->hashField = $hashField;
    }

    /**
     * Get hashField
     *
     * @return hash $hashField
     */
    public function getHashField()
    {
        return $this->hashField;
    }
}
