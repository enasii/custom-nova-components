<?php

namespace Enas\FilterCustom;

use Illuminate\Http\Request;
use InvalidArgumentException;
use Klepak\NovaMultiselectFilter\Enums\Config;
use Laravel\Nova\Filters\Filter;

abstract class FilterCustom extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'filter-custom';

    public function __construct(array $configuration = [])
    {
        $this->configure($configuration);
    }

    protected function configure(array $configuration): void
    {
        if (empty($configuration)) {
            return;
        }

        foreach ($configuration as $property => $value) {
            if (!in_array($property, Config::getProperties(), true)) {
                throw new InvalidArgumentException('Invalid property: ' . $property);
            }

            $this->withMeta([$property => $value]);
        }
    }
}
