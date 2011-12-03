<?php

namespace Thrillabyte\AppBundle\Document;

use FOS\UserBundle\Document\Group as BaseGroup;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Group extends BaseGroup
{
    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;
}