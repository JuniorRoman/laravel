<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Click extends Component
{
  public $name;
  public $email;
  public $password;

  public function createUser()
  {
    User::create([
      'name' => $this->name,
      'email' => $this->email,
      'password' => $this->password,
    ]);
    $this->name = '';
    $this->email = '';
    $this->password = '';
  }

  public function render()
  {

    $users = User::all();
    return view('livewire.click', ['users' => $users]);
  }
}
