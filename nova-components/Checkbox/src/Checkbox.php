<?php

namespace Checkbox\Checkbox;

use Laravel\Nova\Fields\Field;

class Checkbox extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'checkbox';
    public $meta = [
        'columns' => 2,
    ];
    public function columns(int $columns)
    {
        return $this->withMeta(['columns' => $columns]);
    }

    /**
     * Specify the available options
     *
     * @param array $options
     * @return self
     */
    public function options(array $options)
    {
        return $this->withMeta(['options' => $options]);
    }

    /**
     * Disable type casting of array keys to numeric values to return the unmodified keys.
     */
    public function withoutTypeCasting()
    {
        return $this->withMeta(['withoutTypeCasting' => true]);
    }

    /**
     * Determine if the array keys should be converted to numeric values.
     */
    private function shouldNotTypeCast()
    {
        return (
            array_key_exists('withoutTypeCasting', $this->meta)
            && $this->meta['withoutTypeCasting']
        );
    }

    /**
     * Hydrate the given attribute on the model based on the incoming request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @param  string  $requestAttribute
     * @param  object  $model
     * @param  string  $attribute
     * @return void
     */

}
