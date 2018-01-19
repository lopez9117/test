@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

          <!--      <div class="links">
                    <form method="post" action="{{url('import-excel')}}" enctype="multipart/form-data">
                     {{csrf_field()}}
                     <input type="file" name="excel">
                     <br><br>
                    <input type="submit" value="Enviar" style="padding: 10px 20px;">
                 </form>
                </div>-->

        <div>
        <a href="{{route('sites.create')}}"><button class="btn btn-success">Crear Sitio</button></a>
        <!--datatables--><br><br>
        <table style="border:   #00FFFF  2px solid;"  class="table table-bordered" id="myTable">
          <thead>
            <tr >
              <td>ID</td>
              <th>Address</th>
              <th>Latitude</th>
              <th>Longitude</th>
              <th>Acciones</th>

            </tr>
          </thead>

          <tbody>
            <tr>

              @foreach ($sitios as $sitio)
              <th>{{$sitio->id}}</th>
              <th>{{$sitio->address}}</th>
              <th>{{$sitio->latitude}}</th>
              <th>{{$sitio->longitude}}</th>
              <th>
              <p><a href="{{route('sites.show',$sitio->id)}}" class="btn btn-primary" role="button">Ver Sitio</a></p>
              
            <p><a href="{{route('sites.edit',$sitio->id)}}" class="btn btn-info" role="button">Editar Sitio</a></p>
              
                 <form style="display: inline;" method="POST" action="{{route('sites.destroy',$sitio->id)}}">
                  {!!csrf_field()!!}
                  {!!method_field('DELETE')!!}
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
              </th>
            </tr>
            @endforeach
          </tbody>
          </table

                 
            </div>

               
        </div>
    </div>
</div>
@endsection
