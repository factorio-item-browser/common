<?php

declare(strict_types=1);

namespace FactorioItemBrowser\Common\Constant;

/**
 * The types of the items.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
interface ItemType
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
     * The item is a resource to be mined by mining machines or pumps.
     */
    public const RESOURCE = 'resource';
}
