<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchUsers extends Component
{
    public $query;
    public $users;
    public $highlightIndex;

    public function mount()
    {
        $this->resets();
    }

    public function resets()
    {
        $this->query = '';
        $this->users = [];
        $this->highlightIndex = 0;
    }

    public function incrementHighlight()
    {
        if ($this->highlightIndex === count($this->users) - 1) {
            $this->highlightIndex = 0;
            return;
        }
        $this->highlightIndex++;
    }

    public function decrementHighlight()
    {
        if ($this->highlightIndex === 0) {
            $this->highlightIndex = count($this->users) - 1;
            return;
        }
        $this->highlightIndex--;
    }

    public function selectContact()
    {
        // $users = $this->userss[$this->highlightIndex] ?? null;
        // if ($users) {
        //     $this->redirect(route('search-users', $users['id']));
        // }
    }

    public function updatedQuery()
    {
        $this->users = User::where('name', 'like', '%' . $this->query . '%')
            ->get(['*'])
            ->toArray();
    }

    public function render()
    {

        return view('livewire.search-users');
    }
}
