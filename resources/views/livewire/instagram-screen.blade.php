<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $photo = '';
    public string $title = '';
    public bool $showVerifyStamp = false;
    public string $subTitle = 'sponsored';
    public string $content = '';
    public int $qtdLikes = 0;
    public int $qtdComments = 0;
    public string $backgroundColor = '';
    public bool $darkMode = false;
}; ?>

<div class="grid grid-cols-3 h-screen">
    <div class="bg-gray-300 p-3 overflow-auto flex flex-col gap-3">
        <x-card header="HEADER" class="flex flex-col gap-3">
            <x-upload
                wire:model.live="photo"
                label="Profile Photo" />
            <x-input
                wire:model="title"
                label="Title" />
            <x-toggle
                wire:model="showVerifyStamp"
                label="Show verify stamp"
                position="left" />
            <div class="border-t border-gray-300/30 pt-3">
                <h3 class="mb-2 block text-sm font-semibold text-gray-600 dark:text-dark-400">Subtitle</h3>
                <div class="flex justify-between items-center">
                    <x-radio wire:model="subTitle" value="music" label="Music" />
                    <x-radio wire:model="subTitle" value="sponsored" label="Sponsored"/>
                    <x-radio wire:model="subTitle" value="location" label="Location"/>
                </div>
            </div>
        </x-card>
        <x-card header="BODY" class="flex flex-col gap-2">
            <x-textarea
                wire:model="content"
                label="Content"
                resize-auto
                maxlength="100"
                count />
            <x-button icon="cog" position="left" sm>Generate Content</x-button>
        </x-card>
        <x-card header="FOOTER" class="flex justify-between items-center gap-2">
            <x-number
                label="Qtd. Likes"
                wire:model="qtdLikes"
                min="0"
                max="500"
                centralized />
            <x-number
                label="Qtd. Comments"
                wire:model="qtdComments"
                min="0"
                max="500"
                centralized />
        </x-card>
        <x-card header="GENERAL" class="flex flex-col gap-2">
            <x-color
                label="Color"
                wire:model="$backgroundColor" />
            <x-toggle
                wire:model="darkMode"
                color="slate"
                label="Dark Mode" />
        </x-card>
    </div>
    <div class="bg-gray-200 col-span-2 flex items-center justify-center">
        <div class="w-4/6 bg-white rounded shadow h-4/6 p-10">
            <div class="w-full h-full">
                <div class="grid grid-rows-6 h-full">
                    <header class="flex justify-between items-center p-2">
                        <div class="flex justify-start items-center gap-2">
                            <div class="rounded-full overflow-hidden bg-gradient-to-tr from-yellow-400 via-pink-500 to-purple-500 p-0.5">
                                <div class="flex h-full w-full bg-transparent items-center justify-center">
                                    <x-avatar image="https://picsum.photos/200/200" lg borderless />
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-start items-center gap-2">
                                    <span class="font-bold text-xl" x-text="$wire.title"></span>
                                    <x-icon x-show="$wire.showVerifyStamp" name="check-badge" class="size-4 text-blue-600"/>
                                </div>
                                <div class="text-md" x-text="$wire.subTitle"></div>
                            </div>
                        </div>
                        <div>
                            <x-icon name="ellipsis-horizontal" class="size-7"/>
                        </div>
                    </header>
                    <main class="bg-amber-400 row-span-4">main</main>
                    <footer class="bg-amber-600">footer</footer>
                </div>
            </div>
        </div>
    </div>
</div>
