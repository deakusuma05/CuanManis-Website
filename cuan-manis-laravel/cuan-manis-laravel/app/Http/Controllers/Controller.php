<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

// Tambahkan trait‑trait di bawah ini:
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
