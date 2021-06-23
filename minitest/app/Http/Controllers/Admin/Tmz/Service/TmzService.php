<?php

namespace App\Http\Controllers\Admin\Tmz\Service;

use App\Http\Controllers\Admin\Tmz\Repository\TmzRepository;
use App\Http\Controllers\Admin\Tmz\Utils\CommonBody;
use App\Http\Controllers\Admin\Tmz\Utils\ListBody;

class TmzService
{
        private $tmzRepository;
        private $tmzCreateBody;
        private $tmzListBody;

        public function __construct(TmzRepository $tmzRepository, CommonBody $tmzCreateBody, ListBody $tmzListBody){
            $this -> tmzRepository = $tmzRepository;
            $this -> tmzCreateBody = $tmzCreateBody;
            $this -> tmzListBody = $tmzListBody;
        }


        public function getById(int $id): array {
            $tmz = $this->tmzRepository->get_by_id($id);

            return $this -> tmzCreateBody->create($tmz);
        }

        public function latest(int $numLatest): array {
            $tmzs = $this->tmzRepository->get_latest($numLatest);
            return $this -> tmzListBody->create($tmzs);
        }
}
