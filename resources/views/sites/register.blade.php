@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
    
                

                   <!-- Main content -->
      <section class="content"  id="dashboard">

        <div >
         {!! Form::open(['route' => 'sites.store']) !!}
			
		        	@include('form')
			
        {!! Form::close() !!}
          
        </div>
      </section> 
       </div>

       
       <div class="col-md-8 col-md-offset-2">
      <section>
          <input type="file">
            <p><a href="" class="btn btn-primary" role="button">Cargar Masivamente</a></p>
      </section>
      </div>
               
       
     </div>
</div>
@endsection