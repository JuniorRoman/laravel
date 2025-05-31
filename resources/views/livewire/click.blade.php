<div>

  <form wire:submit.prevent="createUser" action="" class="flex flex-col gap-2 max-w-md mx-auto">
    <input wire:model="name" type="text" placeholder="name" class="border p-2 rounded bg-slate-200 text-semibold text-black ">
    <input wire:model="email" type="email" placeholder="email" class="border p-2 rounded bg-slate-200 text-semibold text-black ">
    <input wire:model="password" type="password" placeholder="password" class="border p-2 rounded bg-slate-200 text-semibold text-black ">
    <button>Create</button>
  </form>
  @foreach ($users as $user)
  <div class="flex flex-col gap-2 w-96 ">
    <h2>{{ $user->name }}</h2>
    <p>{{ $user->email }}</p>
    <hr>
  </div>

  @endforeach
</div>