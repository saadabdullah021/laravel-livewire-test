<?php

namespace App\Http\Livewire;

use Livewire\Component;


class Quote extends Component
{
    public $title = '';
    public $quotes = [];
    protected $listeners = ['refresh_quotes'];

    public function refresh_quotes()
    {
        // fetch random kanye quotes
        $this->quotes = get_kanye_quotes();
    }

    public function render()
    {
        // set page title
        $this->title = "quotes";
        // return view with data and layout data
        return view('livewire.quote')
            ->extends('admin.layout.main')
            ->layoutData(['title' => $this->title])
            ->section('body');
    }
}
