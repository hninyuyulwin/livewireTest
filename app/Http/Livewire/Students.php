<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class Students extends Component
{
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $ids;
    public $searchTerm;

    public function resetInputField()
    {
        $this->firstname = '';
        $this->lastname = '';
        $this->email = '';
        $this->phone = '';
        $this->ids = '';
    }

    public function store()
    {
        $validatedData = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);
        Student::create($validatedData);
        session()->flash('message', 'Student Data Added!');
        $this->resetInputField();
        $this->emit('studentAdded');
    }

    public function edit($id)
    {
        $student = Student::where('id', $id)->first();
        $this->ids = $student->id;
        $this->firstname = $student->firstname;
        $this->lastname = $student->lastname;
        $this->email = $student->email;
        $this->phone = $student->phone;
    }

    public function update()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);
        if ($this->ids) {
            $student = Student::find($this->ids);
            $student->update([
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'email' => $this->email,
                'phone' => $this->phone,
            ]);
            session()->flash('message', 'Student Updated Success');
            $this->resetInputField();
            $this->emit('studentUpdated');
        }
    }

    public function delete($id)
    {
        if ($id) {
            Student::where('id', $id)->delete();
            session()->flash('message', 'Student Data Deleted!');
        }
    }

    use WithPagination;
    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $students = Student::where('firstname', 'LIKE', $search)
            ->orWhere('lastname', 'LIKE', $search)
            ->orWhere('email', 'LIKE', $search)
            ->orWhere('phone', 'LIKE', $search)
            ->orderBy('id', 'desc')
            ->paginate(5);
        return view('livewire.students', ['students' => $students]);
    }
}
