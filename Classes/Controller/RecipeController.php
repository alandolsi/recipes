<?php

declare(strict_types=1);

namespace Landolsi\Recipes\Controller;


/**
 * This file is part of the "Recipes" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 Abdellatif Landolsi <abdellatif@landolsi.de>
 */

/**
 * RecipeController
 */
class RecipeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * recipeRepository
     *
     * @var \Landolsi\Recipes\Domain\Repository\RecipeRepository
     */
    protected $recipeRepository = null;

    /**
     * @param \Landolsi\Recipes\Domain\Repository\RecipeRepository $recipeRepository
     */
    public function injectRecipeRepository(\Landolsi\Recipes\Domain\Repository\RecipeRepository $recipeRepository)
    {
        $this->recipeRepository = $recipeRepository;
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $recipes = $this->recipeRepository->findAll();
        $this->view->assign('recipes', $recipes);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Landolsi\Recipes\Domain\Model\Recipe $recipe
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Landolsi\Recipes\Domain\Model\Recipe $recipe): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('recipe', $recipe);
        return $this->htmlResponse();
    }

}
