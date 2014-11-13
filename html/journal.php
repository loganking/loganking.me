<!DOCTYPE html>
<html>
<head>
	<title>online journal</title>
</head>
<body>
	<article>
		<h1>migrating to ExactTarget</h1>
		<p>For a recent client project, we transitioned their transactional email provider from Postmark to ExactTarget. All the documentation, represenatives, and ExactTarget gurus said that this should be possible, but uncovering the exact methods took a bit more digging.</p>
		<p>Moving from Postmark, where there is minimal setup needed in the Postmark application, we expected our email calls to just work. Or at any rate, provide helpful errors so that we could fix what was happening. This was hardly the case throughout the project, though part of it may've been our failure to see the paradigm differences between the two systems. ExactTarget wants their clients to create and edit the emails in their application (referenced as ET from here out) and then those emails are to be transactionally triggered by the client application (will be referenced as simply the application). We knew this was case further down the road, but thought we could force ET into sending the emails generated in the application through ExactTarget's system.</p>
		<p>Transactional emails in ExactTarget are all handled using TriggeredSends. They're exactly what they sound like - the application makes a call to ET triggering the send of a previously defined email. To get this process to work involves the creation of data extensions to hold variable content, an email that defines the actual email body, connecting the email to a triggered send hook to be callable, and setting up the email receipients on an ExactTarget contact list (even though they aren't campaign emails). We'll walk through each of those steps here outlining the process.</p>
	</article>
	<article>
		<h1>beginnings</h1>
		<p>This is the first post. I'm planning on writing more. 
It's important for me to make a beginning somewhere. So instead of 
overthinking it, as I'm aught to do, this is it. Terse. Simple. The 
next piece will be about something else. Not a second beginning.</p>
	</article>
</body>
</html>
