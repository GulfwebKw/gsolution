<div>
    <div class="form-group">
        <input type="text" wire:model.lazy="name" class="form-control" placeholder="Full Name">
        @error('name')
        <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
        @enderror
    </div>
    @foreach($fields as $i => $field)
        <div wire:key="{{ $i }}" class="form-group">
            @if(optional($field)['type'] == 'textarea')
                <textarea placeholder="{{ optional($field)['title'] }}" rows="5"  wire:model.lazy="data.{{ $field['name'] }}"></textarea>
                @error('data.'.$field['name'])
                <span class="text-danger">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            @else
                <input type="{{ optional($field)['type'] ?? 'text' }}" wire:model.lazy="data.{{ $field['name'] }}" class="form-control" placeholder="{{ optional($field)['title'] }}" >
                @error('data.'.$field['name'])
                <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                @enderror
            @endif
        </div>
    @endforeach
    @if($attachment_title)
    <div class="form-group">
        <input type="text" wire:model.lazy="attachment" class="form-control" @if($attachment_accept) accept="{{$attachment_accept}}" @endif >
        @error('attachment')
        <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
        @enderror
    </div>
    @endif
    <div class="form-group">
        <button type="button"  wire:loading.attr="disabled"
                wire:click.prevent="save" class="theme-btn">{{ $buttonLabel }}</button>
        @if($alert)<div class="alert alert-success">{{ $alert }}</div>@endif
    </div>
</div>
