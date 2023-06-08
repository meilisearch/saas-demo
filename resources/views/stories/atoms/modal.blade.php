@storybook([
'name' => 'Modal',
'args' => [
],
'argTypes' => [
]
])

<div class="z-100 fixed top-0 right-0 w-full h-full p-4 pt-[12vh] overflow-hidden bg-gray-200/50 flex justify-center">
    <x-atoms.modal>
        <x-slot:header>
            <x-atoms.input></x-atoms.input>
        </x-slot>
        <x-slot:content>
            <div> some</div>
        </x-slot>
    </x-atoms.modal>
</div>
