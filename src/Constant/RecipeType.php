<?php

declare(strict_types=1);

namespace FactorioItemBrowser\Common\Constant;

/**
 * The types of the recipes.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
interface RecipeType
{
    /**
     * The recipe is a mining recipe, used by mining machines or pumps.
     */
    public const MINING = 'mining';

    /**
     * The recipe is a default crafting recipe, produced by crafting machines.
     */
    public const RECIPE = 'recipe';

    /**
     * The recipe involves launching a rocket.
     */
    public const ROCKET_LAUNCH = 'rocket-launch';
}
