@if($errors->any())
    @foreach($errors->all() as $error)
        <div style="color: red; margin-bottom: 10px;" class="error-message">{{ $error }}</div>
    @endforeach
@endif
