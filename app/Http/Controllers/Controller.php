<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *   title="Binance APP",
 *   description="Isso é um projeto de teste",
 *   version="0.0.1",
 *
 *   @OA\Contact(
 *     name="Rian Oliveira",
 *     email="riandiasdeoliveira2001@gmail.com",
 *     url="https://github.com/riandeoliveira"
 *   ),
 *
 *   @OA\License(
 *     name="Apache 2.0",
 *     url="https://www.apache.org/licenses/LICENSE-2.0.html"
 *   ),
 *
 *   @OA\Server(
 *     url="http://localhost:8000",
 *     description="Local development server."
 *   ),
 *
 *   @OA\PathItem(
 *     path="/api"
 *   )
 * ),
 */
class Controller extends BaseController {
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
