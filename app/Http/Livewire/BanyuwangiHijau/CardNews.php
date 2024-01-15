<?php

namespace App\Http\Livewire\BanyuwangiHijau;

use Livewire\Component;

class CardNews extends Component
{
    public $item;
    public function mount(\Illuminate\Session\SessionManager $session, $item)
    {
        $session->put("news.{$item->id}.last_viewed", now());
        $this->item = $item;
    }
    public function setContent()
    {
        $this->emit('news_content', $this->item);
    }
    public function render()
    {
        return view('livewire.banyuwangi-hijau.card-news');
    }
}
