<html>
	<head>
		<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
		<meta charset="UTF-8">
		<title>Data Design for Imgur
		</title>
	</head>
	<body>
		<h4>Persona: Name: Joe Smith<br>
			Age: 19<br>
			Occupation: College student<br>
			Uses the site during free time and boring lectures to ease boredom. Should be accessable by both laptops/PCs and mobile devices like phones and tablets. </h4>
		<h4>Use case: Primarily used for easing boredom and easy shallow entertainment. User looking for entertainment can log in, browse for images that interest them, and comment/discuss/ or upvote/downvote the image. Or alternatively submit content for these things to happen to their own pictures. </h4>
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
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="815px" version="1.1" content="&lt;mxfile userAgent=&quot;Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.143 Safari/537.36&quot; version=&quot;5.7.1.2&quot; editor=&quot;www.draw.io&quot; type=&quot;device&quot;&gt;&lt;diagram&gt;7ZvLcqM4FIafxstO6QbGy56k57KYqlRlamZ6SYxiUw3IheWOM08/kpEASdAOjsBtl7NIgbj6+3+dcyRghu/z/W9lvFn/yRKazRBI9jP8MEMomofiv2x4qxoIJFXDqkyTqgk2DU/pf1Q1AtW6SxO6NXbkjGU83ZiNS1YUdMmrNnVsXJbs1dzthWXmVTfxijoNT8s4c1v/SRO+Vj8rAE377zRdrdWVIQRqy3O8/LYq2a5Q15sh/HL4qzbnsT6X2n+7jhP22mrCX2b4vmSMV0v5/p5mEq3GVh33a8/W+r5LWvD3HICqA77H2U799E3JXlLBobo9/qaRbHnJvtU0xI3+8rpOOX3axEu5x6vwgWhb8zwTa1Asxlm6KsTyUtwKLUWDuhQtOd333i6sIQhvUZZTXr6JXdQBJFTclK/06msjUi3Fui2QboyVMVb1qRs4YkHx6WaF+1j98eDQEkcKr9LjlCqs9yxj5eFIDA5/9RYNHIuWF1bwJ3UN4oFmSEyaqIMm6qAZeYBJ+mA+xJz+leauAUdB6oMiNilCMiHGoA/j05KVl8MQO06ckGHoMmRbvnUj4DreyMVyzfLn3dZhgXQXrdIZnIv1DS2Flw/xTx/32DSdI4TWOVbbFU4ZQ+cO6zSXufinzDZWsqnNNgkp6EbIA6pLTTa279CUYRK6ffwA8+KSjU0R4ykp9vTeC8s1JkEyZdUDo26CjyLh0HKqru0BIpyfkWJH8eiCK5LPciAoU0IWb7fp0uRF9yn/VyyDOxyo1a9y0x3QW1t5+gHU1GjijBwtZuI22K5cUiPh8bhcUb3XvBttC13QQU63lTSLefrdvIsunOoKjywV99coZ4VhZAlS3bw6qD1ytM5jJcfaEPo81S92znPQtv7R75PbLXKHy12Iy1V6Rwu9/rXSP9TrtuLaI5/AHcAtk4A7En3QJOdSnwShKRs8UX60iMwTkWg0/d3k/RH9g6itv9SWHDMAuJNAW/rPidcgEbpB4hYjhnnELU1O94j0BArMKEEgPuYSkTtMl6Bw9FRCbjYZZBO3/hpuk0ZuaMgd+A0KXXKHN7kHyb3wmjkQiMygAI8njsV86uoyunlkiEf0cLA9JNvKdcZp4rjlOuYA7enWztHbeM9RoL8g7Jbmi74o3OrI88DqyKA/u5/WMQl2eyY5a7ImYGFoHoDQT9cMRyv8MfIavglBduXfVHkjyh7cAvIg1d3nrKerLkW2s/YUmt8KtWGa+5jRa3o6gKbiYa/krUItMNJIiHvSyGkm0VWGYRJ8M8kgk/idBwzddADRMZ98Avaor/aNH6Mg1ye3/DHMJp6nCxe2S45OBMkC0/DIR2eLrYSj34i7xZLTTeJzvrCjxghx9PEqoy3wWfUNrKd9i59fXx8TfT8qIknUK3Df5M/YeeI2FzzMIn4nB7FlEPgOfyA0qT/O+uTx8gyiJ8l8zR4T0yAeZpyMBAHOqq4lC7bf8/gJ5XWnIeWc77W+9xk4HVCVQJPM+RJ3UudvAbuXNd3zTs65kD+VaKDsKQnbPR+OhGdi+p63oMZj6k6aSANf6guiRL/n82bBneRzBHduQbK8uPdDg8h0ZND1hcxoEN2Rt4T4eNlfycyR1cmDKZG641ToYORVtOzlVbBCMhYiZFaTExQlqXQZZ5/VhjxNkqxPIA9wsZ3vO75GIB1s7erxJLbuGLG4JrYwsDI+cDP+aGzdwVV+TWwDYCYruJjOt1rWa2WLIpMt6YgJXUMZL2zdQcFVxQQSWmw76oPRfIuum20IzHiLOwoFT2zFavONeDX2bb7Dx1/+Bw==&lt;/diagram&gt;&lt;/mxfile&gt;" onclick="(function(svg){var src=window.event.target||window.event.srcElement;while (src!=null&amp;&amp;src.nodeName.toLowerCase()!='a'){src=src.parentNode;}if(src==null){if(svg.wnd!=null&amp;&amp;!svg.wnd.closed){svg.wnd.focus();}else{var r=function(evt){if(evt.data=='ready'&amp;&amp;evt.source==svg.wnd){svg.wnd.postMessage(decodeURIComponent(svg.getAttribute('content')),'*');window.removeEventListener('message',r);}};window.addEventListener('message',r);svg.wnd=window.open('https://www.draw.io/?client=1&amp;lightbox=1&amp;chrome=0&amp;edit=_blank');}}})(this);" viewBox="0 0 815 635" style="cursor:pointer;max-width:100%;max-height:635px;"><defs/><g transform="translate(0.5,0.5)"><rect x="432" y="42" width="100" height="100" fill="#ffffff" stroke="#000000" stroke-width="2" pointer-events="none"/><g transform="translate(464.5,85.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="34" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 35px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">profile</div></div></foreignObject><text x="17" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">profile</text></switch></g><ellipse cx="672" cy="42" rx="60" ry="40" fill="#ffffff" stroke="#000000" stroke-width="3" pointer-events="none"/><g transform="translate(648.5,35.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="46" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 47px; white-space: nowrap; word-wrap: normal; text-decoration: underline; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">profileID</div></div></foreignObject><text x="23" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica" text-decoration="underline">profileID</text></switch></g><ellipse cx="662" cy="162" rx="60" ry="40" fill="#ffffff" stroke="#000000" stroke-width="3" pointer-events="none"/><g transform="translate(618.5,155.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="86" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 88px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">profileDateTime</div></div></foreignObject><text x="43" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">profileDateTime</text></switch></g><ellipse cx="372" cy="222" rx="60" ry="40" fill="#ffffff" stroke="#000000" stroke-width="3" pointer-events="none"/><g transform="translate(338.5,215.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="66" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 67px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">profileScore</div></div></foreignObject><text x="33" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">profileScore</text></switch></g><path d="M 232 92 L 282 142 L 232 192 L 182 142 Z" fill="#ffffff" stroke="#000000" stroke-width="2" stroke-miterlimit="10" pointer-events="none"/><g transform="translate(210.5,132.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="41" height="18" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 17px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 41px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">posts</div></div></foreignObject><text x="21" y="18" fill="#000000" text-anchor="middle" font-size="17px" font-family="Helvetica">posts</text></switch></g><rect x="32" y="262" width="100" height="100" fill="#ffffff" stroke="#000000" stroke-width="2" pointer-events="none"/><g transform="translate(64.5,305.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="34" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 35px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">image</div></div></foreignObject><text x="17" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">image</text></switch></g><ellipse cx="242" cy="262" rx="60" ry="40" fill="#ffffff" stroke="#000000" stroke-width="3" pointer-events="none"/><g transform="translate(218.5,255.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="46" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 47px; white-space: nowrap; word-wrap: normal; text-decoration: underline; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">imageID</div></div></foreignObject><text x="23" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica" text-decoration="underline">imageID</text></switch></g><ellipse cx="242" cy="352" rx="60" ry="40" fill="#ffffff" stroke="#000000" stroke-width="3" pointer-events="none"/><g transform="translate(198.5,345.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="86" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 88px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">imageDateTime</div></div></foreignObject><text x="43" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">imageDateTime</text></switch></g><ellipse cx="62" cy="442" rx="60" ry="40" fill="#ffffff" stroke="#000000" stroke-width="3" pointer-events="none"/><g transform="translate(28.5,435.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="66" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 67px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">imageScore</div></div></foreignObject><text x="33" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">imageScore</text></switch></g><ellipse cx="202" cy="442" rx="60" ry="40" fill="#ffffff" stroke="#000000" stroke-width="3" pointer-events="none"/><g transform="translate(161.5,435.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="81" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 82px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">imagePosterID</div></div></foreignObject><text x="41" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">imagePosterID</text></switch></g><path d="M 67 363 L 64.93 395.68" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 64.6 400.92 L 61.55 393.71 L 64.93 395.68 L 68.54 394.15 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 428 92 L 276.19 128.51" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 271.09 129.74 L 277.07 124.7 L 276.19 128.51 L 278.71 131.5 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 204 166 L 94.96 254" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 90.87 257.3 L 94.12 250.18 L 94.96 254 L 98.52 255.63 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 134 288 L 173.86 258.77" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 178.1 255.66 L 174.52 262.62 L 173.86 258.77 L 170.38 256.98 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 133 316 L 182.19 332.25" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 187.17 333.89 L 179.43 335.02 L 182.19 332.25 L 181.63 328.37 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 129 363 L 163 405.05" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 166.3 409.13 L 159.17 405.89 L 163 405.05 L 164.62 401.49 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 362 402 L 412 452 L 362 502 L 312 452 Z" fill="#ffffff" stroke="#000000" stroke-width="2" stroke-miterlimit="10" pointer-events="none"/><g transform="translate(331.5,442.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="59" height="18" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 17px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 59px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">is voted</div></div></foreignObject><text x="30" y="18" fill="#000000" text-anchor="middle" font-size="17px" font-family="Helvetica">is voted</text></switch></g><path d="M 539 496 L 492.25 548.25" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 488.75 552.17 L 490.8 544.62 L 492.25 548.25 L 496.02 549.28 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 599.39 502 L 604.07 533.7" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 604.84 538.89 L 600.35 532.48 L 604.07 533.7 L 607.28 531.46 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 642 462.1 L 684.76 470.74" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 689.9 471.78 L 682.35 473.82 L 684.76 470.74 L 683.74 466.96 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 407 465 L 536.63 466.91" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 541.88 466.98 L 534.83 470.38 L 536.63 466.91 L 534.93 463.38 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 431 137 L 393.4 176.39" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 389.77 180.19 L 392.07 172.71 L 393.4 176.39 L 397.14 177.54 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 557 289 L 598.63 393.09" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 600.58 397.96 L 594.74 392.76 L 598.63 393.09 L 601.23 390.16 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 542 72 L 606.85 54.65" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 611.92 53.29 L 606.06 58.48 L 606.85 54.65 L 604.25 51.72 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 529 142 L 594.84 159.38" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 599.92 160.71 L 592.26 162.31 L 594.84 159.38 L 594.04 155.54 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 454 142 L 516.09 221.97" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 519.31 226.12 L 512.26 222.73 L 516.09 221.97 L 517.79 218.44 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 132 362 L 329.98 429.93" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 334.94 431.64 L 327.19 432.68 L 329.98 429.93 L 329.46 426.05 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 532 209 L 582 259 L 532 309 L 482 259 Z" fill="#ffffff" stroke="#000000" stroke-width="2" stroke-miterlimit="10" pointer-events="none"/><g transform="translate(510.5,249.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="41" height="18" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 17px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 41px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">votes</div></div></foreignObject><text x="21" y="18" fill="#000000" text-anchor="middle" font-size="17px" font-family="Helvetica">votes</text></switch></g><rect x="542" y="402" width="100" height="100" fill="#ffffff" stroke="#000000" stroke-width="2" pointer-events="none"/><rect x="555" y="415" width="74" height="74" fill="#ffffff" stroke="#000000" stroke-width="2" pointer-events="none"/><g transform="translate(578.5,445.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="25" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 25px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">Vote</div></div></foreignObject><text x="13" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">Vote</text></switch></g><ellipse cx="457" cy="592" rx="60" ry="40" fill="#ffffff" stroke="#000000" stroke-width="3" pointer-events="none"/><g transform="translate(439.5,585.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="35" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 36px; white-space: nowrap; word-wrap: normal; text-decoration: underline; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">voteID</div></div></foreignObject><text x="18" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica" text-decoration="underline">voteID</text></switch></g><ellipse cx="612" cy="582" rx="60" ry="40" fill="#ffffff" stroke="#000000" stroke-width="3" pointer-events="none"/><g transform="translate(573.5,575.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="76" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 76px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">voteDateTime</div></div></foreignObject><text x="38" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">voteDateTime</text></switch></g><ellipse cx="752" cy="472" rx="60" ry="40" fill="#ffffff" stroke="#000000" stroke-width="3" pointer-events="none"/><g transform="translate(716.5,465.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="70" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 71px; white-space: nowrap; word-wrap: normal; text-decoration: underline; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">voteProfileID</div></div></foreignObject><text x="35" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica" text-decoration="underline">voteProfileID</text></switch></g><g transform="translate(348.5,95.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="7" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 8px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">1</div></div></foreignObject><text x="4" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">1</text></switch></g><g transform="translate(138.5,192.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="7" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 8px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">n</div></div></foreignObject><text x="4" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">n</text></switch></g><g transform="translate(491.5,175.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="10" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 11px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">m</div></div></foreignObject><text x="5" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">m</text></switch></g><g transform="translate(276.5,395.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="10" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 11px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">m</div></div></foreignObject><text x="5" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">m</text></switch></g><g transform="translate(453.5,445.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="7" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 8px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">n</div></div></foreignObject><text x="4" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">n</text></switch></g><g transform="translate(588.5,335.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="7" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 8px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">n</div></div></foreignObject><text x="4" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">n</text></switch></g></g></svg>
	</body>
</html>