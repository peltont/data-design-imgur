<html>
	<head>
		<meta charset="UTF-8">
		<title>Data Design for Imgur
		</title>
	</head>
	<body>
		<h2>Persona: Name: Joe Smith
			Age: 19
			Occupation: College student
			Uses the site during free time and boring lectures to ease boredom. Should be accessable by both laptops/PCs and mobile devices like phones and tablets. </h2>
		<h2>Use case: Primarily used for easing boredom and easy shallow entertainment. User looking for entertainment can log in, browse for images that interest them, and comment/discuss/ or upvote/downvote the image. Or alternatively submit content for these things to happen to their own pictures. </h2>
		<ul>
			<li>User sees an photo that interests them</li>
			<li>User views comments and either adds to them, or rates the comment up and down.</li>
		</ul>
		<h2>Entities: The image itself, the user profile, score, and the comments about it. </h2>
		<h2>Relationships:
			<ul>
				<li>One user can upload an image or album.</li>
				<li>Many users can comment and vote.</li>
				<li>One comment can be replied to many times by many users.</li>
			</ul>
		</h2>
		<ul>
			<li>Image
			<ul>comments
			<ul>upvote/downvote score</ul>
			</ul>
			</li>
		</ul>
		<ul>Entities
			<li>The image</li>
			<ul>
				<li>imageID</li>
				<li>imageScore</li>
				<li>imageProfileID</li>
				<li>imageDateTime</li>
			</ul>
			<li>Vote
				<ul>
					<li>voteID</li>
					<li>voteDateTime</li>
					<li>voteProfileID</li>
				</ul>
			</li>
		</ul>
	</body>
</html>