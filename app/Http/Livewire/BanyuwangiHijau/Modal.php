<?php

namespace App\Http\Livewire\BanyuwangiHijau;

use Livewire\Component;

class Modal extends Component
{
    public $news;
    protected $listeners = ['news_content' => 'updateContent'];
    public function updateContent(\Illuminate\Session\SessionManager $session, \App\Models\CeritaSukses $item)
    {
        $session->put("news.{ $item->id  }.last_viewed", now());
        $this->news = $item;

    }
    public function render()
    {
        $shareButtons = \Share::page(
            'https://dlh.banyuwangikab.go.id/banyuwangi-hijau',
            $this->news?->judul,
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp();
        return view('livewire.banyuwangi-hijau.modal', compact('shareButtons'));
    }
}
