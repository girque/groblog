<?php

namespace GroblogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * post
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GroblogBundle\Entity\PostRepository")
 */
class post
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="url_alias", type="string", length=255)
     */
    private $urlAlias;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var datetime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $datebillet;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set urlAlias
     *
     * @param string $urlAlias
     *
     * @return post
     */
    public function setUrlAlias($urlAlias)
    {
        $this->urlAlias = $urlAlias;

        return $this;
    }

    /**
     * Get urlAlias
     *
     * @return string
     */
    public function getUrlAlias()
    {
        return $this->urlAlias;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return post
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set datebillet
     *
     * @param \DateTime $datebillet
     *
     * @return post
     */
    public function setDatebillet($datebillet)
    {
        $this->datebillet = $datebillet;

        return $this;
    }

    /**
     * Get datebillet
     *
     * @return \DateTime
     */
    public function getDatebillet()
    {
        return $this->datebillet;
    }
}
