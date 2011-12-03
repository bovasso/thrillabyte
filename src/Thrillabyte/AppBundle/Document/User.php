<?php
// src/Acme/UserBundle/Document/User.php

namespace Thrillabyte\AppBundle\Document;

use FOS\UserBundle\Document\User as BaseUser;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class User extends BaseUser
{
    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;

		/**
     * @MongoDB\ReferenceMany(targetDocument="Thrillabyte\AppBundle\Document\Group")
     */
		protected $groups;

    public function __construct()
    {
        parent::__construct();
        // your own logic
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
}


