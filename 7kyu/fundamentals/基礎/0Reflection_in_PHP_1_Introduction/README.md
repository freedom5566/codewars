Description:
Reflection in PHP #1 - Introduction
About this Kata Series
This Kata Series explores a core API in PHP called Reflection which allows a developer to reverse-engineer classes, interfaces, functions, methods and extensions. It is assumed that the user undertaking this Kata Series is already familiar with both functional and object-oriented programming in PHP. A good indicator that you are ready for this Kata Series is if you are able to complete at least 6 out of 8 topics/Kata in my PHP Functions series without hesitation and are at least moderately familiar with all the topics covered in the first 7 Kata in my Object-Oriented PHP series. Certain Kata in this Series may also require slightly more advanced OOP knowledge such as the awareness of what an interface is, but if such extra knowledge is required, it will be mentioned under a "Prerequisites" subtitle.

Most Kata in this Series will consist of two main parts - a "Lesson" and a "Task". However, unlike either of "Object-Oriented PHP" and "PHP Functions", the "Lesson" will only teach the fundamental concepts required to understand the "Task" presented in each Kata. In most cases, you will be expected to look up on the official Reflection documentation in order to figure out the details of how to actually complete the Kata "Task" (e.g. which methods to call or even what class to use!). If you are still in doubt after referring to the official documentation, you are strongly encouraged to conduct your own research and use whatever resources are available to you on the Internet or otherwise.

Lesson
What is Reflection?
Reflection is a core API in the PHP language which means no extra installation is required (other than the PHP language itself). As its name suggests, it provides a useful way for developers to extract information on classes, interfaces, functions, methods and extensions through reverse-engineering. The Reflection API in PHP does not exist as a single function or class; rather, it exists as a set of classes whose names all start with Reflection and the term following it indicates what type of structure it is able to "reflect". For example, ReflectionFunction can provide information about the selected function(s) (covered in this lesson), ReflectionClass can provide information on the selected class(es), ReflectionParameter information on (function/method) parameters and so on.

How is it useful?
It can possibly be used by developers to either check their own code or the code of other developers. For example, you may have wondered how Codecademy checks that the bark() method you defined in your Dog class is static and not just any ordinary public method. Is it through try/catch blocks? Through attempting to directly invoke Dog::bark() (mind you, even non-static methods of classes can be directly invoked like that)? The most likely thing they did in that Lesson to check for your static method (not saying that this is the way they did it!) is through Reflection (ReflectionClass and ReflectionMethod to be precise).

However, in a Codewars context, it gets even more exciting. Once you learn how to properly use Reflection in PHP, you can utilise Reflection in your PHP test cases to detect whether a user has cheated by changing the original function signature, for example. If you've completed most of my Kata in my "PHP Functions" and/or "Object-Oriented PHP" series and have taken a sneak peek at my test cases after completion, you would have probably noticed that I have used Reflection in some of my Kata.

ReflectionFunction
ReflectionFunction is a class that allows you to extract information about certain functions, whether internal or user-defined. It has a class constructor that receives exactly one argument which can either be the name of the function in the form of a string (if it is a named function) or the function itself (if it is a closure). Once you create an instance of ReflectionFunction by passing the (name of the) function into the class constructor, you can then call its methods to extract useful information about it. For example, given a function multiply():
```
function multiply($a, $b) {
  return $a * $b;
}
```
... we can obtain information about this function by instantiating an instance of ReflectionFunction with 'multiply' as argument:
```
$multiply = new ReflectionFunction('multiply');
```
... and call on its getName() method to get its name (which, in this case, would of course be just 'multiply'):
```
echo $multiply->getName(); // 'multiply'
```
Before we move onto our Task, you will find the official documentation on ReflectionFunction useful. To find more information about a particular property, method or constant of this class, simply click on the name of said property/method/constant and it will link you to a page which explains that property/method/constant in detail.

Task
While we get familiar with reading and understanding the official Reflection documentation on php.net, let's start with something simple by practicing how to call different methods of the ReflectionFunction class in order to learn a bit about our function(s). Write a function get_info() which accepts exactly 1 argument $fn which could either be the name of a named function (as a string) or the actual function itself (if it is a closure). Your function should then return a non-associative array with the following elements (in the given order):

The total number of parameters of the function as an integer. You may assume that all functions (or their names) passed into your function has a fixed amount of parameters.
The total number of required parameters of the function (i.e. those without a default value) as an integer. Again, you may assume that this is always fixed and finite.
A boolean specifying whether the function has declared a return type.
A boolean specifying whether the function is a closure.
A boolean specifying whether the function is internal (i.e. not user-defined)
A boolean specifying whether the function is user-defined (i.e. not part of PHP itself).
For example, for the multiply function in our "Lesson", your function should produce the following output:

[2, 2, false, false, false, true]
This test case has been included for you.

這個還蠻有趣的，可惜我暫時想不到這個能用在哪XDD

他說可以拿來知道 kata 背後的測試是怎樣的XDDD