<?php

namespace App\Http\Controllers\Admin\Tmz\Repository;


use App\Models\Models\Tmzs\Tmzs;


class TmzRepository
{
    public function get_by_id(int $id): Tmzs {

         return Tmzs::findOrFail($id);

    }

    public function get_latest(int $count) {
        return Tmzs::latest()->paginate($count);
    }
}
