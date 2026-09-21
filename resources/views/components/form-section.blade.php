@props(['submit'])

<div {{ $attributes->merge(['class' => 'profile-section ']) }}>
    <!-- profile head -->
    <div class="profile-section-content ">
        <div class="profile-head">
            <x-section-title>
                <x-slot name="title">{{ $title }}</x-slot>
                <x-slot name="description">{{ $description }}</x-slot>
            </x-section-title>
        </div>


        <form wire:submit="{{ $submit }}" class="profile-form">
            <div
                class="px-4   ">
                <div class="grid grid-cols-6 gap-6">
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
            <div
                class="flex items-center justify-end ">
                {{ $actions }}
            </div>
            @endif
        </form>
    </div>
</div>