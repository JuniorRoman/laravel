<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\InfoBlock;
use App\Models\InfoBlockBack;

class FaqController extends Controller
{
    public $back;
    public function __invoke()
    {
      $faqs = Faq::all();
      $info = InfoBlock::all();
      $info_back = infoBlockBack::all();
      return view('faqs', compact('faqs', 'info', 'info_back'));
    }
}
