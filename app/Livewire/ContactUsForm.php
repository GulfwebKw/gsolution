<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class ContactUsForm extends Component
{

    use WithFileUploads;
    public ?string  $name = null;
    public $attachment ;
    public array  $fields = [];
    public array  $data = [];
    public string  $subject = '';
    public string  $type = '';
    public string  $success_message = '';
    public ?string  $alert = null;
    public ?string  $redTitle = null;
    public ?string  $title = null;
    public ?string  $attachment_title = null;
    public ?string  $attachment_accept = null;
    public string  $buttonLabel = 'send';
    public array  $validationAttributes = [];
    public array  $rules = [];


    public function mount(){
        foreach ($this->fields as $field) {
            $this->validationAttributes['data.'.$field['name']] = $field['title'] ;
            $this->rules['data.'.$field['name']] = optional($field)['validation'] ?? 'nullable';
        }
        $this->rules['name'] = ['required','string','min:3'];
        $this->validationAttributes['name'] = 'Full name' ;
    }

    public function save(){
        $this->validate();
        $application = new Message();
        $application->name = $this->name;
        $application->type = $this->type;
        $application->subject = $this->subject;
        $application->ip_address = request()->getClientIp();
        $application->is_read = false;
        $application->attachment = $this->attachment  ? $this->attachment->store('messages/'.now()->format('Y/m/d'), 'public') : null;
        $application->meta = $this->data;
        $application->save();
        foreach ($this->fields as $field) {
            $this->data[$field['name']] = null;
        }
        $this->name = null;
        $this->attachment = null;
        $this->alert = $this->success_message;
    }

    public function render()
    {
        return view('livewire.contact-us-form');
    }
}
