{{-- <select class="form-select" name="nationality" aria-label="Default select example" required>
    <option selected>اختر العميل ...</option>
    <option value="">
        <input wire:model="search" type="text" placeholder="Search users..." />
    </option>
    @foreach ($users as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
    @endforeach
</select> --}}

<div class="relative">
    {{-- <input type="text" class="form-input" placeholder="Search Contacts..." wire:model="query" wire:keydown.escape="reset"
        wire:keydown.tab="reset" wire:keydown.arrow-up="decrementHighlight" wire:keydown.arrow-down="incrementHighlight"
        wire:keydown.enter="selectContact" /> --}}

    <div wire:loading class="absolute z-10 w-full bg-white rounded-t-none shadow-lg list-group">
        <div class="list-item">Searching...</div>
    </div>

    <div class="fixed top-0 bottom-0 left-0 right-0" wire:click="reset"></div>

    <div class="absolute z-10 w-full bg-white rounded-t-none shadow-lg list-group">
        <select class="form-select" name="nationality" aria-label="Default select example" selected data-live-search="true" required>
            <option>اختر العميل ...</option>
            <option value="">
                {{-- <input wire:model="search" type="text" placeholder="Search users..." /> --}}
                <input type="text" class="form-" placeholder="Search Contacts..." wire:model="query"
                    wire:keydown.escape="reset" wire:keydown.tab="reset" wire:keydown.arrow-up="decrementHighlight"
                    wire:keydown.arrow-down="incrementHighlight" wire:keydown.enter="selectContact" />
            </option>
            @if (!empty($query))
                @if (!empty($users))

                    @foreach ($users as $item)
                        <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                    @endforeach
                    {{-- @foreach ($users as $i => $contact)
                    <a href=""
                        class="list-item {{ $highlightIndex === $i ? 'highlight' : '' }}">{{ $contact['name'] }}</a>
                @endforeach --}}
                @else
                    <div class="list-item">No results!</div>
                @endif
    </div>
    @endif
    </select>
</div>
