<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Recipes',
        'Recipe',
        [
            \Landolsi\Recipes\Controller\RecipeController::class => 'list, show'
        ],
        // non-cacheable actions
        [
            \Landolsi\Recipes\Controller\RecipeController::class => 'list, show'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    recipe {
                        iconIdentifier = recipes-plugin-recipe
                        title = LLL:EXT:recipes/Resources/Private/Language/locallang_db.xlf:tx_recipes_recipe.name
                        description = LLL:EXT:recipes/Resources/Private/Language/locallang_db.xlf:tx_recipes_recipe.description
                        tt_content_defValues {
                            CType = list
                            list_type = recipes_recipe
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
