<?php

declare(strict_types=1);

namespace FactorioItemBrowser\Common\Constant;

/**
 * The modes of the technologies.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
interface TechnologyMode
{
    /**
     * The technology is used in normal mode.
     */
    public const NORMAL = 'normal';

    /**
     * The technology is used in expensive mode.
     */
    public const EXPENSIVE = 'expensive';
}
