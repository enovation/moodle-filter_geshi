Syntax highlight filter based on GeSHi

It can highlight c,asm,bash,cpp,css,lisp,matlab,html4strict,php,pascal,xml
and many other languages (see list in geshi/geshi/)


To Install it:
    - Enable if from "Administration/Filters".

To Use it:
    - Enclose your code in <span syntax="langname"> </span>
    - There are some options available:
    - linenumbers="yes": Enable line numbers
    - example usage:
      <span syntax="langname" linenumbers="yes"></span>
    - Syntax attribute must come first, the others are optional
    - line numbers are off by default.

To modify colors:
     	- Go to file geshi/geshi/language_name.php, find there 'STYLES' array.
	- Make changes you wish.
	- NOT recommended!

Enjoy!
RGBeast, rgbeast@onlineuniversity.ru
Nigel McNie, nigel@geshi.org
