
#Nancy Michell
###CSCI E-15
###Project 3
####October 19, 2014

**Project URL [http://p3.scholarpaws.com](http://p3.scholarpaws.com)**

**Git URL [https://github.com/nancymic2/p3.git](https://github.com/nancymic2/p3.git)**

+ Project 3 is the developer's helper. It includes functionality to 
	+ generate random user data, 
	+ generate lorem ipsum text, 
	+ has a hex color picker to get the hex values of colors, 
	+ includes a CSV file download generator for user data to put right into Excel, etc,
	+ A git command definition auto-complete lookup
+ Code is both mine and from a variety of places:
	+ The auto complete code is from <a href="http://jqueryui.com/autocomplete">http://jqueryui.com/autocomplete</a> with modifications by me to use Git commands
	+ The CSV file-generation code is mine and uses the data gen package
	+ The jQuery Color Picker code is from <a href="http://antproduction.free.fr/AntColorPicker/samples/basic-sample-antcolorpicker.html">the author's site</a>
	+  The lorem ipsum pagkage is from <a href="https://packagist.org/packages/badcow/lorem-ipsum">BadCow</a>
	+  The data gen pagkage is <a href="https://packagist.org/packages/fzaninotto/faker">fzaninotto/faker</a>
	+  Password generator code is mine. Modified from p2.
+ GitHub URL is [https://github.com/nancymic2/p3.git](https://github.com/nancymic2/p3.git)
+ note: image is modified by me from Google images
+ Potential issues:
	+ Although i empty the csv file before each use, it is possible that a user might generate a file for say 20 users, then not download it immediately, and another user generates the file for say, 5 users, then the first user downloads the file and the file *could* contain just 5 users. I need to test.
	
	+ I repeat two of the "extras" (color picker and git commands) on each page since they do not need output and they are useful on all pages. 
	+ I created the csv file download code as proof of concept, so to speak. I had to manipulate the data so I just made two fields - Full name and Address.
	+ The navigation links really all go to / so there there would be some nice-looking nav.



***

