<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InputFormController extends Controller
{
    public function store(Request $request)
    {
        try {
            DB::table('input_forms')->insert([
                'programs'     => $request->programs,
                'performance'  => $request->performance,
                'participants' => $request->participants,
                'pt_q1'        => $request->pt_q1,
                'pt_q2'        => $request->pt_q2,
                'pt_q3'        => $request->pt_q3,
                'pt_q4'        => $request->pt_q4,
                'pt_total'     => $request->pt_total,
                'fr_q1'        => $request->fr_q1,
                'fr_q2'        => $request->fr_q2,
                'fr_q3'        => $request->fr_q3,
                'fr_q4'        => $request->fr_q4,
                'fr_total'     => $request->fr_total,
                'fund'         => $request->fund,
                'remarks'      => $request->remarks,
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);

            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
