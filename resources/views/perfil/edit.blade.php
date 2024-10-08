<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <h1 class="display-5">Editar</h1>

    @include('menu')
    <br>

    <div class="d-flex justify-content-center">
        <form action="{{ route('perfil.update', $item->usuario_id) }}" method="POST">
            @csrf
            @method('PUT')
            <fieldset>
                <div class="form-group">
                    <label for="descricao">Descricao:</label>
                    <input type="text" name="descricao" id="descricao" class="form-control" value="{{ $item->descricao}}" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="usuario_id">Usuario:</label>
                    <select name="usuario_id" id="usuario_id">
                        @foreach ($info as $usuario)
                        <?php if ($item->usuario_id == $usuario->id) { ?>
                        <option value="{{$usuario->id}}">{{$usuario->nome}}</option>
                        @php } @endphp
                        @endforeach
                        @foreach ($info as $usuario)
                        <?php if ($item->usuario_id != $usuario->id) { ?>
                        <option value="{{$usuario->id}}">{{$usuario->nome}}</option>
                        @php } @endphp
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-dark" name="envia">Enviar</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>