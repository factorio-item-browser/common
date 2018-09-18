<?php

declare(strict_types=1);

namespace FactorioItemBrowser\Common\Constant;

/**
 * The modes of the recipes.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
interface RecipeMode
{
    /**
     * The recipe is used in normal mode, or if no expensive version exists.
     */
    public const NORMAL = 'normal';

    /**
     * The recipe is used in expensive mode.
     */
    public const EXPENSIVE = 'expensive';
}
