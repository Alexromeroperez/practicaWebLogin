<form action="{{url('/')}}" method='post'>
    <label for="mail">Correo:<input type="email" name="mail"/></label>
     @error('mail')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="submit" value="Enviar"/>
</form>

