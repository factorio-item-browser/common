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
     * The item is an actual item you can hold in the hand. Theoretically.
     */
    public const ITEM = 'item';

    /**
     * The item is actually a fluid. Or a gas.
     */
    public const FLUID = 'fluid';

    /**
     * The entity is a machine. It is actually crafting a recipe.
     */
    public const MACHINE = 'machine';

    /**
     * The entity is a mod. The source of all evil.
     */
    public const MOD = 'mod';

    /**
     * The entity is a recipe. It shows how to craft something into something else.
     */
    public const RECIPE = 'recipe';
}
