<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 04-Aug-17
 * Time: 12:22
 */

namespace AppBundle\Service;

use AppBundle\Entity\Recipe;

class RecipePorter
{
    /**
     * @param Recipe $character
     * @return array
     */
    public function convertRecipe(Recipe $recipe): array
    {

        $data['id'] = $recipe->getId();
        $data['createdAt'] = $recipe->getCreatedAt();
        $data['updatedAt'] = $recipe->getUpdatedAt();
        $data['boxType'] = $recipe->getBoxType();
        $data['title'] = $recipe->getTitle();
        $data['slug'] = $recipe->getSlug();
        $data['shortTitle'] = $recipe->getShortTitle();
        $data['marketDecription'] = $recipe->getMarketDescription();
        $data['carboriesKcal'] = $recipe->getCaloriesKcal();
        $data['proteinGrams'] = $recipe->getProteinGrams();
        $data['fatGrams'] = $recipe->getFatGrams();
        $data['carbsGrams'] = $recipe->getCarbsGrams();
        $data['bulletpoint1'] = $recipe->getBulletpoint1();
        $data['bulletpoint2'] = $recipe->getBulletpoint2();
        $data['bulletpoint3'] = $recipe->getBulletpoint3();
        $data['recipeDietTypeId'] = $recipe->getRecipeDietTypeId();
        $data['season'] = $recipe->getSeason();
        $data['base'] = $recipe->getBase();
        $data['proteinSource'] = $recipe->getProteinSource();
        $data['preparationTimeMinutes'] = $recipe->getPreparationTimeMinutes();
        $data['shelfLifeDays'] = $recipe->getShelfLifeDays();
        $data['equipmentNeeded'] = $recipe->getEquipmentNeeded();
        $data['originCountry'] = $recipe->getOriginCountry();
        $data['recipeCuisine'] = $recipe->getRecipeCuisine();
        $data['inYourBox'] = $recipe->getInYourBox();
        $data['goustoReference'] = $recipe->getGoustoReference();
        $data['rate'] = $recipe->getRate();

        return $data;
    }

    /**
     * @param array $characterArray
     * @return Recipe
     */
    public function createRecipe(Recipe $recipe ,array $data): Recipe
    {
        $recipe->setBoxType($data['box_type']);
        $recipe->setTitle($data['title']);
        $recipe->setSlug($data['slug']);
        $recipe->setShortTitle($data['short_title']);
        $recipe->setMarketDescription($data['marketing_description']);
        $recipe->setCaloriesKcal($data['calories_kcal']);
        $recipe->setProteinGrams($data['protein_grams']);
        $recipe->setFatGrams($data['fat_grams']);
        $recipe->setCarbsGrams($data['carbs_grams']);
        $recipe->setBulletpoint1($data['bulletpoint1']);
        $recipe->setBulletpoint2($data['bulletpoint2']);
        $recipe->setBulletpoint3($data['bulletpoint3']);
        $recipe->setRecipeDietTypeId($data['recipe_diet_type_id']);
        $recipe->setSeason($data['season']);
        $recipe->setBase($data['base']);
        $recipe->setProteinSource($data['protein_source']);
        $recipe->setPreparationTimeMinutes($data['preparation_time_minutes']);
        $recipe->setShelfLifeDays($data['shelf_life_days']);
        $recipe->setEquipmentNeeded($data['equipment_needed']);
        $recipe->setOriginCountry($data['origin_country']);
        $recipe->setRecipeCuisine($data['recipe_cuisine']);
        $recipe->setInYourBox($data['in_your_box']);
        $recipe->setGoustoReference($data['gousto_reference']);
        $recipe->setRate(null);


        return $recipe;
    }
}