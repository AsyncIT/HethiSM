@extends('app')

@section('content_section')
  <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="#">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Nous Contactez</li>
      </ul>

        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1471.8415619773552!2d2.282945711829418!3d48.905405690844525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66f7d08d42c5f%3A0x9910d291a4875cc8!2sHerthi!5e0!3m2!1sen!2slk!4v1437211281750" width="100%"  frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>


      <!-- Contact Us-->
      <h1 class="heading1"><span class="maintext">Nous Contactez</span><span class="subtext"> Contactez-nous pour plus</span></h1>
      <div class="row">
        <div class="span9">
          <form class="form-horizontal contactform"  method="post">
            <fieldset>
              <div class="control-group">
                <label for="name" class="control-label">Nom Et Pr�nom: <span class="required">*</span></label>
                <div class="controls">
                  <input type="text"  class="required" id="name" value="" name="name">
                </div>
              </div>
              <div class="control-group">
                <label for="email" class="control-label">Adresse E-Mail: <span class="required">*</span></label>
                <div class="controls">
                  <input type="email"  class="required email" id="email" value="" name="email">
                </div>
              </div>
              <div class="control-group">
                <label for="url" class="control-label">Sujet :</label>
                <div class="controls">
                  <input type="url" id="url" value="" name="url">
                </div>
              </div>
              <div class="control-group">
                <label for="message" class="control-label">Enquiry:</label>
                <div class="controls">
                  <textarea  class="required" rows="6" cols="40" id="message" name="messagee"></textarea>
                </div>
              </div>
              <div class="form-actions">
                <input class="btn btn-orange" type="submit" value="Submit" id="submit_id">
                <input class="btn" type="reset" value="Reset">
              </div>
            </fieldset>
          </form>
        </div>
        
        <!-- Sidebar Start-->
        <div class="span3">
          <aside>
            <div class="sidewidt">
              <h2 class="heading2"><span>Nous Contactez</span></h2>
              <p>
                  Herthi<br/>
                  31 Rue d'Anjou, <br/>
                  92600 Asni�res-sur-Seine,<br/>
                  France<br/>

                  <br>
                Phone:  01 75 47 51 65 <br>
                Email: info@herthi.fr<br>
                Web: herthi.fr<br>
              </p>
            </div>
          </aside>
        </div>
        <!-- Sidebar End-->
        
      </div>
    </div>
  </section>

  @endsection

