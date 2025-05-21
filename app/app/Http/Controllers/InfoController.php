<?php declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dto\ServerInfoData;
use App\Dto\ClientInfoData;
use App\Dto\DatabaseInfoData;

class InfoController extends Controller
{
    /**
     * GET /info/server
     */
    public function server(): JsonResponse
    {
        $dto = new ServerInfoData(
            phpversion(),
            $_SERVER['SERVER_SOFTWARE'] ?? 'CLI'
        );

        return response()->json($dto);
    }

    /**
     * GET /info/client
     */
    public function client(Request $request): JsonResponse
    {
        $dto = new ClientInfoData(
            $request->ip(),
            $request->userAgent()
        );

        return response()->json($dto);
    }

    /**
     * GET /info/database
     */
    public function database(): JsonResponse
    {
        $cfg = DB::connection()->getConfig();

        $dto = new DatabaseInfoData(
            $cfg['driver']      ?? 'mysql',
            $cfg['host']        ?? 'localhost',
            DB::connection()->getPdo()->getAttribute(\PDO::ATTR_SERVER_VERSION)
        );

        return response()->json($dto);
    }
}
