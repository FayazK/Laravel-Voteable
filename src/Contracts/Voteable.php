<?php

/*
 * This file is part of Laravel Voteable.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Voteable\Contracts;

/**
 * Interface Voteable.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
interface Voteable
{
    /**
     * @return mixed
     */
    public function votes();
}
