<form id="messageForm" class="contactForm" method="post" action="form.send.contact.php">
		<h2>Send Us A Message</h2>
		<input type="text" placeholder="name" id="messageName" name="name" />
		<input type="text" placeholder="email" id="messageEmail" name="email" />
		<input type="text" placeholder="subject" id="messageSubject" name="subject" />
		<textarea placeholder="message" id="message" name="message" ></textarea>
		<input type="submit" value="Send Us a Message" />
		<input type="hidden" value="nospam" name="spamcheck"/>
	</form>