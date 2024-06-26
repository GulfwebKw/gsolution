<div>
    <div class="contact-page-form form-style-one wow fadeInUp delay-0-2s">
        <div class="section-title mb-35">
            @if($redTitle)<span class="sub-title mb-15">{{ $redTitle }}</span>@endif
            <h3>{{ $title }}</h3>
        </div>
        <div class="row gap-60 pt-15">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name"><i class="far fa-user"></i></label>
                    <input type="text" wire:model.lazy="name" class="form-control" placeholder="Full Name">
                    <div class="help-block with-errors"></div>
                    @error('name')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            @foreach($fields as $i => $field)
                <div wire:key="{{ $i }}" class="col-md-12">
                    @if(optional($field)['type'] == 'textarea')
                        <div class="form-group">
                            <label for="{{ $field['name'] }}"><i class="far fa-pencil"></i></label>
                            <textarea rows="2" wire:model.lazy="data.{{ $field['name'] }}" class="form-control" placeholder="{{ optional($field)['title'] }}" ></textarea>
                            <div class="help-block with-errors"></div>
                            @error('data.'.$field['name'])
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    @else
                        <div class="form-group">
                            <label for="{{ $field['name'] }}"><i class="{{ optional($field)['icon'] ?? '' }}"></i></label>
                            <input type="{{ optional($field)['type'] ?? 'text' }}" wire:model.lazy="data.{{ $field['name'] }}" class="form-control" placeholder="{{ optional($field)['title'] }}">
                            <div class="help-block with-errors"></div>
                            @error('data.'.$field['name'])
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    @endif
                </div>
            @endforeach

            @if($attachment_title)
            <div class="col-md-12">
                <label for="attachment"><i class="far fa-file-pdf"></i> {{ $attachment_title }}</label>
                <input type="file" wire:model.lazy="attachment" @if($attachment_accept) accept="{{$attachment_accept}}" @endif class="form-control">
                @error('attachment')
                <span class="text-danger">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            @endif
            <div class="col-md-12">
                <div class="form-group pt-5 mb-0">
                    <button type="button" wire:loading.attr="disabled"
                            wire:click.prevent="save" class="theme-btn style-two w-100">{{ $buttonLabel }} <i class="far fa-arrow-right"></i></button>

                    @if($alert)<div id="msgSubmit" class="alert alert-success">{{ $alert }}</div>@endif
                </div>
            </div>
        </div>
    </div>
</div>
