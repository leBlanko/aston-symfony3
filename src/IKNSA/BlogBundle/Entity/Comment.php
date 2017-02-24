<?php

namespace IKNSA\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="IKNSA\BlogBundle\Repository\CommentRepository")
 */
class Comment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="IKNSA\AppBundle\Entity\User")
     */
    private $user;

    /**
     * @var IKNSA\BlogBundle\Entity\Post
     *
     * @ORM\ManyToOne(targetEntity="IKNSA\BlogBundle\Entity\Post")
     */
    private $post;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $commentary;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="comLike", type="boolean")
     */
    private $comLike;

    public function __construct()
    {
        $this->createdAt = new \Datetime;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set commentary
     *
     * @param string $commentary
     *
     * @return Comment
     */
    public function setComment($commentary)
    {
        $this->commentary = $commentary;

        return $this;
    }

    /**
     * Get commentary
     *
     * @return string
     */
    public function getComment()
    {
        return $this->commentary;
    }


    /**
     * Set like
     *
     * @param text $comLike
     *
     * @return Comment
     */
    public function setLike($comLike)
    {
        $this->comLike = $comLike;

        return $this;
    }

    /**
     * Get like
     *
     * @return comLike
     */
    public function getLike()
    {
        return $this->comLike;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Comment
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set user
     *
     * @param \IKNSA\AppBundle\Entity\User $user
     *
     * @return Comment
     */
    public function setUser(\IKNSA\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     * @return \IKNSA\AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set post
     * @param \IKNSA\BlogBundle\Entity\Post $post
     *
     * @return Comment
     */
    public function setPost(\IKNSA\BlogBundle\Entity\Post $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     * @return \IKNSA\BlogBundle\Entity\Post
     */
    public function getPost()
    {
        return $this->post;
    }


}
