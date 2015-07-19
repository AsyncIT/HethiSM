@extends('app')

@section('content_section')

    <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="#">Accueil</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Cr�er Un Compte</li>
      </ul>
      <div class="row">        
        <!-- Register Account-->
        <div class="span9">
          <h1 class="heading1"><span class="maintext">Cr�er Un Compte</span><span class="subtext">Cr�er un compte avec nous</span></h1>

            {!! Form::open(['url' =>'registered','class'=>'form-horizontal']) !!}
            <h3 class="heading3">Vos informations personnelles</h3>
            <div class="registerbox">
              <fieldset>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Pr�nom:</label>
                  <div class="controls">
                    {!! Form::text('first_name',null,['class' => 'input-xlarge','required'])  !!}
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span>Nom De Famille:</label>
                  <div class="controls">
                    {!! Form::text('last_name',null,['class' => 'input-xlarge','required'])  !!}
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Email:</label>
                  <div class="controls">
                    {!! Form::text('email',null,['class' => 'input-xlarge','required'])  !!}
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> T�l�phone:</label>
                  <div class="controls">
                    {!! Form::text('telephone',null,['class' => 'input-xlarge','required'])  !!}
                  </div>
                </div>
              </fieldset>
            </div>
            <h3 class="heading3">Your Address</h3>
            <div class="registerbox">
              <fieldset>
                <div class="control-group">
                  <label class="control-label"> Company:</label>
                  <div class="controls">
                    {!! Form::text('company',null,['class' => 'input-xlarge'])  !!}
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Address 1:</label>
                  <div class="controls">
                    {!! Form::text('Address1',null,['class' => 'input-xlarge','required'])  !!}
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"> Address 2:</label>
                  <div class="controls">
                    {!! Form::text('Address2',null,['class' => 'input-xlarge'])  !!}
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">
                    <span class="red">*</span>City:</label>
                  <div class="controls">
                   {!! Form::text('city',null,['class' => 'input-xlarge','required'])  !!}
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">
                    <span class="red">*</span>Post Code:</label>
                  <div class="controls">
                    {!! Form::text('post_code',null,['class' => 'input-xlarge','required'])  !!}
                  </div>
                </div>
                <div class="control-group">
                  <label for="select01" class="control-label">
                    <span class="red">*</span>Country:</label>
                  <div class="controls">
                    <select name="country" id="select01" class="span3">
                      <option>Country:</option>
                      <option value="UK">United Kindom</option>
                      <option value="US">United States</option>
                    </select>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">
                    <span class="red">*</span>Region / State:</label>
                  <div class="controls">
                    <select name="region" id="select02" class="span3">
                      <option>Region / State:</option>
                      <option>Angus</option>
                      <option>highlands</option>
                    </select>
                  </div>
                </div>
              </fieldset>
            </div>
            <h3 class="heading3">Your Password</h3>
            <div class="registerbox">
              <fieldset>
                <div class="control-group">
                  <label  class="control-label"><span class="red">*</span> Password:</label>
                  <div class="controls">
                    {!! Form::text('password',null,['class' => 'input-xlarge','required'])  !!}
                  </div>
                </div>
                <div class="control-group">
                  <label  class="control-label"><span class="red">*</span> Password Confirm::</label>
                  <div class="controls">
                    {!! Form::text('password',null,['class' => 'input-xlarge'])  !!}
                  </div>
                </div>
              </fieldset>
            </div>

            <div class="pull-left">
              <label class="checkbox inline">
                <input type="checkbox" value="option2" >
              </label>
              I have read and agree to the <a href="#" >Privacy Policy</a>
              &nbsp;
              {!! Form::submit('Register',['class'=>'btn btn-orange']) !!}
            </div>
            {!! Form::close() !!}

          <div class="clearfix"></div>
          <br>
        </div>        
        <!-- Sidebar Start-->
        <aside class="span3">
          <div class="sidewidt">
            <h2 class="heading2"><span>Account</span></h2>
            <ul class="nav nav-list categories">
              <li>
                <a href="#"> My Account</a>
              </li>

              <li><a href="#">Downloads</a>
              </li>

              <li>
                <a href="category.html">Newsletter</a>
              </li>
              <li>
                <a href="category.html">Log In</a>
              </li>
            </ul>
          </div>
        </aside>
        <!-- Sidebar End-->
      </div>
    </div>
  </section>

  @endsection

