<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 23-Aug-17
 * Time: 15:00
 */

namespace AppBundle\Entity;


class MainEntity
{
    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     *
     */
    function preCreated(){
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }
    /**
     *
     */
    function preUpdated(){
        $this->updatedAt = new \DateTime();
    }
}