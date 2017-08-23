<?php

namespace AppBundle\Entity;

/**
 * Recipe
 */
class Recipe extends MainEntity
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $boxType;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $shortTitle;

    /**
     * @var string
     */
    private $marketDescription;

    /**
     * @var int
     */
    private $caloriesKcal;

    /**
     * @var string
     */
    private $proteinGrams;

    /**
     * @var string
     */
    private $fatGrams;

    /**
     * @var string
     */
    private $carbsGrams;

    /**
     * @var string
     */
    private $bulletPoint1;

    /**
     * @var string
     */
    private $bulletPoint2;

    /**
     * @var string
     */
    private $bulletPoint3;

    /**
     * @var string
     */
    private $recipeDietTypeId;

    /**
     * @var string
     */
    private $season;

    /**
     * @var string
     */
    private $base;

    /**
     * @var string
     */
    private $proteinSource;

    /**
     * @var int
     */
    private $preparationTimeMinutes;

    /**
     * @var int
     */
    private $shelfLifeDays;

    /**
     * @var string
     */
    private $equipmentNeeded;

    /**
     * @var string
     */
    private $originCountry;

    /**
     * @var string
     */
    private $recipeCuisine;

    /**
     * @var string
     */
    private $inYourBox;

    /**
     * @var int
     */
    private $goustoReference;

    /**
     * @var int
     */
    private $rate;


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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Recipe
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Recipe
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set boxType
     *
     * @param string $boxType
     *
     * @return Recipe
     */
    public function setBoxType($boxType)
    {
        $this->boxType = $boxType;

        return $this;
    }

    /**
     * Get boxType
     *
     * @return string
     */
    public function getBoxType()
    {
        return $this->boxType;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Recipe
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
     * Set slug
     *
     * @param string $slug
     *
     * @return Recipe
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set shortTitle
     *
     * @param string $shortTitle
     *
     * @return Recipe
     */
    public function setShortTitle($shortTitle)
    {
        $this->shortTitle = $shortTitle;

        return $this;
    }

    /**
     * Get shortTitle
     *
     * @return string
     */
    public function getShortTitle()
    {
        return $this->shortTitle;
    }

    /**
     * Set marketDescription
     *
     * @param string $marketDescription
     *
     * @return Recipe
     */
    public function setMarketDescription($marketDescription)
    {
        $this->marketDescription = $marketDescription;

        return $this;
    }

    /**
     * Get marketDescription
     *
     * @return string
     */
    public function getMarketDescription()
    {
        return $this->marketDescription;
    }

    /**
     * Set caloriesKcal
     *
     * @param integer $caloriesKcal
     *
     * @return Recipe
     */
    public function setCaloriesKcal($caloriesKcal)
    {
        $this->caloriesKcal = $caloriesKcal;

        return $this;
    }

    /**
     * Get caloriesKcal
     *
     * @return int
     */
    public function getCaloriesKcal()
    {
        return $this->caloriesKcal;
    }

    /**
     * Set proteinGrams
     *
     * @param string $proteinGrams
     *
     * @return Recipe
     */
    public function setProteinGrams($proteinGrams)
    {
        $this->proteinGrams = $proteinGrams;

        return $this;
    }

    /**
     * Get proteinGrams
     *
     * @return string
     */
    public function getProteinGrams()
    {
        return $this->proteinGrams;
    }

    /**
     * Set fatGrams
     *
     * @param string $fatGrams
     *
     * @return Recipe
     */
    public function setFatGrams($fatGrams)
    {
        $this->fatGrams = $fatGrams;

        return $this;
    }

    /**
     * Get fatGrams
     *
     * @return string
     */
    public function getFatGrams()
    {
        return $this->fatGrams;
    }

    /**
     * Set carbsGrams
     *
     * @param string $carbsGrams
     *
     * @return Recipe
     */
    public function setCarbsGrams($carbsGrams)
    {
        $this->carbsGrams = $carbsGrams;

        return $this;
    }

    /**
     * Get carbsGrams
     *
     * @return string
     */
    public function getCarbsGrams()
    {
        return $this->carbsGrams;
    }

    /**
     * Set bulletPoint1
     *
     * @param string $bulletPoint1
     *
     * @return Recipe
     */
    public function setBulletPoint1($bulletPoint1)
    {
        $this->bulletPoint1 = $bulletPoint1;

        return $this;
    }

    /**
     * Get bulletPoint1
     *
     * @return string
     */
    public function getBulletPoint1()
    {
        return $this->bulletPoint1;
    }

    /**
     * Set bulletPoint2
     *
     * @param string $bulletPoint2
     *
     * @return Recipe
     */
    public function setBulletPoint2($bulletPoint2)
    {
        $this->bulletPoint2 = $bulletPoint2;

        return $this;
    }

    /**
     * Get bulletPoint2
     *
     * @return string
     */
    public function getBulletPoint2()
    {
        return $this->bulletPoint2;
    }

    /**
     * Set bulletPoint3
     *
     * @param string $bulletPoint3
     *
     * @return Recipe
     */
    public function setBulletPoint3($bulletPoint3)
    {
        $this->bulletPoint3 = $bulletPoint3;

        return $this;
    }

    /**
     * Get bulletPoint3
     *
     * @return string
     */
    public function getBulletPoint3()
    {
        return $this->bulletPoint3;
    }

    /**
     * Set recipeDietTypeId
     *
     * @param string $recipeDietTypeId
     *
     * @return Recipe
     */
    public function setRecipeDietTypeId($recipeDietTypeId)
    {
        $this->recipeDietTypeId = $recipeDietTypeId;

        return $this;
    }

    /**
     * Get recipeDietTypeId
     *
     * @return string
     */
    public function getRecipeDietTypeId()
    {
        return $this->recipeDietTypeId;
    }

    /**
     * Set season
     *
     * @param string $season
     *
     * @return Recipe
     */
    public function setSeason($season)
    {
        $this->season = $season;

        return $this;
    }

    /**
     * Get season
     *
     * @return string
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Set base
     *
     * @param string $base
     *
     * @return Recipe
     */
    public function setBase($base)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get base
     *
     * @return string
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set protienSource
     *
     * @param string $protienSource
     *
     * @return Recipe
     */
    public function setProteinSource($proteinSource)
    {
        $this->proteinSource = $proteinSource;

        return $this;
    }

    /**
     * Get protienSource
     *
     * @return string
     */
    public function getProteinSource()
    {
        return $this->proteinSource;
    }

    /**
     * Set preparationTimeMinutes
     *
     * @param integer $preparationTimeMinutes
     *
     * @return Recipe
     */
    public function setPreparationTimeMinutes($preparationTimeMinutes)
    {
        $this->preparationTimeMinutes = $preparationTimeMinutes;

        return $this;
    }

    /**
     * Get preparationTimeMinutes
     *
     * @return int
     */
    public function getPreparationTimeMinutes()
    {
        return $this->preparationTimeMinutes;
    }

    /**
     * Set shelfLifeDays
     *
     * @param integer $shelfLifeDays
     *
     * @return Recipe
     */
    public function setShelfLifeDays($shelfLifeDays)
    {
        $this->shelfLifeDays = $shelfLifeDays;

        return $this;
    }

    /**
     * Get shelfLifeDays
     *
     * @return int
     */
    public function getShelfLifeDays()
    {
        return $this->shelfLifeDays;
    }

    /**
     * Set equipmentNeeded
     *
     * @param string $equipmentNeeded
     *
     * @return Recipe
     */
    public function setEquipmentNeeded($equipmentNeeded)
    {
        $this->equipmentNeeded = $equipmentNeeded;

        return $this;
    }

    /**
     * Get equipmentNeeded
     *
     * @return string
     */
    public function getEquipmentNeeded()
    {
        return $this->equipmentNeeded;
    }

    /**
     * Set originCountry
     *
     * @param string $originCountry
     *
     * @return Recipe
     */
    public function setOriginCountry($originCountry)
    {
        $this->originCountry = $originCountry;

        return $this;
    }

    /**
     * Get originCountry
     *
     * @return string
     */
    public function getOriginCountry()
    {
        return $this->originCountry;
    }

    /**
     * Set recipeCuisine
     *
     * @param string $recipeCuisine
     *
     * @return Recipe
     */
    public function setRecipeCuisine($recipeCuisine)
    {
        $this->recipeCuisine = $recipeCuisine;

        return $this;
    }

    /**
     * Get recipeCuisine
     *
     * @return string
     */
    public function getRecipeCuisine()
    {
        return $this->recipeCuisine;
    }

    /**
     * Set inYourBox
     *
     * @param string $inYourBox
     *
     * @return Recipe
     */
    public function setInYourBox($inYourBox)
    {
        $this->inYourBox = $inYourBox;

        return $this;
    }

    /**
     * Get inYourBox
     *
     * @return string
     */
    public function getInYourBox()
    {
        return $this->inYourBox;
    }

    /**
     * Set gousoReference
     *
     * @param integer $gousoReference
     *
     * @return Recipe
     */
    public function setGoustoReference($goustoReference)
    {
        $this->goustoReference = $goustoReference;

        return $this;
    }

    /**
     * Get gousoReference
     *
     * @return int
     */
    public function getGoustoReference()
    {
        return $this->goustoReference;
    }

    /**
     * Set rate
     *
     * @param integer $rate
     *
     * @return Recipe
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return int
     */
    public function getRate()
    {
        return $this->rate;
    }

}

