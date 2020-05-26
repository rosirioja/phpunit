# NOTES #

## Tips for Class & Methods ##

1. Methods inside the test class are not runnable unless:
- method name has "test" prepend in the name
- has a @test docblock

## PHPUNIT CLI ###

Run phpunit command
> php vendor\phpunit\phpunit\phpunit

Run phpunit for a specific class
> php vendor\phpunit\phpunit\phpunit Test\UserTest.php

Run phpunit for all classes inside a folder/dir
> php vendor\phpunit\phpunit\phpunit Test\UserTest.php

Run phpunit for a specific method using argument `filter`
> php vendor\phpunit\phpunit\phpunit Test\UserTest.php --filter=testReturnsFullName

> php vendor\phpunit\phpunit\phpunit Test --filter=testReturnsFullName

Run phpunit with colors as output: use argument `color` 
> php vendor\phpunit\phpunit\phpunit Test\UserTest.php --color
