{!! Form::open(['action'=>'PostsController@store','method'=>'POST']) !!}
    <div>
       {{Form::label('Fname','First Name')}}
       {{Form::text('Fname','first name')}}
       {{Form::label('MiddleName','Middle name')}}
       {{Form::text('MName','middle name')}}
       {{Form::label('LastName','Last Name')}}
       {{Form::text('LName','last name')}}
       {{Form::label('Email','Email')}}
       {{Form::text('Email','email')}}
       {{Form::label('Mobile Number','mobile mumber')}}
       {{Form::text('MobileNumber','')}}
       {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
           
{!! Form::close() !!}
