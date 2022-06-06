@extends('front.layout.layout2')


@section('content')

    <div id="mainBody">
<div class="container">
	<hr class="soften">
	<h1>Visit us</h1>
	<hr class="soften"/>
	<div class="row">
		<div class="span4">
		<h4>Contact Details</h4>
		<p>	47 'A' Block,Main Road,<br/>  Uposhohor, Sylhet.
			<br/><br/>
			foodieforu@gmail.com<br/>
			﻿Tel 01611141393<br/>
			web: foodie.com
		</p>
		</div>

		<div class="span4">
		<h4>Opening Hours</h4>
			<h5> Friday - Monday</h5>
			<p>09:00am - 09:00pm<br/><br/></p>
			<h5>Saturday</h5>
			<p>09:00am - 07:00pm<br/><br/></p>
			<h5>Sunday</h5>
			<p>12:30pm - 06:00pm<br/><br/></p>
		</div>
		<div class="span4">
		<h4>Email Us</h4>
		<form class="form-horizontal">
        <fieldset>
          <div class="control-group">

              <input type="text" placeholder="name" class="input-xlarge"/>

          </div>
		   <div class="control-group">

              <input type="text" placeholder="email" class="input-xlarge"/>

          </div>
		   <div class="control-group">

              <input type="text" placeholder="subject" class="input-xlarge"/>

          </div>
          <div class="control-group">
              <textarea rows="3" id="textarea" class="input-xlarge"></textarea>

          </div>

            <button class="btn btn-large" type="submit">Send Messages</button>

        </fieldset>
      </form>
		</div>
	</div>
	<div class="row">
	<div class="span12">
		<iframe style="width:100%; height:300; border: 3px" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1395.4034518665321!2d91.89081563928983!3d24.890176693625325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1654402611477!5m2!1sen!2sbd" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		</div>
</div>
</div>


@endsection
