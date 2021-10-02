<form id="contact-form" class="contact-section" method="POST" action="api/password/email">
@csrf
    <span class="pre-input"><i class="fa fa-envelope-o"></i></span>
    <input class="name plain buffer" type="email" name="mail" placeholder="Email" value="{{ old('email') }}">
    <input id="send" class="plain button yellow" type="submit" value="Reset Password">
    @foreach($errors->all() as $error)
    <font size="3" color="red">{{ $error }}</font>
    @endforeach
</form>
