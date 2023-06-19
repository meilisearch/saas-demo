@storybook([
    'name' => 'Search Modal',
    'args' => [
        'href' => '#'
    ],
    'argTypes' => [
    ]
])

<x-molecules.search-modal>
  <x-atoms.card href="{{ $href }}">
    Search result 1
  </x-atoms.card>
  <x-atoms.card href="{{ $href }}">
    Search result 2
  </x-atoms.card>
  <x-atoms.card href="{{ $href }}">
    Search result 3
  </x-atoms.card>
  <x-atoms.card href="{{ $href }}">
    Search result 4
  </x-atoms.card>
  <x-atoms.card href="{{ $href }}">
    Search result 5
  </x-atoms.card>
</x-molecules.search-modal>
