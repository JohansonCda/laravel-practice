<div>
   <h1>Subir Imagen</h1>
   @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li style="color:red;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

   <form method="post" action="/subir-imagen" enctype="multipart/form-data">
    @csrf
        <input type="file" name="imagen" id="imagen">
        <input type="submit" value="Enviar">
   </form>
</div>
