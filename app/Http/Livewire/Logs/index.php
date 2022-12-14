<?php

namespace App\Http\Livewire\Logs;

use App\Models\Log;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $search, $name='all',$product;

    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public function loadLog() {
        // $stores = Store::orderBy('name')->get();
        // $query = Log::orderBy('name')
        // ->search($this->search);

        // if($this->name!='all'){
        //     $query->where('name', $this->name);
        // }

        $logs = Log::auth()->user()->paginate(5);
        return compact('logs');
    }

    public function render()
    {
        return view('livewire.logs.index', $this->loadLog());
    }
}
