<?php

namespace App\Http\Controllers\Admin\Tmz;

use App\Http\Controllers\Admin\Tmz\Service\TmzService;
use App\Http\Controllers\Controller;
use App\Models\Models\Tmzs\Tmzs;
use Illuminate\Http\Request;

class Tmz extends Controller
{
        private TmzService $tmzService;

        public function __construct(TmzService $tmzService){
            $this -> tmzService = $tmzService;
        }
        public function add_tmz () {
        $tmz = new Tmzs();
        $tmz -> name = 'Первый товар';
        $tmz -> address = 'Первый адрес';
        $tmz -> quantity = '1';
        $tmz -> price = '100';
        $tmz -> save();

        return "Сохранили запись";

    }

        public function get_tmz (Request $request, $id) {
            $tmz = $this->tmzService->getById($id);
            return view('admin.tmz.add', compact('tmz'));
        }
}
