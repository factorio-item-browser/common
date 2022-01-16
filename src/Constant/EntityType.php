<?php

declare(strict_types=1);

namespace FactorioItemBrowser\Common\Constant;

/**
 * The types of the entities.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
interface EntityType
{
    /**
     * The entity is an actual item you can hold in the hand. Theoretically.
     */
    public const ITEM = ItemType::ITEM;

    /**
     * The entity is actually a fluid. Or a gas.
     */
    public const FLUID = ItemType::FLUID;

    /**
     * The entity is a machine. It is actually crafting a recipe.
     */
    public const MACHINE = 'machine';

    /**
     * The entity is a mining recipe, used by mining machines or pumps.
     */
    public const MINING = RecipeType::MINING;

    /**
     * The entity is a mod. The source of all evil.
     */
    public const MOD = 'mod';

    /**
     * The entity is a default crafting recipe, produced by crafting machines.
     */
    public const RECIPE = RecipeType::RECIPE;

    /**
     * The entity is a recipe involving launching a rocket.
     */
    public const ROCKET_LAUNCH = RecipeType::ROCKET_LAUNCH;

    /**
     * The entity is a resource to be mined by mining machines or pumps.
     */
    public const RESOURCE = ItemType::RESOURCE;
}
