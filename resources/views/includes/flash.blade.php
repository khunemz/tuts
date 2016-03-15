@if(Session::has('flash_notification.message'))
    <div class="alert alert-{{ Session::get('flash_notification.lavel') }}">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('flash_notification.message') }}
    </div>
@endif

@if(!empty($errors))
    @foreach($errors->all() as $error)
        <div>
            <ul class="alert alert-dismissable list-unstyled" id="error">
                <li>
                    <button type="button" class="close" data-dismiss="alert"
                            aria-hidden="true">&times;</button>
                    {{ $error }}
                </li>
            </ul>
        </div>
    @endforeach
@endif

