<x-jet-action-section>
  <x-slot name="title">
    {{ __('Download Account Data') }}
  </x-slot>

  <x-slot name="description">
    {{ __('Download all data related to your account.') }}
  </x-slot>

  <x-slot name="content">
    <div class="max-w-xl text-sm text-gray-600">
      {{ __('Download all data related to your account.') }}
    </div>

    <div class="mt-5">

      <x-jet-button wire:click="downloadUserData" wire:loading.attr="disabled">
        {{ __('Download') }}
      </x-jet-button>
    </div>
  </x-slot>





</x-jet-action-section>
