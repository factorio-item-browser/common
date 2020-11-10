<?php

declare(strict_types=1);

namespace FactorioItemBrowser\Common\Constant;

/**
 * The interface holding default values.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
interface Defaults
{
    /**
     * The id of the default combination.
     */
    public const COMBINATION_ID = '2f4a45fa-a509-a9d1-aae6-ffcf984a7a76';

    /**
     * The mods of the default combination.
     */
    public const COMBINATION_MODS = [Constant::MOD_NAME_BASE];

    /**
     * The default locale to use.
     */
    public const LOCALE = 'en';

    /**
     * The default recipe mode to use.
     */
    public const RECIPE_MODE = RecipeMode::NORMAL;
}
