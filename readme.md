
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
+ GitHub URL is [https://github.com/nancymic2/p3.git](https://github.com/nancymic2/p3.git)
+ note: image is from Google images
+ Potential issues:
	+ Although i empty the csv file before each use, it is possible that a user might generate a file for say 20 users, then not download it immediately, and another user generates the file for say, 5 users, then the first user downloads the file and the file *could* contain just 5 users. I need to test.
	+ I have two tiny missing images in the color picker code and can't find them yet.
	+ I have not yet moved the "extras" into views. They took a lot of time! But will move them eventually.



***

