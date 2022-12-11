<?php

declare(strict_types=1);

namespace Landolsi\Recipes\Domain\Model;


/**
 * This file is part of the "Recipes" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 Abdellatif Landolsi <abdellatif@landolsi.de>
 */

/**
 * Recipe
 */
class Recipe extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     */
    protected $title = null;

    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $image = null;

    /**
     * instructions
     *
     * @var string
     */
    protected $instructions = null;

    /**
     * demo
     *
     * @var string
     */
    protected $demo = '';

    /**
     * ingredients
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Landolsi\Recipes\Domain\Model\Ingredient>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $ingredients = null;

    /**
     * categories
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Landolsi\Recipes\Domain\Model\Category>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $categories = null;

    /**
     * __construct
     */
    public function __construct()
    {

        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    public function initializeObject()
    {
        $this->ingredients = $this->ingredients ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->categories = $this->categories ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * Returns the instructions
     *
     * @return string
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * Sets the instructions
     *
     * @param string $instructions
     * @return void
     */
    public function setInstructions(string $instructions)
    {
        $this->instructions = $instructions;
    }

    /**
     * Adds a Ingredient
     *
     * @param \Landolsi\Recipes\Domain\Model\Ingredient $ingredient
     * @return void
     */
    public function addIngredient(\Landolsi\Recipes\Domain\Model\Ingredient $ingredient)
    {
        $this->ingredients->attach($ingredient);
    }

    /**
     * Removes a Ingredient
     *
     * @param \Landolsi\Recipes\Domain\Model\Ingredient $ingredientToRemove The Ingredient to be removed
     * @return void
     */
    public function removeIngredient(\Landolsi\Recipes\Domain\Model\Ingredient $ingredientToRemove)
    {
        $this->ingredients->detach($ingredientToRemove);
    }

    /**
     * Returns the ingredients
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Landolsi\Recipes\Domain\Model\Ingredient> ingredients
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Sets the ingredients
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Landolsi\Recipes\Domain\Model\Ingredient> $ingredients
     * @return void
     */
    public function setIngredients(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $ingredients)
    {
        $this->ingredients = $ingredients;
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Returns the demo
     *
     * @return string
     */
    public function getDemo()
    {
        return $this->demo;
    }

    /**
     * Sets the demo
     *
     * @param string $demo
     * @return void
     */
    public function setDemo(string $demo)
    {
        $this->demo = $demo;
    }

    /**
     * Adds a Category
     *
     * @param \Landolsi\Recipes\Domain\Model\Category $category
     * @return void
     */
    public function addCategory(\Landolsi\Recipes\Domain\Model\Category $category)
    {
        $this->categories->attach($category);
    }

    /**
     * Removes a Category
     *
     * @param \Landolsi\Recipes\Domain\Model\Category $categoryToRemove The Category to be removed
     * @return void
     */
    public function removeCategory(\Landolsi\Recipes\Domain\Model\Category $categoryToRemove)
    {
        $this->categories->detach($categoryToRemove);
    }

    /**
     * Returns the categories
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Landolsi\Recipes\Domain\Model\Category>
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets the categories
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Landolsi\Recipes\Domain\Model\Category> $categories
     * @return void
     */
    public function setCategories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories)
    {
        $this->categories = $categories;
    }
}
