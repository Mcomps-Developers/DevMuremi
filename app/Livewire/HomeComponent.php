<?php

namespace App\Livewire;
use App\Models\Contact;
use Livewire\Component;

class HomeComponent extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ];
    public function sendMessage()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->subject = $this->subject;
        $contact->message = $this->message;
        $contact->save();
        session()->flash('message','Your message has been submitted successfully!');
    }

    public function downloadCv()
    {
        return response()->download(storage_path('app/downloads/muremiCv.pdf'));
    }

    public function render()
    {
        return view('livewire.home-component')->layout('layouts.base');
    }
}
