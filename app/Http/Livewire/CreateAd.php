<?php

namespace App\Http\Livewire;

use App\Models\Ad;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateAd extends Component

{
    use WithFileUploads;
    public $title;
    public $body;
    public $price;
    public $category;
    public $images = [];
    public $temporry_images;
    public $image;

    protected $rules = [
        'title' => 'required|min:4',
        'body' => 'required|min:8',
        'category' => 'required',
        'price' => 'required|numeric',
    ];

    protected $message = [
        'required' => 'Field :attribute is required, please fill it',
        'min' => 'Field :attribute should be longer than :min',
        'numeric' => 'Field :attribute must be a number'
    ];
    public function store()
    {
       $category = Category::find($this->category);
       $ad = $category->ads()->create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
        ]);
           
        Auth::user()->ads()->save($ad);
        session()->flash('message','Ad created successfully.');
        $this->cleanForm();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function cleanForm()
    {
        $this->title = "";
        $this->body = "";
        $this->category = "";
        $this->price = "";
    }

    public function render()
    {
        return view('livewire.create-ad');
    }
}
