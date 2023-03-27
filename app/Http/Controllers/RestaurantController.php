<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class RestaurantController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    /**
     * Use the Yelp API to search and return any user input
     *
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function search_restaurants(Request $request): JsonResponse {
        $this->validate($request, [
            'location' => 'required',
            'term' => 'required'
        ]);

        return response()->json(["Hello" => "World"], 200);
    }

    /**
     * Use the Yelp API to return details using the ID from the yelp API
     *
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function restaurant_details($id): JsonResponse {
        return response()->json(["Hello" => "World"], 200);
    }
}
