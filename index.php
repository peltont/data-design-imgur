<html>
	<head>
		<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
		<meta charset="UTF-8">
		<title>Data Design for Imgur
		</title>
	</head>
	<body>
		<h1 class="center">Data Design Project</h1>
		<br />
		<h4>Persona: Name: Joe Smith<br />
			Age: 19<br />
			Occupation: College student</h4>
		<h4>Technology: Above average technological literacy. As powerful of a computer as their budget would allow.</h4>
		<h4>Goals: Primarily used for easing boredom during boring lectures, and misc down time. User just wants easy and cheap entertainment that is highly convenient and accessable at the touch of a button. Joe wants to be able to within a few seconds be searching for entertainment. </h4>
		<ul>
			<li>User sees an photo that interests them</li>
			<li>User views comments and either adds to them, or rates the comment up and down.</li>
		</ul>
		<h4>Entities: The image itself, the user profile, and score.</h4>
		<h4>Relationships:
			<ul>
				<li>One user can upload an image or album.</li>
				<li>Many users can comment and vote.</li>
				<li>One comment can be replied to many times by many users.</li>
			</ul>
		</h4>
		<p>Entities</p>
		<ul>
			<li>The image</li>
			<ul>
				<li>imageID</li>
				<li>imageScore</li>
				<li>imagePosterID</li>
				<li>imageDateTime</li>
			</ul>
			<li>Vote
				<ul>
					<li>voteID</li>
					<li>voteDateTime</li>
					<li>voteProfileID</li>
				</ul>
			</li>
			<li>Profile</li>
				<ul>
					<li>profileID</li>
					<li>profileDateTime</li>
					<li>profileScore</li>
				</ul>
		</ul>
<img src="svg/erd3.svg" alt="Entity Relationship Diagram">
	</body>
</html>