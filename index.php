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
		<h4>Action List:
		</h4>
		<ul>
			<li>User has free time and need something to do, so travels to site.</li>
			<li>User sees an photo that interests them</li>
			<li>User views comments and either adds to them, or rates the photo or comment up and down.</li>
			<li>Continues to next photo.</li>
		</ul>
		<h4>Use Case: Bored in class, Joe desires something to occupy his time while the teacher reviews things he already knows. He needs entertainment that is free, and easily accessable from his laptop or phone, so he navigates to imgur.</h4>
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
					<li>voteImageID</li>
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
<img src="svg/erd4.svg" alt="Entity Relationship Diagram">
	</body>
</html>