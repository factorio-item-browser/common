<?php

declare(strict_types=1);

namespace FactorioItemBrowser\Common\Constant;

/**
 * The units of the energy usage.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
interface EnergyUsageUnit
{
    /**
     * The basic unit.
     */
    public const WATT = 'W';

    /**
     * A thousand watt.
     */
    public const KILOWATT = 'kW';

    /**
     * A million watt.
     */
    public const MEGAWATT = 'MW';

    /**
     * A billion watt.
     */
    public const GIGAWATT = 'GW';

    /**
     * A trillion watt.
     */
    public const TERAWATT = 'TW';

    /**
     * A quadrillion watt.
     */
    public const PETAWATT = 'PW';

    /**
     * A quintillion watt.
     */
    public const EXAWATT = 'EW';

    /**
     * A sextillion watt
     */
    public const ZETTAWATT = 'ZW';

    /**
     * Quite a lot of watt.
     */
    public const YOTTAWATT = 'YW';

    /**
     * The ordered list of energy usage units.
     */
    public const ORDERED_UNITS = [
        self::WATT,
        self::KILOWATT,
        self::MEGAWATT,
        self::GIGAWATT,
        self::TERAWATT,
        self::PETAWATT,
        self::EXAWATT,
        self::ZETTAWATT,
        self::YOTTAWATT,
    ];
}
