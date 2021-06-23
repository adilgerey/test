<?php

namespace App\Http\Controllers\Admin\Tmz\Utils;



class ListBody
{
        private $tmz;

        public function __construct(){
            $this -> tmz = [];
        }
        public function create ($tmzs): array {
            foreach ($tmzs as $tmz) {
                $this->set_id('id', $tmz);
                $this->set_name('name', $tmz);
                $this->set_address('address', $tmz);
                $this->set_quantity('quantity', $tmz);
                $this->set_price('price', $tmz);

            }
        return $this -> tmz;

    }

       private function get_id($key, $tmz): int {
            return (int) $tmz->{$key};
       }
        private function get_name($key, $tmz): string {
            return  $tmz->{$key};
        }
    private function get_address($key, $tmz): string {
        return  $tmz->{$key};
    }
    private function get_quantity($key, $tmz): int{
        return (int) $tmz->{$key};
    }
    private function get_price($key, $tmz): float {
        return  $tmz->{$key};
    }

    private function set_id ($key, $tmz): void {
     $this->tmz [$tmz->id] [$key] = $this -> get_id($key, $tmz) ;
    }
    private function set_name($key, $tmz): void {
        $this -> tmz [$tmz->id] [$key] = $this -> get_name($key, $tmz) ;
    }
    private function set_address($key, $tmz): void {
        $this -> tmz  [$tmz->id] [$key] = $this -> get_address($key, $tmz) ;
    }
    private function set_quantity($key, $tmz): void{
        $this -> tmz  [$tmz->id] [$key] = $this -> get_quantity($key, $tmz) ;
    }
    private function set_price($key, $tmz): void {
        $this -> tmz  [$tmz->id] [$key] = $this -> get_price($key, $tmz) ;
    }


}
