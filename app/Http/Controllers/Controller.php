<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
  public $data = [];

  public function __construct()
  {
    $this->data['appname'] = "Bakul Beras";
    $model = new \App\Menus();
    $item = $model->where('parent_id', 0)->orderBy('order')->get()->toArray();
    foreach ($item as $key => $val) {
      $this->data['menu'][$key] = $val;
      $this->data['menu'][$key]['childs'] = [];
      $child = $model->where('parent_id', $val['id'])->orderBy('order')->get()->toArray();
      if (!empty($child)) {
        $this->data['menu'][$key]['childs'] = $child;
      }
    }
    $this->data['uri_string'] = url()->current();
    View::share($this->data);
  }
}
