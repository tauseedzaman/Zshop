<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithPagination;
use App\Models\faq as faqModel;
use Livewire\Component;

class Faq extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $question;
    public $answer;
    public $edit_faq_id;
    public $button_text = "Create FAQ";



    public function add_new_faq()
    {
        if ($this->edit_faq_id) {

            $this->update($this->edit_faq_id);

        }else{

            $this->validate([
                'question' => 'required',
                'answer' => 'required',
            ]);

            faqModel::create([
                'question'          => $this->question,
                'answer'         => $this->answer,

            ]);

            $this->question="";
            $this->answer="";

            session()->flash('message', 'FAQ Created successfully.');
        }

    }


    /*
    * Edit FAQ by id
    */
    public function edit($id)
    {
        $faq = faqModel::findOrFail($id);
        $this->edit_faq_id = $id;

        $this->question = $faq->question;
        $this->answer = $faq->answer;

        $this->button_text="Update FAQ";
    }

    
    /*
    * Update FAQ by id
    */
    public function update($id)
    {
        $this->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
        
        $faq = faqModel::findOrFail($id);
        $faq->question = $this->question;
        $faq->answer = $this->answer;
        $faq->save();

        $this->question="";
        $this->answer="";
        $this->edit_faq_id="";
        session()->flash('message', 'FAQ Updated Successfully.');

        $this->button_text = "Create FAQ";

    }

    public function delete($id)
    {
        faqModel::findOrFail($id)->delete();
        session()->flash('message', 'FAQ Deleted Successfully.');

        $this->question="";
        $this->answer="";
    }

    public function render()
    {
        return view('livewire.admin.faq',[
            'faqs' => faqModel::latest()->paginate(30)
        ])->layout('admin.layouts.wire_app');
    }
}
