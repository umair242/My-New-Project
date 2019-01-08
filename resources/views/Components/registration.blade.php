<div id="user-register-form">
<h1>User Registration</h1>
<h2>{{!empty($registered_message) ? $registered_message : ''}}</h2>
{!! Form::open(['url' => '/register', 'files' => true]) !!}
    <div class="form-group">
        {{ Form::label('name:', null) }}<br>
        {{ Form::text('name', '', ['placeholder' => '']) }}
    </div>
    <div class="form-group">
        {{ Form::label('user name:', null) }}<br>
        {{ Form::text('user_name', '', ['placeholder' => '' , 'class' => 'user_name']) }}
    </div>
    <div class="form-group">
        {{ Form::label('email:', null) }}<br>
        {{ Form::email('email', '') }}
    </div>
    <div class="form-group">
        {{ Form::label('password:', null) }}<br>
        {{ Form::password('password') }}
    </div>
    <div class="form-group">
        {{ Form::label('retype_password:', null) }}<br>
        {{ Form::password('retype_password' ) }}
    </div>
    <div class="form-group">
        {{ Form::label('Male:', null) }}
        {{ Form::radio('gender', 'male', true)}}
        {{ Form::label('Fe-Male:', null) }}
        {{ Form::radio('gender', 'fe-male')}}
    </div>
    <div class="form-group">
        {{ Form::label('dob', 'Date of Birth:') }}<br>
        {{ Form::date('dob', \Carbon\Carbon::now()) }}
    </div>
    <div class="form-group">
        {{ Form::label('Select Country :', null) }}<br>
        {{  Form::select('country', ['Pakistan','India','Others']) }}
    </div>
    <div class="form-group">
        {{ Form::label('Profile Image:', null) }}
        {{ Form::file('image') }}
    </div>
    {{ Form::submit('Register' , ['class' => 'btn btn-success']) }}

	{!! Form::close() !!}
</div>