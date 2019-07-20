<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;

trait RestTrait {

	protected function successResponse($data = []) {

		$response = [
			'code' => 200,
			'status' => 'success',
			'data' => $data
		];
		return response()->json($response, $response['code']);
    }

    protected function createdResponse() {

		$response = [
			'code' => 201,
			'status' => 'success',
        ];
        
		return response()->json($response, $response['code']);
    }

	protected function notFoundResponse() {

		$response = [
			'code' => 404,
			'status' => 'error',
			'data' => 'Resource Not Found',
			'message' => 'Not Found'
		];
		return response()->json($response, $response['code']);
    }


	public function errorResponse($message) {

		$response = [
			'code' => 422,
			'status' => 'error',
			'message' => $message
		];
		return response()->json($response, $response['code']);
	}
}
