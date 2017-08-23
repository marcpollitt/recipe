<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Recipe;
use AppBundle\Service\RecipePorter;
use AppBundle\Service\RecipeService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    /**
     * @param Request $request
     * @param Integer $id
     * @return Response
     */
    public function findAction(Request $request, $id): Response
    {
        /** @var RecipeService $recipeService */
        $recipeService = $this->container->get('recipe_service');

        /** @var RecipePorter $recipePorter */
        $recipePorter = $this->container->get('recipe_porter');

        $statusCode = JsonResponse::HTTP_OK;

        try {
            $data = $recipePorter->convertRecipe($recipeService->findId($id));
        }catch (\Exception $exception){
            $data = ['error' => ['message' => $exception->getMessage()]];
            $statusCode =  JsonResponse::HTTP_NOT_FOUND;

        }

        return new JsonResponse($data,$statusCode);
    }

    /**
     * @param Request $request
     * @param string $cuisine
     * @param integer $page
     * @return Response
     */
    public function fineAllAction(Request $request, $cuisine, $page): Response
    {
        /** @var RecipeService $recipeService */
        $recipeService = $this->container->get('recipe_service');

        /** @var RecipePorter $recipePorter */
        $recipePorter = $this->container->get('recipe_porter');

        $statusCode = JsonResponse::HTTP_OK;

        try {
            $recipes = $recipeService->findAll($page, $cuisine);

            $data = [];
            foreach($recipes as $recipe) {
                $data[] = $recipePorter->convertRecipe($recipe);
            }
        }catch (\Exception $exception){
            $data = ['error' => ['message' => $exception->getMessage()]];
            $statusCode =  JsonResponse::HTTP_NOT_FOUND;

        }

        return new JsonResponse($data,$statusCode);
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function createAction(Request $request): Response
    {
        $recipesArray = json_decode($request->getContent(), true);

        $statusCode = JsonResponse::HTTP_CREATED;

        /** @var RecipeService $recipeService */
        $recipeService = $this->container->get('recipe_service');

        /** @var RecipePorter $recipePorter */
        $recipePorter = $this->container->get('recipe_porter');

        try {
            if (!is_array($recipesArray)) {
                throw new \Exception('Not an array');
            }
            $data = [];
            foreach ($recipesArray as $recipeArray) {
                if (!is_array($recipeArray)) {
                    continue;
                }

                $newRecipe = new Recipe();
                $recipe = $recipePorter->createRecipe($newRecipe, $recipeArray);
                $rData = $recipeService->save($recipe);
                $data[] =  $recipePorter->convertRecipe($rData);
            }
        } catch (\Exception $exception) {
            $data = ['error' => ['message' => $exception->getMessage()]];
            $statusCode =  JsonResponse::HTTP_BAD_REQUEST;
        }
        return new JsonResponse($data, $statusCode);
    }

    /**
     * @param Request $request
     * @param integer $id
     * @return Response
     */
    public function updateAction(Request $request, $id): Response
    {
        $recipeArray = json_decode($request->getContent(), true);

        /** @var RecipeService $recipeService */
        $recipeService = $this->container->get('recipe_service');

        /** @var RecipePorter $recipePorter */
        $recipePorter = $this->container->get('recipe_porter');

        $statusCode = JsonResponse::HTTP_OK;

        try {
            $recipe = $recipeService->findId($id);
            $updatedRecipe = $recipePorter->createRecipe($recipe, $recipeArray);
            $rData = $recipeService->save($updatedRecipe);
            $data =  $recipePorter->convertRecipe($rData);

        } catch (\Exception $exception) {
            $data = ['error' => ['message' => $exception->getMessage()]];
            $statusCode =  JsonResponse::HTTP_NOT_FOUND;
        }

        return new JsonResponse($data, $statusCode);
    }

    /**
     * @param Request $request
     * @param $id
     * @param $rate
     * @return Response
     */
    public function rateAction(Request $request, $id, $rate): Response
    {
        $statusCode = JsonResponse::HTTP_OK;
        /** @var RecipeService $recipeService */
        $recipeService = $this->container->get('recipe_service');

        /** @var RecipePorter $recipePorter */
        $recipePorter = $this->container->get('recipe_porter');
        try {
            $recipe = $recipeService->findId($id);
            $ratedCuisine = $recipeService->rateCuisine($recipe, $rate);
            $rData = $recipeService->save($ratedCuisine);
            $data = $recipePorter->convertRecipe($rData);
        } catch (\Exception $exception) {
            $data = ['error' => ['message' => $exception->getMessage()]];
            $statusCode =  JsonResponse::HTTP_NOT_FOUND;
        }

        return new JsonResponse($data, $statusCode);


    }
}
