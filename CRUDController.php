<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Validator;
use App\Models\Post;

class CRUDController extends Controller
{
// Menampilkan Data
public function 
// Create
public function CRUDCreate ($id)
// Update
public function CRUDCreate ($id)

//DELETE 
    public function CRUDDelete($id)
    {
        DB::beginTransaction();
        try {
            $content6 = cmsContent9::find($id);
            if (!$content6) {
                throw new Exception('Content Tidak Ditemukan');
            }
            $content6->delete();
            DB::commit();
            return response()->json(['success' => true, 'message' => ' Berhasil Dihapus'], 200);
        } catch (Exception $e) {
            DB::rollback();
            return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
        }
    }
}
