<x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ $post->title }}
  </h2>
</x-slot>


<div>
  <div class="max-w-4xl mx-auto py-20">
    <p>{!! $post->body !!}</p>
  </div>
</div>
