@if (Session::has('flash_success'))
    <input type="hidden" id="success_input" value="{{ Session::get('flash_success') }}">
@endif
@if (Session::has('flash_error'))
    <input type="hidden" id="error_input" value="{{ Session::get('flash_error') }}">
@endif
