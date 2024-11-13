@extends('welcome')
@section('content')
<div class="section-header" ">
    <div class="container" >
      <div class="paracontact">
        <div class="paracontact paracontact-box">
      <h2>Contact Us</h2>
      <p>Your journey is our priority. Reach out to us for seamless solutions and exceptional service.<br> Whether you're in need of maintenance, repairs, or simply have a question.Contact us today and experience automotive excellence, tailored to you.</p>
        </div>  
    </div>
    </div>
  
  
  
    <div class="row">
      
      <div class="contact-info">
        <div class="contact-info-item">
          <div class="contact-info-icon">
            <i class="fas far-home"></i>
          </div>
          
          <div class="contact-info-content">
            <h4>Address</h4>
            <p>46/A Main Road,<br/> Negombo.</p>
          </div>
        </div>
        
        <div class="contact-info-item">
          <div class="contact-info-icon">
            <i class="fas fa-phone"></i>
          </div>
          
          <div class="contact-info-content">
            <h4>Phone</h4>
            <p>031 222 3330</p>
            <p>077 222 3030</p>
          </div>
        </div>
        
        <div class="contact-info-item">
          <div class="contact-info-icon">
            <i class="fas fa-envelope"></i>
          </div>
          
          <div class="contact-info-content">
            <h4>Email</h4>
           <p>turboSL@gmail.com</p>
          </div>
        </div>
      </div>
      
      <div class="contact-form">
        <form method="POST" action="Contactdata">
          @csrf
          <h2>Send Message</h2>
          <div class="input-box">
            <input type="text" required="true" name="name">
            <span>Full Name</span>
          </div>
          
          <div class="input-box">
            <input type="email" required="true" name="email">
            <span>Email</span>
          </div>
          
          <div class="input-box">
            <textarea required="true" name="message"></textarea>
            <span>Type your Message...</span>
          </div>
          
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
      
    </div>
  </div>

@endsection
