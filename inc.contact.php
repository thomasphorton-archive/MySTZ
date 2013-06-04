<form id="messageForm" class="contactForm" method="post" action="form.send.contact.php">
	<h2>Send Us A Message</h2>
	<label for="messageName">Name*</label>
	<input type="text" placeholder="name" id="messageName" name="name" required="required" class="span4"/>
	<label for="messageEmail">Email Address*</label>
	<input type="text" placeholder="email" id="messageEmail" name="email" required="required" class="span4"/>
	<label for="messageSubject">Subject*</label>
	<input type="text" placeholder="subject" id="messageSubject" name="subject" required="required" class="span4"/>
	<label for="message">Message*</label>
	<textarea placeholder="message" id="message" name="message" required="required" class="span4"></textarea>
	<button class="btn" type="submit">Send Us a Message</button>
	<input type="hidden" value="nospam" name="spamcheck"/>
</form>