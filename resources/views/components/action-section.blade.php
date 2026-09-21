<div {{ $attributes->merge(['class' => 'profile-section container' ]) }}>
    <div class="profile-section-content">
        <div class="profile-head">
            <x-section-title>
                <x-slot name="title">{{ $title }}</x-slot>
                <x-slot name="description">{{ $description }}</x-slot>
            </x-section-title>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="px-4 py-5 sm:p-6 shadow sm:rounded-lg">
                {{ $content }}
            </div>
        </div>
    </div>
</div>