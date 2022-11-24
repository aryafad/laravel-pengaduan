<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class DashboardComponents extends Component
{
    public function render()
    {
        return view('livewire.pages.dashboard-components')->layout('layouts.admin');
    }
}
