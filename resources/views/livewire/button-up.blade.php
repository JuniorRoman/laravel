<div>
  @if($showButtonUp)
      <button
          class="fixed bottom-0 z-10 right-1  px-1 py-1 rounded-t-md shadow-lg bg-blue-400"
          wire:click="goToTop"
      >
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-big-up-icon lucide-arrow-big-up"><path d="M9 18v-6H5l7-7 7 7h-4v6H9z"/></svg>
      </button>
  @endif
</div>
