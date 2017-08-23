<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Recipe;

/**
 * RecipeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
interface RecipeRepositoryInterface
{
    /**
     * @param Recipe $recipe
     * @return Recipe
     */
    public function save(Recipe $recipe): Recipe;

    /**
     * @param $id
     * @return Recipe
     */
    public function findRecipe($id):Recipe;

    /**
     * @param $page
     * @param $cuisine
     * @return array
     */
    public function findAllRecipes($page, $cuisine): array;
}
