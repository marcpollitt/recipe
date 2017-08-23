<?php

namespace AppBundle\Service;

use AppBundle\Entity\Recipe;
use AppBundle\Repository\RecipeRepository;
use AppBundle\Repository\RecipeRepositoryInterface;

class RecipeService
{
    /**
     * @var RecipeRepositoryInterface|RecipeRepository
     */
    private $recipeRepo;

    /**
     * recipeService constructor.
     */
    public function __construct(RecipeRepositoryInterface $recipeRepo)
    {
        $this->recipeRepo = $recipeRepo;
    }

    /**
     * @param Recipe $recipe
     * @return Recipe
     */
    public function save(Recipe $recipe): Recipe
    {
        return $this->recipeRepo->save($recipe);
    }

    /**
     * @return array
     */
    public function findAll($page,$cuisine): array
    {
        return $this->recipeRepo->findAllRecipes($page,$cuisine);
    }

    /**
     * @param integer $id
     * @return Recipe
     */
    public function findId($id): Recipe
    {
        return $this->recipeRepo->findRecipe($id);
    }

    /**
     * @param Recipe $recipe
     * @param integer $rate
     */
    public function rateCuisine(Recipe $recipe, $rate)
    {
        $recipe->setRate($rate);
        return $recipe;
    }
}