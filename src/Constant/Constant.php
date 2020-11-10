<?php

declare(strict_types=1);

namespace FactorioItemBrowser\Common\Constant;

/**
 * The interface holding constant values of Factorio.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
interface Constant
{
    /**
     * The name of the base mod always required as a dependency.
     */
    public const MOD_NAME_BASE = 'base';

    /**
     * The name of the entity representing the thing you actually control.
     */
    public const ENTITY_NAME_CHARACTER = 'character';
}
