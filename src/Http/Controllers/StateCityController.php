<?php

namespace Uyoobonga\StateCity\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Uyoobonga\StateCity\Http\Models\State;


class StateCityController extends BaseController
{
    /**
     * @var State
     */
    private $state;

    /**
     * StateCityController constructor.
     * @param State $state
     */
    public function __construct(State $state)
    {
        $this->state = $state;
    }

    /**
     * Using for Ajax call in the frontend
     * @return array
     *
     */
    public function state()
    {
        $states = $this->state->all();
        foreach ($states as $state) {
            $data[] = $state->name;
        }
        return  $data;
    }

    /**
     * @param $code
     * @return array
     */
    protected function city($code)
    {

        $state = $this->state->where('name', $code)->with('cities')->first();

        try {

            if ($state) {

                foreach ($state->cities as $key => $city) {
                    $data[] = $city->name;
                }

                return $data;

            }


        } catch (\Exception $e) {
            return [
                $e->getMessage()
            ];
        }

    }
}
